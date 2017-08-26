<?php include('header.php'); ?>

<div id="pre-admision" class="pre-admision-1">
  <?php
  $class1='active';
  $class2='';
  $class3='';
  include('pre-admision-sub-header.php');
  ?> 
    <div class="half-bg2">
        <div class="container ">
            <div class="row">
                <div class="paso1-mgBottom">
                    <div class="col-md-5">
                        <div class="login-horas">
                            <p class="p-destacado-1">Para iniciar el proceso de <strong>Pre Admisión de hospitalización,</strong> debes completar el siguiente formulario con tus <strong>datos personales, información del titular de isapre</strong> y adjuntar los datos de la <strong>orden</strong> entregada por tu <strong>médico tratante.</strong></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="login-horas ">
                            <h4>Completa los siguientes datos</h4>
                            <h5><span>*</span> Indica campo obligatorio</h5>
                            <form  action="">
                                <label class="obligatorio" for="">Nombre del paciente</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escribe el nombre del paciente">
                                </div>
                                <label class="obligatorio" for="">RUT del paciente</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="15.776.425-K">
                                </div>
                                <label class="obligatorio" for="">Fecha de nacimiento</label>
                                <div class="form-group datepicker-corregido">
                                   <input type="text" class="form-control datetimepicker" id="datetimepicker1" placeholder="Elije la fecha de nacimiento">
                                </div>
                                <label class="obligatorio" for="">Nacionalidad</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Chilena">
                                </div>
                                <label class="obligatorio" for="">Correo electrónico</label>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Escribe tu correo electrónico">
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
                                
                                <h6>Datos del titular de la Isapre</h6>
                                
                                <label class="obligatorio" for="">¿El paciente es el titular de la Isapre?</label>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label for="inlineRadio1">Si</label>	
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label for="inlineRadio2">No </label>
                                    </div>
                                </div>
                                <label class="obligatorio" for="">Nombre del titular de la Isapre</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escriba el nombre del titular de la Isapre">
                                </div>
                                <label class="obligatorio" for="">RUT del titular</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="15.776.425-K">
                                </div>
                                <label class="obligatorio" for="">Fecha de nacimiento</label>
                                <div class="form-group datepicker-corregido">
                                   <input type="text" class="form-control datetimepicker" id="datetimepicker1-1" placeholder="Elije la fecha de nacimiento">
                                </div>
                                <label for="">Previsión</label>
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
                                <label for="">Teléfono</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Teléfono">
                                </div>
                                <label for="">Dirección</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Bellavista 1234">
                                </div>
                                <label for="">Región</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled>Seleccione una región</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <label for="">Comuna</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled>Seleccione una comuna</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
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