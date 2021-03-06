<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TecShop</title>

    <!-- Styles -->
    <!-- <link href="/css/app.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
    <script src="{{asset("js/jquery.js")}}"></script>
    <script src="{{asset("js/bootstrap.js")}}"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Women's Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<link href="{{asset("css/bootstrap.css")}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset("css/style.css")}}" rel="stylesheet" type="text/css" media="all" />
	<link href="{{asset("css/fasthover.css")}}" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<!-- //js -->
	<!-- countdown -->
	<link rel="stylesheet" href="{{asset("css/jquery.countdown.css")}}" />
	<!-- //countdown -->
	<!-- cart -->
	<script src="{{asset("js/simpleCart.min.js")}}"></script>
	<!-- cart -->
	<!-- for bootstrap working -->
	<!-- //for bootstrap working -->
    <link rel="stylesheet" href="{{asset("css/estilos.css")}}"> 
	<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		
	<!-- start-smooth-scrolling -->
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>

     <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
		
</head>
<body>
	<div class="modal fade" id="myModal88" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						No esperes mas, Ingresa ahora!</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<ul>
										<li class="resp-tab-item" aria-controls="tab_item-0"><span>Ingresa</span></li>
										<li class="resp-tab-item" aria-controls="tab_item-1"><span>Registrate</span></li>
									</ul>		
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												<form action="{{ url('/login') }}" method="post">
													<input type="hidden" name="_token" value="{{csrf_token()}}">
													<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							                            <div>
							                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Correo">

							                                @if ($errors->has('email'))
							                                    <span class="help-block">
							                                        <strong>{{ $errors->first('email') }}</strong>
							                                    </span>
							                                @endif
							                            </div>
							                        </div>
							                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							                            <div>
							                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

							                                @if ($errors->has('password'))
							                                    <span class="help-block">
							                                        <strong>{{ $errors->first('password') }}</strong>
							                                    </span>
							                                @endif
							                            </div>
							                        </div>			
													<div class="sign-up">
														<input type="submit" value="Ingresa"/>
													</div>
												</form>
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												<form action="{{url('/register')}}" method="post">
													<input type="hidden" name="_token" value="{{csrf_token()}}">
                        								<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								                            <div>
								                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre">

								                                @if ($errors->has('name'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('name') }}</strong>
								                                    </span>
								                                @endif
								                            </div>
								                        </div>

								                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
								                            <div>
								                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Correo">

								                                @if ($errors->has('email'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('email') }}</strong>
								                                    </span>
								                                @endif
								                            </div>
								                        </div>

								                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								                            <div>
								                                <input id="tel" type="tel" class="form-control" name="tel" value="{{ old('tel') }}" required autofocus placeholder="Celular" pattern="[0-9]{10}" onkeypress="return justNumbers(event);">

								                                @if ($errors->has('tel'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('tel') }}</strong>
								                                    </span>
								                                @endif
								                            </div>
								                        </div>

								                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								                            <div>
								                                <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

								                                @if ($errors->has('password'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('password') }}</strong>
								                                    </span>
								                                @endif
								                            </div>
								                        </div>

								                        <div class="form-group">
								                            <div>
								                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar Contraseña">
								                            </div>
								                        </div>
													<div class="sign-up">
														<input type="submit" value="Registrarme"/>
													</div>
												</form>
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">
										</h3>
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>
										<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>
										<li class="social_behance"><a href="#" class="entypo-behance"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if (Auth::guest())
	@else
	<div class="modal fade" id="myModal89" tabindex="-1" role="dialog" aria-labelledby="myModal88"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
					<h4 class="modal-title" id="myModalLabel">
						{{ Auth::user()->name }} <br>
					</h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
									<div class="col-md-4">
										<ul>
											<b>Tipo de Usuario:</b> 	@if(Auth::user()->tipoUsuario==1)
																	Administrador
																@endif
																@if(Auth::user()->tipoUsuario==2)
																	Invitado
																@endif<br>
											<b>Correo:</b> {{Auth::user()->email}} <br>
											<b>Celular:</b> {{Auth::user()->tel}}<br>
										</ul>
										<a href="{{url('/editar')}}/{{Auth::user()->id}}" class="btn btn-info" id="editar">Editar</a>
									</div>
									@if(Auth::user()->imagen== null)
									<div class="w3l_login" id="imagenP2">
										<a><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
									</div>
									@else
									<div class="col-md-4">
										<span aria-hidden="true" id="imagenP"><img src="{{asset("images/perfil")}}/{{Auth::user()->imagen}}" alt=""></span>
									</div>
									@endif
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="facts">
											<div class="register">
												
											</div>
										</div> 
									</div>	

									<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="facts">
											<div class="register">
												
											</div>
										</div>
									</div> 			        					            	      
								</div>	
							</div>
							<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
							<script type="text/javascript">
								$(document).ready(function () {
									$('#horizontalTab').easyResponsiveTabs({
										type: 'default', //Types: default, vertical, accordion           
										width: 'auto', //auto or any width like 600px
										fit: true   // 100% fit in a container
									});
								});
							</script>
							<div id="OR" class="hidden-xs">
								</div>
						</div>
						<div class="col-md-4 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
								<div class="col-md-12">
									<h3 class="other-nw">
								</div>
								<div class="col-md-12">
									<ul class="social">
										<li class="social_facebook"><a href="http://www.facebook.com/{{Auth::user()->facebook}}" class="entypo-facebook" target="_blank"></a></li>
										<li class="social_dribbble"><a href="#" class="entypo-dribbble" block></a></li>
										<li class="social_twitter"><a href="http://www.twitter.com/{{Auth::user()->twitter}}" class="entypo-twitter" target="_blank"></a></li>
										<li class="social_behance"><a href="http://www.github.com/{{Auth::user()->github}}" class="entypo-behance" target="_blank"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	@if (Auth::guest())
	<script>
		$('#myModal88').modal('show');
	</script>
	@endif
	<div class="header">
		<div class="container">
			@if (Auth::guest())
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			@else
			@if(Auth::user()->imagen== null)
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal89"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			@else
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal89"><span aria-hidden="true" id="imagen"><img src="{{asset("images/perfil")}}/{{Auth::user()->imagen}}" alt=""></span></a>
			</div>
			@endif
			@endif
			@if (Auth::guest())
			@else
			<div>
				<span id="nombre">{{ Auth::user()->name }}</span> <br>
				@if(Auth::user()->tipoUsuario==1)
					<span id="nombre">Administrador</span>
				@endif
				@if(Auth::user()->tipoUsuario==2)
					<span id="nombre">Invitado</span>
				@endif

			</div>
			@endif
			<div class="w3l_logo">
				@if (Auth::guest())
					<h1><a href="{{url('/')}}"><b>TecShop</b><span>Tecnologia a la Moda</span></a></h1>
				@else
					<h1><a href="{{url('/')}}"><b>TecShop</b><span>Tecnologia a la Moda</span></a></h1>
				@endif
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			@if (Auth::guest())
                <span class="cart box_1">Sesión no Iniciada</span>
            @else
			<div class="cart box_1">
				<a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Salir
                </a><br>
				<a href="checkout.html">
					<div class="total">
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                                   
					<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
					<img src="{{asset("images/bag.png")}}" alt="" />
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
				<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
			@endif
		</div>
	</div>
	
	<div id="home1">
	@if (Auth::guest())
		<div id="menu3">
			<div class="navigation">
			    <div class="container">
			      <nav class="navbar navbar-default">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header nav_2">
			          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div> 
			        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			          <ul class="nav navbar-nav">
			            <li class="active"><a href="{{url('/')}}" class="act">Inicio</a></li> 
			            <!-- Mega Menu -->
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
			              <ul class="dropdown-menu multi-column columns-3">
			                <div class="row">
			                  <div class="col-sm-3">
			                    <ul class="multi-column-dropdown">
			                      <h6>Computadoras</h6>
			                      <li><a href="dresses.html">Acer<span>New</span></a></li>
			                      <li><a href="sweaters.html">Apple</a></li>
			                      <li><a href="skirts.html">Hp</a></li>
			                      <li><a href="jeans.html">Toshiba</a></li>
			                      <li><a href="shirts.html">Compact<span>New</span></a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-3">
			                    <ul class="multi-column-dropdown">
			                      <h6>Celulares</h6>
			                      <li><a href="salwars.html">Apple</a></li>
			                      <li><a href="sarees.html">Samsung<span>New</span></a></li>
			                      <li><a href="{{url('/productos')}}"><i>Productos</i></a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-2">
			                    <ul class="multi-column-dropdown">
			                      <h6>Foot Wear</h6>
			                      <li><a href="sandals.html">Flats</a></li>
			                      <li><a href="sandals.html">Sandals</a></li>
			                      <li><a href="sandals.html">Boots</a></li>
			                      <li><a href="sandals.html">Heels</a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-4">
			                    <div class="w3ls_products_pos">
			                      <h4>50%<i>Off/-</i></h4>
			                      <img src="images/1.jpg" alt=" " class="img-responsive" />
			                    </div>
			                  </div>
			                  <div class="clearfix"></div>
			                </div>
			              </ul>
			            </li>
			            <li><a href="about.html">About Us</a></li>
			            <li><a href="about.html">About Us</a></li>
			            <li><a href="mail.html">Mail Us</a></li>
			          </ul>
			        </div>
			      </nav>
			    </div>
			</div>   
	    </div>
    @else
	    @if(Auth::user()->tipoUsuario==1)	
	    	<div id="menu1">
				<div class="navigation">
				    <div class="container">
				      <nav class="navbar navbar-default">
				        <!-- Brand and toggle get grouped for better mobile display -->
				        <div class="navbar-header nav_2">
				          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				          </button>
				        </div> 
				        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				          <ul class="nav navbar-nav">
				            <li class="active"><a href="{{url('/')}}" class="act">Inicio</a></li> 
				            <!-- Mega Menu -->
				            <li class="dropdown">
				              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
				              <ul class="dropdown-menu multi-column columns-3">
				                <div class="row">
				                  <div class="col-sm-3">
				                    <ul class="multi-column-dropdown">
				                      <h6>Computadoras</h6>
					                    <li><a href="dresses.html">Acer<span>New</span></a></li>
					                    <li><a href="sweaters.html">Apple</a></li>
					                    <li><a href="skirts.html">Hp</a></li>
					                    <li><a href="jeans.html">Toshiba</a></li>
					                    <li><a href="shirts.html">Compact<span>New</span></a></li>
				                    </ul>
				                  </div>
				                  <div class="col-sm-3">
				                    <ul class="multi-column-dropdown">
				                      <h6>Electronica</h6>
				                      <li><a href="salwars.html">Scanners</a></li>
				                      <li><a href="sarees.html">Impresoras 3D<span>New</span></a></li>
				                      <li><a href="{{url('/productos')}}"><i>Productos</i></a></li>
				                    </ul>
				                  </div>
				                  <div class="col-sm-2">
				                    <ul class="multi-column-dropdown">
				                      <h6>Celulares</h6>
				                      <li><a href="sandals.html">Apple</a></li>
				                      <li><a href="sandals.html">Sony</a></li>
				                      <li><a href="sandals.html">Samsung</a></li>
				                      <li><a href="sandals.html">Motorola</a></li>
				                    </ul>
				                  </div>
				                  <div class="col-sm-4">
				                    <div class="w3ls_products_pos">
				                      <h4>50%<i>Off/-</i></h4>
				                      <img src="images/1.jpg" alt=" " class="img-responsive" />
				                    </div>
				                  </div>
				                  <div class="clearfix"></div>
				                </div>
				              </ul>
				            </li>
				            <li><a href="about.html">About Us</a></li>
				            <li><a href="{{url('/registrarProducto')}}">Registrar Productos</a></li>
				            <li><a href="mail.html">Mail Us</a></li>
				          </ul>
				        </div>
				      </nav>
				    </div>
				</div>    		
	    	</div>
	    </div>
	    @else
	    <div id="menu2">
			<div class="navigation">
			    <div class="container">
			      <nav class="navbar navbar-default">
			        <!-- Brand and toggle get grouped for better mobile display -->
			        <div class="navbar-header nav_2">
			          <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			        </div> 
			        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
			          <ul class="nav navbar-nav">
			            <li class="active"><a href="{{url('/')}}" class="act">Inicio</a></li> 
			            <!-- Mega Menu -->
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
			              <ul class="dropdown-menu multi-column columns-3">
			                <div class="row">
			                  <div class="col-sm-3">
			                    <ul class="multi-column-dropdown">
			                      <h6>Clothing</h6>
			                      <li><a href="dresses.html">Dresses<span>New</span></a></li>
			                      <li><a href="sweaters.html">Sweaters</a></li>
			                      <li><a href="skirts.html">Shorts & Skirts</a></li>
			                      <li><a href="jeans.html">Jeans</a></li>
			                      <li><a href="shirts.html">Shirts & Tops<span>New</span></a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-3">
			                    <ul class="multi-column-dropdown">
			                      <h6>Ethnic Wear</h6>
			                      <li><a href="salwars.html">Salwars</a></li>
			                      <li><a href="sarees.html">Sarees<span>New</span></a></li>
			                      <li><a href="{{url('/productos')}}"><i>Productos</i></a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-2">
			                    <ul class="multi-column-dropdown">
			                      <h6>Foot Wear</h6>
			                      <li><a href="sandals.html">Flats</a></li>
			                      <li><a href="sandals.html">Sandals</a></li>
			                      <li><a href="sandals.html">Boots</a></li>
			                      <li><a href="sandals.html">Heels</a></li>
			                    </ul>
			                  </div>
			                  <div class="col-sm-4">
			                    <div class="w3ls_products_pos">
			                      <h4>50%<i>Off/-</i></h4>
			                      <img src="images/1.jpg" alt=" " class="img-responsive" />
			                    </div>
			                  </div>
			                  <div class="clearfix"></div>
			                </div>
			              </ul>
			            </li>
			            <li><a href="about.html">About Us</a></li>
			            <li><a href="about.html">About Us</a></li>
			            <li><a href="mail.html">Mail Us</a></li>
			          </ul>
			        </div>
			      </nav>
			    </div>
			</div>   
	    </div>
		@endif
	@endif
    <div>
    	@yield('contenido')	
    </div>

    </div>
	
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<footer>
		<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contacto</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Desarrollo Urbano 3 Rios, <span>#1234 Culiacan, Sinaloa.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">tecShop@gmail.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6671234567</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Información</h3>
					<ul class="info"> 
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Contactanos</a></li>
						<li><a href="#">FAQ's</a></li>
						<li><a href="#">Productos Especiales</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Categorias</h3>
					<ul class="info"> 
						<li><a href="#">Audio y Video</a></li>
						<li><a href="#">Computadoras</a></li>
						<li><a href="#">Consolas y Videojuegos</a></li>
						<li><a href="#">Smartphone</a></li>
						<li><a href="#">Electronica</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Perfil</h3>
					<ul class="info"> 
						<li><a href="{{url('/productos')}}">Productos</a></li>
						<li><a href="checkout.html">Mi carrito</a></li>
					</ul>
					<h4>Siguenos</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="www.facebook.com/" class="facebook"> </a></li>
							<li><a href="www.twitter.com/" class="twitter"> </a></li>
							<li><a href="www.google.com/" class="google"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="{{asset("images/arrow.png")}}" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2016 TecShop. All rights reserved</p>
			</div>
		</div>
	</div>
	</footer>
<!-- //footer -->
	
    
    <!-- <script src="/js/app.js"></script> -->
</body>
</html>
