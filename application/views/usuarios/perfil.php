<!DOCTYPE html>

<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 *  
 *
 * @author Philipe Anderson De Campos | http://www.phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
-->

<div class="content">
 <div class="row">
  <div class="col-12">
   <div class="card card-chart">
    <div class="card-header">
     <div class="row">
      <div class="col-sm-6 text-left">
       <h5 class="card-category">Confira os dados do seu Perfil</h5>
       <h2 class="card-title">Seu Perfil</h2>
      </div>
      <div class="col-md-12">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  
        <div class="col-6">
            <p class="card-category"></p>
            <h3 class="card-title"></h3>
            <h3>Dados da Empresa</h3> 
            <h4>
            Matricula: <?php echo $this->session->userdata('matricula') ?><br>
            Situação: <?php echo $this->session->userdata('situacaoUsuario')==0?'Ativo':'Inativo' ?><br>
            Nível: <?php 
                      if($this->session->userdata('nivelUsuario') == 1){
                          echo "Diretor";
                      }else if($this->session->userdata('nivelUsuario') == 2){
                          echo "Supervisor";
                      }else if($this->session->userdata('nivelUsuario') == 3){
                          echo "Gerente";
                      }else if($this->session->userdata('nivelUsuario') == 4){
                          echo "Vendedor";
                      }else if($this->session->userdata('nivelUsuario') == 5){
                          echo "Coordenador";
                      }else if($this->session->userdata('nivelUsuario') == 6){
                          echo "Técnico";
                      }else if($this->session->userdata('nivelUsuario') == 7){
                          echo "Sistema TI";
                      }else if($this->session->userdata('nivelUsuario') == 8){
                          echo "Analista de RH";
                      }else{    
                          echo " Pendente em Permissoes";
                      }
                          ?>
              <br>
              Filial: <?php 
                        if($this->session->userdata('filialUsuario') == 1){ 
                            echo "Curitiba";
                         }else if($this->session->userdata('filialUsuario') == 2){
                             echo "Cascavel";
                         }else if($this->session->userdata('filialUsuario') == 3){
                             echo "Goiânia";
                         }else if($this->session->userdata('filialUsuario') == 4){
                             echo "Sorocaba";
                         }else if($this->session->userdata('filialUsuario') == 5){
                             echo "São Paulo";
                         }else{
                             echo "Pendente em Filiais";
                         }   

                       ?>  
               <br>
            </h4>
            <br>

             <h3>Dados do Colaborador</h3>
              <h4>
               Nome: <?php echo $this->session->userdata('nome') ?><br>
               Telefone: <?php echo $this->session->userdata('celularUsuario')?><br> 
               Email: <?php echo $this->session->userdata('emailUsuario')?><br>
             </h4>
        </div>
                  
                <div class="col-md-6">
                 <h4 class="card-title">Foto Do Perfil</h4>
                 <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle">
                    <img src="../../assets/img/placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                  <div>
                    <span class="btn btn-round btn-rose btn-file">
                      <span class="fileinput-new">Add Photo</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <br />
                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                 </div> 
                </div>
                 
                </div>
              </div>
            </div>
      </div>
      
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

