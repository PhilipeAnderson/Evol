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
     <div class="row">
      <div class="col-sm-10 text-left">
       <h2 class="card-title">Matriz e Filiais</h2>
       <h4 style="color:#00dccd;">Todas as Filiais e a nossa Matriz estão nesta lista!</h4>
      </div>
      <div class="col-md-2">
       <a style="margin-top:25px" href="<?= base_url('Filiais/cadastrar'); ?>" class="btn btn-primary btn-group">Nova Filial</a>
      </div>
     </div>

     <div class="card-body">
      <div class="row">
       <div class="col-md-12">
        <div class="table-responsive">
         <table class="table">
          <tr style="text-align:center; color:#00dccd">
           <!--<th style="color:#ff8379;">ID</th>-->
           <th style="color:#ff8379;">Cidade</th>
           <th style="color:#ff8379;">Estado</th>
           <th style="color:#ff8379;">Descrição</th>
           <th style="color:#ff8379;">Gerenciar</th>
          </tr>

          <?php foreach ($filial as $fil) { ?>
              <tr style="text-align:center; " >
               <!--<td><!?= $fil->idFilial; ?></td>-->
              <td><?= $fil->nomeFilial; ?></td>
              <td><?= $fil->estadoFilial;
               if($fil->estadoFilial == 1){
                   echo "AC";
               }else if($fil->estadoFilial == 2){
                   echo "AL";
               }else if($fil->estadoFilial == 3){
                   echo "AP";
               }else if($fil->estadoFilial == 4){
                   echo "AM";
               }else if($fil->estadoFilial == 5){
                   echo "BH";
               }else if($fil->estadoFilial == 6){
                   echo "CE";
               }else if($fil->estadoFilial == 7){
                   echo "DF";
               }else if($fil->estadoFilial == 8){
                   echo "ES";
               }else if($fil->estadoFilial == 9){
                   echo "GO";
               }else if($fil->estadoFilial == 10){
                   echo "MA";
               }else if($fil->estadoFilial == 11){
                   echo "MT";
               }else if($fil->estadoFilial == 12){
                   echo "MS";
               }else if($fil->estadoFilial == 13){
                   echo "MG";
               }else if($fil->estadoFilial == 14){
                   echo "PA";
               }else if($fil->estadoFilial == 15){
                   echo "PB";
               }else if($fil->estadoFilial == 16){
                   echo "PR";
               }else if($fil->estadoFilial == 17){
                   echo "PE";
               }else if($fil->estadoFilial == 18){
                   echo "PI";
               }else if($fil->estadoFilial == 19){
                   echo "RJ";
               }else if($fil->estadoFilial == 20){
                   echo "RN";
               }else if($fil->estadoFilial == 21){
                   echo "RS";
               }else if($fil->estadoFilial == 22){
                   echo "RO";
               }else if($fil->estadoFilial == 23){
                   echo "RR";
               }else if($fil->estadoFilial == 24){
                   echo "SC";
               }else if($fil->estadoFilial == 25){
                   echo "SP";
               }else if($fil->estadoFilial == 26){
                   echo "SE";
               }else if($fil->estadoFilial == 27){
                   echo "TO";
               }
               
               ?></td>
               <td><?= $fil->descricaoFilial; ?></td>
               <td>
                <!--<a href="<?= base_url('Filiais/visualizar/'.$fil->idFilial); ?>" class="btn btn-primary btn-group"><i class="fa fa-eye"></i></a>-->
                <a href="<?= base_url('Filiais/editar/'.$fil->idFilial); ?>" class="btn btn-success btn-group"><i class="fa fa-pen"></i></a>
                <a href="<?= base_url('Filiais/excluir/'.$fil->idFilial); ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente EXCLUIR esta Filial?')"><i class="fa fa-trash"></i></a>
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
