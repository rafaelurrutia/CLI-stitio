<?php

if ($class1 == 'active') {
   $text_active='Datos del paciente';
} 
else if ($class2 == 'active') {
  $text_active='Datos del procedimiento';
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
                <li><a href="">Home</a></li>
                <li><a href="">Necesitas Atención</a></li>
                <li class="active"><a href="">Reserva de Hora</a></li>
            </ol>
        </div>
        <h2>Pre Admisión</h2>
    </div>
</div>

<!-- WIZARD -->
<div class="wizard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol>
                    <li class=<?=$class1?> > <span>1.</span> Datos del paciente </li>
                    <li class=<?=$class2?> > <span>2.</span> Datos del procedimiento </li>
                    <li class=<?=$class3?> > <span>3.</span> ¡Listo! </li>
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
<!-- /WIZARD -->