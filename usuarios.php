<?php include_once "header.php" ?>

<?php include_once "sidebar.php" ?>




			
			
			<div class="content">
				<div class="page-inner">


					<div class="page-header">
						<h4 class="page-title">Usuários</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Usuários</a>
							</li>
							<!--li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Usuários</a>
							</li-->
						</ul>
					</div>





					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Lista de Usuários</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastro de Usuários</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

													    <div class="col-md-6">
													      <label for="" class="mb-2">Nome Completo*</label>
													      <input type="text" class="form-control campo_form" id="" required>
													     	<div class="invalid-feedback">
													        	Este campo é obrigatório.
													      	</div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Email Corporativo*</label>
													      <input type="email" class="form-control campo_form" id="" required>
													     	<div class="invalid-feedback">
													        	Este campo é obrigatório.
													      	</div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Data de Nascimento</label>
													      <input type="date" class="form-control campo_form_date" id="">
													     	<div class="valid-feedback"></div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Setor*</label>
													      <select class="form-control campo_form_select" name="" id="" required>
													        <option selected disabled value=""></option>
													        <option>Financeiro</option>
													        <option>Operacional</option>
													        <option>Departamento Pessoal</option>
													        <option>Almoxarifado</option>
													        <option>Compras</option>
													        <option>Tecnologia da Informação</option>
													      </select>
													      <div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Ramal</label>
													      <input type="text" class="form-control campo_form" id="">
													     	<div class="valid-feedback"></div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="validationCustom01" class="mb-2">Permissão*</label>
													      <select class="form-control campo_form_select" name="" id="" required>
													        <option selected disabled value=""></option>
													        <option>Administrador</option>
													        <option>Gestor</option>
													        <option>Colaborador</option>
													      </select>
													      <div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="validationCustom01" class="mb-2">Senha</label>
													      <input type="password" class="form-control campo_form" id="validationCustom01">
													     	<div class="valid-feedback"></div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="validationCustom01" class="mb-2">Repetir Senha</label>
													      <input type="password" class="form-control campo_form" id="validationCustom01">
													     	<div class="valid-feedback"></div>
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
												<tr class="text-center">
													<th>Tipo de Representante</th>
													<th>Data de Nascimento</th>
													<th>Ramal</th>
													<th>Setor</th>
													<th>Permissão</th>
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
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>
												<tr>
													<td>Carlos André Silveira freitas</td>
													<td>02/09/2020</td>
													<td>3265</td>
													<td>Financeiro</td>
													<td>Colaborador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-target="#addRowModal" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit"></i>
															</button>
															<button type="button" data-toggle="collapse" title="" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
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