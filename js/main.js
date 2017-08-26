$(document).ready(function() {

	$('.elegir-sucursal select').on('change', function (e) {
	   event.preventDefault();
	   $('#busquedahora').prop("disabled", false); // Element(s) are now enabled.
	});
	
	$('.menu-click').click(function(e){
		 e.preventDefault();
		if($('.cabezera').hasClass('colapsado')){
			$('.cabezera').toggleClass('colapsado');
			setTimeout(function(){
			$('.cabezera').toggleClass('displayed');
			}, 1000);
		}else{
			$('.cabezera').toggleClass('displayed');
			setTimeout(function(){
			 $('.cabezera').toggleClass('colapsado');
			}, 50);
		}
		$('.mobile-img').toggleClass('drop');
		$('.desktop-menu-img').toggleClass('hidden');
		$('.menu-drop').removeClass('mobile-dropdown');
		$('.container-buscar-mobile').removeClass('buscar-drop');
		$('.container-logged-menu').removeClass('menu-logged-drop');
	});

	$('.menu-search-mobile').click(function(e){
		e.preventDefault();
		$('.container-logged-menu').removeClass('menu-logged-drop');
		$('.container-buscar-mobile').toggleClass('buscar-drop');
	});

	$('.menu-logged').click(function(e){
		e.preventDefault();
		$('.container-buscar-mobile').removeClass('buscar-drop');
		$('.container-logged-menu').toggleClass('menu-logged-drop');
	});

	$('.menu-search').click(function(e){
		e.preventDefault();
		if(!$('.container-buscar').hasClass('buscar-drop')){
			$('.container-buscar').toggleClass('buscar-drop');
			setTimeout(function(){
			$('.container-buscar').toggleClass('on-top');
			}, 1000);
		}else{
			$('.container-buscar').toggleClass('on-top');
			setTimeout(function(){
			 $('.container-buscar').toggleClass('buscar-drop');
			}, 50);
		}
	});

	$('.menu-drop').click(function(e){
		 e.preventDefault();
		 if(!$(this).hasClass('mobile-dropdown')){
			$('.menu-drop').removeClass('mobile-dropdown');
			$(this).toggleClass('mobile-dropdown');
		 }
		 else{
			$(this).removeClass('mobile-dropdown');
		 }
	});

	$('.seleccion-paciente').click(function(e){
		 e.preventDefault();
		 var current = $('#paciente-seleccionado').html();
		 $('#paciente-seleccionado').html($(this).data('nombre'));
		 $(this).html("<i class='icon-ico-paciente'></i>"+current+"</a>");
		 $(this).data("nombre", current);
	});
	//Activar resultados despues de teclear 3 caracteres
	/* 
	$('#busquedahora').on('keyup', function() {
	  var val = ($(this).val().length);
	  if ( val >= 3 ) {
	  	$(".resultado").addClass('opened');  
	  }
	});
	*/
	$('#busquedahora').on('focus', function() {
	  $(".resultado").addClass('opened'); 
	});

	//
	$('.btn-prox-hora').click(function(){
		$('.columna').css({left: "-100%"}); 
	});
	$('.btn-ante-hora').click(function(){
		$('.columna').css({left: "100%"}); 
	});


	$('.left-hour').click(function(){
		$('.columna-especialista .day').css({left: "-100%", transition: "1s"}); 
	});
	$('.right-hour').click(function(){
		$('.columna-especialista .day').css({left: "100%", transition: "1s"}); 
	});


	// $('#boton-anular').click(function(){
	// 	$('.box-modal').addClass('show'); 
	// });
	// $('.close-modal').click(function(){
	// 	$('.box-modal').removeClass('show'); 
	// });



	var mediaquery = window.matchMedia("(max-width: 450px)");
	if (mediaquery.matches) {
		$('body').find("#busquedahora").each(function(ev){
		    if(!$(this).val()) { 
		    	$(this).attr("placeholder", "Médico, especialidad o enfermedad");
			}
		});

		$('.titulo').click(function(dropTitle){
			 dropTitle.preventDefault();
			$(this).closest('.box-resultado').find('ul').toggleClass('close-ul');
			$(this).toggleClass('linkclosed');
		});
	} else {
	  // mediaquery no es 600
	}


	//

    if ($('.fixed-filter').length > 0) {
        var stickyTop = $('.fixed-filter').offset().top;
    }
    
	$(window).on( 'scroll', function(){
	    if ($(window).scrollTop() >= stickyTop) {
	        $('.fixed-filter').css({position: "fixed", top: "-40px"});
	        $('.layout-resultado').addClass('force-padding');
	    } else {
	        $('.fixed-filter').css({position: "absolute", top: "0px"});
	        $('.layout-resultado').removeClass('force-padding');
	    }
	});



	$('.select-pm-am a').click(function(e){
		 e.preventDefault();
		$('.select-pm-am a').removeClass('active'); 
		$(this).addClass('active'); 
	});

	$('.open-horas span').click(function(takehour){
		 takehour.preventDefault();
		$(this).closest('.col-md-5').find('.horas-doctor').toggleClass('open');
		$(this).toggleClass('link-opened');
	});

	$('#launch-filters').click(function(e){
		 e.preventDefault();
		$('.more-filters').toggleClass('open'); 
	});
	

	$(window).scroll(function() {    
	    var scroll = $(window).scrollTop();    
	    if (scroll >= 0.8 * $(window).height()) {
	        $(".back-top").addClass('appear');
	    } else {
	        $(".back-top").removeClass('appear');
	    }
	});

	$(document).ready(function(){
		$('.back-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });

		// Boton filtro reserva de horas
		$('.filtro-btn').on('click', function (e) {
	        e.preventDefault();
	        $('.el-filtro').toggleClass('open'); 
	    });	    

	});

	
});