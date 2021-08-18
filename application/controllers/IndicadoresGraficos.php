<?php
require_once(APPPATH.'libraries/CustomLibrary.php');
require_once(APPPATH.'libraries/IndicadoresLibrary.php');

/**
 * Description of IndicadoresGraficos
 *
 * @author Roger A Gomez S
 */
class IndicadoresGraficos extends CI_Controller {   
    public function index()
    {
        $this->load->helper('url');
        return $this->load->view('indicadores_graficos');
    }
}
