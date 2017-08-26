<?php include('header.php'); ?>

    <div class="seg-cont-conv-2 seg-conv seg-conv-s-cot-seguro-2 seg-cont-conv-2-con-ben-si">
        <?php
        $class1='visited';
        $class2='active';
        $class3='';
        $class4='';
        include('seg-cont-conv-sub-header.php');
        ?>  

        <div class="container scc-2">
            
            <div class="bgc7">
                <p class="p-destacado-1 text-center center-block"><strong>Período a contratar </strong> 01/12/2016 a 31/03/2016</p>
            </div>
            <div class="row container_resena_datos">         
                <div class="row_resena_datos">
                    <div class="row seg-resena-datos">
                        <div class="container-fluid"><p class="p-destacado-1">Contratante</p></div> 
                        <div class="col-md-8">
                            <i class="icon-ico-paciente"></i>
                            <h5></h5>
                            <p><strong>Nicolás Arévalo Varela</strong></p>
                            <p>Isapre Banmédica</p>
                        </div>
                        <div class="col-md-4 hidden-xs hidden-sm">
                            <h5></h5>
                            <button class="btn boton-tipo-2 boton-flota-rc">Modificar datos</button>
                        </div>
                        <div class="col-md-2 sin-icono">
                            <h5> Teléfono </h5>
                            <p><strong>979678511</strong></p>
                        </div>
                        <div class="col-md-4 sin-icono">
                            <h5> Correo Electrónico </h5>
                            <p><strong>nicolasarevalovarela@gmail.com</strong></p>
                        </div>
                        <div class="col-md-6 sin-icono">
                            <h5> Dirección </h5>
                            <p><strong>Llano Subercaseaux 3747 / San Miguel / Región Metropolitana</strong></p>
                        </div>
                        <div class="col-xs-12 visible-xs visible-sm hidden-md hidden-lg">
                            <h5></h5>
                            <button class="btn boton-tipo-2 boton-flota-c">Modificar datos</button>
                        </div>
                    </div>
                    
                </div>
                <div class="scc2cmc-modificador">
                    <div class="bgc7">
                        <div class="container-fluid">
                            <p class="p-destacado-1">Modificar datos del contratante</p>
                             <button class="btn boton-flota-rc boton-tipo-2-agregar  inhabilitado"><span></span>Agregagando beneficiario</button>
                            <div class="scc2cmc-modificador-form container-general">

                                <form action="">

                                    <div class="form-group col-sm-4">
                                        <label for="">RUT del paciente</label>
                                        <input type="text" class="form-control" placeholder="15.776.425-k">
                                    </div>

                                    
                                    <div class="form-group col-sm-4 hidden-xs">
                                    </div>

                                    
                                    <div class="form-group col-sm-4 hidden-xs">
                                    </div>   

                                    <div class="form-group col-sm-4">
                                    <label for="">Nombres</label>
                                        <input type="text" class="form-control" placeholder="Nicolás">
                                    </div>

                                    
                                    <div class="form-group col-sm-4">
                                    <label for="">Apellido paterno</label>
                                        <input type="text" class="form-control" placeholder="Arévalo">
                                    </div>

                                    
                                    <div class="form-group col-sm-4">
                                    <label for="">Apellido materno</label>
                                        <input type="text" class="form-control" placeholder="Varela">
                                    </div>   

                                    <div class="col-sm-4 form-group datepicker-corregido">
                                        <label class="" for="">Fecha de nacimiento</label>
                                            <input type="text" class="form-control datetimepicker" id="datetimepicker1" placeholder="Elije la fecha de nacimiento">
                                    </div>

                                    <div class="col-sm-8 form-group">
                                        <label>Género</label>  
                                            <div class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label for="inlineRadio1">Masculino</label>  
                                            </div>
                                            <div class="radio-inline">
                                              <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label for="inlineRadio2">Femenino </label>
                                            </div>
                                    </div>                                    
 
                                    <div class="form-group col-sm-4">
                                    <label for="" class="obligatorio">Previsión</label>
                                        <input type="text" class="form-control" placeholder="Selecciona la previsión">
                                    </div>

                                    
                                    <div class="form-group col-sm-8">
                                    <label for="">Previsión</label>
                                        <input type="text" class="form-control" placeholder="Metropolitana">
                                    </div>
 

                                </form>

                            </div>
                            <button class="btn boton-tipo-2 boton-flota-rc">Modificar</button>
                        </div>
                    </div> 
                </div>                         
            </div>
            <div class="col-sm-12">
                <div class="form-group acepto-cond">
                    <div class="checkbox-inline">
                        <input type="checkbox" name="no-robot" id="no-robot" value="option1">
                        <label for="no-robot">Acepto las <a href="">condiciones particulares</a> del Convenio Escolar o Convenio Accidentes</label>
                        <button class="btn boton-tipo-2 boton-flota-rc">Agregar</button>
                    </div>
                </div>
            </div>
            

        </div> <!-- container -->

    </div>

<?php include('footer.php'); ?>