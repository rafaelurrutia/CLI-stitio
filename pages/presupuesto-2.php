<?php include('header.php'); ?>

  <div id="presupuesto-2">
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
		  				<li class="active"> <span>2.</span> Datos del procedimiento</li>
		  				<li> <span>3.</span>  ¡Listo! </li>
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

  	<div class="half-bg2">
  		<div class="container">
			<div class="row presupuesto">
			<div class="col-md-6 ">
			<p class="p-destacado-1 col-md-11 col-sm-12 row">Nos comunicaremos contigo  sólo en caso de ser necesario,  para conocer información específica de la orden médica.</p>
			</div>
			<div class="col-md-6">
				<div class="login-horas col-md-offset-2 col-md-10">
  				<h4>Completa los datos faltantes</h4>
  				<span class="visible-xs missing-data">Indica campo obligatorio</span>
				<form action="">
					<label for="">Médico tratante</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe el nombre del médico tratante">
					</div>
					<label for="">Fecha posible de procedimiento</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Eliga la fecha posible de procedimiento">
					</div>
					<label for="">Código de la Intervención</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe el codigo de la intervención">
					</div>
					<label for="">Nombre de la Intervención</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe el nombre de la intervención">
					</div>
					<label for="">Número de Días de Hospitalización</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe el número de días de hospitalización">
					</div>
					<label class="obligatorio" for="">Orden médica</label>
                                
                    <div class="form-group file">
                        <input type="file" id="file">
                        <p></p>
                        <p class="msg">Solo formato JPEG, PNG o PDF. <br> máximo 2mb.</p>
                    </div>

					<div class="form-group">
                        <div class="checkbox-inline">
                            <input type="checkbox" name="no-robot" id="no-robot" value="option1"> 
                            <label for="no-robot">No soy robot</label>	
                        </div>
                    </div>
					<div class="row">		
						<button class="btn boton-tipo-2 boton-flota-rc">Enviar</button>
					</div>
				
				</form>

				</div>

			</div>
			</div>
		</div>
  	</div>
  </div>

    
<?php include('footer.php'); ?>