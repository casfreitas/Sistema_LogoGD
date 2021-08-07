<?php include_once "header.php" ?>

<?php include_once "sidebar.php" ?>




			
			
			<div class="content">
				<div class="page-inner">


					<div class="page-header">
						<h4 class="page-title">Clientes</h4>
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
								Clientes
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
										<h4 class="card-title">Lista de Clientes</h4>
										<button class="btn btn-primary btn-round ml-auto" onclick="location.href='clientes_cad.php'">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">






									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover label_tabela pb-3">
											<thead>
												<tr class="text-center">
													<th>Razão Social</th>
													<th>Financeiro</th>
													<th>Departamento Pessoal</th>
													<th>Mão de Obra</th>
													<th>Cobrança</th>
													<th>Tipo de Pagamento</th>
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
													<td>Condomínio Solar do Bosquel</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque2</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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
													<td>Condomínio Solar do Bosque</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>C.P.G</td>
													<td>
														<div class="form-button-action">
															<a href="clientes_perfil.php"><button type="button" data-toggle="tooltip" title="Perfil" class="bt_acoes btn btn-link btn-success btn-lg" data-original-title="Perfil">
																<i class="fas fa-bars"></i>
															</button></a>
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