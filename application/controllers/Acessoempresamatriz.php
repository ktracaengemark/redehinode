<?php

#controlador de Login

defined('BASEPATH') OR exit('No direct script access allowed');

class Acessoempresamatriz extends CI_Controller {

    public function __construct() {
        parent::__construct();

        #load libraries
        $this->load->helper(array('form', 'url', 'date', 'string'));
        #$this->load->library(array('basico', 'Basico_model', 'form_validation'));
        $this->load->library(array('basico', 'form_validation'));
        $this->load->model(array('Basico_model', 'Agenda_model', 'Relatorio_model'));
        $this->load->driver('session');

        #load header view
        $this->load->view('basico/headerempresamatriz');
        $this->load->view('basico/nav_principalempresamatriz');

        unset($_SESSION['acessoempresamatriz']);

    }

    public function index() {

        if ($this->input->get('m') == 1)
            $data['msg'] = $this->basico->msg('<strong>Informações salvas com sucesso</strong>', 'sucesso', TRUE, TRUE, TRUE);
        elseif ($this->input->get('m') == 2)
            $data['msg'] = $this->basico->msg('<strong>Erro no Banco de dados. Entre em contato com o administrador deste sistema.</strong>', 'erro', TRUE, TRUE, TRUE);
        else
            $data['msg'] = '';
		
		$this->load->view('acessoempresamatriz/tela_acessoempresamatriz', $data);

        #load footer view
        $this->load->view('basico/footerempresamatriz');
    }

}
