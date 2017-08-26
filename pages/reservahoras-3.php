<?php include('header.php'); ?>

    <div id="reserva-de-horas-rf">
    
        <?php
        $class1='visited';
        $class2='visited';
        $class3='active';
        $class4='';
        include('reservahoras-sub-header.php');
        ?>  

        <div class="container">
            <div class="divisor-o row">
                <div class="contenedor-formularios">
                <div class="row">
                    <div class="col-md-12">
                        <div class="contactarte">
                            <p><strong>Estás a un paso</strong> de terminar tu reserva de hora. Ingresa a tu cuenta Mi Clínica o reserva con tu RUT.</p>
                        </div>
                    </div>
                </div>
                </div>

                <div class="contenedor-formularios paso3-mgBottom-id">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="login-horas disabled">
                                <h4>Pide una hora adicional usando tu cuenta Mi Clínica</h4>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Escribe tu RUT">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Escribe tu Contraseña">
                                    </div>

                                    <div class="form-group text-right">
                                       <a href="" class="link link-clave">Olvidaste tu contraseña?</a>
                                        <button class="btn btn-light-blue btn-form">Ingresa</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                            <div class="col-central-o-mobil col-xs-12">
                                <div class="col-xs-12">
                                    <p></p>
                                </div>
                            </div>
                        
                            <div class="col-md-2 col-central">
                                <div class="col-md-12">
                                    <div class="col-md-6 col-central-separador">    
                                    </div>
                                    <div class="col-md-6">  
                                    </div>
                                </div>
                              
                                <div class="col-md-12">
                                    <div class="col-md-6 col-central-separador">
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                    </div>
                                </div> 
                            </div>

                        <div class="col-md-5">
                            <div class="login-horas">
                                <h4>Solicita una hora adicional usando tu RUT</h4>
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Escribe tu RUT">
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