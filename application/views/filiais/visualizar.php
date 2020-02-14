<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Editar da Classe Filiais
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
      <h2 class="card-title">Visualizar Filiais</h2>
      <h4 style="color:#00dccd;">Visualize a Filial Selecionada!</h4>
     </div>
     <div class="card">
      <div class="card-body">
       <form>
        <input type="hidden" id="idFilial" name="idFilial" value="<?= $filial[0]->idFilial; ?>">

        <div class="card-chart"><h5 style="color:#dd4ecd">Registro das Filiais</h5></div>
        <div class="row">
         <div class="col-md-2">
          <div class="form-group">
           <label for="nomeFilial" style="color:#ff8379;">Nome da Filial:</label>
           <input style="color:orange; border-color:#5282b2" type="text" id="nomeFilial" name="nomeFilial" value="<?= $filial[0]->nomeFilial ?>" class="form-control" placeholder="Insira o nome da Nova Filial" disabled>
          </div>
         </div>
        

        <div class="col-md-3">
         <label for="estadoFilial" style="color:#ff8379;">Estado da Filial:</label>
         <select style="color:orange; border-color:#5282b2" id="estadoFilial" name="estadoFilial" class="browser-default custom-select custom-select-md mb-3" disabled>
          <option style="background-color:#00dccd; color:#000" value="1" <?= $filial[0]->estadoFilial==1?'selected':''; ?>>AC</option>
          <option style="background-color:#00dccd; color:#000" value="2" <?= $filial[0]->estadoFilial==2?'selected':''; ?>>AL</option>
          <option style="background-color:#00dccd; color:#000" value="3" <?= $filial[0]->estadoFilial==3?'selected':''; ?>>AP</option>
          <option style="background-color:#00dccd; color:#000" value="4" <?= $filial[0]->estadoFilial==4?'selected':''; ?>>AM</option>
          <option style="background-color:#00dccd; color:#000" value="5" <?= $filial[0]->estadoFilial==5?'selected':''; ?>>BH</option>
          <option style="background-color:#00dccd; color:#000" value="6" <?= $filial[0]->estadoFilial==6?'selected':''; ?>>CE</option>
          <option style="background-color:#00dccd; color:#000" value="7" <?= $filial[0]->estadoFilial==7?'selected':''; ?>>DF</option>
          <option style="background-color:#00dccd; color:#000" value="8" <?= $filial[0]->estadoFilial==8?'selected':''; ?>>ES</option>
          <option style="background-color:#00dccd; color:#000" value="9" <?= $filial[0]->estadoFilial==9?'selected':''; ?>>GO</option>
          <option style="background-color:#00dccd; color:#000" value="10" <?= $filial[0]->estadoFilial==10?'selected':''; ?>>MA</option>
          <option style="background-color:#00dccd; color:#000" value="11" <?= $filial[0]->estadoFilial==11?'selected':''; ?>>MT</option>
          <option style="background-color:#00dccd; color:#000" value="12" <?= $filial[0]->estadoFilial==12?'selected':''; ?>>MS</option>
          <option style="background-color:#00dccd; color:#000" value="13" <?= $filial[0]->estadoFilial==13?'selected':''; ?>>MG</option>
          <option style="background-color:#00dccd; color:#000" value="14" <?= $filial[0]->estadoFilial==14?'selected':''; ?>>PA</option>
          <option style="background-color:#00dccd; color:#000" value="15" <?= $filial[0]->estadoFilial==15?'selected':''; ?>>PB</option>
          <option style="background-color:#00dccd; color:#000" value="16" <?= $filial[0]->estadoFilial==16?'selected':''; ?>>PR</option>
          <option style="background-color:#00dccd; color:#000" value="17" <?= $filial[0]->estadoFilial==17?'selected':''; ?>>PE</option>
          <option style="background-color:#00dccd; color:#000" value="18" <?= $filial[0]->estadoFilial==18?'selected':''; ?>>PI</option>
          <option style="background-color:#00dccd; color:#000" value="19" <?= $filial[0]->estadoFilial==19?'selected':''; ?>>RJ</option>
          <option style="background-color:#00dccd; color:#000" value="20" <?= $filial[0]->estadoFilial==20?'selected':''; ?>>RN</option>
          <option style="background-color:#00dccd; color:#000" value="21" <?= $filial[0]->estadoFilial==21?'selected':''; ?>>RS</option>
          <option style="background-color:#00dccd; color:#000" value="22" <?= $filial[0]->estadoFilial==22?'selected':''; ?>>RO</option>
          <option style="background-color:#00dccd; color:#000" value="23" <?= $filial[0]->estadoFilial==23?'selected':''; ?>>RR</option>
          <option style="background-color:#00dccd; color:#000" value="24" <?= $filial[0]->estadoFilial==24?'selected':''; ?>>SC</option>
          <option style="background-color:#00dccd; color:#000" value="25" <?= $filial[0]->estadoFilial==25?'selected':''; ?>>SP</option>
          <option style="background-color:#00dccd; color:#000" value="26" <?= $filial[0]->estadoFilial==26?'selected':''; ?>>SE</option>
          <option style="background-color:#00dccd; color:#000" value="27" <?= $filial[0]->estadoFilial==27?'selected':''; ?>>TO</option>

         </select>
        </div>
         </div>



        <div class="row">
         <div class="col-md-8">
          <div class="form-group">
           <label for="descricaoFilial" style="color:#ff8379;">Descrição Filial:</label>
           <input style="color:orange; border-color:#5282b2" type="text" id="descricaoFilial" name="descricaoFilial" value="<?= $filial[0]->descricaoFilial ?>" class="form-control" placeholder="Descreva o Serviço" disabled>
          </div>  
         </div>
        </div>
        
        <hr>

        <div class="row">
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
