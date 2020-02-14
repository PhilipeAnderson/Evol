<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Listar da Classe Clientes
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
      <h2 class="card-title">Clientes Cadastrados</h2>
      <h4 style="color:#00dccd;">Todos os seus clientes aparecem aqui!</h4>
     </div>
      <div class="col-md-2">
      <a style="margin-top:25px" href="<?= base_url('Clientes/cadastrar/'); ?>" class="btn btn-primary btn-group">Novo Cliente</a>
      </div>
     </div>
    </div>
    <div class="card-body">
     <div class="row">
      <div class="col-md-12">
       <div class="table-responsive">
        <table class="table">
           <tr style="text-align:center; color:#00dccd">
           <th style="color:#ff8379;">ID</th> 
           <th style="color:#ff8379;">Razao Social
           <a href="<?= base_url('Clientes/ordemPorAlfabetica') ?>">
             <i style="color:#00ff00" class="fas fa-arrow-alt-circle-down"></i>
            </a>
            <a href="<?= base_url('Clientes')?>">
             <i style="color:yellow" class="fas fa-arrow-alt-circle-up"></i>
            </a>
           </th>
           <!--<th style="color:#ff8379;">Contato Da Empresa</th>-->
<!--           <th style="color:#ff8379;">Site Da Empresa</th>-->
           <th style="color:#ff8379;">Matrícula do Responsável</th>
           <th style="color:#ff8379;">Vendedor Responsável</th>
           <th style="color:#ff8379;">Unidade de Vendas</th>
           <th style="color:#ff8379;">Contrato</th>
           <th style="color:#ff8379;">Gerenciar Clientes</th>
           
           
          </tr>
          <?php foreach($clientes as $cli){ ?>
          <tr style="text-align:center; ">
           <td><?= $cli->idCliente; ?></td>
           <td><?= $cli->razaoSocial; ?></td>
           <td><?= $cli->matricula; ?></td>
           <td><?= $cli->responsavel;?></td>
           
           <td>
           <?= $cli->filial;
            if($cli->filial == 1){
                echo 'º Matriz | Curitiba';
            }else if($cli->filial == 2){
                echo 'º Unidade | Cascavel';
            }else if($cli->filial == 3){
                echo 'º Unidade | Goiânia';
            }else if($cli->filial == 4){
                echo 'º Unidade | Sorocaba';
            }else if($cli->filial == 5){
                echo 'º Unidade | São Paulo';
            }else{
                echo 'Unidade Indefinida';
            }
           ?></td>
           
           <td><?= $cli->situacaoDoContrato==0?'<i style="color:#FF5000" class="fa fa-times-circle"></i>':'<i style="color:#00FF00" class="fa fa-check-circle"></i>'; ?></td>
           <td>
            <a href="<?= base_url('Clientes/visualizar/'.$cli->idCliente); ?>" class="btn btn-primary btn-group"><i class="fa fa-eye"></i></a>
            
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