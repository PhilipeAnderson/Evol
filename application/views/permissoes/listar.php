<!--
 * Criada em:13/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Permissão aos Usuários da Classe Permissões
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
       <h2 class="card-title">Configuração de Permissões</h2>
       <h4 style="color:#00dccd;">Todos os tipo de permissões são configuradas aqui!</h4>
      </div>
     <div class="col-md-2">
      <a style="margin-top:25px" href="<?= base_url('Permissoes/cadastrar'); ?>" class="btn btn-primary btn-group">Nova Função</a>
      </div>
    </div>
     
    <div class="card-body">
     <div class="row">
      <div class="col-md-12">
       <div class="table-responsive">
        <table class="table">
           <tr style="text-align:center; color:#00dccd">
           <!--<th style="color:#ff8379;">Nível Usuário</th>--> 
           <th style="color:#ff8379;">Função</th>
           <!--<th style="color:#ff8379;">Descrição da Função</th>-->
           <th style="color:#ff8379;">Ver Cliente</th>
           <th style="color:#ff8379;">Cadast Cliente</th>
           <th style="color:#ff8379;">Editar Cliente</th>
           <th style="color:#ff8379;">Excluir Cliente</th>
           <th style="color:#ff8379;">Ver Serviço</th>
           <th style="color:#ff8379;">Cadast Serviço</th>
           <th style="color:#ff8379;">Editar Serviço</th>
           <th style="color:#ff8379;">Excluir Serviço</th>
           <th style="color:#ff8379;">Gerenciar</th>
           
          </tr>
          <?php foreach($permissoes as $per){ ?>
          <tr style="text-align:center; ">
           <!--<td><!?= $per->idPermissao; ?></td> !importante o IdPermissao é como nivelUsusario (foreignKey)-->
           <td><?= $per->nomeFuncao; ?></td>
           <!--<td><!?= $per->descricaoFuncao; ?></td>-->
           <td><?= $per->vCliente==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->cCliente==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->eCliente==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->dCliente==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->vServico==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->cServico==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->eServico==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td><?= $per->dServico==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td>
            <a href="<?= base_url('Permissoes/editar/'.$per->idPermissao); ?>" class="btn btn-success btn-group"><i class="fa fa-pen"></i></a>
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
</div>