<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#3d3d3d">
    <link rel="shortcut icon" href="{{ URL::to('img/logo_icon.ico') }}" type="image/x-icon"> 
	<title>{{$title}}</title>	
	{{ HTML::style('assets/css/bootstrap.css', array('media'=>'screen', 'rel' => 'stylesheet')) }}	
	{{ HTML::style('assets/css/font-awesome.min.css', array('media' => 'screen', 'rel' => 'stylesheet')) }}
	{{ HTML::style('assets/css/style.css') }}
	<!-- this goes inside the header tag-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      {{ HTML::script('assets/js/html5shiv.js') }}
      {{ HTML::script('assets/js/respond.min.js') }}
    <![endif]-->    
</head>
<body>
	<div id="wrap">
		<div class="container clearf" id="main">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12" style="padding-bottom:20px;">
					<div class="jumbotron well">
						<h2 class="text-left"><i class="fa fa-exclamation-circle"></i> <strong>ERROR {{$code}}</strong><br> {{$message}}</h2>
						<hr>
						<p class="text-mutted">
							<a href="{{URL::to('/')}}" class="btn btn-link">Regresar a la pagina anterior</a>
						</p>
					</div>
				</div>
			</div>	
					
		</div>
	</div>
	{{ HTML::script('assets/js/jquery.js') }}
	{{ HTML::script('assets/js/bootstrap.min.js') }}	
</body>
</html>