<?php include('header.php'); ?>

  <div id="presupuesto-1" class="presupuesto-1">
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
		  				<li class="active"> <span>1.</span> Datos de paciente </li>
		  				<li class=""> <span>2.</span> Datos del procedimiento</li>
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
			<p class="p-destacado-1 col-md-11 col-sm-12 row">Para solicitar tu <strong>presupuesto de hospitalización,</strong> debes completar el siguiente formulario con tus <strong>datos personales,</strong> y adjuntar la información de la <strong>orden entregada por tu médico tratante.</strong></p>
			</div>
			<div class="col-md-6">
				<div class="login-horas col-md-offset-2 col-md-10">
  				<h4>Completa los datos faltantes</h4>
  				<span class="visible-xs missing-data">Indica campo obligatorio</span>
				<form action="">
					<label for="">Nombres</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Nicolas  José">
					</div>
					<label for="">Apellido paterno</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Martinez">
					</div>
					<label for="">Apellido materno</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Almeida">
					</div>
					<label for="">RUT del paciente</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe tu RUT">
					</div>
					<label for="">Teléfono</label>
					<div class="form-group required">
						<input type="text" class="form-control" placeholder="Escribe tu teléfono">
					</div>
					<label for="">Correo electrónico</label>
					<div class="form-group required">
						<input type="email" class="form-control" placeholder="Escribe tu correo electrónico">
					</div>
					<label for="">Dirección</label>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Bellavista 1234">
					</div>
					<label for="">Región</label>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option disabled>Selecciona tu región</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<label for="">Comuna</label>
					<div class="form-group">
						<select name="" id="" class="form-control">
							<option disabled>Comuna</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>

					<label for="">Previsión</label>
					<div class="form-group required">
						<select name="" id="" class="form-control">
							<option disabled>Seleccionar</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>


					<div class="col-xs-12">		
						<button class="btn boton-tipo-2 boton-flota-rc"">Continuar</button>
					</div>
				
				</form>

				</div>

			</div>
			</div>
		</div>
  	</div>
  </div>

    
<?php include('footer.php'); ?>