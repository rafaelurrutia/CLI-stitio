<?php include('header.php'); ?>

<div id="pagosycuentas">
  <div class="sub-header">
    <div class="container">
        <div class="breadcrumbs">
            <span>Estás en: </span>
            <ol>
                <li><a href="">Página de inicio</a></li>
                <li><a href="">Necesitas atención</a></li>
                <li><a href="">Hospitalización </a></li>
                <li class="active"><a href="">Pago de cuentas</a></li>
            </ol>
        </div>
        <h2>Pago de cuentas</h2>
    </div>
    </div>
    <!-- /WIZARD -->
            <div class="container">
               
            </div>
    <div class="container ls-abierto-container">

  <div class="row container_resena_datos">         
            <div class="row_resena_datos">
                <div class="row">
                  <div class="col-md-4">
                        <i class="icon-ico-paciente"></i>
                        <h5> Paciente</h5>
                        <p><strong>Nicolás Arévalo Varela</strong></p>
                        <p>Isapre Banmédica</p>
                    </div>
                    <div class="col-md-3 sin-icono">
                        <h5> RUT </h5>
                        <p><strong>23.507.816-3</strong></p>
                    </div>
                    <div class="col-md-5 bg-ico-num-admin">
                        <i class=""></i>
                        <h5> Número de admisión </h5>
                        <p><strong> 861.048-7 </strong></p>
                    </div>
                </div>
            </div>
            <div class="row_resena_datos">
                <div class="row">
                    <div class="col-md-4 bg-ico-fecha-ing">
                        <i class=""></i>
                        <h5> Fecha de ingreso </h5>
                        <p><strong> 01/05/2014 </strong></p>
                    </div>
                    <div class="col-md-5 bg-ico-fecha-alt">
                        <i class=""></i>
                        <h5> Fecha de alta </h5>
                        <p><strong> 05/05/2014 </strong></p>
                    </div>
                  
                </div>
            </div>

        </div>
        <h3 class="elm-tabla-titulo-1"><strong>Cuentas</strong></h3>
        <div class="caja-container-info ">
            <div class="container">
                <div class="col-md-3">

                    <p><strong>Número de cobro</strong></p>
                    <p>496857</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Previsión</strong></p>
                    <p>Cruz Blanca</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Estado</strong></p>
                    <p>Lista para pago</p>
                </div>
                <div class="col-md-3">
                    <p><strong>Saldo</strong></p>
                    <p>$861.04</p>
                </div>
            </div>
        </div>
        <div class="panel-group nuevo-panel" id="accordion4">
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                          <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseOne">
                            <strong>Resumen(H4)</strong>
                            <span class="close-colapse">
                              <span></span>
                              <span></span>
                            </span>
                          </a>
                        </h4>
                    </div>
                </div>
                <div id="collapseOne" class="panel-collapse panel-cuentas collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-body-content-container-tabla row table-responsive">
                                <table class="panel-body-content-tabla col-xs-12 ls-abierto">
                                    <thead>
                                        <th></th>
                                        <th>Cuenta clínica</th>
                                        <th>Honorarios médicos</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>Total cuenta</strong></td>
                                            <td>434.423</td>
                                            <td>0</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Descuentos</strong></td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>-$227.900</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Cargos</strong></td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>$227.900</td>
                                        </tr>
                                        <p></p>
                                        <tfoot>
                                            <th>Saldo</th>
                                            <th>0</th>
                                            <th>0</th>
                                            <th>$87.979</th>
                                        </tfoot>
                                    </tbody>
                                </table>
                            </div>
                            <p></p>
                            <div class="container-btn">
                                <button class="btn boton-tipo-2 boton-flota-rc">Descarga PDF</button>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion4" href="#collapseTwo">
                        <strong>Pagos(H4)</strong>
                        <span class="close-colapse">
                          <span></span>
                          <span></span>
                        </span>
                      </a>
                    </h4>
                  </div>
                </div>
                <div id="collapseTwo" class="panel-collapse panel-cuentas collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="panel-body-content-container-tabla row table-responsive">
                                <table class="panel-body-content-tabla col-xs-12 ls-abierto">
                                    <thead>
                                        <th width="50%"><strong>Tipo de documento</strong></th>
                                        <th>Honorarios médicos</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="50%"><strong>Bono</strong></td>
                                            <td>$434.423</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td width="50%"><strong>Bono AMSM</strong></td>
                                            <td>0</td>
                                            <td>-$227.900</td>
                                        </tr>
                                        <tr>
                                            <td width="50%"><strong>Copago Salud Total</strong></td>
                                            <td>0</td>
                                            <td>$227.900</td>
                                        </tr>
                                        <p></p>
                                        <tfoot>
                                  
                                        </tfoot>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="container-btn">
                <button class="btn boton-tipo-2 boton-flota-rc">Pagar cuenta</button>
            </div>            
        </div>

        <div class="row coletilla-pagos-container">
            <div class="container">
                <div class="webpay-img-container"><img src="../images/webpay.png" class="webpay-img" alt="Webpay"></div>
                <div class="container">
                <div class="webpay-aceptamos">
                <img src="../images/webpay-aceptamos.png" class="webpay-aceptamos-img"alt="Aceptamos estos medios de pago"></p>
                </div>
                </div>
            </div>
            <div class="ayuda">
                <div class="container">
                    <i class="icon-ico-info-2"></i>
                    <h5>Ayuda
                        <small>Si tienes dudas para pagar tu cuenta en línea, llámanos al 2 2913 3613 o 2 2913 3210</small>
                    </h5>
                </div>
            </div>
        </div>
        
    </div>
</div>

<?php include('footer.php'); ?>