<?php

if ($class1 == 'active') {
   $text_active=' Todos ';
} 
else if ($class2 == 'active') {
  $text_active=' Noticias / Temas ';
}
else if ($class3 == 'active') {
  $text_active=' Especialidades ';
}
else if ($class4 == 'active') {
  $text_active=' Enfermedades ';
}
else if ($class5 == 'active') {
  $text_active=' Exámenes ';
}
                    
?>


<div class="sub-header">
    <div class="container">
        <div class="breadcrumbs">
            <span>Estás en: </span>
            <ol>
                <li><a href="">Home</a></li>
                <li class="active"><a href="">Buscador</a></li>
            </ol>
        </div>
        <h2>Buscador</h2>
            <div class="form-group input-container-1  boton-flota-rc">
                <input id="busqueda-1-input-1" type="email" class="form-control input-1-bb-bgt-tb" placeholder="Busca!"><i class="icon-ico-search"></i>
            </div>
    </div>
    <!-- WIZARD -->
    <div class="wizard">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wizard-fifths">
                    <ol>
                        <li class=<?=$class1?> > <span>1.</span> Todos </li>
                        <li class=<?=$class2?> > <span>2.</span> Noticias / Temas </li>
                        <li class=<?=$class3?> > <span>3.</span> Especialidades </li>
                        <li class=<?=$class4?> > <span>2.</span> Enfermedades </li>
                        <li class=<?=$class5?> > <span>3.</span> Exámenes </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="wizard-mobile">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>Paso <span>2</span> de  <span> 3</span></p>
                    <p><strong><?=$text_active?></strong></p>
                </div>
            </div>
        </div>
    </div>
    <!-- /WIZARD -->        
</div>