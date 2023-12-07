<?php
class Veiculos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function cadastrar_veiculo($dados) {
        return $this->db->insert('veiculos', $dados);
    }

    public function obter_veiculos() {
        $query = $this->db->get('veiculos');
        return $query->result_array();
    }
}
