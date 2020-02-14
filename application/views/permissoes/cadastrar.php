<!--
 * Criada em:13/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Permissao aos Usuarios da Classe Permissao
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
      <h2 class="card-title">Cadastro De Funções e Permissões</h2>
      <h4 style="color:#00dccd;">ATENCÃO todos as funções tem as suas próprias permissões!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form action="<?= base_url('Permissoes/cadastrando') ?>" method="post">
        <div class="card-chart"><h5 style="color:#dd4ecd">Registro das Funções</h5></div>
        <!--         <div class="row">
                  <div class="col-md-2">
                   <div class="form-group">
                    <label for="codigoFuncao" style="color:#ff8379;">Cod. da Função:</label>
                    <input style="border-color:#5282b2" type="text" id="codigoFuncao" name="codigoFuncao" class="form-control" placeholder="O Código nao poderá ser mudado!" required>
                   </div>
                  </div>
                 </div>-->
        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <label for="nomeFuncao" style="color:#ff8379;">Função:</label>
           <input style="border-color:#5282b2" type="text" id="nomeFuncao" name="nomeFuncao" class="form-control" placeholder="Nome da Função" required>
          </div>
         </div>
        </div>
        <div class="row">
         <div class="col-md-8">
          <div class="form-group">
           <label for="descricaoFuncao" style="color:#ff8379;">Descrição:</label>
           <input style="border-color:#5282b2" type="text" id="descricaoFuncao" name="descricaoFuncao" class="form-control" placeholder="Descreva a Função" required>
          </div>  
         </div>
        </div>
        <hr>



        <div class="table-responsive">
         <div class="card-chart"><h5 style="color:#dd4ecd">Cadastrando Permissões</h5></div>
         <table class="table ">
          <tbody>
           <tr>
            <td>
             <div class="row">
             <div class="col-md-2">
             <label>Ver Cliente</label>
             <select style="border-color:#5282b2" id="vCliente" name="vCliente" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Cadastrar Cliente</label>
             <select style="border-color:#5282b2" id="cCliente" name="cCliente" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Editar Cliente</label>
             <select style="border-color:#5282b2" id="eCliente" name="eCliente" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Excluir Cliente</label>
             <select style="border-color:#5282b2" id="dCliente" name="dCliente" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             </div>
            </td>
           </tr>

          <hr>
          
                     <tr>
            <td>
             <div class="row">
             <div class="col-md-2">
             <label>Ver Serviço</label>
             <select style="border-color:#5282b2" id="vServico" name="vServico" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Cadastrar Serviço</label>
             <select style="border-color:#5282b2" id="cServico" name="cServico" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Editar Serviço</label>
             <select style="border-color:#5282b2" id="eServico" name="eServico" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             <div class="col-md-2">
             <label>Excluir Serviço</label>
             <select style="border-color:#5282b2" id="dServico" name="dServico" class="browser-default custom-select custom-select-md mb-3">
              <option style="background-color:#00dccd; color:#000" value="1">Sim</option>
              <option style="background-color:#00dccd; color:#000" value="0">Não</option>
             </select>
             </div>
             </div>
            </td>
           </tr>

          </tbody>
         </table>
        </div>

        <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Cadastrar</button>
         </div>
         <div class="card-footer">
          <a href="<?= base_url('Permissoes') ?>" class="btn btn-primary btn-group">Voltar</a>
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
