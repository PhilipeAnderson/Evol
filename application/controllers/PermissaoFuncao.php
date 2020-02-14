<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PermissaoFuncao
 *
 * @author Philipe
 */
class PermissaoFuncao {

    private $tabela = 'utilizador_permissao';
    private $pk = 'permissao_id';
    private $select = 'permissao';


    public function __construct()
    {
        $this->CI = & get_instance();
        $this->CI->load->database();
    }

    /**
     * Permite verificar se tem acesso a um determinado evento
     *
     * @param null $permissao_id
     * @param null $evento
     * @return bool
     */
    public function checkPermissao($permissao_id = null, $evento = null){

        if($permissao_id == null || $evento == null){
            return false;
        }

        $permissoes = $this->loadPermissao($permissao_id);

        /** Se o evento existir no objeto */
        if(property_exists((object)$permissoes, $evento)){

            /** Se tiver permissao (true) */
            if($permissoes->$evento){
                return true;
            }
        }
        return false;

    }

    /**
     * Carrega permissão que se encontra guardada na base de dados em formato json
     * 
     * @param null $permissao_id
     * @return bool|mixed
     */
    private function loadPermissao($permissao_id = null){

        //Se existir permissao_id
        if($permissao_id){

            $this->CI->db->select($this->select);
            $this->CI->db->where($this->pk, $permissao_id);
            $this->CI->db->limit(1);
            $permissoes = $this->CI->db->get($this->tabela)->row_array();

            if(count($permissoes) > 0){

                return json_decode($permissoes[$this->select]);
            }

        }

        return false;

    }


}
