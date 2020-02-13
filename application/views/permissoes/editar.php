<!--
 * Criada em:13/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Permissao aos Usuarios da Classe Permissao
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
      <h2 class="card-title">Configuração de Permissões</h2>
      <h4 style="color:#00dccd;">Todos os tipo de permissões são configuradas aqui!</h4>
     </div>

     <div class="col-lg-12">
      <div class="card">
       <div class="card-body">

        <form action="<?= base_url('Permissoes/editando') ?>" method="post">
         <input type="hidden" id="idPermissao" name="idPermissao" style="border-color:#5282b2" value="<?= $permissoes[0]->idPermissao; ?>">
         <div class="card-chart"><h5 style="color:#dd4ecd">Edição da Função</h5></div>
         <div class="row">
          <div class="col-md-3">
           <div class="form-group">
            <label for="nomeFuncao" style="color:#ff8379;">Função:</label>
            <input style="border-color:#5282b2" type="text" id="nomeFuncao" name="nomeFuncao" value="<?= $permissoes[0]->nomeFuncao; ?>" class="form-control" placeholder="Nome do Serviço" required>
           </div>
          </div>
         </div>
         <div class="row">
          <div class="col-md-8">
           <div class="form-group">
            <label for="descricaoFuncao" style="color:#ff8379;">Descrição:</label>
            <input style="border-color:#5282b2" type="text" id="descricaoFuncao" name="descricaoFuncao" value="<?= $permissoes[0]->descricaoFuncao; ?>" class="form-control" placeholder="Descreva o Serviço" required>
           </div>  
          </div>
         </div>

         <div class="table-responsive">
          <div class="card-chart"><h5 style="color:#dd4ecd">Cadastrando Permissões</h5></div>
          <table class="table ">
           <tbody>

            <tr>
             <td>
              <div class="row">
               <div class="col-md-2">
                <label>Ver Cliente</label>
                <select style="border-color:#5282b2" id="vCliente" name="vCliente" class="browser-default custom-select custom-select-md mb-3">
                 <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->vCliente == 1 ? 'selected' : ''; ?>>Sim</option>
                 <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->vCliente == 0 ? 'selected' : ''; ?>>Não</option>

                </select>
               </div>
               <div class="col-md-2">
                <label>Cadastrar Cliente</label>
                <select style="border-color:#5282b2" id="cCliente" name="cCliente" class="browser-default custom-select custom-select-md mb-3">
                 <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->cCliente == 1 ? 'selected' : ''; ?>>Sim</option>
                 <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->cCliente == 0 ? 'selected' : ''; ?>>Não</option>
                </select>
               </div>
               <div class="col-md-2">
                <label>Editar Cliente</label>
                <select style="border-color:#5282b2" id="eCliente" name="eCliente" class="browser-default custom-select custom-select-md mb-3">
                 <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->eCliente == 1 ? 'selected' : ''; ?>>Sim</option>
                 <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->eCliente == 0 ? 'selected' : ''; ?>>Não</option>
                </select>
               </div>
               <div class="col-md-2">
                <label>Excluir Cliente</label>
                <select style="border-color:#5282b2" id="dCliente" name="dCliente" class="browser-default custom-select custom-select-md mb-3">
                 <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->dCliente == 1 ? 'selected' : ''; ?>>Sim</option>
                 <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->dCliente == 0 ? 'selected' : ''; ?>>Não</option>
                </select>
               </div>
              </div>
             </td>
            </tr>

           <hr>

           <tr>
            <td>
             <div class="row">
              <div class="col-md-2">
               <label>Ver Serviço</label>
               <select style="border-color:#5282b2" id="vServico" name="vServico" class="browser-default custom-select custom-select-md mb-3">
                <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->vServico == 1 ? 'selected' : ''; ?>>Sim</option>
                <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->vServico == 0 ? 'selected' : ''; ?>>Não</option>
               </select>
              </div>
              <div class="col-md-2">
               <label>Cadastrar Serviço</label>
               <select style="border-color:#5282b2" id="cServico" name="cServico" class="browser-default custom-select custom-select-md mb-3">
                <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->cServico == 1 ? 'selected' : ''; ?>>Sim</option>
                <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->cServico == 0 ? 'selected' : ''; ?>>Não</option>
               </select>
              </div>
              <div class="col-md-2">
               <label>Editar Serviço</label>
               <select style="border-color:#5282b2" id="eServico" name="eServico" class="browser-default custom-select custom-select-md mb-3">
                <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->eServico == 1 ? 'selected' : ''; ?>>Sim</option>
                <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->eServico == 0 ? 'selected' : ''; ?>>Não</option>
               </select>
              </div>
              <div class="col-md-2">
               <label>Excluir Serviço</label>
               <select style="border-color:#5282b2" id="dServico" name="dServico" class="browser-default custom-select custom-select-md mb-3">
                <option style="background-color:#00dccd; color:#000" value="1" <?= $permissoes[0]->dServico == 1 ? 'selected' : ''; ?>>Sim</option>
                <option style="background-color:#00dccd; color:#000" value="0" <?= $permissoes[0]->dServico == 0 ? 'selected' : ''; ?>>Não</option>
               </select>
              </div>
             </div>
            </td>
           </tr>




           </tbody>
          </table>

         </div>




















         <div class="row">
          <div class="card-footer">
           <button type="submit" class="btn btn-fill btn-success">Atualizar</button>
          </div>

          <!--          <div class="card-footer">
                     <input type="button" id="permissaoUsuario" name="permissaoUsuario" class="btn btn-fill btn-default" value="Permissões" data-toggle="modal" data-target="#permissoesModal">
                    </div>-->

          <div class="card-footer">
           <a href="<?= base_url('Permissoes') ?>" class="btn btn-primary btn-group">Voltar</a>
          </div>
         </div>
        </form>



        <!--        <div class="modal fade" id="permissoesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                  <div class="modal-content">
                   <div class="modal-header">
                    <h3 class="modal-title" style="color:#ff8379;" id="exampleModalLabel">Atualizar Permissões</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                   </div>
                   <div class="modal-body">
                    <form action="<!?= base_url('Permissoes/editandoPermissoes') ?>" method="post">
                     <input type="hidden" id="idPermissao" name="idPermissao" style="border-color:#5282b2" value="<!?= $permissoes[0]->idPermissao; ?>">
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
        
                     <div class="table-responsive">
                      <div class="card-chart"><h5 style="color:#dd4ecd">Edição das Permissões</h5></div>
                      <table class="table table-bordered">
                       <tbody>
                        <tr>
                         <td>
                          <label>
                           <input <!?php if(isset($permissoes['vCliente'])){ if($permissoes['vCliente'] == '1'){echo 'checked';}else{}}?> name="vCliente" class="marcar" type="checkbox" value="1" />
                           <span class="lbl" style="color:#000"> Visualizar Clientes</span>
                          </label>
                         </td>
                            <td>
                          <label>
                           <input name="aCliente" class="marcar" type="checkbox" value="0" />
                           <span class="lbl" style="color:#000"> Adicionar Clientes</span>
                          </label>
                         </td>
                         <td>
                          <label>
                           <input name="eCliente" class="marcar" type="checkbox" value="1" />
                           <span class="lbl" style="color:#000"> Editar Clientes</span>
                          </label>
                         </td>
                         <td>
                          <label>
                           <input name="dCliente" class="marcar" type="checkbox" value="1" />
                           <span class="lbl" style="color:#000"> Excluir Clientes</span>
                          </label>
                         </td>
                        </tr>
        
                        <tr>
        
                         <td>
                          <label>
                           <input <!?php if(isset($permissoes['vServico'])){ if($permissoes['vServico'] == '1'){echo 'checked';}else{}}?> name="vServico" class="marcar" type="checkbox" value="1" />
                           <span class="lbl" style="color:#000"> Visualizar Serviços</span>
                          </label>
                         </td>
        
                            <td>
                             <label>
                              <input name="aServico" class="marcar" type="checkbox" value="1" />
                              <span class="lbl" style="color:#000"> Adicionar Serviços</span>
                             </label>
                            </td>
        
                            <td>
                             <label>
                              <input name="eServico" class="marcar" type="checkbox" value="1" />
                              <span class="lbl" style="color:#000"> Editar Serviços</span>
                             </label>
                            </td>
        
                            <td>
                             <label>
                              <input name="dServico" class="marcar" type="checkbox" value="1" />
                              <span class="lbl" style="color:#000"> Excluir Serviços</span>
                             </label>
                            </td>
        
                        </tr>
        
                       </tbody>
        
                      </table>
                      <div class="modal-footer">
                       <a href="<!?= base_url('Permissoes/editando'); ?>" class="btn btn-success btn-group">Concluir</a>
                      </div>
                     </div>
        
        
                                  Modelo de Enviar por Java Script
                                  <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary" id="enviarSenha" disabled>Salvar</button>
                                  </div>
        
                    </form>
                   </div>
                  </div>
                 </div>
                </div>-->
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>