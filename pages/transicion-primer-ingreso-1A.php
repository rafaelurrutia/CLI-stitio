<?php include('transicion-header.php'); ?>
    <div id="dashboard-transicion">
        <div class="sub-header">
            <div class="container">
                <div class="breadcrumbs">
                    <span>Estás en: </span>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="">Mi clínica</a></li>
                    </ol>
                </div>
                <h2>¡Bienvenido a Mi Clínica!</h2>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="formulario-transicion primer-ingreso-1">
                        <div class="col-md-6 columna-izquierda">
                            <h3>Hola Nicolás Arevalo. Para poder usar Mi Clínica debes cambiar la contraseña.</h3>
                            <p>La contraseña debe cumplir lo siguiente</p>
                            <ul class="lista">
                                <li>Incluir caracteres en mayusculas o minúsculas</li>
                                <li>Incluir al menos una número o simbolo</li>
                                <li>Tener 8 caracteres</li>
                            </ul>
                            <hr class="visible-xs">
                        </div>
                        <div class="col-md-4 col-md-offset-2 columna-derecha">
                            <h3>Completa los siguientes datos</h3>
                            <h4><span>*</span> Indica campo obligatorio</h4>
                            <form action="">
                                <label class="obligatorio" for="">Ingresa tu nueva contraseña</label>
                                <div class="form-group ok">
                                    <input type="text" class="form-control" placeholder="Escribe tu nueva contraseña">
                                </div>
                                <label class="obligatorio" for="">Confirma tu nueva contraseña</label>
                                <div class="form-group error">
                                    <input type="text" class="form-control" placeholder="Confirma tu nueva contraseña">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-light-blue btn-form">Confirmar</button>
                                </div>
                            </form>
                        </div>
                        <!--
                            <div class="borde-medio hidden-xs hidden-sm">
                        </div>
    -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('transicion-footer.php'); ?>