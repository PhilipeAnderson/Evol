<?php

/**
 * Criada em:13/02/2020
 * 
 * Descricao:
 * Classe responsável pelo conteúdo de Serviços
 * 
 * @author Philipe Anderson De Campos | philipe@phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
 */

class Servicos extends CI_Controller {
    
    public function verificar_sessao(){
        if($this->session->userdata('logado') == false){
            redirect('Dashboard/login');
        }
    }
    
    public function index($indice=null){
        $this->verificar_sessao();
        
        $this->db->select('*');
        $dados['servicos'] = $this->db->get('servicos')->result();
        
        $this->load->view('includes/header');
        if($indice==1){
            $data['msg'] = "Serviço Cadastrado com Sucesso";
            $this->load->view('includes/msg_success', $data);
        }elseif($indice==2){
            $data['msg'] = "Não foi possível Cadastrar este Serviço!";
            $this->load->view('includes/msg_error', $data);   
        }else if($indice==3){
            $data['msg'] = "Serviço Atualizado com Sucesso";
            $this->load->view('includes/msg_success', $data);
        }else if($indice==4){
            $data['msg'] = "Não foi possível Atualizar este Serviço!";
            $this->load->view('includes/msg_error', $data);   
        }else if($indice==5){
            $data['msg'] = "Serviço Excluido com Sucesso";
            $this->load->view('includes/msg_success', $data);
        }else if($indice==6){
            $data['msg'] = "Não foi possível Excluir este Serviço!";
            $this->load->view('includes/msg_error', $data);   
        }
        
        
        $this->load->view('servicos/listar', $dados);
        $this->load->view('includes/footer');
        
        
    
    }
    
    public function ordemPorCategoria(){
        $this->verificar_sessao();
        
        $this->db->select('*');
        $this->db->order_by('categoriaServico','ASC');
        $dados['servicos'] = $this->db->get('servicos')->result();
        
        $this->load->view('includes/header');
        $this->load->view('servicos/listar', $dados);
        $this->load->view('includes/footer');
    }
    
    public function cadastrar(){
        $this->verificar_sessao();
        
        $this->load->view('includes/header');
        $this->load->view('servicos/cadastrar');
        $this->load->view('includes/footer');
        
    }
    
    
    public function cadastrando() {
        $this->verificar_sessao();
        
        $data['codigoServico'] = $this->input->post('codigoServico');
        $data['nomeServico'] = $this->input->post('nomeServico');
        $data['categoriaServico'] = $this->input->post('categoriaServico');
        $data['descricaoServico'] = $this->input->post('descricaoServico');
        
        if($this->db->insert('servicos', $data)){
            redirect('Servicos/1');
        }else{
            redirect('Servicos/2');
        }
    }
    
    public function editar($id = null){
        $this->verificar_sessao();
        
        $this->db->where('idServico', $id);
        $data['servico'] = $this->db->get('servicos')->result();
        $this->load->view('includes/header');
        $this->load->view('servicos/editar', $data);
        $this->load->view('includes/footer');
    }
    
    public function editando() {
        $this->verificar_sessao();
        
        $id = $this->input->post('idServico');
        //$data['codigoServico'] = $this->input->post('codigoServico'); ESTE CAMPO NAO PODE SER ALTERADO POR NENHUM PERFIL
        $data['nomeServico'] = $this->input->post('nomeServico');
        $data['categoriaServico'] = $this->input->post('categoriaServico');
        $data['descricaoServico'] = $this->input->post('descricaoServico');
        
        $this->db->where('idServico', $id);
        if($this->db->update('servicos', $data)) {
            redirect('Servicos/3');
        }else{
            redirect('Servicos/4');
        } 
    }
    
    
    
    public function excluir($id = null){
        $this->verificar_sessao();
        
        $this->db->where('idServico', $id);
        if($this->db->delete('servicos')){
            redirect('Servicos/5');
        }else{
            redirect('Servicos/6');
        }
    }  
}