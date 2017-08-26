<?php include('header.php'); ?>

<div id="pagosycuentas" class="pagosycuentas-paso-3">
  <?php
  $class1='visited';
  $class2='visited';
  $class3='active';
  include('pagosycuentas-sub-header.php');
  ?>  

    <div class="container">
        <div id="terminaste">
            <div class="container-fluid no-posible-pago">
                <div class="no-posible-pago-titulo">
                    <h4><strong> No fue posible realizar el pago</strong></h4></span>
                </div>
                <div class="no-posible-pago-cuerpo">

                    <h4>Existe un problema en la conexión con el servicio de pago.</h4>
                    <p>Te recomendamos:</p>
                    <ul>
                        <li>Revisa tus datos ingresados.</li>
                        <li>Confirma el cupo de tu tarjeta de crédito/débito.</li>
                        <li>Intenta con otro medio de pago.</li>
                    </ul>
                    <div class="no-posible-pago-container-boton col-xs-12">
                        <button type="button" class="btn pull-right no-posible-pago-boton-reintenta">Reintentar pago <i class="icon-ico-info-2"></i></button>
                    </div>
                    <a href="/" class="no-posible-pago-volver"><  Volver al detalle de cuenta </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>