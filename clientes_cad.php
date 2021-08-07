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
								Cadastro de Cliente
							</li>
						</ul>
					</div>





					<div class="row">
						

						<div class="col-md-12">
							<div class="card">

								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Cadastro de Cliente</h4>
									</div>
								</div>
								
								<div class="card-body">

									<form id="formPJ" class="needs-validation" novalidate>
									  <div class="form-row">

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Razão Social*</label>
									      <input type="text" class="form-control campo_form" name="" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Tipo*</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option></option>
									        <option>Residencial</option>
									        <option>Empresarial</option>
									        <option>Residencial / Empresarial</option>
									      </select>
									      <div class="invalid-feedback">
									        Este campo é obrigatório.
									      </div>
									    </div>

									    <!--div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">CNPJ / CPF*</label>
									      <input type="text" class="form-control campo_form" name="" id="cnpj" onBlur="ValidarCNPJ(formPJ.cnpj);" onKeyPress="return txtBoxFormat(this.id, '99.999.999/9999-99',event);" maxlength="18" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div-->

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">CNPJ / CPF*</label>
									      <input type="text" class="form-control campo_form" name="" id="cpfcnpj" maxlength="18" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>


									    <script src="https://unpkg.com/imask"></script>
									    <script type="text/javascript">
									        var maskCpfOuCnpj = IMask(document.getElementById('cpfcnpj'), 	{
												mask:[
													{
														mask: '000.000.000-00',
														maxLength: 11
													},
													{
														mask: '00.000.000/0000-00'
													}
												]
											});
									    </script>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">CCM</label>
									      <input type="text" class="form-control campo_form" name="" id="">
									     	<div class="valid-feedback"></div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Inscrição Municipal / Estadual</label>
									      <input type="text" class="form-control campo_form" name="" id="">
									     	<div class="valid-feedback"></div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">CEP*</label>
									      <input type="text" class="form-control campo_form" name="" id="cep" size="10" maxlength="9" onblur="pesquisacep(this.value);" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Endereço*</label>
									      <input type="text" class="form-control campo_form" name="" id="rua" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Número*</label>
									      <input type="text" class="form-control campo_form" name="" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Bairro*</label>
									      <input type="text" class="form-control campo_form" name="" id="bairro" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Cidade*</label>
									      <input type="text" class="form-control campo_form" name="" id="cidade" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Estado*</label>
									      <input type="text" class="form-control campo_form" name="" id="uf" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Quant. Unidades*</label>
									      <input type="number" class="form-control campo_form" name="" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Email*</label>
									      <input type="email" class="form-control campo_form" name="" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Telefone*</label>
									      <input type="tel" class="form-control campo_form" name="" id="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="(xx)xxxx-xxxx" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Celular Corporativo</label>
									      <input type="tel" class="form-control campo_form" name="" id="phone" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" placeholder="(xx)xxxxx-xxxx">
									    </div>


									    <div class="col-xl-3 col-lg-6 mb-2 pt-4">
									      	<div class="selectgroup selectgroup-pills selectgroup-success">
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="AVCB" class="selectgroup-input selectgroup-success">
													<span class="selectgroup-button">AVCB</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Seguro" class="selectgroup-input">
													<span class="selectgroup-button">Seguro</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Cliente Ativo" class="selectgroup-input" checked>
													<span class="selectgroup-button">Cliente Ativo</span>
												</label>										
											</div>
									    </div>


									    <div class="div_cessao m-0 my-3 mb-4">
									    	<p>Contratos</p>
									    </div>



									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Tipo de Contrato*</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option selected disabled value=""></option>
									        <option>Residencial</option>
									        <option>Empresarial</option>
									        <option>Residencial / Empresarial</option>
									      </select>
									      <div class="invalid-feedback">
									        Este campo é obrigatório.
									      </div>
									    </div>


									   <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Início*</label>
									      <input type="date" class="form-control campo_form_date" name="" id="" required>
									     	<div class="invalid-feedback">
										        Este campo é obrigatório.
										      </div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Tipo de Cobrança*</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option selected disabled value=""></option>
									        <option>Residencial</option>
									        <option>Empresarial</option>
									        <option>Residencial / Empresarial</option>
									      </select>
									      <div class="invalid-feedback">
									        Este campo é obrigatório.
									      </div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Valor</label>
									      <input type="text" class="form-control campo_form" name="" id="" onKeyPress="return(moeda(this,'.',',',event))">
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Banco</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option selected disabled value=""></option>
									        <option>Santander</option>
									        <option>Itaú</option>
									        <option>banco do Brasil</option>
									      </select>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Tipo de Pagamento*</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option selected disabled value=""></option>
									        <option>Residencial</option>
									        <option>Empresarial</option>
									        <option>Residencial / Empresarial</option>
									      </select>
									      <div class="invalid-feedback">
									        Este campo é obrigatório.
									      </div>
									    </div>

									    <div class="col-xl-3 col-lg-6 mb-2">
									      <label for="" class="mb-2">Envio de Boleto*</label>
									      <select class="form-control campo_form_select" name="" id="" required>
									        <option selected disabled value=""></option>
									        <option>Residencial</option>
									        <option>Empresarial</option>
									        <option>Residencial / Empresarial</option>
									      </select>
									      <div class="invalid-feedback">
									        Este campo é obrigatório.
									      </div>
									    </div>


									    <div class="div_cessao m-0 my-3 mb-4">
									    	<p>Malote</p>
									    </div>



									    <div class="col-12 mb-2">
									      <div class="selectgroup selectgroup-pills selectgroup-orange">
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Domingo" class="selectgroup-input">
													<span class="selectgroup-button">Domingo</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Segunda-feira" class="selectgroup-input">
													<span class="selectgroup-button">Segunda-feira</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Terça-feira" class="selectgroup-input">
													<span class="selectgroup-button">Terça-feira</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Quarta-feira" class="selectgroup-input">
													<span class="selectgroup-button">Quarta-feira</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Quinta-feira" class="selectgroup-input">
													<span class="selectgroup-button">Quinta-feira</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Sexta-feira" class="selectgroup-input">
													<span class="selectgroup-button">Sexta-feira</span>
												</label>
												<label class="selectgroup-item py-2">
													<input type="checkbox" name="value" value="Sábado" class="selectgroup-input">
													<span class="selectgroup-button">Sábado</span>
												</label>										
											</div>
									    </div>



									    <div class="div_cessao m-0 my-3 mb-4">
									    	<p>Informações Adicionais</p>
									    </div>


									    <div class="col-12">
									      <label for="" class="mb-2">Observação</label>
									      <textarea class="form-control campo_form" id="" name="" rows="3"></textarea>
									    </div>





									  </div>	
										<div class="row pt-4 align-items-center">
											<div class="col-sm-6 text-center text-sm-left">
										  		<p class="m-0 p-sm-0 pb-3">* Campos obrigatórios</p>
											</div>
											<div class="col-sm-6 text-center text-sm-right">
												<button class="btn btn-danger text-uppercase mr-2" type="button" onclick="javascript:window.history.back();">Cancelar</button>
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


					</div><!-- row -->

				</div><!-- page-inner -->
			</div><!-- content -->













<?php include_once "footer.php" ?>