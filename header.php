<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sistema Logo Gestão</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/favicon.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>

	<!-- STYLE -->
	<link rel="stylesheet" href="style.css">

	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">






	<!-- CEP -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                //alert("Formato de CEP inválido.");
                swal("CEP inválido!", "Digite um CEP válido. (9999999 ou 99999-99)", {
						icon : "error",
						buttons: {
							confirm: {
								className : 'btn btn-danger'
							}
						},
					});
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>







    <!-- CNPJ -->
    <script>
      //valida o CNPJ digitado
      function ValidarCNPJ(ObjCnpj){
              var cnpj = ObjCnpj.value;
              var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);
              var dig1= new Number;
              var dig2= new Number;
              
              exp = /\.|\-|\//g
              cnpj = cnpj.toString().replace( exp, "" ); 
              var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));
                      
              for(i = 0; i<valida.length; i++){
                      dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);  
                      dig2 += cnpj.charAt(i)*valida[i];       
              }
              dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));
              dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));
              
              if(((dig1*10)+dig2) != digito)  
                      swal("CNPJ inválido!", "Digite um CNPJ válido.", {
							icon : "error",
							buttons: {
								confirm: {
									className : 'btn btn-danger'
								}
							},
						});
                      
      }


      function txtBoxFormat(strField, sMask, evtKeyPress) {
          var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;
         
          if(document.all) { // Internet Explorer
              nTecla = evtKeyPress.keyCode;
          }
          else if(document.layers) { // Nestcape
              nTecla = evtKeyPress.which;
          }
          else if(document.getElementById) { // FireFox
              nTecla = evtKeyPress.which;
          }
         
          if (nTecla != 8) {
         
          sValue = document.getElementById(strField).value;
         
          // Limpa todos os caracteres de formatação que
          // já estiverem no campo.
          sValue = sValue.toString().replace( "-", "" );
          sValue = sValue.toString().replace( "-", "" );
          sValue = sValue.toString().replace( ".", "" );
          sValue = sValue.toString().replace( ".", "" );
          sValue = sValue.toString().replace( "/", "" );
          sValue = sValue.toString().replace( "/", "" );
          sValue = sValue.toString().replace( "(", "" );
          sValue = sValue.toString().replace( "(", "" );
          sValue = sValue.toString().replace( ")", "" );
          sValue = sValue.toString().replace( ")", "" );
          sValue = sValue.toString().replace( " ", "" );
          sValue = sValue.toString().replace( " ", "" );
          sValue = sValue.toString().replace( ":", "" );
          fldLen = sValue.length;
          mskLen = sMask.length;
         
          i = 0;
          nCount = 0;
          sCod = "";
          mskLen = fldLen;
         
          while (i <= mskLen) {
          bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/"))
          bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))
          bolMask = bolMask || (sMask.charAt(i) == ":")
         
          if (bolMask) {
          sCod += sMask.charAt(i);
          mskLen++; }
          else {
          sCod += sValue.charAt(nCount);
          nCount++;
          }
         
          i++;
          }
         
          //objForm[strField].value = sCod;
          document.getElementById(strField).value = sCod;
         
          if (nTecla != 8) { // backspace
              if (sMask.charAt(i-1) == "9") { // apenas números...
                  return ((nTecla > 47) && (nTecla < 58)); } // números de 0 a 9
              else { // qualquer caracter...
                  return true;
              }
          }
          else {
              return true;
          }
          }
      }
      </script>



      <!-- MOEDA -->
      <script language="javascript">   
		function moeda(a, e, r, t) {
		    let n = ""
		      , h = j = 0
		      , u = tamanho2 = 0
		      , l = ajd2 = ""
		      , o = window.Event ? t.which : t.keyCode;
		    if (13 == o || 8 == o)
		        return !0;
		    if (n = String.fromCharCode(o),
		    -1 == "0123456789".indexOf(n))
		        return !1;
		    for (u = a.value.length,
		    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
		        ;
		    for (l = ""; h < u; h++)
		        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
		    if (l += n,
		    0 == (u = l.length) && (a.value = ""),
		    1 == u && (a.value = "0" + r + "0" + l),
		    2 == u && (a.value = "0" + r + l),
		    u > 2) {
		        for (ajd2 = "",
		        j = 0,
		        h = u - 3; h >= 0; h--)
		            3 == j && (ajd2 += e,
		            j = 0),
		            ajd2 += l.charAt(h),
		            j++;
		        for (a.value = "",
		        tamanho2 = ajd2.length,
		        h = tamanho2 - 1; h >= 0; h--)
		            a.value += ajd2.charAt(h);
		        a.value += r + l.substr(u - 2, u)
		    }
		    return !1
		}
	</script>

	<!-- TELEFONE / CELULAR -->
	<script type="text/javascript">
		function mask(o, f) {
		  setTimeout(function() {
		    var v = mphone(o.value);
		    if (v != o.value) {
		      o.value = v;
		    }
		  }, 1);
		}

		function mphone(v) {
		  var r = v.replace(/\D/g, "");
		  r = r.replace(/^0/, "");
		  if (r.length > 10) {
		    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
		  } else if (r.length > 5) {
		    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
		  } else if (r.length > 2) {
		    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
		  } else {
		    r = r.replace(/^(\d*)/, "($1");
		  }
		  return r;
		}
	</script>



</head>
<body >

	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="white">
				
				<a href="index.html" class="logo">
					<img src="assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="white">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Busca ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<!--li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded-circle"></div>
											<div class="u-text">
												<h4>Hizrian</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li-->
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>













					<!-- Modal -->
					<div class="modal fade" id="addRowPerfil" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">
										<h2 class="fw-mediumbold">Perfil</h2>
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!--p class="small">Create a new row using this form, make sure you fill them all</p-->
									<form class="needs-validation" novalidate>

										<div class="row align-items-center mb-3">
									  		<div class="col-sm-3 text-center p-3">
									  			<div class="avatar avatar-xxl">
													<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
												</div>
									  		</div>
									  		<div class="col-sm-9">
									  			<label for="" class="mb-2">Imagem</label>
											      <input type="file" class="form-control campo_form_file mb-2" name="" id="" required>
											      <a href="#"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Remover Imagem</a>
											     	<div class="invalid-feedback">
											        Este campo é obrigatório.
											      </div>
									  		</div>
									  	</div>

									  <div class="form-row">
									    <div class="col-md-6 mb-2">
									      <label for="" class="mb-2">Nome Completo*</label>
									      <input type="text" class="form-control campo_form" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-md-6 mb-2 mb-2">
									      <label for="" class="mb-2">Email Corporativo*</label>
									      <input type="email" class="form-control campo_form" id="" required>
									     	<div class="invalid-feedback">
									        	Este campo é obrigatório.
									      	</div>
									    </div>

									    <div class="col-md-6 mb-2 mb-2">
									      <label for="" class="mb-2">Data de Nascimento</label>
									      <input type="date" class="form-control campo_form_date" id="">
									     	<div class="valid-feedback"></div>
									    </div>

									    <div class="col-md-6 mb-2 mb-2">
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

									    <div class="col-md-6 mb-2 mb-2">
									      <label for="" class="mb-2">Ramal</label>
									      <input type="text" class="form-control campo_form" id="">
									     	<div class="valid-feedback"></div>
									    </div>

									    <div class="col-md-6 mb-2 mb-2">
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

									    <div class="div_cessao m-0 my-3 mb-4 mr-2">
									    	<p>Alterar Senha</p>
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