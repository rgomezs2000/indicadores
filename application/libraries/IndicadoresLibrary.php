<?php
/**
 * Description of IndicadoresLibrary
 *
 * @author Roger A Gomez S
 */
class IndicadoresLibrary {
    protected $json;
    protected $json2;
    
    public function __construct() {
        
    }

    public function importUrlJson($url)
    {
        $jsonUrl = file_get_contents($url);
        $this->json = json_decode($jsonUrl, true);
    }
    
    public function importUrlJson2($url)
    {
        $json = file_get_contents($url);
        $this->json2 = $json;
    }
    
    public function getJson()
    {
        return $this->json;
    }
    
    public function getJson2()
    {
        return $this->json2;
    }
}
