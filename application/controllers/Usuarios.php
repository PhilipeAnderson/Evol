<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:09/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Usuários
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */
class Usuarios extends CI_Controller {

//    public function verificar_sessao() {
//        if ($this->session->userdata('logado') == false) {
//            redirect('Dashboard/login');
//        }
//    }

    public function index($indice = null) {
//        $this->verificar_sessao();

        $this->db->select('*');
//        $this->db->join('permissoes', 'nivelUsuario=idPermissao', 'inner');
//        $this->db->join('filiais', 'filialUsuario=idFilial', 'inner');
//        $this->db->order_by('matriculaUsuario', 'ASC');
        $dados['usuarios'] = $this->db->get('usuarios')->result();
//
        $this->load->view('includes/header');
        if ($indice == 1) {
            $data['msg'] = "Usuário cadastrado com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 2) {
            $data['msg'] = "Erro ao cadastrar o usuário no Banco de Dados! Comunique ao seu gerente";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 3) {
            $data['msg'] = "Usuário Editado com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 4) {
            $data['msg'] = "Erro ao editar o usuário no Banco de Dados! Comunique ao seu gerente";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 5) {
            $data['msg'] = "Usuário Excluído com sucesso!";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 6) {
            $data['msg'] = "Erro ao excluir o usuário no Banco de Dados! Comunique ao seu gerente";
            $this->load->view('includes/msg_error', $data);
        } else if ($indice == 7) {
            $data['msg'] = "Senha Atualizada com Sucesso";
            $this->load->view('includes/msg_success', $data);
        } else if ($indice == 8) {
            $data['msg'] = "Não foi possível atualizar a senha!";
            $this->load->view('includes/msg_error', $data);
        }

        $this->load->view('usuarios/listar', $dados);
        $this->load->view('includes/footer');
    }

//    public function ordemPorAlfabetica() {
//        $this->verificar_sessao();
//        $this->db->select('*');
//        $this->db->join('permissoes', 'nivelUsuario=idPermissao', 'inner');
//        $this->db->order_by('nomeUsuario', 'name');
//        $dados['usuarios'] = $this->db->get('usuarios')->result();
//
//        $this->load->view('includes/header');
//        $this->load->view('usuarios/listar', $dados);
//        $this->load->view('includes/footer');
//    }

//    public function ordemPorNivel() {
//        $this->verificar_sessao();
//
//        $this->db->select('*');
//        $this->db->join('permissoes', 'nivelUsuario=idPermissao', 'inner');
//        $this->db->order_by('nivelUsuario', 'name');
//        $dados['usuarios'] = $this->db->get('usuarios')->result();
//
//        $this->load->view('includes/header');
//        $this->load->view('usuarios/listar', $dados);
//        $this->load->view('includes/footer');
//    }

    public function cadastrar() {
//        $this->verificar_sessao();
//        
//        $dados['filial'] = $this->db->get('filiais')->result();
//        $dados['funcao'] = $this->db->get('permissoes')->result();
//
        $this->load->view('includes/header');
        $this->load->view('usuarios/cadastrar');
        $this->load->view('includes/footer');
    }

