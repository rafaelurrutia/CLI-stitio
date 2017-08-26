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
                      <a href="" class="">Día</a>
                      <a href="" class="active">Mes</a>
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
                      FEBRERO
                    </div>
                  </div>
                </div>
                <div class="dias-semana">
                  <table>
                    <tbody>
                      <tr>
                        <td>LUN</td>
                        <td>MAR</td>
                        <td>MIE</td>
                        <td>JUE</td>
                        <td>VIE</td>
                        <td>SAB</td>
                        <td>DOM</td>
                      </tr>
                    </tbody>
                  </table>
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
            <div class="row">
              <h4 class="col-md-6 col-sm-4">Especialistas en Clínica Santa María</h4>
    					<!-- Medico y sus horas -->

              <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8 leyenda-calendario">
                <div class="row">
                  <div class="col-xs-4">
                    <i class="icon-ico-info"></i>
                    <p>Dias con horas<br>
                    disponibles</p>
                  </div>
                  <div class="col-xs-4">
                    <i class="icon-ico-info"></i>
                    <p>Dias sin horas<br>
                    disponibles</p>
                  </div>
                  <div class="col-xs-4">
                    <i class="icon-ico-info"></i>
                    <p>El especialista no <br>
                    atiende este dia</p>
                  </div>
                </div>
              </div>
            </div>

  					<div class="box-medicos">
  						<div class="row">
  							<div class="col-md-6 col-sm-4">
  								<div class="imagen">
  									<img src="../images/persona1.png" class="img-responsive">
  								</div>
  								<h5>María Irene Araya Bertucci</h5>
  								<p class="especialidad-dr">Dermatología Adulto</p>
  								<p>Universidad de Chile</p>
  							</div>
  							<div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
  								<div class="contenedor-calendario">
                      <div id="datetimepicker13" class="remove-th"></div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<!-- /Medico y sus horas -->
            <div class="box-medicos">
              <div class="row">
                <div class="col-md-6 col-sm-4">
                  <div class="imagen">
                    <img src="../images/persona1.png" class="img-responsive">
                  </div>
                  <h5>María Irene Araya Bertucci</h5>
                  <p class="especialidad-dr">Dermatología Adulto</p>
                  <p>Universidad de Chile</p>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6 col-sm-8">
                  <div class="contenedor-calendario">
                      <div id="datetimepicker14" class="remove-th"></div>
                  </div>
                </div>
              </div>
            </div>


  				</div>

  			</div>
        <div class="container-btn-ver-mas-r">
            <button id="ver-mas-r" class="btn boton-tipo-2 boton-flota-c">Ver más resultados</button>
        </div>
  		</div>
  	</div> 
  </div>


    
<?php include('footer.php'); ?>
