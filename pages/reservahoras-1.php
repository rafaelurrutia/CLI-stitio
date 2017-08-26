<?php include('header.php'); ?>

  <div class="reservadehoras-1 reserva-de-horas-id">

	<?php
	$class1='active';
	$class2='';
	$class3='';
	$class4='';
	include('reservahoras-sub-header.php');
	?>  

  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<h3>Busca una hora para Consultas Médicas</h3>
  				<div class="busqueda-reserva">
  					<div class="elegir-sucursal">
						<select class="form-control">
						  <option value="" selected disabled>Elige sucursal</option>
						  <option>Ambas Sucursales</option>
						  <option>Clínica Santa María</option>
						  <option>Centro Médico La Dehesa</option>
						</select>
  					</div>

  					<label class="only-mobile">
  						<p>Escribe una especialidad, enfermedad, tratamiento o nombre de especialista</p>
  					</label>

					<!-- -->
	  				<input class="form-control busqueda-input" type="text" name="" id="busquedahora" placeholder="Escribe una especialidad, enfermedad, tratamiento o nombre de especialista" disabled><div class="icon-ico-search cc3"></div>
		  			<div class="resultado">
		  				<div class="col-md-4 box-resultado">
		  					<div class="">
		  						<div class="titulo especialidad">Especialidad</div>
		  						<span class="masbuscado">+ Buscados</span>
				  				<ul>
				  					<li><a href="">Endocrinología</a></li>
				  					<li><a href="">Broncopulmonar Infantil</a></li>
				  					<li><a href="">Cardiología</a></li>
				  					<li><a href="">Maternidad</a></li>
				  					<li><a href="">Inmunología y Alergías</a></li>
				  				</ul>
		  					</div>
		  				</div>
		  				<div class="col-md-4 box-resultado">
		  					<div class="">
		  						<div class="titulo tratamiento">Condición / Tratamiento</div>
		  						<span class="masbuscado">+ Buscados</span>
				  				<ul>
				  					<li><a href="">Cirugía Plastica</a></li>
				  					<li><a href="">Cáncer</a></li>
				  					<li><a href="">Tratamiento del Acné</a></li>
				  				</ul>
		  					</div>
		  				</div>
		  				<div class="col-md-4 box-resultado">
		  					<div class="">
		  						<div class="titulo especialista">Especialista</div>
		  						<span class="masbuscado">+ Buscados</span>
				  				<ul>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/persona1.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Maria Irene Araya Bertucci</span>
				  							<span class="especialidad">Dermatología Adulto, Dermatología Infantil</span>
				  						</a>
				  					</li>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/persona2.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Pedro Paulsen Bonilla</span>
				  							<span class="especialidad">Ginecología, Maternidad, Medicina General</span>
				  						</a>
				  					</li>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/persona3.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Juan Carlos Medina Cárcamo</span>
				  							<span class="especialidad">Medicina Interna, Infectología</span>
				  						</a>
				  					</li>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/dummy-woman.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Maria Irene Araya Bertucci</span>
				  							<span class="especialidad">Dermatología Adulto, Dermatología Infantil</span>
				  						</a>
				  					</li>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/persona1.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Pedro Paulsen Bonilla</span>
				  							<span class="especialidad">Ginecología, Maternidad, Medicina General</span>
				  						</a>
				  					</li>
				  					<li>
				  						<a href="" class="link-medico">
				  							<span class="mini-thum">
				  								<img src="../images/persona1.png" class="img-responsive">
				  							</span>
				  							<span class="especialista">Juan Carlos Medina Cárcamo</span>
				  							<span class="especialidad">Medicina Interna, Infectología</span>
				  						</a>
				  					</li>
				  				</ul>
		  					</div>
		  				</div>
		  			</div>
  				</div>
  				<div class="row">
  					<div class="col-md-4">
  						<a href="#" class="box-banner light-blue">
  							<span class="icono cancel"></span>
  							<p>¿Necesitas anular una hora?</p>
  						</a>
  					</div>
  					<div class="col-md-4">
  						<a href="#" class="box-banner light-green">
  							<span class="icono info"></span>
  							<p>¿Necesitas saber sobre tu reserva de Consulta?</p>
  						</a>
  					</div>
  					<div class="col-md-4">
  						<a href="#" class="box-banner bgc9">
  							<span class="icono phone"></span>
  							<p>Lorem ipsum dolor: <br>
  							+56 2 2913 00 00</p>
  						</a>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>

    
<?php include('footer.php'); ?>



<script type="text/javascript">

  var ic = 0, clickIn;
  $( "*" ).on('mousedown', function () { // PERMITE CERRAR DIALOGO HACIENDO CLICK FUERA
    
    if (ic === 0) {
      clickIn = 0;
      ic = 1;
    }
    if ($(this).hasClass('resultado') || $(this).hasClass('busqueda-input') ||  $(this).hasClass('elegir-sucursal') ) {
      ++clickIn;
    }

  }).on('mouseup', function () {

    if (clickIn === 0) {
      clickIn = 0;
      $( ".resultado").removeClass("opened");
    } else {

    }
    ic = 0;

  });

  </script>