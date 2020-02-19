<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Criada em:08/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Usuários
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

class Dashboard extends CI_Controller {

    public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Dashboard/login');
        }
    }

    public function index() {
        
        $this->verificar_sessao();
        
        if($this->session->userdata('nivelUsuario') ==1 || $this->session->userdata('nivelUsuario') ==7){
        $this->load->view('includes/header');
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==2 || $this->session->userdata('nivelUsuario') ==3){
        $this->load->view('includes/headerSupervisorGerente');
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') ==5 || $this->session->userdata('nivelUsuario') ==6){
        $this->load->view('includes/headerCoordenadorTecnico');
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
        }else if($this->session->userdata('nivelUsuario') == 8){
        $this->load->view('includes/headerRecursosHumanos');
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
        }else{
        $this->load->view('includes/headerVendedor');
        $this->load->view('dashboard');
        $this->load->view('includes/footer');
        }
    }

    public function login() {
        $this->load->view('login');
    }

    public function logar() {

        $email = $this->input->post('loginUsuario');
        $senha = md5($this->input->post('senhaUsuario'));

        $this->db->where('loginUsuario', $email);
        $this->db->where('senhaUsuario', $senha);
        $this->db->where('situacaoUsuario', 0);

        $data['usuarios'] = $this->db->get('usuarios')->result();

        if (count($data['usuarios']) == 1) {
            $dados['matricula'] = $data['usuarios'][0]->matriculaUsuario;
            $dados['situacaoUsuario'] = $data['usuarios'][0]->situacaoUsuario;
            $dados['nivelUsuario'] = $data['usuarios'][0]->nivelUsuario;
            $dados['filialUsuario'] = $data['usuarios'][0]->filialUsuario;
            $dados['nome'] = $data['usuarios'][0]->nomeUsuario;
            $dados['emailUsuario'] = $data['usuarios'][0]->emailUsuario;
            $dados['celularUsuario'] = $data['usuarios'][0]->celularUsuario;
            $dados['id'] = $data['usuarios'][0]->idUsuario;
            $dados['logado'] = true;

            $this->session->set_userdata($dados);
            redirect('Dashboard');
        } else {
            redirect('Dashboard/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Dashboard/login');
    }

}