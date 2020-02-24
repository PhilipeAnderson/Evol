<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:11/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Filiais
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

class Filiais extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Dashboard/login');
        }
    }

    public function index($indice = null) {
        $this->verificar_sessao();

        $this->db->select('*');
        $dados['filial'] = $this->db->get('filiais')->result();
        
        if ($this->session->userdata('nivelUsuario') == 8 ){
        $this->load->view('includes/headerRecursosHumanos');
        if ($indice == 1) {
            $data['msg'] = "Filial cadastrada com sucesso!";
            $this->load->view('includes/msg_success', $data);
        }else if($indice ==2) {
            $data['msg'] = "Erro ao cadastrar a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Filial editada com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Erro ao editar a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Filial excluida com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Erro ao excluir a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        }
        $this->load->view('Filiais/listar', $dados);
        $this->load->view('includes/footer');
    }else{
        $this->load->view('includes/header');
        if ($indice == 1) {
            $data['msg'] = "Filial cadastrada com sucesso!";
            $this->load->view('includes/msg_success', $data);
        }else if($indice ==2) {
            $data['msg'] = "Erro ao cadastrar a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Filial editada com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Erro ao editar a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Filial excluida com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Erro ao excluir a filial no Banco de Dados!";
            $this->load->view('includes/msg_error', $data);
        }
        $this->load->view('Filiais/listar', $dados);
        $this->load->view('includes/footer');
        }
    }

    public function cadastrar() {
        $this->verificar_sessao();
        if ($this->session->userdata('nivelUsuario') == 1 || $this->session->userdata('nivelUsuario') == 7) {
            $this->load->view('includes/header');
            $this->load->view('filiais/cadastrar');
            $this->load->view('includes/footer');
        } else if ($this->session->userdata('nivelUsuario') == 8){
            $this->load->view('includes/headerRecursosHumanos');
            $this->load->view('filiais/cadastrar');
            $this->load->view('includes/footer');
        }
        
    }

    public function visualizar($id = null) {
        $this->verificar_sessao();
        $this->db->where('idFilial', $id);
        $data['filial'] = $this->db->get('filiais')->result();
        $this->load->view('includes/header');
        $this->load->view('filiais/visualizar', $data);
        $this->load->view('includes/footer');        
    }

    public function cadastrando() {
        $this->verificar_sessao();

        $data['nomeFilial'] = $this->input->post('nomeFilial');
        $data['estadoFilial'] = $this->input->post('estadoFilial');
        $data['descricaoFilial'] = $this->input->post('descricaoFilial');

        if ($this->db->insert('filiais', $data)) {
            redirect('Filiais/1');
        } else {
            redirect('Filiais/2');
        }
    }

    public function editar($id = null) {
        $this->verificar_sessao();
        $this->db->where('idFilial', $id);
            $data['filial'] = $this->db->get('filiais')->result();
        if($this->session->userdata('nivelUsuario') == 1 || $this->session->userdata('nivelUsuario') == 7){
            $this->load->view('includes/header');
            $this->load->view('filiais/editar', $data);
            $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') == 8){
            $this->load->view('includes/headerRecursosHumanos');
            $this->load->view('filiais/editar', $data);
            $this->load->view('includes/footer');
        }
        
    }

    public function editando() {
        $this->verificar_sessao();

        $id = $this->input->post('idFilial');
        $data['nomeFilial'] = $this->input->post('nomeFilial');
        $data['estadoFilial'] = $this->input->post('estadoFilial');
        $data['descricaoFilial'] = $this->input->post('descricaoFilial');

        $this->db->where('idFilial', $id);
        if ($this->db->update('filiais', $data)) {
            redirect('Filiais/3');
        } else {
            redirect('Filiais/4');
        }
    }

    public function excluir($id = null) {
        $this->verificar_sessao();

        $this->db->where('idFilial', $id);
        if ($this->db->delete('filiais')) {
            redirect('Filiais/5');
        } else {
            redirect('Filiais/6');
        }
    }

}
