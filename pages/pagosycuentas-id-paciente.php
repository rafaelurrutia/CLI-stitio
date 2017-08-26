<?php include('header.php'); ?>

<div id="pagosycuentas" class="anulacion">
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

    <div class="container anular-hora-1">
        <div id="pyc-id-paciente" class="divisor-o-rf divisor-o">
   
            <div class="container">
                <div class="row pyc-id-paciente-encabezado">
                    <h4><strong>Puedes cancelar el copago y/o total de tu cuenta en línea</strong></h4>
                </div>
            
            </div>

            <div class="contenedor-formularios paso3-mgBottom-id">
                <div class="row">
                    <div class="col-md-5">
                        <div class="login-horas disabled">
                            <h4>Accede a través de Mi Clínica</h4>
                            <form action="">
                                <div class="form-group">
                                    <label for="">RUT</label>
                                    <input type="text" class="form-control" placeholder="Escribe tu RUT">
                                </div>

                                <div class="form-group">
                                    <label for="">Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Escribe tu contraseña">
                                </div>

                                <div class="form-group text-right">
                                   <a href="" class="link link-clave">¿Olvidaste tu contraseña?</a>
                                    <button class="btn btn-light-blue btn-form">Ingresa</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-central-o-mobil container">
                        <div class="col-md-12 ">
                            <div class="row">
                                <div class="col-xs-12">
                                
                                </div>
                            </div>
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
                            <h4>Paga tu cuenta usando el RUT del paciente y el número de admisión</h4>
                            <form action="">
                                <div class="form-group">
                                    <label for="">RUT</label>
                                    <input type="text" class="form-control" placeholder="Escribe tu RUT">
                                </div>
                                <div class="form-group">
                                    <label for="">Número de admisión</label>
                                    <input type="text" class="form-control" placeholder="Escribe el número de admisión">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-light-blue btn-form">Continuar</button>
                                    <span class="icon-ico-info-2 cc3"> </span>
                                    <a href="" class="pull-left info-reserva-anular-hora-1" title='Corresponde al número de hospitalización que está registrado en la hoja "Recibo de documento", por ejemplo "727770-7"' ><span>¿Dónde está <br> mi número de reserva?</span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
     
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
        </div>    
</div>

<?php include('footer.php'); ?>
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>