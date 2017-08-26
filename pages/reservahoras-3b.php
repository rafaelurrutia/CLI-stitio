<?php include('header.php'); ?>

    <div id="reserva-de-horas-rf">
        <?php
        $class1='visited';
        $class2='visited';
        $class3='active';
        $class4='';
        include('reservahoras-sub-header.php');
        ?>  
        <div class="half-bg2">
            <div class="container">
                <div class="row">
                    <div class="contenedor-formularios paso3-mgBottom">
                        <div class="col-md-5">
                            <div class="contactarte">
                                <p>Para reservar una hora debemos <strong>confirmar tus datos.</strong></p>
                            </div>
                        </div>


                        <div class="col-md-6 col-md-offset-1">
                            <div class="login-horas">
                                <h4 id="titulo-form-comp-datos">Completa los siguientes datos</h4>
                                <h5><span>*</span> Indica campo obligatorio</h5>
                                <form action="">
                                    <label for="">RUT del paciente</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="15.776.425-k">
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

                                    <label class="obligatorio for="">Sexo</label>
                                    <div class="form-group">
                                        <div class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label for="inlineRadio1">Masculino</label>
                                        </div>
                                        <div class="radio-inline">
                                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label " for="inlineRadio2">Femenino </label>
                                        </div>
                                    </div>

                                    <label class="obligatorio" for="">Fecha de nacimiento</label>
                                    <div class="form-group calendar">
                                        <input type="text" class="form-control" id="datetimepicker9" placeholder="Elije la fecha de nacimiento del Paciente">
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
                                            <option disabled="">Selecciona tu previsión</option>
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
                                        <button class="btn btn-light-blue btn-form">Continuar</button>
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