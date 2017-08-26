<?php include('header.php'); ?>

<div id="sobrecupo" class="sobrecupo sobrecupo-2">

    <div class="sub-header">
        <div class="container">
            <div class="breadcrumbs">
                <span>Estás en: </span>
                <ol>
                    <li><a href="">Home</a></li>
                    <li><a href="">Necesitas atención</a></li>
                    <li class="active"><a href="">Hora especial</a></li>
                </ol>
            </div>
            <h2>Hora especial</h2>
            <a href="" class="btn btn-blue">Hacer una nueva búsqueda</a>
        </div>
        <!-- WIZARD -->
        <div class="wizard">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol>
                            <li class="visited"> <span>1.</span> Identificación </li>
                            <li class="active"> <span>2.</span> Datos del paciente </li>
                            <li> <span>3.</span>  ¡Listo! </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="wizard-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p>Paso <span>2</span> de  <span> 3</span></p>
                        <p><strong>Datos del Paciente</strong></p>
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
                            <p>Dermatología adulto</p>
                            <p><a href=""><i class="icon-location"></i>Clinica Santa María</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="half-bg2">
        <div class="container">
            <div class="row">
                <div class="paso2-mgBottom">
                    <div class="col-md-5">
                        <div class="login-horas">
                            <p class="p-destacado-1">Para poder reservar una hora especial debemos confirmar algunos datos. <br> Por favor completa el formulario según corresponda.</p>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="login-horas">
                            <h4>Completa los siguientes datos</h4>
                            <h5><span>*</span> Indica campo obligatorio</h5>
                            <form action="">
                                <label for="">RUT del consultante</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="15.776.425-K">
                                </div>
                                <label for="">Nombres</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nicolas">
                                </div>
                                <label for="">Apellido paterno</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Arévalo">
                                </div>
                                <label for="">Apellido materno</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Varela">
                                </div>
                                
                                <label class="obligatorio" for="">Sexo</label>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label for="inlineRadio1">Masculino</label>	
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label for="inlineRadio2">Femenino </label>
                                    </div>
                                </div>
                                
                                <label class="obligatorio" for="">Fecha de nacimiento</label>
                                <div class="form-group calendar">
                                    <input type="text" class="form-control" id="datetimepicker9">
                                </div>
                                
                                <label class="obligatorio" for="">Teléfono</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escribe tu Teléfono">
                                </div>
                                
                                <label class="obligatorio" for="">Correo electrónico</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Escribe tu Correo electrónico">
                                </div>
                                
                                <label class="obligatorio" for="">Previsión</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled>Selecciona tu previsión</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                
                                <label class="obligatorio" for="">Motivo</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled>Selecciona un motivo de visita</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox-inline">
                                        <input type="checkbox" name="no-robot" id="no-robot" value="option1"> 
                                        <label for="no-robot">No soy robot</label>	
                                    </div>
                                </div>

                                <div class="form-group text-right">		
                                    <button class="btn btn-light-blue btn-form">CONTINUAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>