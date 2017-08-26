<?php include('header.php'); ?>

  <div id="presupuesto-3">
    <div class="sub-header">
	  	<div class="container">
	  		<div class="breadcrumbs">
	  			<span>Estás en: </span>
	  			<ol>
	  				<li><a href="">Home</a></li>
	  				<li><a href="">Necesitas Atención</a></li>
	  				<li><a href="">Hospitalización </a></li>
	  				<li class="active"><a href="">Presupuesto Hospitalización</a></li>
	  			</ol>
	  		</div>
	  		<h2>Presupuesto</h2>
	  	</div>
  	</div>
  	<!-- WIZARD -->
  	<div class="wizard">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
		  			<ol>
		  				<li class="visited"> <span>1.</span> Datos de paciente </li>
		  				<li class="visited"> <span>2.</span> Datos del procedimiento</li>
		  				<li class="active"> <span>3.</span>  ¡Listo! </li>
		  			</ol>
  				</div>
  			</div>
  		</div>
  	</div>
    <div class="wizard-mobile">
        <div class="container">
            <div class="row">
	            <div class="col-xs-12 visible-xs presupuesto-xs">
	              <p><strong>Paso 3 de 4:</strong> <span>Información paciente</span></p>
	            </div>
	            <div class="col-xs-12 hidden-xs">
	              <p>Paso <span>3</span> de  <span> 4</span></p>
	              <p><strong>Información paciente</strong></p>
	            </div>
            </div>
        </div>
    </div>
    <!-- /WIZARD -->

  <div class="container container-exito">
            <div class="row">
                <div class="col-md-12">
                    <div class="visible-xs invisible-terminaste">
                        <h2> ¡Listo! </h2>
                        <hr>
                    </div>
                    <div class="mensaje-final">
                      <div class="container-fluid exito-left-container">
                        <div class="exito-left-container-titulo">
                            <img src="../images/smile-verde.png" alt=""><strong><h4>¡Tus datos han sido ingresados exitosamente!</h4></strong>
							<p class="p-destacado-1">Tu presupuesto estará <strong>disponible en 48 horas</strong> en tu <strong>correo electrónico.</strong> <br>
							Los <strong>presupuestos distintos a hospitalización,</strong> debes solicitarlos en las <strong>unidades correspondientes.</strong> <br>
							En caso de alguna duda, <strong>comunícate</strong> con nosotros a nuestra <strong>Mesa Central</strong> al <a class="link-fono" href="tel:+56229130000"><strong>+56 2 29130000</strong></a> o visítanos en <strong>Av. Santa María 0500, Providencia, Santiago.</strong></p>
                           
                        </div>
                      </div>                    
                               <hr>
                        <a href="javascript:void(0)" class="link link-back">ir a la portada</a>
                    </div>
                    
                </div>
            </div>
        </div> 


<?php include('footer.php'); ?>