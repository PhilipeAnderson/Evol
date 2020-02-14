<!--
 * Criada em:09/02/2020
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
     <div class="row">
     <div class="col-sm-10 text-left">
      <h2 class="card-title">Usuários Cadastrados</h2>
      <h4 style="color:#00dccd;">Todos os usuários aparecem aqui!</h4>
     </div>
     <div class="col-md-2">
      <a style="margin-top:25px" href="<?= base_url('Usuarios/cadastrar/'); ?>" class="btn btn-primary btn-group">Novo Usuário</a>
      </div>
     </div>
    </div>
    <div class="card-body">
     <div class="row">
      <div class="col-md-12">
       <div class="table-responsive">
        <table class="table">
          <tr style="text-align:center; color:#00dccd">
           <th style="color:#ff8379;">Matrícula</th>
           <th style="color:#ff8379;">Nome
           <a href="<?= base_url('Usuarios/ordemPorAlfabetica') ?>">
             <i style="color:#00ff00" class="fas fa-arrow-alt-circle-down"></i>
            </a>
            <a href="<?= base_url('Usuarios')?>">
             <i style="color:yellow" class="fas fa-arrow-alt-circle-up"></i>
            </a>
           </th>
           <th style="color:#ff8379;">Email</th>
           <th style="color:#ff8379;">Celular</th>
           <th style="color:#ff8379;">Filial</th>
           <th style="color:#ff8379;">Função
           <a href="<?= base_url('Usuarios/ordemPorNivel') ?>">
             <i style="color:#00ff00" class="fas fa-arrow-alt-circle-down"></i>
            </a>
            <a href="<?= base_url('Usuarios')?>">
             <i style="color:yellow" class="fas fa-arrow-alt-circle-up"></i>
            </a>
           </th>
           <th style="color:#ff8379;">Situação</th>
           <th style="color:#ff8379;">Gerenciar Usuários</th>
           
           
          </tr>
          <?php foreach($usuarios as $usu){ ?>
          <tr style="text-align:center; ">
           <td><?= $usu->matriculaUsuario; ?></td>
           <td><?= $usu->nomeUsuario; ?></td>
           <td><?= $usu->emailUsuario; ?></td>
           <td><?= $usu->celularUsuario; ?></td>
           <td><?= $usu->nomeFilial; ?></td>          
           <td><?= $usu->nomeFuncao; ?></td>
           <td><?= $usu->situacaoUsuario==0?'<i style="color:#00FF00" class="fa fa-check-circle"></i>':'<i style="color:#FF5000" class="fa fa-times-circle"></i>'; ?></td>
           <td>
            <a href="<?= base_url('Usuarios/editar/'.$usu->idUsuario); ?>" class="btn btn-success btn-group"><i class="fa fa-pen"></i></a>
            <a href="<?= base_url('Usuarios/excluir/'.$usu->idUsuario); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente EXCLUIR este usuário?')"><i class="fa fa-trash"></i></a>
           </td>
          </tr>
          <?php } ?>
        </table>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>