<?php
class Produtos_model extends CI_Model {

	public function buscaTodos() {
		$this->db->where("vendido", false);
        return $this->db->get("produtos")->result_array();//pegar todos da tabela produtos
    }

 	public function salva($produto) {
     $this->db->insert("produtos", $produto);
 	}

 	public function busca($id) {
    	return $this->db->get_where("produtos", array(
    		"id" => $id
    		))->row_array();
	}
}