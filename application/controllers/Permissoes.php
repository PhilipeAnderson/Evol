<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:13/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Permissões
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

class Permissoes extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Dashboard/login');
        }
    }
    
//    public function permissoesDeFuncoes(){
//        $this->verificar_sessao();
//        
//        $dados['permissoes'] = $this->db->get('permissoes')->result;
//        
//        if($dados == 0){
//            echo('Permissao Negada');
//        }else{
//            echo('Permissao Concedida');
//        }
//    }

    public function index($indice = null) {
        $this->verificar_sessao();

        $dados['permissoes'] = $this->db->get('permissoes')->result();
        
        if ($this->session->userdata('nivelUsuario') == 1 || $this->session->userdata('nivelUsusario') == 7) {
            $this->load->view("includes/header");
            if ($indice == 1) {
                $data['msg'] = "Função cadastrada com sucesso!";
                $this->load->view('includes/msg_success', $data);
            } else if ($indice == 2) {
                $data['msg'] = "Erro ao cadastrar a nova função no Banco de Dados!";
                $this->load->view('includes/msg_error', $data);
            } else if ($indice == 3) {
                $data['msg'] = "Função Editada com sucesso!";
                $this->load->view('includes/msg_success', $data);
            } else if ($indice == 4) {
                $data['msg'] = "Erro ao editar a nova função no Banco de Dados!";
                $this->load->view('includes/msg_error', $data);
            }  
        }else if($this->session->userdata('nivelUsuario') == 8) {
            $this->load->view("includes/headerRecursosHumanos");
            if ($indice == 1) {
                $data['msg'] = "Função cadastrada com sucesso!";
                $this->load->view('includes/msg_success', $data);
            } else if ($indice == 2) {
                $data['msg'] = "Erro ao cadastrar a nova função no Banco de Dados!";
                $this->load->view('includes/msg_error', $data);
            } else if ($indice == 3) {
                $data['msg'] = "Função Editada com sucesso!";
                $this->load->view('includes/msg_success', $data);
            } else if ($indice == 4) {
                $data['msg'] = "Erro ao editar a nova função no Banco de Dados!";
                $this->load->view('includes/msg_error', $data);
            } 
        }
            $this->load->view("permissoes/listar", $dados);
            $this->load->view("includes/footer");
    }

    public function cadastrar() {
        $this->verificar_sessao();
        
        if ($this->session->userdata('nivelUsuario') == 1 || $this->session->userdata('nivelUsuario') == 7) {
            $this->load->view('includes/header');
            $this->load->view('permissoes/cadastrar');
            $this->load->view('includes/footer');
        } else if ($this->session->userdata('nivelUsuario') == 8) {
            $this->load->view('includes/headerRecursosHumanos');
            $this->load->view('permissoes/cadastrar');
            $this->load->view('includes/footer');
        }
    }

    public function cadastrando() {
        $this->verificar_sessao();

        $data['nomeFuncao'] = $this->input->post('nomeFuncao');
        $data['descricaoFuncao'] = $this->input->post('descricaoFuncao');
        $data['vCliente'] = $this->input->post('vCliente');
        $data['cCliente'] = $this->input->post('cCliente');
        $data['eCliente'] = $this->input->post('eCliente');
        $data['dCliente'] = $this->input->post('dCliente');
        $data['vServico'] = $this->input->post('vServico');
        $data['cServico'] = $this->input->post('cServico');
        $data['eServico'] = $this->input->post('eServico');
        $data['dServico'] = $this->input->post('dServico');

        if ($this->db->insert('permissoes', $data)) {
            redirect('Permissoes/1');
        } else {
            redirect('Permissoes/2');
        }
    }

    public function editar($id = null) {
        $this->verificar_sessao();
        $this->db->where('idPermissao', $id);
        $data['permissoes'] = $this->db->get('permissoes')->result();
        if($this->session->userdata('nivelUsuario') == 1 || $this->session->userdata('nivelUsuario') == 7){
        $this->load->view("includes/header");
        }else if($this->session->userdata('nivelUsuario') == 8){
        $this->load->view('includes/headerRecursosHumanos');
        }
        $this->load->view("permissoes/editar", $data);
        $this->load->view("includes/footer");
    }

    public function editando() {
        $this->verificar_sessao();

        $id = $this->input->post('idPermissao');
        $data['nomeFuncao'] = $this->input->post('nomeFuncao');
        $data['descricaoFuncao'] = $this->input->post('descricaoFuncao');
        $data['vCliente'] = $this->input->post('vCliente');
        $data['cCliente'] = $this->input->post('cCliente');
        $data['eCliente'] = $this->input->post('eCliente');
        $data['dCliente'] = $this->input->post('dCliente');
        $data['vServico'] = $this->input->post('vServico');
        $data['cServico'] = $this->input->post('cServico');
        $data['eServico'] = $this->input->post('eServico');
        $data['dServico'] = $this->input->post('dServico');

        $this->db->where('idPermissao', $id);
        if ($this->db->update('permissoes', $data)) {
            redirect('Permissoes/3');
        } else {
            redirect('Permissoes/4');
        }
    }
    

}