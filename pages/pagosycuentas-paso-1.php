<?php include('header.php'); ?>

<div id="pagosycuentas">
  <?php
  $class1='active';
  $class2='';
  $class3='';
  include('pagosycuentas-sub-header.php');
  ?>  
    <!-- /WIZARD -->

    <div class="container">
        <div class="row container_resena_datos">         
            <div class="row_resena_datos">
                <div class="row">
                  <div class="col-md-4">
                        <i class="icon-ico-paciente"></i>
                        <h5> Paciente</h5>
                        <p><strong>Nicolás Arévalo Varela</strong></p>
                        <p>Isapre Banmédica</p>
                    </div>
                    <div class="col-md-3 sin-icono">
                        <h5> RUT </h5>
                        <p><strong>23.507.816-3</strong></p>
                    </div>
                    <div class="col-md-5 bg-ico-num-admin">
                        <i class=""></i>
                        <h5> Número de admisión </h5>
                        <p><strong> 861.048-7 </strong></p>
                    </div>
                </div>
            </div>
            <div class="row_resena_datos">
                <div class="row">
                    <div class="col-md-4 bg-ico-fecha-ing">
                        <i class=""></i>
                        <h5> Fecha de ingreso </h5>
                        <p><strong> 01/05/2014 </strong></p>
                    </div>
                    <div class="col-md-5 bg-ico-fecha-alt">
                        <i class=""></i>
                        <h5> Fecha de alta </h5>
                        <p><strong> 05/05/2014 </strong></p>
                    </div>
                  
                </div>
            </div>

        </div>
        <div class="col-md-7 escoge-forma-pago">
        <h3><strong>Elige tu forma de pago</strong></h3>
	        <div class="form-group tipo-pago-webpay">
	            <div class="checkbox-inline">
	                <input type="checkbox" name="no-robot" id="acepto-pago-webpay" value="option1"> 
	                <label for="acepto-pago-webpay"></label>	
	            </div>
	        </div>
        </div>	
        <form action="">
		  	<div class="col-md-4 col-md-offset-1 container-pago-datos-faltantes">
				<div class="completa-datos">
					<div>
	  				<h4>Completa los datos del titular de la tarjeta</h4>
	  				</div>
					
						<label for="">RUT del titular *</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Escribe el rut del titular">
						</div>
						<label for="">Número de tarjeta *</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Escribe el número del titular">
						</div>
						<label for="">Teléfono *</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Escribe el teléfono del titular">
						</div>

				</div>

			</div>
			<div class="form-group text-right bg-info col-md-12 container-acepto-pago ">
				<p class="acepto-cargos"> Por medio del presente medio de pago, <strong>ACEPTO</strong> los cargos que se efectúan a través de este medio de pago.</p>
				<p class="acepto-pago-total"> <strong>Total $87.979</strong></p>
				<button type="submit" class="btn btn-light-blue btn-form">Pagar</button>
			</div>
		</form>

    </div>
</div>

<?php include('footer.php'); ?>