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
    public $fechaModUF;
    
    public function __construct() {
        $this->load->database();
    }
    
    public function agregarUF($valorUF, $valorCLP){
        $this->valorUF = $valorUF;
        $this->valorCLP = $valorCLP;
        $this->fechaUF = date();
        return $this->db->insert('unidad_fomento', $this);
    }

    public function modificarUF($idUF, $valorUF, $valorCLP){
        $this->valorUF = $valorUF;
        $this->valorCLP = $valorCLP;
        $this->fechaModUF = date();
        return $this->db->update('unidad_fomento', $this, array("idUF" => $idUF));
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
