<?php include('transicion-header.php'); ?>
    <div id="dashboard-transicion">
        <div class="sub-header">
            <div class="container">
                <div class="breadcrumbs">
                    <span>Estás en: </span>
                    <ol>
                        <li><a href="">Home</a></li>
                        <li><a href="">Mi clínica</a></li>
                        <li class="active"><a href="">Perfil</a></li>
                    </ol>
                </div>
                <h2>Mi Clínica</h2>
            </div>
        </div>
        <div class="sub-header-2">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-10">
                        <p>Puedes editar tus datos de contacto. Si necesitas modificar datos personales (Nombre o RUT), puedes llamar a nuestro call center o asistir a nuestras sucursales.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="half-bg2">
            <div class="container ">
                <div class="row">
                    <div class="formulario-transicion editar-perfil">
                        <div class="col-md-6 columna-izquierda text-center">
                            <h3>Modifica tu imagen</h3>
                            <img src="../images/usuario-placeholder2.png" alt="">
                            <a href="" class="btn btn-light-blue btn-form">Modificar</a><br>
                            <input type="file" id="input-file" class="input-file" data-multiple-caption="{count} Archivos Seleccionados" multiple >
                            <label for="input-file" class="btn btn-light-blue btn-form"><span>Seleccione un archivo</span></label>
                            <hr class="visible-xs">
                        </div>
                        <div class="col-md-4 col-md-offset-1 columna-derecha">
                            <h3>Edita y/o completa tus datos</h3>
                            <form action="">
                                <label>Nombres</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Nicolas" disabled>
                                </div>

                                <label>Apellido Paterno</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Arévalo" disabled>
                                </div>

                                <label>Apellido Materno</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Varela" disabled>
                                </div>

                                <label class="obligatorio">RUT del paciente</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="15.776.425-k" disabled>
                                </div>

                                <label class="obligatorio">Teléfono</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Escribe tu Contraseña">
                                </div>

                                <label class="obligatorio">Correo Electrónico</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Escribe tu Contraseña">
                                </div>

                                <label>Dirección</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" value="Escribe tu Contraseña">
                                </div>

                                <label class="obligatorio">Región</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled="">Selecciona tu Región</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <label class="obligatorio">Comuna</label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled="">Selecciona tu Comuna</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <label class="obligatorio">Previsión
                                    <i class="icon-ico-info tooltip-mensaje">
                                        <span>pablito clavo un clavito</span>
                                    </i>
                                </label>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option disabled="">Selecciona tu Previsión</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <div class="form-group text-right">
                                    <button class="btn btn-light-blue btn-form">Actualizar perfil</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="segundo-formulario">
            <div class="container">
                <div class="row">
                    <div class="formulario-transicion editar-perfil">
                        <form>
                            <div class="col-md-6 columna-izquierda">
                                <h3>Preferencias de Contacto</h3>
                                <p>¿Quieres recibir información de Clínica Santa María?</p>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsRecibir" id="inlineRadio1" value="option1">
                                        <label for="inlineRadio1">Si</label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsRecibir" id="inlineRadio2" value="option2">
                                        <label for="inlineRadio2">No </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 columna-derecha">
                                <h3 class="hidden-xs">&nbsp;</h3>
                                <p>¿En que medios te gustaría recibir información?</p>

                                <label>Mensaje de Texto</label>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsMensaje" id="inlineRadio3" value="option3">
                                        <label for="inlineRadio3">Si</label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsMensaje" id="inlineRadio4" value="option4">
                                        <label for="inlineRadio4">No </label>
                                    </div>
                                </div>

                                <label>Correo Electrónico</label>
                                <div class="form-group">
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsCorreo" id="inlineRadio5" value="option5">
                                        <label for="inlineRadio5">Si</label>
                                    </div>
                                    <div class="radio-inline">
                                        <input type="radio" name="inlineRadioOptionsCorreo" id="inlineRadio6" value="option6">
                                        <label for="inlineRadio6">No </label>
                                    </div>
                                </div>



                                <div class="form-group text-right">
                                    <button class="btn btn-light-blue btn-form">Actualizar Preferencias</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include('transicion-footer.php'); ?>