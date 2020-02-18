<!--
 * Criada em:17/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Editar da Classe Serviços
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
      <h2 class="card-title">Atualizar Serviços</h2>
      <h4 style="color:#00dccd;">Mantenha sempre os dados atualizados!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form action="<?= base_url('Servicos/editando') ?>" method="post">
        <input type="hidden" id="idServico" name="idServico" value="<?= $servico[0]->idServico; ?>">

        <div class="card-chart"><h5 style="color:#dd4ecd">Registro dos Serviços</h5></div>
        <div class="row">
         <div class="col-md-2">
          <div class="form-group">
           <label for="codigoServico" style="color:#ff8379;">Cod. do Serviço:</label>
           <input style="color:orange; border-color:#5282b2" type="text" id="codigoServico" name="codigoServico" value="<?= $servico[0]->codigoServico ?>" class="form-control" disabled>
          </div>
         </div>
        </div>

        <div class="row">
         <div class="col-md-3">
          <div class="form-group">
           <label for="nomeServico" style="color:#ff8379;">Serviço:</label>
           <input style="color:orange; border-color:#5282b2" type="text" id="nomeServico" name="nomeServico" value="<?= $servico[0]->nomeServico ?>" class="form-control" placeholder="Nome do Serviço" disabled>
          </div>
         </div>

         <div class="col-md-3">
          <label for="categoriaServico" style="color:#ff8379;">Categoria:</label>
          <select style="color:orange; border-color:#5282b2" id="categoriaServico" name="categoriaServico" class="form-control" disabled>
           <option style="background-color:#00dccd; color:#000" value="1" <?= $servico[0]->categoriaServico == 1 ? 'selected' : ''; ?>>Administrativo</option>
           <option style="background-color:#00dccd; color:#000" value="2" <?= $servico[0]->categoriaServico == 2 ? 'selected' : ''; ?>>Jurídico</option>
           <option style="background-color:#00dccd; color:#000" value="3" <?= $servico[0]->categoriaServico == 3 ? 'selected' : ''; ?>>Administrativo/Jurídico</option>
          </select>
         </div>

        </div>

        <div class="row">
         <div class="col-md-8">
          <div class="form-group">
           <label for="descricaoServico" style="color:#ff8379;">Descrição:</label>
           <input style="color:orange; border-color:#5282b2" type="text" id="descricaoServico" name="descricaoServico" value="<?= $servico[0]->descricaoServico ?>" class="form-control" placeholder="Descreva o Serviço" disabled>
          </div>  
         </div>
        </div>
        <hr>

        <div class="row">
         <div class="card-footer">
          <a href="<?= base_url('Servicos') ?>" class="btn btn-primary btn-group">Voltar</a>
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
