<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Sistec Solutions">
	<meta name="description" content="Empresa netamente panameña cuyo objetivo es brindar a nuestros socios software y servicios de tecnologia con la mas alta calidad.">
	<meta name="keywords" content="Software,Tecnología,TIC">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#3d3d3d">
	<title>@yield('title', 'Sistec Solutions - Quality is our blood')</title>	
	<link rel="shortcut icon" href="{{{ URL::to('img/logo_icon.ico') }}}" type="image/x-icon"> 
	{{ HTML::style('assets/css/bootstrap.css', array('media'=>'screen', 'rel' => 'stylesheet')) }}	
	{{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen', 'rel' => 'stylesheet')) }}
	{{ HTML::style('assets/css/style.css') }}
	<!-- this goes inside the header tag-->
	{{ HTML::style('assets/css/animate.min.css') }}
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::script('assets/js/html5shiv.js') }}
      {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->    
</head>
<body>
	<div id="wrap">

        <div class="ha-bg-parallax text-center block-marginb-none" data-type="background" data-speed="10">

	        <div class="ha-parallax-body">

	            <div class="ha-content ha-content-whitecolor">

	                “No hemos sido los primeros, pero seremos los mejores”.

	            </div>
	     		
	     		 <div class="ha-parallax-divider-wrapper">

	                <span class="ha-diamond-divider-md img-responsive"></span>

	            </div>

	            <div class="ha-heading-parallax">Steve Jobs</div>

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="position:absolute;bottom:8px;">
					<a href="#inicio" class="enlace"><img src="{{{ URL::to('img/down.png') }}}" width="42px"></a>
				</div>
	        </div>	        

	    </div>

		<div class="site-wrapper">
	      <div class="site-wrapper-inner">
	        <div class="cover-container">
				<div class="masthead clearfix header naveg centrado" id="header">
					<div class="inner" id="nav">
					   <h3 class="masthead-brand"><a href="#" onclick="subir();"><img src="{{{ URL::to('img/logo_sistec_small.png') }}}" width="150px"/></a></h3>
					  <ul class="nav nav-navbar masthead-nav">
					    <li><a href="#inicio" class="enlace"><i class="fa fa-home fa-1x"></i> Inicio</a></li>
					    <li><a href="#nosotros" class="enlace"><i class="fa fa-user fa-1x"></i> Nosotros</a></li>
					    <li><a href="#clientes" class="enlace"><i class="fa fa-users fa-1x"></i> Clientes</a></li>
					    <li><a href="#contacto" class="enlace"><i class="fa fa-phone fa-1x"></i> Contacto</a></li>
					  </ul>
					</div>
				</div>
 			</div>
	      </div>

	    </div>
		<div class="container-fluid clearf" id="main">
			<div class="row scrollto space" id="inicio">
				<div class="col-sm-12 col-md-12 col-lg-12 centrado">					
					<h2>Nuestra Empresa</h2>			
					<p class="size-text">Somos una empresa netamente panameña cuyo objetivo es brindar a  nuestros socios software y servicios de tecnologia con la mas alta calidad.  </p>
					<ul class="slide">
						<li>
							<img src="{{{URL::to('img/mobile-web-design-techniques.png')}}}" alt="">
							<div class="caption-slide">Excelencia en nuestro trabajo.</div>
						</li>
						<li>
							<img src="{{{URL::to('img/responsive-web-design-mockup.png')}}}" alt="">
							<div class="caption-slide">Diseños adaptados a los dispositivos actuales.</div>
						</li>						
					</ul>					   
				</div>
			</div>

			<div class="row scrollto" id="nosotros">
				<div class="col-sm-12 col-md-12 col-lg-12 centrado">
					<h2>Servicios</h2>
					<p class="size-text"><strong>Sistec Solutions</strong> es una empresa panameña con 3 años de estar en el mercado brindando servicios a sus clientes.  Dentro de nuestra gama de servicios tenemos:
					</p>
					<hr>
					<div class="row sp-bottom">
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/computos.png')}}}" width="210px"/>
							<h5>Administración de Centros de Computo</h5>						
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/laptops.png')}}}" width="210px"/>
							<h5>Desarrollo de Sistemas Web</h5>						
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/consultoria.png')}}}" width="210px"/>
							<h5>Servicios de Consultoría</h5>						
						</div>
					</div>
					<div class="row sp-bottom">
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/decision.png')}}}" width="210px"/>
							<h5>Soporte para la Toma de Decisiones</h5>						
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/host.png')}}}" width="210px"/>
							<h5>Servicios de Hosting</h5>						
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 ">
							<img src="{{{URL::to('img/servermail2.png')}}}" width="210px"/>
							<h5>Administración de Servidores de Correo</h5>						
						</div>
					</div>
					<div class="row sp-bottom">
						<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4">
							<img src="{{{URL::to('img/promo.png')}}}" width="210px"/>
							<h5>Promoción Comercial de su Negocio</h5>
						</div>
					</div>
				</div>
			</div>

			<div class="row scrollto space" id="clientes">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<h2 class="centrado">Nuestros Clientes</h2>
					
					<div class="row">
						<div class="col-sm-7 col-md-7 col-lg-7 centrado">
							<h4 class="title-cliente">El más grande y moderno hospital de Chiriquí</h4>
							<a href="http://www.hospitalchiriqui.com" title="Hospital Chiriquí" target="_blank" class="btn btn-link"> Ir a www.hospitalchiriqui.com <span class="glyphicon glyphicon-new-window"></a>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5">
				            <div class="panel panel-default">
				                <div class="panel-body">
				                    <a href="#" class="zoom enlace showmodal" title="Hospital Chiriquí" data-type="image" data-toggle="modal">
				                        <img src="{{{URL::to('img/hospitalch.jpg')}}}" alt="Hospital Chiriquí"/>
				                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
				                    </a>
				                </div>					                
				            </div>
				        </div>						
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-7 col-md-7 col-lg-7 centrado">
							<h4 class="title-cliente">Opticentro Vega <p style="font-size:17px;">Su Óptica Amiga</p> </h4>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5">
				            <div class="panel panel-default">
				                <div class="panel-body">
				                    <a href="#" class="zoom enlace showmodal" title="Opticentro Vega" data-type="image" data-toggle="modal">
				                        <img src="{{{URL::to('img/optica.jpg')}}}" alt="Opticentro Vega"/>
				                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
				                    </a>
				                </div>					                
				            </div>
				        </div>						
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-7 col-md-7 col-lg-7 centrado">
							<h4 class="title-cliente">Sistemas Web</h4>
						</div>
						<div class="col-sm-5 col-md-5 col-lg-5">
				            <div class="panel panel-default">
				                <div class="panel-body">
				                    <a href="#" class="zoom enlace showmodal" title="Sistemas Web" data-type="image" data-toggle="modal">
				                        <img src="{{{URL::to('img/system.jpg')}}}" alt="Sistemas Web"/>
				                        <span class="overlay"><i class="glyphicon glyphicon-fullscreen"></i></span>
				                    </a>
				                </div>					                
				            </div>
				        </div>						
					</div>

					<div class="modal fade" id="modales" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					    <div class="modal-dialog modal-lg">
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					          <h5 class="modal-title" id="myLargeModalLabel"></h5>
					        </div>
					        <div class="modal-body">
					        	<!-- Aqui se inserta la imagen con Jquery -->
					        </div>
					      </div>
					    </div>
					</div>
				</div>
			</div>

			<div class="row scroolto space">
				<div class="col-md-12" style="padding-bottom:20px;" id="top">
					<!-- Aqui se insertara el boton para el top de la pagina -->					
				</div>
			</div>	
					
		</div>
		<div id="footer">
			<div class="container-fluid">
				<div class="row" id="contacto">
					<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
						<h2>Contacto</h2>
						{{ Form::open(array('url' => 'contacto', 'method' => 'POST')) }}
							<div class="input-group form-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" placeholder="Nombre" class="form-control input-sm color-input" name="nombre" id="nombre">
							</div>
							<div class="input-group form-group">
								<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
								<input type="email" placeholder="Correo Electrónico" class="form-control input-sm color-input" name="email" id="email">
							</div>
							<div class="input-group form-group">
								<span class="input-group-addon"><i class="fa fa-comment"></i></span>
								<textarea placeholder="Envíenos sus comentarios..." class="form-control input-sm color-input" name="comment" id="comment" rows="3"></textarea>
							</div>
							<button type="submit" class="btn btn-success btn-block"><i class="fa fa-send"></i> Enviar</button>
						{{ Form::close() }}
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-3 col-md-offset-3 col-lg-offset-3 center-social sociales">						
						<div>
							<span>Síguenos |</span>
							<a href="#" class="btn-social facebook" title="Facebook" data-toggle="tooltip" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
							<a href="#" class="btn-social plus" title="Google +" data-toggle="tooltip" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a>
							<a href="#" class="btn-social twitter" title="Twitter" data-toggle="tooltip" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
						</div>
					</div>
					
					<div class="col-sm-12 col-md-12 col-lg-12 footer"  style="">
						<p class="centrado">Derechos Reservados &copy;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}
	{{ HTML::script('assets/js/responsiveslides.min.js')}}
	<!-- Include js plugin -->
	{{ HTML::script('assets/js/sistec.js')}}
	{{ HTML::script('assets/js/bootstrap-notify.min.js') }}
	@if(isset($mensaje))
	<script type="text/javascript">
		$(window).load(function(){		
			$.notify({
				icon: 'fa fa-{{ $mensaje['icon'] }}',
				title: 'Mensaje:',
				message: '{{ $mensaje['mensaje'] }}',
			},{
				type: '{{ $mensaje['class']}} ',
				offset: {
					x: 20,
					y: 75
				}
			});

		});
	</script>
	@endif
	{{ HTML::script('assets/js/jquery.easing.min.js')}}
	{{ HTML::script('assets/js/jquery.stickyNavbar.min.js') }}
	<script>
		//funcion que detecta por donde se esta navegando
		$(function () {
		    $('#header').stickyNavbar({
		        activeClass: "activo", // Class to be added to highlight nav elements
		        sectionSelector: "scrollto", // Class of the section that is interconnected with nav links
		        animDuration: 350, // Duration of jQuery animation as well as jQuery scrolling duration
		        startAt: 0, // Stick the menu at XXXpx from the top of the this() (nav container)		        
		        animateCSS: true, // AnimateCSS effect on/off
		        animateCSSRepeat: false, // Repeat animation everytime user scrolls
		        cssAnimation: "fadeInDown", // AnimateCSS class that will be added to selector
		        jqueryEffects: false, // jQuery animation on/off
		        jqueryAnim: "slideDown", // jQuery animation type: fadeIn, show or slideDown
		        selector: "li", // Selector to which activeClass will be added, either "a" or "li"
		        mobile: true, // If false, nav will not stick under viewport width of 480px (default) or user defined mobileWidth
		        mobileWidth: 480, // The viewport width (without scrollbar) under which stickyNavbar will not be applied (due user usability on mobile)
		        zindex: 100, // The zindex value to apply to the element: default 9999, other option is "auto"
		        stickyModeClass: "sticky", // Class that will be applied to 'this' in sticky mode
		        unstickyModeClass: "unsticky" // Class that will be applied to 'this' in non-sticky mode
		    });
		});
	</script>
</body>
</html>