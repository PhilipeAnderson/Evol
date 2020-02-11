<!--
 * Criada em:11/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Editar da Classe Clientes
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
       <h2 class="card-title">Atualização de Dados Dos Clientes</h2>
       <h4 style="color:#00dccd;">Todos os dados preenchidos são de responsabilidade do Vendedor, mantenha os dados ATUALIZADOS!</h4>
      </div>
      <div class="card">
       <div class="card-body">
        <form action="<?= base_url('Clientes/editando') ?>" method="post">
         <input type="hidden" id="idCliente" name="idCliente" style="border-color:#5282b2" value="<?= $cliente[0]->idCliente; ?>">
         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Empresarias do Fisco</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="razaoSocial" style="color:#ff8379;">Razao Social:</label>
            <input type="text" id="razaoSocial" name="razaoSocial" style="border-color:#5282b2" value="<?= $cliente[0]->razaoSocial; ?>" class="form-control" placeholder="Preencha o nome completo da Razao Social">
           </div> </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="cnpj" style="color:#ff8379;">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj" style="border-color:#5282b2" value="<?= $cliente[0]->cnpj; ?>" class="form-control" placeholder="Preencha sem pontos e sem a barra! ex:1234567890001">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="nomeFantasia" style="color:#ff8379;">Nome Fantasia:</label>
            <input type="text" id="nomeFantasia" name="nomeFantasia" style="border-color:#5282b2" value="<?= $cliente[0]->nomeFantasia; ?>" class="form-control" placeholder="Preencha o Nome Completo do Cliente">
           </div>  
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Do Contato da Empresa</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="contatoDaEmpresa" style="color:#ff8379;">Contato Da Empresa:</label>
            <input type="text" id="contatoDaEmpresa" name="contatoDaEmpresa" style="border-color:#5282b2" value="<?= $cliente[0]->contatoDaEmpresa; ?>" class="form-control" placeholder="Nome do Contato Responsável da Empresa">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="telefoneDoContato" style="color:#ff8379;">Telefone Do Contato:</label>
            <input type="text" id="telefoneDoContato" name="telefoneDoContato" style="border-color:#5282b2" value="<?= $cliente[0]->telefoneDoContato; ?>" class="form-control" placeholder="Telefone do Contato Responsável da Empresa">
           </div>  
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="emailDoContato" style="color:#ff8379;">Email Do Contato:</label>
            <input type="text" id="emailDoContato" name="emailDoContato" style="border-color:#5282b2" value="<?= $cliente[0]->emailDoContato; ?>" class="form-control" placeholder="Email do Contato Responsável da Empresa">
           </div> 
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados Genéricos da Empresa</h5></div>
         <div class="row">
          <div class="col-md-4">
           <div class="form-group">
            <label for="telefone" style="color:#ff8379;">Telefone:</label>
            <input type="text" id="telefone" name="telefone" style="border-color:#5282b2" value="<?= $cliente[0]->telefone; ?>" class="form-control" placeholder="Preencha o Número do Telefone Principal da Empresa">
           </div> 
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="site" style="color:#ff8379;">Site:</label>
            <input type="text" id="site" name="site" style="border-color:#5282b2" value="<?= $cliente[0]->site; ?>" class="form-control" placeholder="Se Houver um Celular ou Telefone Fixa de Contato da Empresa">
           </div>
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="email" style="color:#ff8379;">Email:</label>
            <input type="text" id="email" name="email" style="border-color:#5282b2" value="<?= $cliente[0]->email; ?>" class="form-control" placeholder="Se Houver um Endereço de Email da Empresa">
           </div> 
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Endereço da Empresa</h5></div>
         <div class="row">
          <div class="col-md-2">
           <div class="form-group">
            <label for="cep" style="color:#ff8379;">CEP:</label>
            <input type="text" id="cep" name="cep" style="border-color:#5282b2" value="<?= $cliente[0]->cep; ?>" class="form-control" placeholder="Sem espaços ou traços">
           </div>
          </div>

          <div class="col-md-3">
           <div class="form-group">
            <label for="rua" style="color:#ff8379;">Rua:</label>
            <input type="text" id="rua" name="rua" style="border-color:#5282b2" value="<?= $cliente[0]->rua; ?>" class="form-control" placeholder="Cadastre a Rua do Cliente">
           </div>
          </div>

          <div class="col-md-1">
           <div class="form-group">
            <label for="numero" style="color:#ff8379;">Número:</label>
            <input type="text" id="numero" name="numero" style="border-color:#5282b2" value="<?= $cliente[0]->numero; ?>" class="form-control" placeholder="Numero da Fachada">
           </div>
          </div>

          <div class="col-md-2">
           <div class="form-group">
            <label for="bairro" style="color:#ff8379;">Bairro:</label>
            <input type="text" id="bairro" name="bairro" style="border-color:#5282b2" value="<?= $cliente[0]->bairro; ?>" class="form-control" placeholder="Bairro da Empresa">
           </div>
          </div>

          <div class="col-md-2">
           <div class="form-group">
            <label for="cidade" style="color:#ff8379;">Cidade:</label>
            <input type="text" id="cidade" name="cidade" style="border-color:#5282b2" value="<?= $cliente[0]->cidade; ?>" class="form-control" placeholder="Cidade da Empresa">
           </div>
          </div>

          <div class="col-md-2">
           <label for="estado" style="color:#ff8379;">Estado:</label>
           <select style="border-color:#5282b2" id="estado" name="estado" class="browser-default custom-select custom-select-md mb-3">
            <option style="background-color:#00dccd; color:#000" value="1" <?= $cliente[0]->estado==1?'selected':''; ?>>AC</option>
            <option style="background-color:#00dccd; color:#000" value="2" <?= $cliente[0]->estado==2?'selected':''; ?>>AL</option>
            <option style="background-color:#00dccd; color:#000" value="3" <?= $cliente[0]->estado==3?'selected':''; ?>>AP</option>
            <option style="background-color:#00dccd; color:#000" value="4" <?= $cliente[0]->estado==4?'selected':''; ?>>AM</option>
            <option style="background-color:#00dccd; color:#000" value="5" <?= $cliente[0]->estado==5?'selected':''; ?>>BA</option>
            <option style="background-color:#00dccd; color:#000" value="6" <?= $cliente[0]->estado==6?'selected':''; ?>>CE</option>
            <option style="background-color:#00dccd; color:#000" value="7" <?= $cliente[0]->estado==7?'selected':''; ?>>DF</option>
            <option style="background-color:#00dccd; color:#000" value="8" <?= $cliente[0]->estado==8?'selected':''; ?>>ES</option>
            <option style="background-color:#00dccd; color:#000" value="9" <?= $cliente[0]->estado==9?'selected':''; ?>>GO</option>
            <option style="background-color:#00dccd; color:#000" value="10" <?= $cliente[0]->estado==10?'selected':''; ?>>MA</option>
            <option style="background-color:#00dccd; color:#000" value="11" <?= $cliente[0]->estado==11?'selected':''; ?>>MT</option>
            <option style="background-color:#00dccd; color:#000" value="12" <?= $cliente[0]->estado==12?'selected':''; ?>>MS</option>
            <option style="background-color:#00dccd; color:#000" value="13" <?= $cliente[0]->estado==13?'selected':''; ?>>MG</option>
            <option style="background-color:#00dccd; color:#000" value="14" <?= $cliente[0]->estado==14?'selected':''; ?>>PA</option>
            <option style="background-color:#00dccd; color:#000" value="15" <?= $cliente[0]->estado==15?'selected':''; ?>>PB</option>
            <option style="background-color:#00dccd; color:#000" value="16" <?= $cliente[0]->estado==16?'selected':''; ?>>PR</option>
            <option style="background-color:#00dccd; color:#000" value="17" <?= $cliente[0]->estado==17?'selected':''; ?>>PE</option>
            <option style="background-color:#00dccd; color:#000" value="18" <?= $cliente[0]->estado==18?'selected':''; ?>>PI</option>
            <option style="background-color:#00dccd; color:#000" value="19" <?= $cliente[0]->estado==19?'selected':''; ?>>RJ</option>
            <option style="background-color:#00dccd; color:#000" value="20" <?= $cliente[0]->estado==20?'selected':''; ?>>RN</option>
            <option style="background-color:#00dccd; color:#000" value="21" <?= $cliente[0]->estado==21?'selected':''; ?>>RS</option>
            <option style="background-color:#00dccd; color:#000" value="22" <?= $cliente[0]->estado==22?'selected':''; ?>>RO</option>
            <option style="background-color:#00dccd; color:#000" value="23" <?= $cliente[0]->estado==23?'selected':''; ?>>RR</option>
            <option style="background-color:#00dccd; color:#000" value="24" <?= $cliente[0]->estado==24?'selected':''; ?>>SC</option>
            <option style="background-color:#00dccd; color:#000" value="25" <?= $cliente[0]->estado==25?'selected':''; ?>>SP</option>
            <option style="background-color:#00dccd; color:#000" value="26" <?= $cliente[0]->estado==26?'selected':''; ?>>SE</option>
            <option style="background-color:#00dccd; color:#000" value="27" <?= $cliente[0]->estado==27?'selected':''; ?>>TO</option>
            
           </select>
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Dados do Vendedor Responsável</h5></div>
         <div class="row">
          <div class="col-md-2">
           <div class="form-group">
            <label for="matricula" style="color:#ff8379;">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" style="color:orange; border-color:#5282b2" value="<?= $cliente[0]->matricula; ?>" class="form-control" disabled="">
           </div>
          </div>

          <div class="col-md-6">
           <div class="form-group">
            <label for="responsavel" style="color:#ff8379;">Responsável:</label>
            <input type="text" id="responsavel" name="responsavel" style="color:orange; border-color:#5282b2" value="<?= $cliente[0]->responsavel; ?>" class="form-control" disabled="">
           </div> 
          </div>

          <div class="col-md-4">
           <div class="form-group">
            <label for="filial" style="color:#ff8379;">Unidade:</label>
            <input type="text" id="filial" name="filial" style="color:orange; border-color:#5282b2"  value="<?= $cliente[0]->filial; 
            if($cliente[0]->filial == 1){
                echo "º Matriz | Curitiba";
            }else if($cliente[0]->filial == 2){
                echo "º Unidade | Cascavel";
            }else if($cliente[0]->filial == 3){
                echo "º Unidade | Goiânia";
            }else if($cliente[0]->filial == 4){
                echo "º Unidade | Sorocaba";
            }else{
                echo "º Unidade | São Paulo";
            }
            ?>" class="form-control" disabled="">
           </div>
          </div>
         </div>
         <hr>

         <div class="card-chart"><h5 style="color:#dd4ecd">Status do Contrato</h5></div>
         <div class="row">
          <div class="col-md-4">
           <label for="situacaoDoContrato" style="color:#ff8379;">Contrato?</label>
           <select style="border-color:#5282b2" id="situacaoDoContrato" name="situacaoDoContrato" class="browser-default custom-select custom-select-md mb-3">
            <option style="background-color:#00dccd; color:#000" value="0" <?= $cliente[0]->situacaoDoContrato==0?'selected':''; ?>>NÃO, POSSUÍ CONTRATO!</option>
            <option style="background-color:#00dccd; color:#000" value="1" <?= $cliente[0]->situacaoDoContrato==1?'selected':''; ?>>SIM, POSSUÍ CONTRATO!</option>
           </select>
          </div>
         </div>
         <div class="row">
         <div class="card-footer">
          <button type="submit" class="btn btn-fill btn-success">Atualizar</button>
         </div>
          <div class="card-footer">
          <a href="<?= base_url('Clientes')?>" class="btn btn-primary btn-group">Voltar</a>
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