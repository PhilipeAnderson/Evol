<!--
 * Criada em:08/02/2020
 *
 * Descricao:
 * Página criada para o conteúdo de Cadastrar da Classe Usuários
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
                  <div class="col-sm-6 text-left">
                    <h5 class="card-category">Total De Vendas</h5>
                    <h2 class="card-title">Metas dos Setores</h2>
                  </div>
                  <div class="col-sm-6">
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                      <label class="btn btn-sm btn-primary btn-simple active" id="0">
                        <input type="radio" name="options" checked>
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Vendas</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-single-02"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="1">
                        <input type="radio" class="d-none d-sm-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Técnicos</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-gift-2"></i>
                        </span>
                      </label>
                      <label class="btn btn-sm btn-primary btn-simple" id="2">
                        <input type="radio" class="d-none" name="options">
                        <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Novos Clientes</span>
                        <span class="d-block d-sm-none">
                          <i class="tim-icons icon-tap-02"></i>
                        </span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartBig1"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-primary">
                      <i class="fa fa-flag"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Último Mês</p>
                      <h3 class="card-title">150.000,00</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-refresh-01"></i> Fevereiro
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-primary">
                      <i class="fa fa-exclamation"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Pendências</p>
                      <h3 class="card-title">8</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-sound-wave"></i> Atualizar
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-success">
                      <i class="fa fa-flag"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Mês Atual</p>
                      <h3 class="card-title">112.000,00</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-trophy"></i> Março
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="card card-stats">
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <div class="info-icon text-center icon-success">
                      <i class="fa fa-exclamation"></i>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="numbers">
                      <p class="card-category">Pendências</p>
                      <h3 class="card-title">12</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="stats">
                  <i class="tim-icons icon-watch-time"></i>Atualizar
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Total de Vendas</h5>
                <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> 763,215</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLinePurple"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Minha Comissão</h5>
                <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> 3,500€</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="CountryChart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Clientes Visitados</h5>
                <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> 12,100K</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="chartLineGreen"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="card card-tasks">
              <div class="card-header">
                <h6 class="title d-inline">Tarefas(5)</h6>
                <p class="card-category d-inline">Hoje</p>
                <div class="dropdown">
                  <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                    <i class="tim-icons icon-settings-gear-63"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#pablo">Ações</a>
                    <a class="dropdown-item" href="#pablo">Direcionar</a>
                    <a class="dropdown-item" href="#pablo">Remover Dados</a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-full-width table-responsive">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Update the Documentation</p>
                          <p class="text-muted">Dwuamish Head, Seattle, WA 8:47 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">GDPR Compliance</p>
                          <p class="text-muted">The GDPR is a regulation that requires businesses to protect the personal data and privacy of Europe citizens for transactions that occur within EU member states.</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Solve the issues</p>
                          <p class="text-muted">Fifty percent of all respondents said they would be more likely to shop at a company </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Release v2.0.0</p>
                          <p class="text-muted">Ra Ave SW, Seattle, WA 98116, SUA 11:19 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Export the processed files</p>
                          <p class="text-muted">The report also shows that consumers will not easily forgive a company once a breach exposing their personal data occurs. </p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="">
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                            </label>
                          </div>
                        </td>
                        <td>
                          <p class="title">Arival at export process</p>
                          <p class="text-muted">Capitol Hill, Seattle, WA 12:34 AM</p>
                        </td>
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-link" data-original-title="Edit Task">
                            <i class="tim-icons icon-pencil"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card">
              <div class="card-header">
                <div class="tools float-right">
                  <div class="dropdown">
                    <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown">
                      <i class="tim-icons icon-settings-gear-63"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#pablo">Ações</a>
                      <a class="dropdown-item" href="#pablo">Compartilhar</a>
                      <a class="dropdown-item" href="#pablo">Enviar por Email</a>
                      <a class="dropdown-item text-danger" href="#pablo">Remover Dados</a>
                    </div>
                  </div>
                </div>
                <h5 class="card-title">Metas Dos Campeões</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th class="text-center">
                          Matricula
                        </th>
                        <th>
                          Nome
                        </th>
                        <th>
                          Cargo
                        </th>
                        <th>
                          Meta
                        </th>
                        <th class="text-right">
                          Comissão
                        </th>
                        <th class="text-right">
                          Ação
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Tania Michelangelo
                        </td>
                        <td>
                          Vendas
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">94%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 94%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 99,225
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Fabricio Vilas Boas
                        </td>
                        <td>
                          Vendas
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">89%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 89,241
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Alexandra Riviera
                        </td>
                        <td>
                          Técnica
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">81%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 92,144
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-icon btn-sm btn-neutral" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Janaína Rodrigues
                        </td>
                        <td>
                          Marketing
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">75%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 49,990
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Paulo Dimas
                        </td>
                        <td>
                          Vendas
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">67%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 69,201
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm  btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">
                          <div class="photo">
                            <img src="<?= base_url() ?>assets/img/fotodeperfil.jpg" alt="photo">
                          </div>
                        </td>
                        <td>
                          Manuela Rico
                        </td>
                        <td>
                          Gerente
                        </td>
                        <td class="text-center">
                          <div class="progress-container progress-sm">
                            <div class="progress">
                              <span class="progress-value">66%</span>
                              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;"></div>
                            </div>
                          </div>
                        </td>
                        <td class="text-right">
                          € 99,201
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" class="btn btn-success btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Refresh">
                            <i class="tim-icons icon-refresh-01"></i>
                          </button>
                          <button type="button" rel="tooltip" class="btn btn-danger btn-link btn-sm btn-icon" data-original-title="Tooltip on top" title="Delete">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Acompanhe as Vendas a Nível Nacional</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                               <img src="<?= base_url() ?>/assets/img/bandeiras/curitiba.png" width="40px" alt="flag">
                              </div>
                            </td>
                            <td>Curitiba</td>
                            <td class="text-right">
                              2.920
                            </td>
                            <td class="text-right">
                              53.23%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="<?= base_url() ?>/assets/img/bandeiras/sorocaba.png" width="40px" alt="flag">
                              </div>
                            </td>
                            <td>Sorocaba</td>
                            <td class="text-right">
                              1.300
                            </td>
                            <td class="text-right">
                              20.43%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="<?= base_url() ?>/assets/img/bandeiras/beloHorizonte.png" width="40px" alt="flag">
                              </div>
                            </td>
                            <td>Belo Horizonte</td>
                            <td class="text-right">
                              760
                            </td>
                            <td class="text-right">
                              10.35%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="<?= base_url() ?>/assets/img/bandeiras/saoPaulo.png" width="40px" alt="flag">
                              </div>
                            </td>
                            <td>São Paulo</td>
                            <td class="text-right">
                              690
                            </td>
                            <td class="text-right">
                              7.87%
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img src="<?= base_url() ?>/assets/img/bandeiras/cascavel.jpg" width="40px" alt="flag">
                              </div>
                            </td>
                            <td>Cascavel</td>
                            <td class="text-right">
                              600
                            </td>
                            <td class="text-right">
                              5.94%
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6 ml-auto mr-auto">
                    <div id="worldMap" style="height: 300px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>