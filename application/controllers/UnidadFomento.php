<?php
require_once(APPPATH.'libraries/CustomLibrary.php');
require_once(APPPATH.'libraries/IndicadoresLibrary.php');

class UnidadFomento extends CI_Controller
{
    private $lUF;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UnidadFomentoModel', 'unidad_fomento_model');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->lUF = $this->unidad_fomento_model->listarUF();
        $data['lUF'] = $this->lUF;
        
        return $this->load->view('unidad_fomento', $data);
    }
    
}
