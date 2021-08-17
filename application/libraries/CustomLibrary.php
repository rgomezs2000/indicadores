<?php
date_default_timezone_set('America/Santiago'); 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomLibrary
 *
 * @author Roger A Gomez S
 */
class CustomLibrary {
    public function __construct() {
        
    }
    
    public function getShortDateNow(){
        $now = date('d/m/Y');
        return $now;
    }
    
    public function formatNumber($val){
        $formatVal = number_format($val, 2, ",", ".");
        return $formatVal;
    }
}
