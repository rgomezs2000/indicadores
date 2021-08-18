<?php
require_once(APPPATH.'libraries/CustomLibrary.php');
require_once(APPPATH.'libraries/IndicadoresLibrary.php');

/**
 * Description of IndicadoresGraficos
 *
 * @author Roger A Gomez S
 */
class IndicadoresGraficos extends CI_Controller
{   
    private $strFecha;
    private $strVal;
    private $nombre;
    
    public function index()
    {
        $this->load->helper('url');
        return $this->load->view('indicadores_graficos');
    }
    
    public function jsonIndicadoresResult()
    {
        if($this->input->get('indic') != '')
        {
            $indic = $this->input->get('indic');
        }
        else
        {
            $indic= '';
        }
        
        if($this->input->get('fecha') != '')
        {
            $fecha = $this->input->get('fecha');
        }
        else
        {
            $fecha = '';
        }
                
        $this->load->helper('url');
        $json = $this->printJson($indic, $fecha);
        $this->nombre = $json['nombre'];
        
        $this->strFecha = '[';
        $this->strVal = '[';
        
        foreach ($json['serie'] as $value) {
            $this->strFecha .= '"'.$value['fecha'].'",';
            $this->strVal .= $value['valor'].',';
        }
                
        $this->strFecha .= ']';
        $this->strVal .= ']';
        
        $data['fecha'] = $this->strFecha;
        $data['val'] = $this->strVal;
        $data['nombre'] = $this->nombre;
                
        return $this->load->view('ajax/indicadores_graficos_result', $data);
    }
    
    public function printJson($indic, $fecha)
    {
        if(strlen($fecha) > 4)
        {
            $fecha = date('Y-m-d', strtotime($fecha));
            $fecha = date('Y', strtotime($fecha));
        }
        
        
        $this->urlJson = 'https://mindicador.cl/api/'.$indic.'/'.$fecha;
        $indicador = new IndicadoresLibrary();
        $indicador->importUrlJson($this->urlJson);
        $json = $indicador->getJson();
        
        return $json;        
    }
}
