<?php include('transicion-header.php'); ?>
<div id="dashboard-transicion" class="clearfix">
    <div class="sub-header">
        <div class="container">
            <div class="breadcrumbs">
                <span>Estás en: </span>
                <ol>
                    <li><a href="">Home</a></li>
                    <li class="active"><a href="">Mi clínica</a></li>
                </ol>
            </div>
            <h2>Mi Clínica</h2>
        </div>
    </div>
    <div class="elije-paciente" id="sub-header-2-transicion">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 hidden-xs">
                    <h4><strong>Hoy</strong> 26 de Enero de 2016</h4>
                </div>
                <div class="col-xs-12 col-sm-8 paciente-select">
                    <div class="col-xs-12 col-sm-6"><label>Elige un paciente</label></div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="dropdown">
                            <a class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                <i class="icon-ico-paciente"></i><span id="paciente-seleccionado">Nicolás Arevalo</span><span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a class="seleccion-paciente" data-nombre="Nicolás"><i class="icon-ico-paciente"></i>Nicolás</a></li>
                                <li><a class="seleccion-paciente" data-nombre="Arevalo"><i class="icon-ico-paciente"></i>Arevalo</a></li>
                                <li><a class="seleccion-paciente" data-nombre="Otro Paciente"><i class="icon-ico-paciente"></i>Otro Paciente</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="datos-usuario">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-12">
                    <img class="img-responsive" src="../images/usuario-placeholder.png">
                </div>
                <div class="col-sm-7 col-xs-12">
                    <h3>Nicolás Arevalo Varela</h3>
                    <h4>32 años</h4>
                    <p><a href="#">Titular</a></p>
                    <p><a href="#">Isapre Banmédica</a></p>
                    <p><a href="#">2 Cargas en Mi Clínica</a></p>
                </div>
                <div class="col-sm-3 col-xs-12">
                     <hr class="visible-xs">
                    <a class="btn btn-editar">Editar mi perfil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="muy-pronto">
    <div class="container">
            <div class="row info">
                <div class="col-sm-12 col-xs-12">
                <p class="texto-informativo"><img src="../images/alert-yellow.png">Muy pronto podrás ver tus reservas de hora, conocer tus seguros y convenios
                    y administrar tus cuentas desde Mi Clínica.</p>
                </div>
        </div></div>
    </div>
    <div class="dashboard-usuario">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Exámenes Laboratorio
                        </div>
                        <div class="panel-body panel-examenes">
                            <!--<span class="icon-ico-examenes-lab"></span>-->
                            <ul>
                                <li> Tienes 3 exámenes con resultado. </li>
                                <li> Tienes 1 examen pendiente. </li>
                            </ul>
                            <a class="btn btn-resultados">Ver Resultados </a>
                            <a class="cargas-resultados">Tus cargas también tienen exámenes </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Exámenes Diagnóstico
                        </div>
                        <div class="panel-body panel-resultados">
                            <!--<span class="icon-ico-examenes-diag"></span>-->
                            <ul class="lista-diagnosticos clearfix">
                                <li>Radiología e Imágenes</li>
                                <li>Medicina Nuclear</li>
                                <li>Cardiología</li>
                                <li>Ginecología</li>
                                <li>Oftalmología</li>
                                <li>Otorrinolaringología</li>
                                <li>Gastroenterología</li>
                                <li>Dermatología</li>
                            </ul>
                            <a class="btn btn-resultados">Ver Resultados </a>
                        </div>
                    </div>
                    <div class="publicidad">
                        <h1> Publicidad </h1>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Cargas
                        </div>
                        <div class="panel-body mis-cargas">
                            <ul>
                                <li> Tienes 2 cargas en Mi Clínica </li>
                                <li> <span class="icon-ico-nina-2"> </span>
                                    <div class="cargas">
                                        <p>Ignacio Perez</p>
                                        <p>7 años 6 meses 1 día</p>
                                    </div>
                                </li>
                                <li> <span class="icon-ico-nino-2"> </span>
                                    <div class="cargas">
                                        <p>Ignacio Perez</p>
                                        <p>7 años 6 meses 1 día</p>
                                    </div>
                                </li>
                            </ul>
                            <a class="btn btn-modificar-datos">Modificar Datos </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('transicion-footer.php'); ?>