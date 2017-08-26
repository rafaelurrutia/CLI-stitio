<?php include('header.php'); ?>

  <div id="anular" class="anulacion">
    <div class="sub-header">
	  	<div class="container">
	  		<div class="breadcrumbs">
	  			<span>Estás en: </span>
	  			<ol>
	  				<li><a href="">Home</a></li>
	  				<li><a href="">Necesitas Atención</a></li>
	  				<li class="active"><a href="">Anular Hora</a></li>
	  			</ol>
	  		</div>
	  		<h2>Anular Hora</h2>
	  	</div>
  	</div>

  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<h3>Nicolás Arévalo, esta es tu hora agendada </h3>
  			</div>
  			<div class="info-hora-anular">
  				<div class="info-txt">
					<h4>María Irene Araya Bertucci</h4>
					<p><strong>Dermatología Adulto</strong></p>
					<p>Universidad de Chile</p>
					<div class="cuando">
						<h5>¿Cuándo?</h5>
						Viernes <span>21/12/2016</span> a las <span>9:30 am</span> 
					</div>
					<div class="donde">
						<h5>¿Dónde?</h5>
						<span>Clínica Santa María</span>
					</div>
  				</div>

	            <div class="img-especialista">
	              <img src="../images/especialista1.png" alt="">
	            </div>
	  		</div>
	  		<div class="col-md-12 text-center">
	  			<a href="javascript:void(0)" class="btn btn-green-blue" id="boton-error">QUIERO ANULAR ESTA HORA</a>
	  		</div>
  		</div>
  	</div>

  </div>

	<!-- LIGHT BOX -->
	<div class="box-modal error">
	  	<h4>Puedes anular una hora reservada a través de tu cuenta Mi Clínica o usando tu RUT y tu código de reserva </h4>
	  	<div class="">
	  		<h5>María Irene Araya Bertucci</h5>
	  		<p><strong>Dermatología Adulto</strong> </p>
	  		<p>Universidad de Chile</p>
	  	</div>
		<div class="cuando">
			<h5>¿Cuándo?</h5>
			Viernes <span>21/12/2016</span> a las <span>9:30 am</span> 
		</div>
		<div class="donde">
			<h5>¿Dónde?</h5>
			<span>Clínica Santa María</span>
		</div>
	  	<div class="text-center">
	  		<a href="" class="btn " >NO QUIERO ANULAR</a>
	  		<a href="" class="btn btn-green-blue" id="boton-confirmar">QUIERO ANULAR ESTA HORA</a>
	  	</div>
	  	<div class="close-modal"></div>
	</div>  
	<!-- /LIGHT BOX --> 

<script>
	$('#boton-error').click(function(){
		$('.error').addClass('show'); 
	});
</script>

<?php include('footer.php'); ?>