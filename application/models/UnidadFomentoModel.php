<?php
/**
 * Description of UnidadFomentoModel
 *
 * @author Roger A Gomez S
 */
class UnidadFomentoModel extends CI_Model {
    public $idUF;
    public $valorUF;
    public $valorCLP;
    public $fechaUF;
    
    public function __construct() {
        $this->load->database();
    }
    
    public function agregarUF($valorUF, $valorCLP){
        $this->valorUF = $valorUF;
        $this->valorCLP = $valorCLP;
        return $this->db->insert('unidad_fomento', $this);
    }

    public function listarUF(){
        return $this->db->get('unidad_fomento')->result();
    }
    
    public function obtenerUF($idUF) {
        return $this->db->get_where('unidad_fomento', array("idUF" => $idUF))->row();
    }
    
    public function elimarUF($idUF){
        return $this->db->delete('unidad_fomento', array("idUF" => $idUF));
    }
    
}
