<?php include('header.php'); ?>

<div id="pagosycuentas" class="pagosycuentas-3a">
  <?php
  $class1='visited';
  $class2='visited';
  $class3='active';
  include('pagosycuentas-sub-header.php');
  ?> 

    <div class="container ">
        <div id="terminaste">
                <div class="exito-left-container">
                    <div class="pago-hecho-titulo">
                        <span><img src="../images/smile-verde.png" alt=""><h4><strong> La cuenta ha sido pagada exitosamente</strong></h4></span>
                    </div>
                </div>    
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

                <h4 class="pago-hecho-detalle-transaccion-titulo"><strong>Detalles de la transacción</strong></h4>

                <div id="pago-hecho-container-detalle-transaccion" class="container-fluid tabla-detalle-transaccion-container bg-info">
                    <div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="monto-pagado-label">Monto pagado</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p  id="monto-pagado-dato">$84.400</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="mumero-pago-label">Número de pago</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="mumero-pago-dato">3523532523523</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="medio-label">Medio de pago</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="medio-label-dato">Webpay - Mastercard</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="numero-folio-label">Número de folio              </strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="numero-folio-dato">ND</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="numero-orden-label">Número de orden</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="numero-orden-dato">ND</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="codigo-transaccion-label">Código de transacción</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="codigo-transaccion-dato">34324</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="numero-cuotas-label">Número de cuotas</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="numero-cuotas-dato">3</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="numerto-tdc-label">Número Tarjeta de Crédito</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="numerto-tdc-dato">XXXX - XXXX - XXXX - 3454</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="tipo-tarjeta-label">Tipo de tarjeta</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="tipo-tarjeta-dato">Crédito</p>
                            </div>
                        </div>
                        <div class="tabla-detalle-transaccion-fila">
                            <div class="col-xs-6">
                                <p><strong id="tipocuotas-label">Tipo de cuotas</strong></p>
                            </div>
                            <div class="col-xs-6">
                                <p id="tipocuotas-label-dato">3 Cuotas Sin Interés</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabla-detalle-transaccion-imprimir-container-btn col-xs-12">
                        <button type="button" class="btn pull-right imprimir-detalle-btn">Imprimir comprobante<i></i></button>
                    </div>                    
                </div>
                <div class="caso-duda">
                    <i class="icon-ico-info-2"></i><p>Comunícate al +56 2 29130000 o +56 2 29133613 o +56 2 29133210 </strong> o también puedes dirigirte a <strong>Av. Santa María 0356, Providencia, Santiago.</strong></p>
                </div>
                <a href="/" class="pago-hecho-volver"><  Ir a la portada </a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>