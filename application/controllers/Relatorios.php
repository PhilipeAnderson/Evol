<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:26/05/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Usuários
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

 class Relatorios extends CI_Controller{

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Dashboard/login');
        }
    }

    public function index(){
        $this->verificar_sessao();
        $this->load->view('includes/header');
        $this->load->view('relatorios/listar.php');
        $this->load->view('includes/footer');
    }











 }