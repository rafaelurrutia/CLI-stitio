<?php include('header.php'); ?>

<div class="reciennacido-1 reciennacidos">
    <div class="sub-header">
	  	<div class="container">
	  		<div class="breadcrumbs">
	  			<span>Estás en: </span>
	  			<ol>
                    <li><a href="">Home</a></li>
                    <li><a href="">Infórmate</a></li>
                    <li class="active"><a href="">Recién nacido</a></li>
	  			</ol>
	  		</div>
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
    <div class="rn1"> 
        <div class="container-fluid row  bgc7 rn1-buscar-container">
          	<div class="container">
                <div class="container-fluid row rn1-buscar-rb-container">
                    <div class="rn1-buscar-p-apellido">
                        <div class="col-dm-12 col-lg-5 rb-pequenos-container flota-lc">

                            <span class="flota-rc">
                            <p>Por apellido del padre o la madre</p> 
                            <span>
                                <input type="radio" id="padre" name="padres" />
                                <label for="padre"><span></span>Padre</label>
                                <input type="radio" id="madre" name="padres" />
                                <label for="madre"><span></span>Madre</label>
                            </span>    
                            </span>
                            
                        </div>
                        <div class="col-md-9 col-lg-5 flota-lr">
                                <input type="text" class="form-control" placeholder="Escribe el apellido">
                        </div>
                        <div class="col-md-3 col-lg-2  boton-flota-lr">
                            <button class="btn boton-tipo-2 boton-flota-rc">Buscar</button>
                        </div>
                    </div>   

                    <div class="o-central col-xs-12">
                        <div class="col-xs-6 "></div>
                        <div class="col-xs-6 "><span></span></div>
                    </div>
                    <div class="rn1-buscar-p-fecha">
                        <div class="col-lg-5  rb-pequenos-container flota-lr"><p>Por fecha de nacimiento</p> 

                        </div>

                        <div class="col-sm-9 col-lg-5 flota-lr rn-datepicker form-group datepicker-corregido">
                            <input type="text" class="form-control datetimepicker" id="datetimepicker1" placeholder="Elije la fecha de nacimiento">
                        </div>

                        <div class="col-md-3 col-lg-2 boton-flota-lr">
                            <button class="btn boton-tipo-2 boton-flota-rc">Buscar</button>
                        </div>
                    </div>  
                </div>
          	</div>
        </div>
      
        <div class="container-fluid bgr1 cintillo-hor-at">                 
            <div class="container ">
                <div class="na3b-contenidos-container">
                    <div class="col-md-3 col-izq">
                        <h4 class="cc3">Horario de visitas</h4>
                    </div>

                    <div class="col-md-9 col-der">
                        <p>
                            11:30 a 19:00 horas <br><br>
                            Solo los padres de los pacientes..
                        </p>                        
                    </div>                    
                </div>
            </div>
        </div>  
        <div class="ccm">
            <div class="container contacto-conmapa">
                <div class="col-md-3 col-izq">
                    <h4 class="cceleste3">¿Dónde estamos?</h4>
                </div>                
                <div class="col-md-9 col-der">    
                    <div class="ccm-google-maps">
                        
                    </div>
                    <div class="row ccm-tel-dir">
                        <div class="col-sm-6">
                            <i class="icon-ico-telefono cceleste3"></i>
                            <h4 class="cceleste3">Teléfono</h4>
                            <h4>+562 2913 0000</h4>
                            <p></p>
                        </div>

                        <div class="col-sm-6">
                            <i class="icon-location cceleste3"></i>
                            <h4 class="cceleste3">Ubicación</h4>
                            <h4>Clínica Santa María</h4>
                            <p>Av. Santa María 0550, Providencia </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>   
</div>

    
<?php include('footer.php'); ?>