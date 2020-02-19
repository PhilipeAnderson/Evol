<!DOCTYPE html>

<!--
 * Criada em:13/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Listar da Classe Serviços
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
      <h2 class="card-title">Serviços Cadastrados</h2>
      <h4 style="color:#00dccd;">Todos os Nossos Serviços aparecem aqui!</h4>
     </div>
       
      <div class="col-md-2">
      <a style="margin-top:25px" href="<?= base_url('Servicos/cadastrar/'); ?>" class="btn btn-primary btn-group">Novo Serviço</a>
      </div>
     </div>
    </div>
    <div class="card-body">
     <div class="row">
      <div class="col-md-12">
       <div class="table-responsive">
        <table class="table">
          <tr style="text-align:center">
           <th style="color:#ff8379;">Código</th>
           <th style="color:#ff8379;">Serviço</th>
           <th style="color:#ff8379;">Categoria 
            <a href="<?= base_url('Servicos/ordemPorCategoria') ?>">
             <i style="color:#00ff00" class="fas fa-arrow-alt-circle-down"></i>
            </a>
            <a href="<?= base_url('Servicos')?>">
             <i style="color:yellow" class="fas fa-arrow-alt-circle-up"></i>
            </a>
           </th>
           <th style="color:#ff8379;">Descrição</th>
           <th style="color:#ff8379;">Gerenciar Serviços</th>
          </tr>
          
          <?php foreach($servicos as $ser){ ?>
          <tr style="text-align:center; ">
           <td><?= $ser->codigoServico; ?></td>
           <td><?= $ser->nomeServico; ?></td>
           <td><?= $ser->categoriaServico;
           if($ser->categoriaServico == 1){
               echo "º Nível <br> Administrativo";
           }else if($ser->categoriaServico == 2){
               echo "º Nível <br> Jurídico";
           }else{
               echo "º Nível <br> Administrativo/Jurídico";
           }
            
           
           ?></td>
           <td><?= $ser->descricaoServico; ?></td>
           <td>
            <a href="<?= base_url('Servicos/visualizar/'.$ser->idServico); ?>" class="btn btn-primary btn-group"><i class="fa fa-eye"></i></a>
            <!--<a href="<!?= base_url('Servicos/editar/'.$ser->idServico); ?>" class="btn btn-success btn-group"><i class="fa fa-pen"></i></a>-->
            <!--<a href="<!?= base_url('Servicos/excluir/'.$ser->idServico); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente EXCLUIR este serviço?')"><i class="fa fa-trash"></i></a>-->
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