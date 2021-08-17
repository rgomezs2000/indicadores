<?php
/**
 * Description of IndicadoresLibrary
 *
 * @author Roger A Gomez S
 */
class IndicadoresLibrary {
    protected $json;
    
    public function __construct() {
        
    }

    public function importUrlJson($url)
    {
        $jsonUrl = file_get_contents($url);
        $this->json = json_decode($jsonUrl, true);
    }
    
    public function getJson()
    {
        return $this->json;
    }
}