    public function cadastrando() {
//        $this->verificar_sessao();

        $data['matriculaUsuario'] = $this->input->post('matriculaUsuario');
        $data['nomeUsuario'] = $this->input->post('nomeUsuario');
        $data['emailUsuario'] = $this->input->post('emailUsuario');
        $data['celularUsuario'] = $this->input->post('celularUsuario');
        $data['estadoUsuario'] = $this->input->post('estadoUsuario');
        $data['filialUsuario'] = $this->input->post('filialUsuario');
        $data['nivelUsuario'] = $this->input->post('nivelUsuario');
        $data['situacaoUsuario'] = $this->input->post('situacaoUsuario');
        $data['loginUsuario'] = $this->input->post('loginUsuario');
        $data['senhaUsuario'] = md5($this->input->post('senhaUsuario'));

        if ($this->db->insert('usuarios', $data)) {
            redirect('Usuarios/1');
        } else {
            redirect('Usuarios/2');
        }
    }

//    public function editar($id = null, $indice = null) {
//        $this->verificar_sessao();
//
//        $data['filial'] = $this->db->get('filiais')->result();
//        $data['funcao'] = $this->db->get('permissoes')->result();
//
//        $this->db->where('idUsuario', $id);
//
//        $data['usuario'] = $this->db->get('usuarios')->result();
//        $this->load->view('includes/header');
//        if ($indice == 1) {
//            $data['msg'] = "Senha alterada com sucesso!";
//            $this->load->view('includes/msg_success', $data);
//        } else if ($indice == 2) {
//            $data['msg'] = "Erro ao alterar a Senha no Banco de Dados! Comunique ao seu gerente";
//            $this->load->view('includes/msg_error', $data);
//        }
//
//        $this->load->view('usuarios/editar', $data);
//        $this->load->view('includes/footer');
//    }

//    public function editando() {
//        $this->verificar_sessao();
//
//        $id = $this->input->post('idUsuario');
//        //$data['matriculaUsuario'] = $this->input->post['matriculaUsuario']; ESTE CAMPO NAO PODE SER ALTERADO POR NENHUM PERFIL
//        $data['nomeUsuario'] = $this->input->post('nomeUsuario');
//        $data['emailUsuario'] = $this->input->post('emailUsuario');
//        $data['celularUsuario'] = $this->input->post('celularUsuario');
//        $data['estadoUsuario'] = $this->input->post('estadoUsuario');
//        $data['filialUsuario'] = $this->input->post('filialUsuario');
//        $data['nivelUsuario'] = $this->input->post('nivelUsuario');
//        $data['situacaoUsuario'] = $this->input->post('situacaoUsuario');
//        $data['loginUsuario'] = $this->input->post('loginUsuario');
//        //$data['senhaUsuario'] = md5($this->input->post('senhaUsuario'));
//
//        $this->db->where('idUsuario', $id);
//        if ($this->db->update('usuarios', $data)) {
//            redirect('Usuarios/3');
//        } else {
//            redirect('Usuarios/4');
//        }
//    }

//    public function perfil() {
//        $this->verificar_sessao();
//
//        $this->load->view('includes/header');
//        $this->load->view('usuarios/perfil');
//        $this->load->view('includes/footer');
//    }

    public function excluir($id) {
        //$this->verificar_sessao();

        $this->db->where('idUsuario', $id);
        if ($this->db->delete('usuarios')) {
            redirect('Usuarios/5');
        } else {
            redirect('Usuarios/6');
        }
    }

//    public function salvarSenha() {
//        $this->verificar_sessao();
//
//        $id = $this->input->post('idUsuario');
//
//        $senhaAntiga = md5($this->input->post('senhaAtual'));
//        $senhaNova = md5($this->input->post('senhaNova'));
//
//        $this->db->select('senhaUsuario');
//        $this->db->where('idUsuario', $id);
//        $data['senhaUsuario'] = $this->db->get('usuarios')->result();
//        $dados['senhaUsuario'] = $senhaNova;
//
//        $this->db->select('*');
//        //$date['usuarios'] = $this->db->get('usuarios')->result();
//        $this->load->view('includes/header');
//
//        if ($data['senhaUsuario'][0]->senhaUsuario == $senhaAntiga) {
//            $this->db->where('idUsuario', $id);
//            $this->db->update('usuarios', $dados);
////            $msg['msg'] = "Senha Atualizada com Sucesso";
////            $this->load->view('includes/msg_success', $msg);
//            //$this->db->update('usuarios', $date);
//            redirect('Usuarios/7');
//        } else {
////            $msg['msg'] = "Não foi possível atualizar a senha!";
////            $this->load->view('includes/msg_error', $msg);
//            redirect('Usuarios/8');
//        }
//    }

//        
//        $this->load->view('usuarios/listar', $date);
//        $this->load->view('includes/footer');
//        }
}
