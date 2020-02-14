<!--
 * Criada em:09/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Cadastrar da Classe Usuários
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
      <h2 class="card-title">Cadastro De Usuários</h2>
      <h4 style="color:#00dccd;">Todos os dados preenchidos são de responsabilidade de quem OS REGISTRA, mantenha os DADOS DOS USUÁRIOS ATUALIZADOS!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form action="<?= base_url('Usuarios/cadastrando') ?>" method="post">
        <div class="card-chart"><h5 style="color:#dd4ecd">Dados de Registro dos Usuários</h5></div>
        <div class="row">
         <div class="col-md-1">
          <div class="form-group">
           <label for="matriculaUsuario" style="color:#ff8379;">Matrícula:</label>
           <input style="border-color:#5282b2" type="text" id="matriculaUsuario" name="matriculaUsuario" class="form-control" placeholder="EX: A00XXXXX">
          </div> 
         </div>
         <div class="col-md-3">
          <div class="form-group">
           <label for="nomeUsuario" style="color:#ff8379;">Nome:</label>
           <input style="border-color:#5282b2" type="text" id="nomeUsuario" name="nomeUsuario" class="form-control" placeholder="Nome Completo do Colaborador">
          </div>
         </div>
         <div class="col-md-3">
          <div class="form-group">
           <label for="emailUsuario" style="color:#ff8379;">Email:</label>
           <input style="border-color:#5282b2" type="text" id="emailUsuario" name="emailUsuario" class="form-control" placeholder="Email corporativo do Colaborador">
          </div>  
         </div>
         <div class="col-md-2">
          <div class="form-group">
           <label for="celularUsuario" style="color:#ff8379;">Celular:</label>
           <input style="border-color:#5282b2" type="text" id="celularUsuario" name="celularUsuario" class="form-control" placeholder="Numero do Celular do Colaborador">
          </div>
         </div>
        </div>

        <hr>

        <div class="card-chart"><h5 style="color:#dd4ecd">Estado - Filial - Cargo e Situação do Usuário</h5></div>
        <div class="row">
         <div class="col-md-2">
          <label for="estadoUsuario" style="color:#ff8379;">Estado:</label>
          <select style="border-color:#5282b2" id="estadoUsuario" name="estadoUsuario" class="browser-default custom-select custom-select-md mb-3">
           <option style="background-color:#00dccd; color:#000" value="1">PR</option>
           <option style="background-color:#00dccd; color:#000" value="2">GO</option>
           <option style="background-color:#00dccd; color:#000" value="3">SP</option>
<!--           <option style="background-color:#00dccd; color:#000" value="4">Estado Temporário</option>-->
          </select>
         </div>
         
         <div class="col-md-2">
          <label for="filialUsuario" style="color:#ff8379;">Filial:</label>
          <select style="border-color:#5282b2" id="filialUsuario" name="filialUsuario" class="browser-default custom-select custom-select-md mb-3">
           <?php foreach($filial as $fil){ ?>
           <option style="background-color:#00dccd; color:#000" value="<?= $fil->idFilial?>"><?= $fil->nomeFilial;?></option>
           <?php } ?>
          </select>
         </div>
         
         <div class="col-md-2">
          <label for="nivelUsuario" style="color:#ff8379;">Função:</label>
          <select style="border-color:#5282b2" id="nivelUsuario" name="nivelUsuario" class="browser-default custom-select custom-select-md mb-3">
           <?php foreach($funcao as $func){?>
           <option style="background-color:#00dccd; color:#000" value="<?= $func->idPermissao?>"><?= $func->nomeFuncao;?></option>
           <?php } ?>
          </select>
         </div>
         
         <div class="col-md-2">
          <label for="situacaoUsuario" style="color:#ff8379;">Situação:</label>
          <select style="border-color:#5282b2" id="situacaoUsuario" name="situacaoUsuario" class="browser-default custom-select custom-select-md mb-3">
           <option style="background-color:#00dccd; color:#000" value="0">Ativo</option>
           <option style="background-color:#00dccd; color:#000" value="1">Inativo</option>
          </select>
         </div>
        </div>
        
        <hr>

        <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Login</h5></div>
        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <label for="loginUsuario" style="color:#ff8379;">Login:</label>
           <input style="border-color:#5282b2" type="text" id="loginUsuario" name="loginUsuario" class="form-control" placeholder="O Login deve ser igual ao email corporativo">
          </div> 
         </div>
         <div class="col-md-3">
          <div class="form-group">
           <label for="senhaUsuario" style="color:#ff8379;">Senha:</label>
           <input style="border-color:#5282b2" type="password" id="senhaUsuario" name="senhaUsuario" class="form-control" placeholder="A senha deve conter até 8 digitos entre letras e numeros">
          </div>
         </div>
        </div>
        
        <hr>

        <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Cadastrar</button>
         </div>
         <div class="card-footer">
          <a href="<?= base_url('Usuarios') ?>" class="btn btn-primary btn-group">Voltar</a>
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