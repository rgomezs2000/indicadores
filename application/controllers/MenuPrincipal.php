<?php
require_once(APPPATH.'libraries/CustomLibrary.php');
require_once(APPPATH.'libraries/IndicadoresLibrary.php');

/**
 * Description of MenuPrincipal
 *
 * @author Roger A Gomez S
 */
class MenuPrincipal extends CI_Controller{
    private $fecha;
    private $urlJson;
    private $uf_val;
    private $uf_name;
    private $ivp_val;
    private $ivp_name;
    private $usd_val;
    private $usd_name;
    private $iusd_val;
    private $iusd_name;
    private $eur_val;
    private $eur_name;
    private $ipc_val;
    private $ipc_name;
    private $utm_val;
    private $utm_name;
    private $imacec_val;
    private $imacec_name;
    private $tpm_val;
    private $tpm_name;
    private $cup_val;
    private $cup_name;
    private $des_val;
    private $des_name;
    private $btc_val;
    private $btc_name;
    
    public function index(){
        $this->load->helper('url');
        $custom = new CustomLibrary();
        $this->fecha = $custom->getShortDateNow();
        $json = $this->printJson();
        $this->uf_val = $custom->formatNumber($json["uf"]["valor"]);
        $this->uf_name = $json["uf"]["nombre"];
        $this->ivp_val = $custom->formatNumber($json["ivp"]["valor"]);
        $this->ivp_name = $json["ivp"]["nombre"];
        $this->usd_val = $custom->formatNumber($json["dolar"]["valor"]);
        $this->usd_name = $json["dolar"]["nombre"];
        $this->iusd_val = $custom->formatNumber($json["dolar_intercambio"]["valor"]);
        $this->iusd_name = $json["dolar_intercambio"]["nombre"];
        $this->eur_val = $custom->formatNumber($json["euro"]["valor"]);
        $this->eur_name = $json["euro"]["nombre"];
        $this->utm_val = $custom->formatNumber($json["utm"]["valor"]);
        $this->utm_name = $json["utm"]["nombre"];
        $this->ipc_val = $custom->formatNumber($json["ipc"]["valor"]);
        $this->ipc_name = $json["ipc"]["nombre"];
        $this->imacec_val = $custom->formatNumber($json["imacec"]["valor"]);
        $this->imacec_name = $json["imacec"]["nombre"];
        $this->tpm_val = $custom->formatNumber($json["tpm"]["valor"]);
        $this->tpm_name = $json["tpm"]["nombre"];
        $this->cup_val = $custom->formatNumber($json["libra_cobre"]["valor"]);
        $this->cup_name = $json["libra_cobre"]["nombre"];
        $this->des_val = $custom->formatNumber($json["tasa_desempleo"]["valor"]);
        $this->des_name = $json["tasa_desempleo"]["nombre"];
        $this->btc_val = $custom->formatNumber($json["bitcoin"]["valor"]);
        $this->btc_name = $json["bitcoin"]["nombre"];
                
        $data['fecha'] = $this->fecha;
        $data['uf_val'] = $this->uf_val;
        $data['uf_name'] = $this->uf_name;
        $data['ivp_val'] = $this->ivp_val;
        $data['ivp_name'] = $this->ivp_name;
        $data['usd_val'] = $this->usd_val;
        $data['usd_name'] = $this->usd_name;
        $data['iusd_val'] = $this->iusd_val;
        $data['iusd_name'] = $this->iusd_name;
        $data['eur_val'] = $this->eur_val;
        $data['eur_name'] = $this->eur_name;
        $data['ipc_val'] = $this->ipc_val;
        $data['ipc_name'] = $this->ipc_name;
        $data['imacec_val'] = $this->imacec_val;
        $data['imacec_name'] = $this->imacec_name;
        $data['utm_val'] = $this->utm_val;
        $data['utm_name'] = $this->utm_name;
        $data['tpm_val'] = $this->tpm_val;
        $data['tpm_name'] = $this->tpm_name;
        $data['cup_val'] = $this->cup_val;
        $data['cup_name'] = $this->cup_name;
        $data['des_val'] = $this->des_val;
        $data['des_name'] = $this->des_name;
        $data['btc_val'] = $this->btc_val;
        $data['btc_name'] = $this->btc_name;

        return $this->load->view('menu_principal', $data);
    }
    
    public function printJson()
    {
        $this->urlJson = 'https://mindicador.cl/api';
        $indicador = new IndicadoresLibrary();
        $indicador->importUrlJson($this->urlJson);
        $json = $indicador->getJson();
        
        return $json;        
    }
    
}
