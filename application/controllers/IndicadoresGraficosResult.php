<?php
header('Content-type: application/json');
require_once(APPPATH.'libraries/CustomLibrary.php');
require_once(APPPATH.'libraries/IndicadoresLibrary.php');

/**
 * Description of IndicadoresGraficos
 *
 * @author Roger A Gomez S
 */
class IndicadoresGraficosResult extends CI_Controller {
    private $json;
    
    public function jsonIndicadoresResult()
    {
        if(isset($_REQUEST['indic']))
        {
            $indic = $_REQUEST['indic'];
        }
        else
        {
            $indic= '';
        }
        
        if(isset($_REQUEST['fecha']))
        {
            $fecha = $_REQUEST['fecha'];
        }
        else
        {
            $fecha = '';
        }
        
        if($fecha != "")
        {
            $fecha = date("Y-m-d", strtotime($fecha));
        }
        
        $this->load->helper('url');
        $this->json = $this->printJson($indic, $fecha);
        
        return $this->json;
    }
    
    public function printJson($indic, $fecha)
    {
        $anio = date("Y", strtotime($fecha));
        
        $this->urlJson = 'https://mindicador.cl/api/'.$indic.'/'.$anio;
        $indicador = new IndicadoresLibrary();
        $indicador->importUrlJson2($this->urlJson);
        $json = $indicador->getJson2();
        
        return $json;        
    }
}
