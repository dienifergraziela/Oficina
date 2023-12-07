<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veiculos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Veiculos_model');
    }

    public function index() {
        $data['veiculos'] = $this->Veiculos_model->obter_veiculos();
        $this->load->view('veiculos/index', $data);
    }

    public function cadastrar() {
        $this->load->view('veiculos/cadastrar');
    }

    public function salvar() {
        $dados = array(
            'marca' => $this->input->post('marca'),
            'modelo' => $this->input->post('modelo'),
            'ano' => $this->input->post('ano'),
            'cor' => $this->input->post('cor')
        );

        $this->Veiculos_model->cadastrar_veiculo($dados);
        redirect('veiculos');
    }
}
