<?php include('header.php'); ?>

    <div class="divisor-o-rf seg-conv-s-cot-seguro seg-cont-conv-1 seg-conv">
        <?php
        $class1='active';
        $class2='';
        $class3='';
        $class4='';
        include('seg-cont-conv-sub-header.php');
        ?>  
        <div class="half-bg2 sc-1 scc-1">
            <div class="container">
                <div class="row">
                    <div class="contenedor-formularios paso3-mgBottom">
                        <div class="col-md-5">
                            <div class="contactarte">
                                <div class="recuerda-llegar">
                                    <p><i class="bg-ico-alerta-amarilla"></i>Importante</p>
                                </div>
                                <p>Le informamos que, a contar de este período, si alguno de los beneficiarios pertenece a una institución o colegio en convenio es necesario adjuntar el <strong>Certificado de Alumno Regular o Comprobante de Matrícula (en PDF o JPG).</strong></p>
                            </div>
                             <p>Si no tiene el documento, puede continuar la inscripción y enviarlo a <a href="mailto:certificado@clinicasantamaria.cl">certificado@clinicasantamaria.cl</a>, en los próximos 10 días, para que el Convenio Escolar o Accidentes entre en vigencia.</strong></p>
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

                                    <label class="obligatorio" for="">Teléfono</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Escribe tu Teléfono">
                                    </div>
                                    <label class="obligatorio" for="">Correo electrónico</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Escribe tu Correo electrónico">
                                    </div>
                                    <label class="obligatorio" for="">Dirección</label>
                                    <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option disabled="">Escribe tu dirección</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <label class="obligatorio" for="">Región</label>
                                    <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option disabled="">Escribe tu dirección</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>    
                                    <label class="obligatorio" for="">Comuna</label>
                                    <div class="form-group">
                                        <select name="" id="" class="form-control">
                                            <option disabled="">Selecciona tu comuna</option>
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