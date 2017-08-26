<?php include('header-transicion.php'); ?>
<div id="dashboard-transicion" class="clearfix dashboard-transicion">
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
            <!-- <a href="" class="btn btn-blue">Hacer una nueva búsqueda</a> -->
        </div>
    </div>
    <div class="sub-header-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 hidden-xs">
                    <h4><strong>Hoy</strong> 26 de Enero de 2016</h4>
                </div>
                <div class="col-xs-12 col-sm-8 paciente-select">
                    <label>Elige un paciente</label>
                    <div class="select-cont">
                        <select name="" id="" class="form-control">
                            <option disabled>Selecciona tu previsión</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
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
                <div class="col-sm-8 col-xs-12">
                    <h3>Nicolás Arevalo Varela</h3>
                    <h4>32 años</h4>
                    <p><a href="#">Titular</a></p>
                    <p><a href="#">Isapre Banmédica</a></p>
                    <p><a href="#">2 Cargas en Mi Clínica</a></p>
                </div>
                <div class="col-sm-2 col-xs-12">
                     <hr class="visible-xs">
                    <a class="btn btn-editar">Editar mi perfil</a>
                </div>
            </div>
            <div class="row info">
                <p class="texto-informativo"><img src="../images/alert-yellow.png">Muy pronto podrás ver tus reservas de hora, conocer tus seguros y convenios
                    y administrar tus cuentas desde Mi Clínica.</p>
            </div>
        </div>
    </div>
    <div class="dashboard-usuario">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Exámenes Laboratorio
                        </div>
                        <div class="panel-body">
                            <span class="icon-ico-laboratorio"></span>
                            <ul>
                                <li> Tienes 3 exámenes con resultado. </li>
                                <li> Tienes 1 examen pendiente. </li>
                            </ul>
                            <a class="btn btn-resultados">Ver Resultados </a>
                            <a class="cargas-resultados">Tus cargas también tienen exámenes </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Exámenes Diagnóstico
                        </div>
                        <div class="panel-body">
                            <span class="icon-ico-laboratorio"></span>
                            <ul>
                                <li> Revisa tus resultados de imágenes y radiografías </li>
                            </ul>
                            <a class="btn btn-resultados">Ver Resultados </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 tarjetas-resultados">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Mis Cargas
                        </div>
                        <div class="panel-body mis-cargas">
                            <ul>
                                <li> Tienes 2 cargas en Mi Clínica </li>
                                <li> <span class="icon-ico-ninos-1"> </span>
                                    <div class="cargas">
                                        <p>Ignacio Perez</p>
                                        <p>7 años 6 meses 1 día</p>
                                    </div>
                                </li>
                                <li> <span class="icon-ico-ninos-1"> </span>
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
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 col-xs-12">
                    <div class="publicidad">
                        <h1> Publicidad </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer-transicion.php'); ?>