<?php

if ($class1 == 'active') {
   $text_active='Elige la forma de pago';
} 
else if ($class2 == 'active') {
  $text_active='Medio de pago';
}
 else if ($class3 == 'active') {
  $text_active='¡Listo!';
}
                    
?>

<div class="sub-header">
    <div class="container">
        <div class="breadcrumbs">
            <span>Estás en: </span>
            <ol>
                <li><a href="">Página de inicio</a></li>
                <li><a href="">Necesitas Atención</a></li>
                <li class="active"><a href="">Reserva de Hora</a></li>
                <li class="active"><a href="">Hospitalización</a></li>
                <li class="active"><a href="">Pago de cuentas</a></li>

            </ol>
        </div>
        <h2>Pago de cuentas</h2>
    </div>
    
    <!-- WIZARD -->
    <div class="wizard wizard-thirds">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ol>
                        <li class=<?=$class1?> > <span>1.</span> Elige la forma de pago </li>
                        <li class=<?=$class2?> > <span>2.</span> Medio de pago </li>
                        <li class=<?=$class3?> > <span>3.</span>  ¡Listo! </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="wizard-mobile">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Paso <span>1</span> de  <span> 3</span></p>
                    <p><strong><?=$text_active?></strong></p>
                </div>
            </div>
        </div>
    </div>
</div>