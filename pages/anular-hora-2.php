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
  	<div id="anular-hora-2" class="container">
  		<div>
  			<div class="col-md-12">
  				<p class="p-destacado-1 row">Nicolás Arévalo, esta es tu hora agendada </h3>
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
						<span class="icon-location"></span>
						<h5>¿Dónde?</h5>
						<span>Clínica Santa María</span>
					</div>
  				</div>

	            <div class="img-especialista">
	              <img src="../images/especialista1.png" alt="">
	            </div>
	  		</div>
	  		<div class="col-xs-12 text-center">
	  			<a href="javascript:void(0)" class="btn btn-green-blue" id="boton-anular" data-toggle="modal" data-target="#myModal">QUIERO ANULAR ESTA HORA</a>


				<!-- LIGHT BOX -->
				<div class="modal fade modal-cli-sm" id="myModal" role="dialog">
					<div class="modal-dialog">
				    
					    <!-- Modal content-->
					    <div class="modal-content">

							<div class="box-modal">
							  	<p class="p-destacado-1"><strong>Nicolas Arevalo,</strong> Puedes <strong>anular</strong> una hora reservada<strong> a través de tu cuenta Mi Clínica</strong> o usando tu RUT y tu código de reserva.</p>
							  	<div class="">
							  		<h5>María Irene Araya Bertucci</h5>
							  		<p><strong>Dermatología Adulto</strong> </p>
							  		<p>Universidad de Chile</p>
							  	</div>
							  		
							  		<div class="">
										<div class="cuando col-sm-6"">
											<h5>¿Cuándo?</h5>
											Viernes <span>21/12/2016</span> a las <span>9:30 am</span> 
										</div>
										<div class="donde col-sm-6">
										<span class="icon-location"></span>
											<h5>¿Dónde?</h5>
											<span>Clínica Santa María</span>
										</div>
									</div>
								
							  	<div class="botones">
							  		<a href="" class="btn " >NO QUIERO ANULAR</a>
							  		<a href="" class="btn btn-green-blue" id="boton-confirmar">QUIERO ANULAR ESTA HORA</a>
							  	</div>
							  	<div class="close-modal close" data-dismiss="modal"></div>
							</div>  

						</div>
					</div>
				</div>
				<!-- /LIGHT BOX -->  


	  		</div>
  		</div>
  	</div>
</div>


<?php include('footer.php'); ?>