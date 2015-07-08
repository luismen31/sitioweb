    //Funcion para slide responsive con transicion
	$(function() {
	    $(".slide").responsiveSlides({
	    	auto: true,
	    	speed: 1500,
	    	timeout: 4000,
	    	pause: false,
	    	namespace: "slide"
	    });
	});
	$(function() {
		//Funcion para el carrusel haciendo que no se detenga el slider al pasarle el mouse (hover).
		$('#Carousel').carousel({
			pause: "none"
		});
		//Funcion que obtiene la ruta de la imagen seleccionada y enviarla al modal
		$(".showmodal").click(function(){
			$img = $(this).find('img');
			var img = $img.attr('src');
			var title = $img.attr("alt");
			$(".modal-title").html(title);
			$(".modal-body").html("<img src="+img+" class='img-responsive' alt="+title+">");
			$("#modales").modal('show');
		});
		//Funcion que permite agregar o quitar la clase con el fondo negro del nav
		$(window).scroll(function() {
		  if ($(this).scrollTop() > 100){ 
		  	$("#header").addClass("masthead-background"); 			    
		  }else{
		    $('#header').removeClass("masthead-background");
		  }
		});	

		//funcion que detecta los enlace y permite el efecto deslizante por cada enlace
		$('a.enlace').click(function(){
			var href = $(this).attr('href');
			//Esta funcion sirve para corregir el error de "top" undefined
			var top = ($( href ).offset() || { "top": NaN }).top;
			var scroll = $(window).scrollTop();				
			//si el top es Not At Number, tomara la posicion del scroll
			if(isNaN(top)){
				pos = scroll;
			}else{
				pos = top;
			}
			 $('html, body').animate({ 
			 	scrollTop : pos 
			 }, 420); 
			 return false;
		});

		//Funcion para darle efecto al boton top
		$('#top').append('<a href="#" onclick="subir();" class="btn btn-primary pull-right"><img src="img/up.png" width="18px"></a>');	
    	$(window).scroll(function () {
    		//Si al hacer scroll es mayor de 250px mostrar el boton top, sino lo oculta.
			if ($(this).scrollTop() > 250) {
				$('#top').fadeIn(420);
			} else {
				$('#top').fadeOut(420);
			}
		});		

		//Funcion para dar el efecto parallax 
		$(function () {
		    "use strict";
		    var $bgobj = $(".ha-bg-parallax"); // assigning the object
		    $(window).on("scroll", function () {
		        var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
		        // Put together our final background position
		        var coords = '100% ' + yPos + 'px';
		        // Move the background
		        $bgobj.css({ backgroundPosition: coords });
		    });
		});	

		$('.btn-social').tooltip();
	});	
	//Funcion para ir al top de la pagina realizando el llamado de la funcion subir
	function subir(){
		$('html,body').animate({
			scrollTop: 0 
		},420);
		return false;
	}