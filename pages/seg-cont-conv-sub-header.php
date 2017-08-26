<?php

if ($class1 == 'active') {
   $text_active='Datos del contratante';
} 
else if ($class2 == 'active') {
  $text_active='Beneficiarios';
}
 else if ($class3 == 'active') {
  $text_active='Pago';
}
 else if ($class4 == 'active') {
  $text_active='¡Listo!';
}
                    
?>

<div class="sub-header">
    <div class="container">
      <div class="breadcrumbs">
        <span>Estás en: </span>
        <ol>
          <li><a href="">Página de Inicio</a></li>
          <li><a href="">Seguros/Convenios</a></li>
          <li><a href="">Seguro Salud Total</a></li>
          <li class="active"><a href="">Cotizar Seguro</a></li>
        </ol>
      </div>
      <h2>Contratar convenio</h2>
      <div class="wizard">
        <ol>
              <li class=<?=$class1?> > <span>1.</span> Datos del contratante </li>
              <li class=<?=$class2?> > <span>2.</span> Beneficiarios </li>
              <li class=<?=$class3?> > <span>3.</span> Pago </li>
              <li class=<?=$class4?> > <span>4.</span> ¡Listo! </li>          
        </ol>
      </div>
    </div>
    <div class="wizard-mobile">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <p>Paso <span>1</span> de  <span> 4</span></p>
            <p><strong><?=$text_active?></strong></p>
          </div>
        </div>
      </div>
    </div>
</div>