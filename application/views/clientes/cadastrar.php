<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Cadastrar da Classe Clientes
 *
 * @author Philipe Anderson De Campos | http://www.phillinks.com.br
 * @copyright (c) 2020, Philipe Anderson | phillinks.com.br
-->

<div class="content">
 <div class="row">
  <div class="col-12">
   <div class="card card-chart">
    <div class="card-header">

      <div class="col-sm-10 text-left">
       <h2 class="card-title">Cadastro De Clientes</h2>
       <h4 style="color:#00dccd;">Todos os dados preenchidos são de responsabilidade do Vendedor, mantenha os dados ATUALIZADOS!</h4>
      </div>
      <div class="card">
       <div class="card-body">
        <form action="<?= base_url('Clientes/cadastrando') ?>" method="post">
         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Empresarias do Fisco</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="razaoSocial" style="color:#ff8379;">Razao Social:</label>
            <input style="border-color:#5282b2" type="text" id="razaoSocial" name="razaoSocial" class="form-control" placeholder="Preencha o nome completo da Razao Social">
           </div> </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="cnpj" style="color:#ff8379;">CNPJ:</label>
            <input style="border-color:#5282b2" type="text" id="cnpj" name="cnpj" class="form-control" placeholder="Preencha sem pontos e sem a barra! ex:1234567890001">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="nomeFantasia" style="color:#ff8379;">Nome Fantasia:</label>
            <input style="border-color:#5282b2" type="text" id="nomeFantasia" name="nomeFantasia" class="form-control" placeholder="Preencha o Nome Completo do Cliente">
           </div>  
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Do Contato da Empresa</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="contatoDaEmpresa" style="color:#ff8379;">Contato Da Empresa:</label>
            <input style="border-color:#5282b2" type="text" id="contatoDaEmpresa" name="contatoDaEmpresa" class="form-control" placeholder="Nome do Contato Responsável da Empresa">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="telefoneDoContato" style="color:#ff8379;">Telefone Do Contato:</label>
            <input style="border-color:#5282b2" type="text" id="telefoneDoContato" name="telefoneDoContato" class="form-control" placeholder="Telefone do Contato Responsável da Empresa">
           </div>  
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="emailDoContato" style="color:#ff8379;">Email Do Contato:</label>
            <input style="border-color:#5282b2" type="text" id="emailDoContato" name="emailDoContato" class="form-control" placeholder="Email do Contato Responsável da Empresa">
           </div> 
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Genéricos da Empresa</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="telefone" style="color:#ff8379;">Telefone:</label>
            <input style="border-color:#5282b2" type="text" id="telefone" name="telefone" class="form-control" placeholder="Preencha o Número do Telefone Principal da Empresa">
           </div> 
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="site" style="color:#ff8379;">Site:</label>
            <input style="border-color:#5282b2" type="text" id="site" name="site" class="form-control" placeholder="Se Houver um Celular de Contato da Empresa">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="email" style="color:#ff8379;">Email:</label>
            <input style="border-color:#5282b2" type="text" id="email" name="email" class="form-control" placeholder="Se Houver um Endereço de Email da Empresa">
           </div> 
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Endereço da Empresa</h5></div>
         <div class="row">
          <div class="col-md-2">
           <div class="form-group">
            <label for="cep" style="color:#ff8379;">CEP:</label>
            <input style="border-color:#5282b2" type="text" id="cep" name="cep" class="form-control" placeholder="Sem espaços ou traços">
           </div>
          </div>

          <div class="col-md-3">
           <div class="form-group">
            <label for="rua" style="color:#ff8379;">Rua:</label>
            <input style="border-color:#5282b2" type="text" id="rua" name="rua" class="form-control" placeholder="Cadastre a Rua do Cliente">
           </div>
          </div>

          <div class="col-md-1">
           <div class="form-group">
            <label for="numero" style="color:#ff8379;">Número:</label>
            <input style="border-color:#5282b2" type="text" id="numero" name="numero" class="form-control" placeholder="Numero da Fachada">
           </div>
          </div>

          <div class="col-md-2">
           <div class="form-group">
            <label for="bairro" style="color:#ff8379;">Bairro:</label>
            <input style="border-color:#5282b2" type="text" id="bairro" name="bairro" class="form-control" placeholder="Bairro da Empresa">
           </div>
          </div>

          <div class="col-md-2">
           <div class="form-group">
            <label for="cidade" style="color:#ff8379;">Cidade:</label>
            <input style="border-color:#5282b2" type="text" id="cidade" name="cidade" class="form-control" placeholder="Cidade da Empresa">
           </div>
          </div>

          <div class="col-md-2">
           <label for="estado" style="color:#ff8379;">Estado:</label>
           <select  style="border-color:#5282b2" id="estado" name="estado" class="browser-default custom-select custom-select-md mb-3">
            <option style="background-color:#00dccd; color:#000" value="1">AC</option>
            <option style="background-color:#00dccd; color:#000" value="2">AL</option>
            <option style="background-color:#00dccd; color:#000" value="3">AP</option>
            <option style="background-color:#00dccd; color:#000" value="4">AM</option>
            <option style="background-color:#00dccd; color:#000" value="5">BH</option>
            <option style="background-color:#00dccd; color:#000" value="6">CE</option>
            <option style="background-color:#00dccd; color:#000" value="7">DF</option>
            <option style="background-color:#00dccd; color:#000" value="8">ES</option>
            <option style="background-color:#00dccd; color:#000" value="9">GO</option>
            <option style="background-color:#00dccd; color:#000" value="10">MA</option>
            <option style="background-color:#00dccd; color:#000" value="11">MT</option>
            <option style="background-color:#00dccd; color:#000" value="12">MS</option>
            <option style="background-color:#00dccd; color:#000" value="13">MG</option>
            <option style="background-color:#00dccd; color:#000" value="14">PA</option>
            <option style="background-color:#00dccd; color:#000" value="15">PB</option>
            <option style="background-color:#00dccd; color:#000" value="16">PR</option>
            <option style="background-color:#00dccd; color:#000" value="17">PE</option>
            <option style="background-color:#00dccd; color:#000" value="18">PI</option>
            <option style="background-color:#00dccd; color:#000" value="19">RJ</option>
            <option style="background-color:#00dccd; color:#000" value="20">RN</option>
            <option style="background-color:#00dccd; color:#000" value="21">RS</option>
            <option style="background-color:#00dccd; color:#000" value="22">RO</option>
            <option style="background-color:#00dccd; color:#000" value="23">RR</option>
            <option style="background-color:#00dccd; color:#000" value="24">SC</option>
            <option style="background-color:#00dccd; color:#000" value="25">SP</option>
            <option style="background-color:#00dccd; color:#000" value="26">SE</option>
            <option style="background-color:#00dccd; color:#000" value="27">TO</option>
            
           </select>
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Vendedor Responsável</h5></div>
         <div class="row">
          <div class="col-md-2">
           <div class="form-group">
            <label for="matricula" style="color:#ff8379">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" class="form-control" style="color:orange; border-color:#5282b2" value="<?=$this->session->userdata('matricula')?>" disabled="">
           </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
            <label for="responsavel" style="color:#ff8379">Responsável:</label>
            <input type="text" id="responsavel" name="responsavel" class="form-control" style="color:orange; border-color:#5282b2" value="<?=$this->session->userdata('nome')?>" disabled="">
           </div> 
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="filial" style="color:#ff8379; border-color:#5282b2">Filial:</label>
            <input type="text" id="filial" name="filial" class="form-control" style="color:orange; border-color:#5282b2" value="<?=$this->session->userdata('filialUsuario');
            if($this->session->userdata('filialUsuario')==1){
                echo "º Matriz | Curitiba";
            }else if($this->session->userdata('filialUsuario')==2){
                echo "º Unidade | Cascavel";
            }else if($this->session->userdata('filialUsuario')==3){
                echo "º Unidade | Goiânia";
            }else if($this->session->userdata('filialUsuario')==4){
                echo "º Unidade | Sorocaba";
            }else if($this->session->userdata('filialUsuario')==5){
                echo "º Unidade | São Paulo";
            }else{
                echo"º Unidade Indefinida";
            }
            ?>" disabled="">
           </div>
          </div>
         </div>
         <hr>

         <div class="card-chart" style="color:#00dccd;"><h5 style="color:#dd4ecd">Status do Contrato</h5></div>
         <div class="row">
          <div class="col-md-4">
           <label for="situacaoDoContrato" style="color:#ff8379;">Contrato?</label>
           <select style="border-color:#5282b2" id="situacaoDoContrato" name="situacaoDoContrato" class="browser-default custom-select custom-select-md mb-3">
            <option style="background-color:#00dccd; color:#000" value="0">NÃO, POSSUÍ CONTRATO!</option>
            <option style="background-color:#00dccd; color:#000" value="1">SIM, POSSUÍ CONTRATO!</option>
           </select>
          </div>
         </div>
         <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Enviar</button>
         </div>
          <div class="card-footer">
          <a href="<?= base_url('Clientes')?>" class="btn btn-primary btn-group">Voltar</a>
         </div>
         </div>
          
        </form>
       </div>
      </div>
    </div>
   </div>
  </div>
 </div>
</div>