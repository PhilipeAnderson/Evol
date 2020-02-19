<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:11/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Usuários
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

class Clientes extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Dashboard/login');
        }
    }

    public function index() {
        $this->verificar_sessao();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
            $this->db->select('*');
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/header');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listar', $dados);
            $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2){
            $this->db->select('*');
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/headerSupervisorGerente');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listar', $dados);
            $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5){
            $this->db->select('*');
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/headerCoordenadorTecnico');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listarCoordenador', $dados);
            $this->load->view('includes/footer');
        }else if ($this->session->userdata('nivelUsuario') ==4) {
            $this->db->select('*');
            $this->db->where('matricula', $this->session->userdata('matricula'));
            $this->db->where('filial', $this->session->userdata('filialUsuario'));
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/headerVendedor');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listarVendedor', $dados);
            $this->load->view('includes/footer');
            
        }else if ($this->session->userdata('nivelUsuario') ==6) {
            $this->db->select('*');
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/headerCoordenadorTecnico');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listarTecnico', $dados);
            $this->load->view('includes/footer');
            
        }else if ($this->session->userdata('nivelUsuario') ==3) {
            $this->db->select('*');
            $this->db->where('filial', $this->session->userdata('filialUsuario'));
            $dados['clientes'] = $this->db->get('clientes')->result();
            $this->load->view('includes/headerSupervisorGerente');
            $this->informacoesDeIndice();
            $this->load->view('clientes/listarGerente', $dados);
            $this->load->view('includes/footer');
        }
    }
    
    public function informacoesDeIndice($indice=null){  
        if ($indice == 1) {
                $data['msg'] = "Cliente cadastrado com sucesso! Parabéns a meta é certa!";
                $this->load->view('includes/msg_success', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Erro ao cadastrar o cliente no Banco de Dados! Comunique ao seu gerente";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Cliente EDITADO com sucesso! Os Dados atualizados aglizam o processo da empresa. Parabéns!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Não foi possível EDITAR este cliente! Contate a equipe de T.I.";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Cliente EXCLUÍDO com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Não foi possível excluir este cliente! Contate a equipe de T.I.";
            $this->load->view('includes/msg_error', $data);
        }
    }
    
    public function visualizar($id = null) {
        $this->verificar_sessao();

        $this->db->where('idCliente', $id);
        $data['cliente'] = $this->db->get('clientes')->result();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
        $this->load->view('includes/header');
        $this->load->view('clientes/visualizar' , $data);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2 || $this->session->userdata('nivelUsuario') ==3){
        $this->load->view('includes/headerSupervisorGerente');
        $this->load->view('clientes/visualizar' , $data);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5 || $this->session->userdata('nivelUsuario') ==6){
        $this->load->view('includes/headerCoordenadorTecnico');
        $this->load->view('clientes/visualizar', $data);
        $this->load->view('includes/footer');
        }else {
        $this->load->view('includes/headerVendedor');
        $this->load->view('clientes/visualizar' , $data);
        $this->load->view('includes/footer');
        }
    }

    public function ordemPorAlfabetica() {
        $this->verificar_sessao();
        $this->db->select('*');
        $this->db->order_by('razaoSocial', 'name');
        $dados['clientes'] = $this->db->get('clientes')->result();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
        $this->load->view('includes/header');
        $this->load->view('clientes/listar' , $dados);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2 || $this->session->userdata('nivelUsuario') ==3){
        $this->load->view('includes/headerSupervisorGerente');
        $this->load->view('clientes/listar' , $dados);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5 || $this->session->userdata('nivelUsuario') ==6){
        $this->load->view('includes/headerCoordenadorTecnico');
        $this->load->view('clientes/listar', $dados);
        $this->load->view('includes/footer');
        }else {
        $this->load->view('includes/headerVendedor');
        $this->load->view('clientes/listar' , $dados);
        $this->load->view('includes/footer');
        }
    }

    public function cadastrar() {
        $this->verificar_sessao();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
        $this->load->view('includes/header');
        $this->load->view('clientes/cadastrar');
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2 || $this->session->userdata('nivelUsuario') ==3){
        $this->load->view('includes/headerSupervisorGerente');
        $this->load->view('clientes/cadastrar');
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5 || $this->session->userdata('nivelUsuario') ==6){
        $this->load->view('includes/headerCoordenadorTecnico');
        $this->load->view('clientes/cadastrar');
        $this->load->view('includes/footer'); 
        }else{
        $this->load->view('includes/headerVendedor');
        $this->load->view('clientes/cadastrar');
        $this->load->view('includes/footer');
        }
    }

    public function cadastrando() {
        $this->verificar_sessao();

        $data['razaoSocial'] = $this->input->post('razaoSocial');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['nomeFantasia'] = $this->input->post('nomeFantasia');
        $data['contatoDaEmpresa'] = $this->input->post('contatoDaEmpresa');
        $data['telefoneDoContato'] = $this->input->post('telefoneDoContato');
        $data['emailDoContato'] = $this->input->post('emailDoContato');
        $data['telefone'] = $this->input->post('telefone');
        $data['site'] = $this->input->post('site');
        $data['email'] = $this->input->post('email');
        $data['cep'] = $this->input->post('cep');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        $data['matricula'] = $this->session->userdata('matricula', $this->input->post('matricula'));
        $data['responsavel'] = $this->session->userdata('nome', $this->input->post('responsavel'));
        $data['filial'] = $this->session->userdata('filialUsuario', $this->input->post('filial'));
        $data['situacaoDoContrato'] = $this->input->post('situacaoDoContrato');

        if ($this->db->insert('clientes', $data)) {
            redirect('Clientes/1');
        } else {
            redirect('Clientes/2');
        }
    }

    public function editar($id = null) {
        $this->verificar_sessao();

        $this->db->where('idCliente', $id);
        $data['cliente'] = $this->db->get('clientes')->result();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
        $this->load->view('includes/header');
        $this->load->view('clientes/editar' , $data);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2 || $this->session->userdata('nivelUsuario') ==3){
        $this->load->view('includes/headerSupervisorGerente');
        $this->load->view('clientes/editar' , $data);
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5 || $this->session->userdata('nivelUsuario') ==6){
        $this->load->view('includes/headerCoordenadorTecnico');
        $this->load->view('clientes/editar', $data);
        $this->load->view('includes/footer');
        }else {
        $this->load->view('includes/headerVendedor');
        $this->load->view('clientes/editar' , $data);
        $this->load->view('includes/footer');
        }
    }

    public function editando() {
        $this->verificar_sessao();

        $id = $this->input->post('idCliente');
        $data['razaoSocial'] = $this->input->post('razaoSocial');
        $data['cnpj'] = $this->input->post('cnpj');
        $data['nomeFantasia'] = $this->input->post('nomeFantasia');
        $data['contatoDaEmpresa'] = $this->input->post('contatoDaEmpresa');
        $data['telefoneDoContato'] = $this->input->post('telefoneDoContato');
        $data['emailDoContato'] = $this->input->post('emailDoContato');
        $data['telefone'] = $this->input->post('telefone');
        $data['site'] = $this->input->post('site');
        $data['email'] = $this->input->post('email');
        $data['cep'] = $this->input->post('cep');
        $data['rua'] = $this->input->post('rua');
        $data['numero'] = $this->input->post('numero');
        $data['bairro'] = $this->input->post('bairro');
        $data['cidade'] = $this->input->post('cidade');
        $data['estado'] = $this->input->post('estado');
        //$data['matricula'] = $this->input->post('matricula');
        //$data['responsavel'] = $this->input->post('responsavel');
        //$data['filial'] = $this->input->post('filial');
        $data['situacaoDoContrato'] = $this->input->post('situacaoDoContrato');

        $this->db->where('idCliente', $id);
        if ($this->db->update('clientes', $data)) {
            redirect('Clientes/3');
        } else {
            redirect('Clientes/4');
        }
    }

    public function excluir($id = null) {
        $this->verificar_sessao();

        $this->db->where('idCliente', $id);
        if ($this->db->delete('clientes')) {
            redirect('Clientes/5');
        } else {
            redirect('Clientes/6');
        }
    }
}
