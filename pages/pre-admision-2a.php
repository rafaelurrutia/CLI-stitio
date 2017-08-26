<?php include('header.php'); ?>

<div id="pre-admision" class="pre-admision-2a">
    <?php
    $class1='visited';
    $class2='active';
    $class3='';
    include('pre-admision-sub-header.php');
    ?> 
    <div class="half-bg2"> 
        <div class="container">
            <div class="row">
                <div class="paso2a-mgBottom">
                    <div class="col-md-5">
                        <div class="login-horas">
                            <p class="p-destacado-1">Durante el proceso de Pre Admisión, podrás resolver las dudas de tu hospitalización, y se te confirmará la fecha y hora de ingreso. 
                                <br><br>
                            Además, se te comunicarán los trámites que debes realizar antes de tu hospitalización y los objetos personales que debes traer a la clínica.</p class="p-destacado-1">
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-2">
                        <div class="login-horas ">
                            <h4 class="hidden-xs">Completa los siguientes datos</h4>
                            <h5 class="hidden-xs"><span>*</span> Indica campo obligatorio</h5>
                            <hr class="visible-xs">
                            <form action="">
                                <label class="obligatorio" for="">Diagnóstico médico</label>
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Diagnóstico médico"></textarea>
                                </div>
                                
                                <label class="obligatorio" for="">De acuerdo a la indicación médica, su hospitalización será</label>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> <label for="inlineRadio1">Transitoria</label>	
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> <label for="inlineRadio2">Más de un día </label>
                                    </div>
                                </div>
                                
                                <label class="obligatorio" for="">Fecha de ingreso</label>
                                <div class="form-group datepicker-corregido datetimepicker">
                                    <input type="text" class="form-control datetimepicker" id="datetimepickerDate-1" placeholder="Elige la fecha de ingreso del paciente">
                                </div>
                                
                                <label class="obligatorio" for="">Hora de ingreso</label>
                                <div class="form-group datepicker-corregido datetimepicker date">
                                    <input type="text" class="form-control" id="datetimepickerHour-1" placeholder="Elige la hora de ingreso">
                                </div>
                                
                                <label class="obligatorio" for="">Fecha de cirugía</label>
                                <div class="form-group datepicker-corregido">
                                    <input type="text" class="form-control datetimepicker" id="datetimepickerDate-2" placeholder="Elige la fecha de cirugía">
                                </div>
                                
                                <label class="obligatorio" for="">Hora de cirugía</label>
                                <div class="form-group datepicker-corregido datetimepicker date">
                                    <input type="text" class="form-control" id="datetimepickerHour-2" placeholder="Elije la fecha de nacimiento">
                                </div>
                                
                                <label class="obligatorio" for="">Médico tratante</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escriba el nombre del médico tratante">
                                </div>
                                
                                <label class="obligatorio" for="">Orden médica</label>
                                
                                <div class="form-group file">
                                    <input type="file" id="file">
                                    <span class="msg">Solo formato JPEG, PNG o PDF. <br> máximo 2mb.</span>
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

<?php include('footer.php'); ?>