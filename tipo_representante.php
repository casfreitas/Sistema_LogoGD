<?php include_once "header.php" ?>

<?php include_once "sidebar.php" ?>




			
			
			<div class="content">
				<div class="page-inner">


					<div class="page-header">
						<h4 class="page-title">Representantes</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="painel.php">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								Cadastros
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								Tipos de Representantes
							</li>
						</ul>
					</div>





					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Tipos de Representantes</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastrar</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

													    <div class="col-md-12">
													      <label for="" class="mb-2">Tipo de Representante*</label>
													      <input type="text" class="form-control campo_form" id="" required>
													     	<div class="invalid-feedback">
													        	Este campo é obrigatório.
													      	</div>
													    </div>

													  </div>	
														<div class="row pt-4 align-items-center">
															<div class="col">
														  		<p class="m-0">* Campos obrigatórios</p>
															</div>
															<div class="col text-right">
														  		<button class="btn btn-primary text-uppercase" type="submit">Cadastrar</button>
															</div>
														 </div>

													</form>

													<script>
													// Example starter JavaScript for disabling form submissions if there are invalid fields
													(function() {
													  'use strict';
													  window.addEventListener('load', function() {
													    // Fetch all the forms we want to apply custom Bootstrap validation styles to
													    var forms = document.getElementsByClassName('needs-validation');
													    // Loop over them and prevent submission
													    var validation = Array.prototype.filter.call(forms, function(form) {
													      form.addEventListener('submit', function(event) {
													        if (form.checkValidity() === false) {
													          event.preventDefault();
													          event.stopPropagation();
													        }
													        form.classList.add('was-validated');
													      }, false);
													    });
													  }, false);
													})();
													</script>

												</div>

												
											</div>
										</div>
									</div>
									<!-- Fim Modal -->

									









									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover label_tabela pb-3">
											<thead>
												<tr>
													<th>Tipo de Representante</th>
													<th style="width: 5%">Ações</th>
												</tr>
											</thead>
											<!--tfoot>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Action</th>
												</tr>
											</tfoot-->
											<tbody>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Gestor Predial</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Subsíncio</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Síndico</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Conselho Fiscal</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Gestor Predial</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Conselho Fiscal</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Subsíncio</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Síndico</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Gestor Predial</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Subsíncio</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Representantes</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Síndico</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>













<?php include_once "footer.php" ?>