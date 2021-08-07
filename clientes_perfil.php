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
								<a href="clientes.php">Clientes</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								Condomínio Solar do Bosque
							</li>
						</ul>
					</div>





					<div class="row">
						<div class="col-md-12">
							<div class="card">

								<div class="card-header">
				
									<div class="row align-items-center">
										<div class="col-md-4 text-center text-md-left">
											<h4 class="card-title">Cliente</h4>
										</div>
										<div class="col-md-8 text-center text-md-right mt-3 mt-md-0 d-none d-sm-block">
											<button class="btn btn-primary btn-round ml-auto mx-2" data-toggle="collapse" onclick="location.href='clientes_cad.php'">
												<i class="fa fa-plus"></i>&nbsp;&nbsp;
												Adicionar
											</button>
											<button class="btn btn-info btn-round ml-auto mx-2" data-toggle="collapse" onclick="location.href='clientes_cad.php'">
												<i class="far fa-edit"></i>&nbsp;&nbsp;
												Editar
											</button>
											<button class="btn btn-danger btn-round ml-auto mx-2" data-toggle="collapse" onclick="AlertDelet()">
												<i class="far fa-trash-alt"></i>&nbsp;&nbsp;
												Excluir
											</button>
										</div>
										<div class="col-md-8 text-center text-md-right mt-3 d-block d-sm-none">
											<button class="btn btn-primary btn-round ml-auto mx-2 btn-sm" data-toggle="collapse">
												<i class="fa fa-plus"></i>&nbsp;&nbsp;
												Adicionar
											</button>
											<button class="btn btn-info btn-round ml-auto mx-2 btn-sm" data-toggle="collapse">
												<i class="far fa-edit"></i>&nbsp;&nbsp;
												Editar
											</button>
											<button class="btn btn-danger btn-round ml-auto mx-2 btn-sm" data-toggle="collapse" onclick="AlertDelet()">
												<i class="far fa-trash-alt"></i>&nbsp;&nbsp;
												Excluir
											</button>
										</div>
									</div>
								
								</div>

								<div class="card-body p-2 pb-5">
									<div class="row px-3">

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Nome</div>
												<div class="col-sm-8">Condomínio Solar do Bosque</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">CEP</div>
												<div class="col-sm-8">40.285-030</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Quant. Unidades</div>
												<div class="col-sm-8">3</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Tipo</div>
												<div class="col-sm-8">Condomínio Empresarial</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Endereço</div>
												<div class="col-sm-8">Rua Assis Bezerra, 189</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Email</div>
												<div class="col-sm-8">nome@empresa.com.br</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">CNPJ / CPF</div>
												<div class="col-sm-8">35.123.924/0001-60</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Complemento</div>
												<div class="col-sm-8">Apto 602</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Telefone</div>
												<div class="col-sm-8">71 3326-6985</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Ins. Mun. / Est.</div>
												<div class="col-sm-8">256598-659</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Cidade</div>
												<div class="col-sm-8">Salvador</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Celular Corporativo</div>
												<div class="col-sm-8">71 9956-6985</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">CCM</div>
												<div class="col-sm-8">2356985632</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-6 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-4 fw-bold">Estado</div>
												<div class="col-sm-8">Bahia</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-12 px-4">	
											<div class="row border-bottom">									
												<div class="selectgroup selectgroup-pills selectgroup-success px-3">
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="AVCB" class="selectgroup-input selectgroup-success" checked disabled>
														<span class="selectgroup-button">AVCB</span>
													</label>
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Seguro" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Seguro</span>
													</label>
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Cliente Ativo" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Cliente Ativo</span>
													</label>										
												</div>
											</div>
										</div>

										<div class="col-xl-4 col-lg-12 px-4">
											<div class="row border-bottom px-3 pb-1">		
												<label class="form-label fw-bold mt-3 mr-3">Malotes</label>								
												<div class="selectgroup selectgroup-pills selectgroup-orange">

													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Segunda-feira" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Segunda-feira</span>
													</label>
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Terça-feira" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Terça-feira</span>
													</label>
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Quarta-feira" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Quarta-feira</span>
													</label>
													<label class="selectgroup-item py-2">
														<input type="checkbox" name="value" value="Quinta-feira" class="selectgroup-input" checked disabled>
														<span class="selectgroup-button">Quinta-feira</span>
													</label>
									
												</div>
											</div>
										</div>

										<div class="col-xl-8 col-lg-12 px-4">										
											<div class="row border-bottom py-3">
												<div class="col-sm-12 fw-bold">Observação</div>
												<div class="col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor finibus tortor in convallis. Curabitur faucibus enim quis elit tincidunt mollis. Nam at aliquet odio. Mauris sed nisi blandit, finibus nulla rutrum, condimentum neque. Donec in tellus sed nisi feugiat iaculis sed congue nisl. </div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>








					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Contratos</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModalContrato">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="ModalContrato" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastrar Contrato</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

													  	<div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Tipo de Contrato*</label>
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
													      <label for="" class="mb-2">Início*</label>
													      <input type="date" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Tipo de Cobrança*</label>
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
													      <label for="" class="mb-2">Valor*</label>
													      <input type="text" class="form-control campo_form_date" name="" id="" onKeyPress="return(moeda(this,'.',',',event))" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>  

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Tipo de Pagamento*</label>
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
													      <label for="" class="mb-2">Envio de Boleto*</label>
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
										<table class="display table table-striped table-hover label_tabela pb-3">
											<thead>
												<tr class="text-center">
													<th>Tipo de Contrato</th>
													<th>Início</th>
													<th>Tipo de Cobrança</th>
													<th>Valor</th>
													<th>Tipo de Pagamento</th>
													<th>Envio de Boleto</th>
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
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalContrato" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalContrato" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalContrato" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
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












					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Representantes Internos</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModaInterno">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="ModaInterno" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastrar Representante Interno</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

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
													      <label for="" class="mb-2">Nome*</label>
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
													      <label for="" class="mb-2">Email*</label>
													      <input type="email" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>


													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Ramal*</label>
													      <input type="text" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Corporativo*</label>
													      <input type="text" class="form-control campo_form_date" name="" id="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="(xx)xxxx-xxxx" required>
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
										<table class="display table table-striped table-hover label_tabela pb-3">
											<thead>
												<tr class="text-center">
													<th>Setor</th>
													<th>Nome</th>
													<th>Email</th>
													<th>Ramal</th>
													<th>Corporativo</th>
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
													<td>Financeiro</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>nome@empresa.com.br</td>
													<td>2356</td>
													<td>71 99162-9686</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModaInterno" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Operacional</td>
													<td>Roberto Ribeiro de Brito</td>
													<td>nome@empresa.com.br</td>
													<td>2356</td>
													<td>71 99162-9686</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModaInterno" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
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













					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Representantes Extenos</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModalExterno">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="ModalExterno" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastrar Representante Externo</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

													  	<div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Nome*</label>
													      <input type="text" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Cargo*</label>
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
													      <label for="" class="mb-2">Email*</label>
													      <input type="email" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Telefone*</label>
													      <input type="tel" class="form-control campo_form_date" name="" id="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="(xx)xxxx-xxxx" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Mandato*</label>
													      <input type="date" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">Certificado*</label>
													      <input type="date" class="form-control campo_form_date" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-6 mb-2">
													      <label for="" class="mb-2">At. na Receita*</label>
													      <input type="date" class="form-control campo_form_date" name="" id="" required>
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
										<table class="display table table-striped table-hover label_tabela pb-3">
											<thead>
												<tr class="text-center">
													<th>Tipo de Contrato</th>
													<th>Início</th>
													<th>Tipo de Cobrança</th>
													<th>Valor</th>
													<th>Tipo de Pagamento</th>
													<th>Envio de Boleto</th>
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
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalExterno" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalExterno" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
																<i class="far fa-edit" data-toggle="tooltip" data-placement="top" title="Editar"></i>
															</button>
															<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																<i class="far fa-trash-alt"></i>
															</button>
														</div>
													</td>
												</tr>

												<tr>
													<td>Roberto Ribeiro de Brito</td>
													<td>02/09/2020</td>
													<td>Boleto</td>
													<td>R$ 1.326,00</td>
													<td>Boleto</td>
													<td>Administrador</td>
													<td>
														<div class="form-button-action">
															<button type="button" data-toggle="modal" data-toggle="tooltip" data-target="#ModalExterno" title="" class="bt_acoes btn btn-link btn-info btn-lg" data-original-title="Editar">
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
























					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Documentos</h4>
										<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#ModalDocumentos">
											<i class="fa fa-plus"></i>&nbsp;&nbsp;
											Adicionar
										</button>
									</div>
								</div>
								<div class="card-body">


									<!-- Modal -->
									<div class="modal fade" id="ModalDocumentos" tabindex="-1" role="dialog" aria-hidden="true">
										<div class="modal-dialog modal-md" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">
														<h2 class="fw-mediumbold">Cadastrar Documento</h2>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
													<form class="needs-validation" novalidate>
													  <div class="form-row">

													    <div class="col-md-12 mb-2">
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

													    <div class="col-md-12 mb-2">
													      <label for="" class="mb-2">Título*</label>
													      <input type="text" class="form-control campo_form" name="" id="" required>
													     	<div class="invalid-feedback">
													        Este campo é obrigatório.
													      </div>
													    </div>

													    <div class="col-md-12 mb-2">
													      <label for="" class="mb-2">Arquivo*</label>
													      <input type="file" class="form-control campo_form_file" name="" id="" required>
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





									<div class="accordion">
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading1" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
												<h5 class="fw-bold m-0">Atentimento</h5>
												<div class="span-mode"></div>
											</div>

											<div id="collapse1" class="collapse bg-white border-0" aria-labelledby="heading1" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading2" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
												<h5 class="fw-bold m-0">Compras</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse2" class="collapse bg-white border-0" aria-labelledby="heading2" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading3" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
												<h5 class="fw-bold m-0">Comercial</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse3" class="collapse bg-white border-0" aria-labelledby="heading3" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading4" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
												<h5 class="fw-bold m-0">Departamento Pessoal</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse4" class="collapse bg-white border-0" aria-labelledby="heading4" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading5" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
												<h5 class="fw-bold m-0">Financeiro</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse5" class="collapse bg-white border-0" aria-labelledby="heading5" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading6" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
												<h5 class="fw-bold m-0">Marketing</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse6" class="collapse bg-white border-0" aria-labelledby="heading6" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading7" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
												<h5 class="fw-bold m-0">Cobrança</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse7" class="collapse bg-white border-0" aria-labelledby="heading7" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading8" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
												<h5 class="fw-bold m-0">Juridico</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse8" class="collapse bg-white border-0" aria-labelledby="heading8" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading9" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
												<h5 class="fw-bold m-0">Operacional - Fiscalização</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse9" class="collapse bg-white border-0" aria-labelledby="heading9" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>
										<div class="card mb-1">
											<div class="card-header carossel_hear py-2 collapsed" id="heading10" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
												<h5 class="fw-bold m-0">Documentos Antigos</h5>
												<div class="span-mode"></div>
											</div>
											<div id="collapse10" class="collapse bg-white border-0" aria-labelledby="heading10" data-parent="#accordion">
												<div class="card-body p-2 pb-4">
													<div class="row">

														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="col-lg-3 col-md-6">
															<div class="card-list py-2">
																<div class="item-list p-0">
																	<div class="info-user link_accordion border-bottom p-2">
																		<a href="#"><i class="fas fa-link"></i>&nbsp;&nbsp;Manual de atendimento Logoserv</a>																
																	</div>
																	<button type="button" data-toggle="tooltip" title="Excluir" class="bt_acoes btn btn-link btn-danger" data-original-title="Excluir" onclick="AlertDelet()">
																		<i class="far fa-trash-alt"></i>
																	</button>
																</div>
															</div>
														</div>

													</div>
												</div>
											</div>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>























				</div><!-- page-inner -->
			</div><!-- content -->






















<?php include_once "footer.php" ?>