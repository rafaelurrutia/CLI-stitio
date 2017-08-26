<?php include('header.php'); ?>

  <div id="sobrecupo" class="sobrecupo sobrecupo-1">
    <div class="sub-header">
		<div class="container">
			<div class="breadcrumbs">
				<span>Estás en: </span>
				<ol>
					<li><a href="">Home</a></li>
					<li><a href="">Necesitas Atención</a></li>
					<li class="active"><a href="">Hora Especial</a></li>
				</ol>
			</div>
			<h2>Hora Especial</h2>
			<!-- <a href="" class="btn btn-blue">Hacer una nueva búsqueda</a> -->
		</div>
      <!-- WIZARD -->
      <div class="wizard">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <ol>
                          <li class="active"> <span>1.</span> Identificación </li>
                          <li> <span>2.</span> Datos del Paciente </li>
                          <li> <span>3.</span>  ¡Terminaste! </li>
                      </ol>
                  </div>
              </div>
          </div>
      </div>
      <div class="wizard-mobile">
          <div class="container">
              <div class="row">
					<div class="col-xs-12 visible-xs sobrecupo-xs">
						<p><strong>Paso 1 de 3:</strong> <span>Identificación</span></p>
					</div>
					<div class="col-xs-12 hidden-xs">
						<p>Paso <span>1</span> de  <span> 3</span></p>
						<p><strong>Identificación</strong></p>
					</div>
              </div>
          </div>
      </div>
      <!-- /WIZARD -->

	</div>



        <div class="sub-header-2">
            <div class="container">
                <div class="row sub-row-2">
                    <div class="col-sm-12 col-md-2">
                        <img class="pull-left" src="../images/persona1.png" alt="">
                    </div>
                    <div class="col-xs-8 col-md-10">
                        <div class="pull-left sub-desc">
                            <h3> DRA. <br> ARAYA BERTUCCI MARIA IRENE </h3>
                            <p>Dermatología Adulto</p>
                            <p><a href=""><i class="icon-location"></i>Clinica Santa María</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  	


  	<div class="container">
  		<div class="row">
  			<div class="contenedor-formularios paso1-mgBottom">
				<div class="col-md-5 gray-bg">
	  				<div class="login-horas">
                        <h4>Para solicitar una hora especial debes identificarte con tu RUT</h4>
	  				</div>
	  			</div>
	  			<div class="col-md-5 col-md-offset-2">
                    <div class="login-horas">
		  				<!-- <h4>Ingresa el RUT del paciente</h4> -->
						<form action="">
							<h3>Ingresa el RUT del paciente</h3>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Escribe tu RUT">
              </div>
              <div class="form-group">
                <button class="btn btn-light-blue btn-sobrecupo boton-flota-rc">Continuar</button>
							</div>
						</form>
	  				</div>
	  			</div>
	  			<div class="separador-forms disabled">
	  				<!-- <span>ó</span> -->
	  			</div>
	  		</div>
  		</div>
  	</div>
  </div>

    
<?php include('footer.php'); ?>