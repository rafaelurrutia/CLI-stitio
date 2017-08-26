<?php include('header.php'); ?>

  <div class="reserva-de-horas">

  <?php
  $class1='visited';
  $class2='active';
  $class3='';
  $class4='';
  include('reservahoras-sub-header.php');
  ?>  
  </div>
  <div class="layout-resultado">
  	<div class="fixed-filter">

      <div class="barra-cabecera-gris">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6 col-sm-4">
                  <strong>Resultados para:</strong>
                  <h3>Dermatología  Adulto</h3>
                  <p class="locacion"><span class="icon-location"></span> Clínica Santa María Providencia <br>
                  Centro Médico La Dehesa </p>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
                  <div class="seleccion-formato">
                    <div class="zona-botones">
                      <a href="" class="active">Día</a>
                      <a href="" class="">Mes</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="barra-azul-fecha">
        <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-4">

              </div>
              <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
                <span class="btn-ante-hora">prev</span>
                <span class="btn-prox-hora">next</span>
                <div class="fechas-horas">
                  <div class="columna">
                    <div class="day">
                      LUNES 24 ENERO
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="barra-filtro">
        <div class="container">
          <div class="row">
              <div class="col-md-12">
                <a href="" class="filtro-btn"><span class="icon-filtro-1"></span> Filtrar resultados</a>
                <div class="el-filtro">
                  
                  <div class="row">
                    <span class="guia-filtro">Filtrar por:</span> 

                    <div class="col-md-3">
                      <p><strong>Sexo del Especialista</strong></p>
                      <select name="" id="" class="form-control">
                        <option value="">Ninguno</option>
                        <option value="">Hombre</option>
                        <option value="">Mujer</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <p><strong>Idioma</strong></p>
                      <select name="" id="" class="form-control">
                        <option value="">Español</option>
                        <option value="">Ingles</option>
                        <option value="">Aleman</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

          </div>
        </div>
      </div>
  	</div>

  	<div class="resultados">
  		<div class="container">
  			<div class="row">
  				<div class="col-md-12">
            <h4>Especialistas en Clínica Santa María</h4>
  					<!-- Medico y sus horas -->
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/persona1.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor">
  									<div class="columna">
		  								<div class="day half">
                        <span>Clinica Santa María</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                        <div class="info-ui">Desliza horizontalmente para ver mas horas </div>
		  								</div>
                      <div class="day half">
                        <span>La Dehesa 2</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                        <div class="info-ui">Desliza horizontalmente para ver mas horas </div>
                      </div>
  									</div>
  								</div>
  								<div class="open-horas">
  									<span>Ver más horas en el día</span>
  								</div>

  							</div>
  						</div>
  					</div>
  					<!-- /Medico y sus horas -->
  					<!-- Medico y sus horas -->
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/persona2.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor">
  									<div class="columna">
                      <div class="day half">
                        <span>Clinica Santa María</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                        <div class="info-ui">Desliza horizontalmente para ver mas horas </div>
                      </div>
                      <div class="day half">
                        <span>La Dehesa</span>
                        <a href="#" class="no-atiende">
                          
                          <p>Este especialista no atiende en esta sucursal</p>
                        </a>
                      </div>
  									</div>
  								</div>
  								<div class="open-horas">
  									<span>Ver más horas en el día</span>
  								</div>
  							</div>
  						</div>
  					</div>
  					<!-- /Medico y sus horas -->
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/persona3.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor sin-horas">
  									<div class="columna">
                      <div class="day half">
                        <span>Clinica Santa María</span>
                        <a href="#" class="prox-hora">
                          <p>Próxima Hora:</p>   
                          <p>26 de Enero</p>
                        </a>
                      </div>
                      <div class="day half">
                        <span>La Dehesa</span>
                        <a href="#" class="prox-hora">
                          <p>Próxima Hora:</p>   
                          <p>26 de Enero</p>
                        </a>
                      </div>
                      <a href="">¿Necesita una hora antes?</a>
  									</div>
  								</div>

  							</div>
  						</div>
  					</div>
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/dummy-men.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor no-web">
  									<div class="columna">
                      <div class="via-telefonica">
                        <p>Este profesional no tiene disponible su agenda por este canal.</p>
                        <p>Por favor, para reservar una hora comuníquse al.</p>
                        <p class="big-phone"><a href="tel:+56229130000" title="">+56 2 2913 00 00</a></p>
                      </div>
  									</div>
  								</div>

  							</div>
  						</div>
  					</div>
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/dummy-men.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor no-web">
  									<div class="columna">
                      <div class="via-telefonica">
                        <p>Este profesional no tiene disponible su agenda por este canal. Por favor, para reservar una hora comuníquese al:</p>
                        <p class="big-phone"><a href="tel:+56229130000" title="">+56 2 2913 00 00</a></p>
                      </div>
  									</div>
  								</div>

  							</div>
  						</div>
  					</div>
            <h4>Especialistas en Centro Médico La Dehesa</h4>
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/dummy-men.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor">
  									<div class="columna">
                      <div class="day half">
                        <span>Clinica Santa María</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                        <div class="info-ui">Desliza horizontalmente para ver mas horas </div>
                      </div>
                      <div class="day half">
                        <span>La Dehesa</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                        <div class="info-ui">Desliza horizontalmente para ver mas horas </div>
                      </div>
  									</div>
  								</div>

  							</div>
  						</div>
  					</div>
  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
                  <div class="info-mini-medico">
                    <div class="imagen">
                      <img src="../images/dummy-men.png" class="img-responsive">
                    </div>
                    <h5>María Irene Araya Bertucci</h5>
                    <p class="especialidad-dr">Dermatología Adulto</p>
                    <p>Universidad de Chile</p>
                  </div>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="horas-doctor">
  									<div class="columna">
                      <div class="day half">
                        <span>Clinica Santa María</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                      </div>
                      <div class="day half">
                        <span>La Dehesa</span>
                        <div class="slide-horas">
                          <a href="#" class="hora-reserva">09:00</a>
                          <a href="#" class="hora-reserva">09:30</a>
                          <a href="#" class="hora-reserva">10:00</a>
                          <a href="#" class="hora-reserva">11:00</a>
                          <a href="#" class="hora-reserva">11:30</a>
                          <a href="#" class="hora-reserva">12:00</a>
                          <a href="#" class="hora-reserva">14:00</a>
                          <a href="#" class="hora-reserva">14:30</a>
                          <a href="#" class="hora-reserva">15:00</a>
                          <a href="#" class="hora-reserva">16:00</a>
                          <a href="#" class="hora-reserva">16:30</a>
                          <a href="#" class="hora-reserva">17:00</a>
                        </div>
                      </div>
  									</div>
  								</div>

  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div> 
  </div>

    
<?php include('footer.php'); ?>