<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Listar da Classe Usuários
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
      <h2 class="card-title">Cadastro De Filiais</h2>
      <h4 style="color:#00dccd;">Cadastro de Filiais!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form action="<?= base_url('Filiais/cadastrando') ?>" method="post">
        <div class="card-chart"><h5 style="color:#dd4ecd">Registro dos Serviços</h5></div>

        <div class="row">
         <div class="col-md-2">
          <div class="form-group">
           <label for="nomeFilial" style="color:#ff8379;">Nome da Filial:</label>
           <input style="border-color:#5282b2" type="text" id="nomeFilial" name="nomeFilial" class="form-control" placeholder="Insira o nome da Nova Filial" required>
          </div>
         </div>
        

        <div class="col-md-3">
         <label for="estadoFilial" style="color:#ff8379;">Estado da Filial:</label>
         <select  style="border-color:#5282b2" id="estadoFilial" name="estadoFilial" class="browser-default custom-select custom-select-md mb-3">
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



        <div class="row">
         <div class="col-md-8">
          <div class="form-group">
           <label for="descricaoFilial" style="color:#ff8379;">Descrição Filial:</label>
           <input style="border-color:#5282b2" type="text" id="descricaoFilial" name="descricaoFilial" class="form-control" placeholder="Descreva o Serviço" required>
          </div>  
         </div>
        </div>


        <hr>
        <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Cadastrar</button>
         </div>
         <div class="card-footer">
          <a href="<?= base_url('Filiais') ?>" class="btn btn-primary btn-group">Voltar</a>
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

