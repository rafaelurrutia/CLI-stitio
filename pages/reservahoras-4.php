<?php include('header.php'); ?>

  <div class="reservadehoras-4 reserva-de-horas-id">
        <?php
        $class1='visited';
        $class2='visited';
        $class3='visited';
        $class4='active';
        include('reservahoras-sub-header.php');
        ?>  
  	<div class="container">
       
            <div class="titulo-paso">
             <div class="col-md-12">
                <h3>
                ¡Ya está realizada tu <strong>reserva de hora!</strong>
                <div class="icono-imprimir"></div>
                </h3>
                </div> 
            </div>
               
        <div class="row container_resena_datos">         
            <div class="row_resena_datos">
                <div class="row">
                    <div class="col-md-3 bg-ico-num-reserva">
                        <i></i>
                        <h5> Número de reserva</h5>
                        <p><strong>5335346346456</strong></p>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-ico-paciente"></i>
                        <h5> Paciente</h5>
                        <p><strong>Nicolás Arévalo Varela</strong></p>
                        <p>Isapre Banmédica</p>
                    </div>
                    <div class="col-md-5">
                        <i class="icon-ico-especialidades-destacadas"></i>
                        <h5> Especialista</h5>
                        <p><strong>DRA. BIDART HERNANDEZ TERESA</strong></p>
                        <p><strong>Infectología Adultos</strong></p>
                    </div>
                </div>
            </div>
            <div class="row_resena_datos">
                <div class="row">
                    <div class="col-md-3 bg-ico-calendario-grid">
                        <i class=""></i>
                        <h5> Día</h5>
                        <p>Viernes <strong>21 Diciembre</strong></p>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-ico-hora"></i>
                        <h5> Hora</h5>
                        <p><strong>9:30 am</strong></p>
                    </div>
                    <div class="col-md-5">
                        <i class="icon-location"></i>
                        <h5> ¿Dónde?</h5>
                        <p><strong>Clínica Santa María</strong></p>
                        <span>Av. Bellavista 0415, Providencia, Santiago</span>
                        <p><a href="">Ver en Google Maps <i></i></a></p>
                    </div>
                </div>
            </div>
        </div>



  		<div class="row">
			<div class="col-md-12">
				<div class="zone-reserva-finalizada">
					<div class="row">
						<div class="col-md-12">
							<h5 class="valores">Valores y Previsión</h5>
							<div class="caja-valores-prevision bg-info">
								<div class="row">
									<div class="col-md-3">
										<p><strong>Código</strong></p>
										<p>01-03-003</p>
									</div>
									<div class="col-md-5">
										<p><strong>Descripción</strong></p>
										<p>Consulta General Dermatología</p>
									</div>
									<div class="col-md-4">
										<p><strong>Valor</strong></p>
										<p>$24.200 </p>
									</div>
								</div>
							</div>
							<ul>
								<li>Tu previsión de salud (Banmédica) tiene convenio con Clínica Santa María para consultas médicas.</li>
								<li>Puedes adquirir el bono con tu huella digital.</li>
                                <li>Si el plan de salud es preferente en Clínica Santa María sólo se hará efectivo en la sucursal de Providencia, no en el Centro Médico La Dehesa.</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="zone-reserva-finalizada">
					<div class="row">
						<div class="col-md-12">
							<h5 class="recordatorios">Recordatorios</h5>
							<p>Te confirmaremos esta reserva para tu consulta médica</p>
							
							
                            <div class="caja-recordatorios">
                                <div class="row">
                                    <div class="col-md-8 col-xs-12">
                                        <p><i class="icon-ico-telefono"></i><strong>+56 2 2913 00 00</strong></p>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <button href="#" class="btn boton-tipo-2 btn-editar">Editar</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-8 col-xs-12">
                                        <p><i class="icon-ico-correo"></i><strong>nicolasarevalovarela@gmail.com</strong></p>
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <button href="#" class="btn boton-tipo-2 btn-editar">Editar</button>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="recuerda-llegar">
					<div class="row">
                        <div class="col-md-8">
                            <p><i class="bg-ico-alerta-amarilla"></i> Recuerda llegar con 15 minutos de adelanto para poder gestionar tu bono y el pago.</p>
                        </div>
						<div class="col-md-4">
                            <button class="btn boton-tipo-2" id="anular">Anular hora</button>
						</div>
					</div>
				</div>
			</div>
  		</div>
  	</div>

    
<?php include('footer.php'); ?>