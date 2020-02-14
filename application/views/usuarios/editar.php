<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Editar da Classe Usuários
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
      <h2 class="card-title">Atualização de Dados dos Usuários</h2>
      <h4 style="color:#00dccd;">Todos os dados preenchidos são de responsabilidade de quem OS REGISTRA, mantenha os DADOS DOS USUÁRIOS ATUALIZADOS!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form action="<?= base_url('Usuarios/editando') ?>" method="post">
        <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
        <div class="card-chart"><h5 style="color:#dd4ecd">Dados de Registro dos Usuários</h5></div>
        <div class="row">
         <div class="col-md-1">
          <div class="form-group">
           <label for="matriculaUsuario" style="color:#ff8379;">Matrícula:</label>
           <input type="text" id="matriculaUsuario" name="matriculaUsuario" style="color:orange; border-color:#5282b2" value="<?= $usuario[0]->matriculaUsuario; ?>" class="form-control" placeholder="EX: A00XXXXX" disabled="">
          </div> </div>

         <div class="col-md-3">
          <div class="form-group">
           <label for="nomeUsuario" style="color:#ff8379;">Nome:</label>
           <input type="text" id="nomeUsuario" name="nomeUsuario" style="border-color:#5282b2" value="<?= $usuario[0]->nomeUsuario; ?>" class="form-control" placeholder="Nome Completo do Colaborador">
          </div>
         </div>

         <div class="col-md-3">
          <div class="form-group">
           <label for="emailUsuario" style="color:#ff8379;">Email:</label>
           <input type="text" id="emailUsuario" name="emailUsuario" style="border-color:#5282b2" value="<?= $usuario[0]->emailUsuario; ?>" class="form-control" placeholder="Email corporativo do Colaborador">
          </div>  
         </div>


         <div class="col-md-2">
          <div class="form-group">
           <label for="celularUsuario" style="color:#ff8379;">Celular:</label>
           <input type="text" id="celularUsuario" name="celularUsuario" style="border-color:#5282b2" value="<?= $usuario[0]->celularUsuario; ?>" class="form-control" placeholder="Numero do Celular do Colaborador">
          </div>
         </div>
        </div>

        <hr>

        <div class="card-chart"><h5 style="color:#dd4ecd">Cargo e Situação do Usuário</h5></div>
        <div class="row">

         <div class="col-md-2">
          <label for="estadoUsuario" style="color:#ff8379;">Estado:</label>
          <select style="border-color:#5282b2" id="estadoUsuario" name="estadoUsuario" class="browser-default custom-select custom-select-md mb-3">
           <option style="background-color:#00dccd; color:#000" value="1" <?= $usuario[0]->estadoUsuario == 1 ? 'selected' : ''; ?>>PR</option>
           <option style="background-color:#00dccd; color:#000" value="2" <?= $usuario[0]->estadoUsuario == 2 ? 'selected' : ''; ?>>GO</option>
           <option style="background-color:#00dccd; color:#000" value="3" <?= $usuario[0]->estadoUsuario == 3 ? 'selected' : ''; ?>>SP</option>
           <option style="background-color:#00dccd; color:#000" value="4" <?= $usuario[0]->estadoUsuario == 3 ? 'selected' : ''; ?>>Estado Temporário</option>
          </select>
         </div>

         <div class="col-md-2">
          <label for="filialUsuario" style="color:#ff8379;">Filial:</label>
          <select style="border-color:#5282b2" id="filialUsuario" name="filialUsuario" class="browser-default custom-select custom-select-md mb-3">
            
              <?php
              foreach ($filial as $fil) {
                  if ($fil->idFilial == $usuario[0]->filialUsuario) {
                      ?>
                   <option style="background-color:#00dccd; color:#000" value="<?= $fil->idFilial ?>" selected ><?= $fil->nomeFilial; ?></option>
                <?php } else { ?>
                   <option style="background-color:#00dccd; color:#000" value="<?= $fil->idFilial ?>" ><?= $fil->nomeFilial; ?></option>
                <?php } ?>
            <?php } ?>
                   
          </select>
         </div>

         <div class="col-md-2">
          <label for="nivelUsuario" style="color:#ff8379;">Função:</label>
          <select style="border-color:#5282b2" id="nivelUsuario" name="nivelUsuario" class="browser-default custom-select custom-select-md mb-3">
            
              <?php
              foreach ($funcao as $func) {
                  if ($func->idPermissao == $usuario[0]->nivelUsuario) {
                      ?>
                   <option style="background-color:#00dccd; color:#000" value="<?= $func->idPermissao ?>" selected ><?= $func->nomeFuncao; ?></option>
                <?php } else { ?>
                   <option style="background-color:#00dccd; color:#000" value="<?= $func->idPermissao ?>" ><?= $func->nomeFuncao; ?></option>
                <?php } ?>
            <?php } ?>
                   
          </select>
         </div>

         <div class="col-md-2">
          <label for="situacaoUsuario" style="color:#ff8379;">Situação:</label>
          <select style="border-color:#5282b2" id="situacaoUsuario" name="situacaoUsuario" class="browser-default custom-select custom-select-md mb-3">
           <option style="background-color:#00dccd; color:#000" value="0" <?= $usuario[0]->situacaoUsuario == 0 ? 'selected' : ''; ?>>Ativo</option>
           <option style="background-color:#00dccd; color:#000" value="1" <?= $usuario[0]->situacaoUsuario == 1 ? 'selected' : ''; ?>>Inativo</option>
          </select>
         </div>
        </div>
        <hr>

        <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Login</h5></div>
        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <label for="loginUsuario" style="color:#ff8379;">Login:</label>
           <input type="text" id="loginUsuario" name="loginUsuario" style="border-color:#5282b2" value="<?= $usuario[0]->loginUsuario; ?>" class="form-control" placeholder="O Login deve ser igual ao email corporativo">
          </div> 
         </div>

         <div class="col-md-3">
          <div class="form-group">
           <label for="senhaUsuario" style="color:#ff8379;">Senha:</label>
           <input type="button" id="senhaUsuario" name="senhaUsuario" class="btn btn-default btn-block" value="Atualizar Senha" data-toggle="modal" data-target="#exampleModal">
          </div>
         </div>

        </div>
        <hr>
        <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Atualizar</button>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
  <div class="modal-content">
   <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Atualizar Senha</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
    </button>
   </div>
   <div class="modal-body">
    <form action="<?= base_url('Usuarios/salvarSenha') ?>" method="post">
     <input type="hidden" id="idUsuario" name="idUsuario" value="<?= $usuario[0]->idUsuario; ?>">
     <div class="form-group">
      <label for="senhaAtual" class="col-form-label">Senha Atual:</label>
      <input type="password" id="senhaAtual" name="senhaAtual" style="color:#000;" class="form-control">
     </div>
     <div class="form-group">
      <label for="senhaNova" class="col-form-label">Senha Nova:</label>
      <input type="password"  id="senhaNova" name="senhaNova" style="color:#000;" onkeyup="checarSenha()" class="form-control">
     </div>
     <div class="form-group">
      <label for="confirmarSenha" class="col-form-label">Confirmar Senha Nova:</label>
      <input type="password" id="confirmarSenha" name="confirmarSenha" style=color:#000; onkeyup="checarSenha()" class="form-control">
     </div>
     <div class="form-group">
      <div id="divcheck">

      </div>
     </div>

     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      <button type="submit" class="btn btn-primary" id="enviarSenha" disabled>Salvar</button>
     </div>

    </form>
   </div>

  </div>
 </div>
</div>


<script>
    $(document).ready(function () {
        $("#senhaNova").keyup(checkPasswordMatch);
        $("#confirmarSenha").keyup(checkPasswordMatch);
    });

    function checarSenha() {
        var password = $("#senhaNova").val();
        var confirmPassword = $("#confirmarSenha").val();

        if (password === '' || '' === confirmPassword) {
            $("#divcheck").html("<span style='color:red'> Campo de Senha Vazio!<span>");
            document.getElementById("enviarSenha").disabled = true;
        } else if (password !== confirmPassword) {
            $("#divcheck").html("<span style='color:red'> Senha não conferem!</span>");
            document.getElementById("enviarSenha").disabled = true;
        } else {
            $("#divcheck").html("<span style='color:green'> Senha conferem :)</span>");
            document.getElementById("enviarSenha").disabled = false;
        }
    }
</script>
