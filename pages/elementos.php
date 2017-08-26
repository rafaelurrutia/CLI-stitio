<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <META http-equiv="cache-control" content="no-cache">
    


    <title>Clinica Santa Maria</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,600,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../css/master.css" rel="stylesheet">
    <link href="../css/master.1.css" rel="stylesheet">
    <!-- <link href="../css/bootstrap-datepicker.css" rel="stylesheet">  -->

     <link href="../css/main.css" rel="stylesheet">

  
  </head>
  <body>


	<div class="container elm">
		<div class="row">
			<div class="col-md-12">
				<h3 class="elm-tabla-titulo-1"><strong>Título de tablas</strong></h3>
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title sin-hover-pointer">Formularios</h3>
				  </div>
				  <div id="elementos_reusables" class="panel-body">
				    <div class="row">
						<div class="col-md-8">
							<p><strong><span style="color:red;">input</span>.form-control</strong></p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Escribe tu RUT">
							</div>
						</div>

						<div class="col-md-8">
							<p><strong><span style="color:red;">input</span>.form-control (Disabled)</strong></p>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Escribe tu RUT" disabled>
							</div>
						</div>

						<div class="col-md-8">
							<p><strong><span style="color:red;">input</span>.form-control.error</strong></p>
							<div class="form-group">
								<label class="error" for="formPublico_rut">El formato es invalido.</label>
								<input type="text" class="form-control error" placeholder="Escribe tu RUT">
							</div>
							<br>
							<br>
						</div>

						<div class="col-md-8">
							<p><strong>.mensaje-de-error</strong></p>
							<div class="mensaje-de-error">
								<p>Este es un mensaje de error</p>
								<p>Segunda linea</p>
							</div>
							<div class="form-group">
								<label class="error" for="formPublico_rut">El formato es invalido.</label>
								<input type="text" class="form-control error" placeholder="Escribe tu RUT">
							</div>
							<br>
							<br>
						</div>

						<div class="col-md-8">
							<p><strong>.radio-inline</strong></p>
							<div class="form-group">
								<div class="radio-inline">
								  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label for="inlineRadio1">Masculino</label>	
								</div>
								<div class="radio-inline">
								  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label for="inlineRadio2">Femenino </label>
								</div>
							</div>
						</div>

						<div class="col-md-8">
							<p><strong>.checkbox-inline</strong></p>
							<div class="form-group">
								<div class="checkbox-inline">
									<input type="checkbox" name="no-robot" id="no-robot" value="option1"> 
									<label for="no-robot">No soy robot</label>	
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<p><strong><span style="color:red;">select</span>.form-control</strong></p>
							<select name="" id="" class="form-control">
								<option disabled>Día</option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
							</select>
						</div>
				    </div>
				  </div>
				</div>
			</div>

		</div>

		<p></p>
		
		<!-- comienzo cajas de información -->
        <h3 class="elm-tabla-titulo-1"><strong>Título de tablas</strong></h3>
        <div class="caja-container-info ">
            <div class="container">
                <div class="col-md-3">
                    <p><strong>Código</strong></p>
                    <p>01-03-003</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Descripción</strong></p>
                    <p>Consulta General Dermatología</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Valor</strong></p>
                    <p>$24.200 </p>
                </div>
                <div class="col-md-3">
                    <p><strong>Código</strong></p>
                    <p>01-03-003</p>
                </div>
            </div>
        </div>
        <div class="container">
	        <div class="tabla-lista-leyenda">
				<ul>
					<li>Tu previsión de salud (Banmédica) tiene convenio con Clínica Santa María para consultas médicas.</li>
					<li>Puedes adquirir el bono con tu huella digital.</li>
	                <li>Si el plan de salud es preferente en Clínica Santa María sólo se hará efectivo en la sucursal de Providencia, no en el Centro Médico La Dehesa.</li>
				</ul>
			</div>
		</div>
		<!-- final cajas de información -->
		<!-- comienzo panel sub-header2con h3 y select  -->
		<div class="row ">
			<div class="container ">
				<h2>Sub-header2con h3 y select </h2>
			</div>
		</div>		
	    <div class="containr-fluid sub-header2-h3-select">
	      <div class="container">
	        <h3 class="pull-left">Resultados para Cuna Procedimientos</h3> 
	        <div class="form-group col-md-6 col-xs-12 pull-right in-sub-header-2">
	            <div class="flota-rc container-select">
	                <label for="" class="ordenar-por">Elige un paciente</label>
	                <select name="" id="" class="form-control pull-righ ordenar-por">
	                    <option>Nicolás Hernández</option>
	                    <option>Mariana Gil</option>
	                </select>
	            </div>
	        </div>
	      </div>
	    </div>    
	    <h3></h3>
	    <!-- final cajas de sub-header2con h3 y select -->
		<!-- comienzo panel colapsable -->
        <div class="panel-group nuevo-panel" id="accordion4">
            <div class="panel panel-default">
              	<div class="panel-heading">
                	<h4 class="panel-title">
		                  	<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne">
		                    Infarto
		                    <span class="close-colapse">
								<span></span>
								<span></span>
		                    </span>
	                  	</a>
                	</h4>
              	</div>
            </div>
			<div id="collapseOne" class="panel-collapse collapse">
              	<div class="panel-body">
					<img src="../images/infarto.png" alt="" class="align-left img-responsive">
					<p>El infarto de miocardio (IAM) constituye la principal causa de muerte en nuestro país. Afecta preferentemente al sexo masculino, pero también a mujeres en período postmenopáusico y después de los 60-65 años.
					<br><br>Esta patología se manifiesta tras la obstrucción u oclusión de un vaso sanguíneo en el corazón. Como consecuencia de lo anterior, se produce una interrupción del flujo sanguíneo y la posterior muerte y pérdida de un segmento del músculo cardíaco. <br><br>
					Esta obstrucción se debe a la formación de un coágulo, en una zona donde se acumula colesterol en las paredes de las arterias.</p>
              	</div>
            </div>            
        </div>
        <!-- final panel colapsable -->


		<p></p>
		
		<!-- comienzo inputs-->

		<div class="row bg-primary">
			<div class="container">
				<div class="form-group input-container-1  boton-flota-rc">
                    <input id="" type="email" class="form-control input-1-bb-bgt-tb" placeholder="Busca!"><i class="icon-ico-search"></i>
                </div>
			</div>
		</div>

		<!-- final inputs -->
		<!-- comienzo botones-->
		<div class="row ">
			<div class="container ">
				<h2>Cintillo principal con cuadro azul</h2>
			</div>
		</div>
	    <div class="cintillo-principal-cat-body">
	        <div class="">
	            <div class="cat-dtop-container">
	                <div class="cat-dtop-img">
	                    <div class="container">
	                        <div class="col-sm-12 col-md-5 recuadro-azul">
	                            <h3>RECIÉN NACIDO</h3>
	                            <p>Búscame entre las guaguas nacidas en Clínica Santa María en este último mes.
	                            Basta con que escribas el apellido de mi papá, el apellido de mi mamá, o la fecha en que nací. (Ingresar apellidos con acento).
	                            </p>
	                            
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>   
	    </div>
	    <!-- final inputs -->
		<!-- comienzo botones-->
		<div class="row ">
			<div class="container ">

				<h2>Botones</h2>
				<p><strong>.btn (.btn-blue .btn-light-blue .btn-green-blue)</strong></p>
				<div class="bg-info col-md-12">
				<p></p>
					<button href="#" class="btn btn-blue">Botón blue</button>
					<button href="#" class="btn btn-light-blue">Botón light-blue</button>
					<button href="#" class="btn btn-green-blue">Botón green-blue</button>
					<button href="#" class="btn">Botón</button>
				<p></p>
				</div>
				<p></p>
				<div class="bg-info col-md-12">
					<p></p>
						<button href="#" class="btn boton-tipo-1 ">Botón tipo1</button>
						<button href="#" class="btn boton-tipo-2 ">Botón tipo2</button>
						<button href="#" class="btn boton-tipo-3 ">Botón tipo3</button>
						<button href="#" class="btn boton-tipo-4 ">Botón tipo4</button>
						<button href="#" class="btn boton-tipo-5 ">Botón tipo5</button>
						<button href="#" class="btn boton-tipo-6 ">Botón tipo6</button>
					<p></p>
				</div>
				<div class="bg-info col-md-12">
					<p>Botón con float right para desktop y centrado en mobile</p>

						<button class="btn boton-tipo-2 boton-flota-rc">Botón tipo2</button>
					<p></p>
				</div>
				<div class="bg-info col-md-12">
					<p>Botón con float right para desktop y centrado en mobile</p>

						<button class="btn boton-tipo-2 boton-flota-lc">Botón tipo2</button>
					<p></p>
				</div>				
				<div class="bg-info col-md-12">
					<p>Botón centrado siempre</p>
						<button class="btn boton-tipo-2 boton-flota-c">Botón tipo2</button>
					<p></p>
				</div>				

			</div>
		</div>
		<!-- final botones -->
		
		<!-- comienzo tooltips -->
		<div class="container">
			<div class="row">
				<p></p>
				<h2>Tooltips</h2>
				<p></p>
		        <div class="">
		            <a href="" data-toggle="tooltip" data-placement="bottom" title='Corresponde al número de hospitalización que está registrado en la hoja "Recibo de documento", por ejemplo "727770-7"' class="link link-clave icon-ico-info-2 cual-num-admin">&nbsp;¿Cuál es el número de admisión?</a>

		        </div>
		        <p></p>
		    </div>
	    </div>
		<!-- final tooltips -->

		<!-- comienzo Reseña de datos -->
		<h1></h1>

		<div id="elm_container_resena_datos">
			<div class="col-md-12 row">
		    	<h2>Reseña de datos</h2>
		    	<h2></h2>
		    </div>
			<p></p>
			    <div class="container">
			      <h4 class="container_resena_datos_comentario_pre col-xs-12 col-md-10">Comentario previo al título de la reseña de datos.</h4>
			    </div>
			<div class="col-md-12 row">
		    	<h3 class="col-xs-12 container_resena_datos_titulo"><strong>Título de reseña de datos</strong></h3>
		    </div>

		    <!-- A partir de aquí el cuerpo de reseña de datos -->
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
                        <h5> </h5>
                        <p><strong></strong></p>
                      </div>
                      <div class="col-md-5">
                        <i class="icon-ico-info-2"></i>
                        <h5> Número de admisión </h5>
                        <p><strong> 861.048-7 </strong></p>
                      </div>
                    
                  </div>
              </div>
              <div class="row_resena_datos">
                  <div class="row">
                      <div class="col-md-3 sin-icono">
                        <h5> Número de cobro </h5>
                        <p><strong> 494615 </strong></p>
                      </div>
                      <div class="col-md-3 sin-icono">
                        <h5> Cruz blanca </h5>
                        <p><strong> 05/05/2014 </strong></p>
                      </div>
                      <div class="col-md-3 sin-icono">
                        <h5> Estado </h5>
                        <p><strong> Pagada </strong></p>
                      </div>
                      <div class="col-md-3 sin-icono">
                        <h5> Saldo </h5>
                        <p><strong> 0 </strong></p>
                      </div>                  
                    
                  </div>
              </div>
            </div>
        </div>
        <h1></h1>
        <!-- final Reseña de datos -->

	    <div class="row">
		    <div class="col-md-12">
		    	<h2>Datepicker</h2>
		    </div>
	        <div class='col-sm-7'>
	        	<p><strong>.form-group.calendar</strong></p>
				<div class="form-group calendar">
	            	<input type='text' class="form-control" id='datetimepicker4' />
	            </div>
	        </div>
			
			<div class="col-sm-7">
		    	<p><strong>.form-group.calendar (Step)</strong></p>
		        <div class="form-group calendar">
		            <input type='text' class="form-control" id='datetimepicker9'/>
		        </div>
		    </div>

	        <div class="col-sm-7">
	        	<p><strong>.form-group.date</strong></p>
	            <div class="form-group date" >
	                <input type='text' class="form-control" id='datetimepicker3'/>
	            </div>
	        </div>

		    <div class="col-md-12">
		    	<br><br>
		    	<div class="row">
		            <div class="col-md-5">
		            	<p><strong> Datepicker Inline</strong></p>
		                <div id="datetimepicker12"></div>
		            </div>


		            <div class="col-md-5">
		            	<p><strong> Datepicker Inline sin cabecera</strong></p>
		                <div id="datetimepicker13" class="remove-th"></div>
		            </div>
		    	</div>
		    </div>

			<div class="col-sm-4 form-group datepicker-corregido">
	            <label class="" for="">Fecha de nacimiento</label>
	                <input type="text" class="form-control datetimepicker" id="datetimepicker1" placeholder="Elije la fecha de nacimiento">
	        </div>



	        <div class="col-md-12">
	        	<br><br><br><br><br>
	        	<br><br><br><br><br>
	        	<br><br><br><br><br>
	        </div>
	    </div>
	</div>

    
<?php 
$extra_content = <<<EOT

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

	<!-- Datepicker:  http://eonasdan.github.io/bootstrap-datetimepicker/  -->
    <script type="text/javascript" src="../js/moment.js"></script>
    <script type="text/javascript" src="../js/bootstrap-datetimepicker.js"></script>
    <script src="../js/locale/es.js"></script>

    <script type="text/javascript">
        $(function () {
            //
            $('#datetimepicker3').datetimepicker({
                format: 'LT',
                locale: 'es',
            });
            //
            $('#datetimepicker4').datetimepicker({
                locale: 'es',
            });

            $('#datetimepicker12').datetimepicker({
                inline: true,
                viewMode: 'years',
                locale: 'es',
                minDate: new Date()
            });
            $('#datetimepicker13').datetimepicker({
                inline: true,
                viewMode: 'days',
                locale: 'es',
                minDate: new Date()
            });
			$('#datetimepicker9').datetimepicker({
                viewMode: 'years',
                locale: 'es',
            });
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip(); 
			});
        });
    </script>

EOT;

include('footer.php'); 
?>

	

 


  </body>
</html>