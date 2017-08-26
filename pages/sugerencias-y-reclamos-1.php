<?php include('header.php'); ?>

<div id="sugerencias-1">
    <div class="sub-header">
	  	<div class="container">
	  		<div class="breadcrumbs">
	  			<span>Estás en: </span>
	  			<ol>
	  				<li><a href="">Home</a></li>
	  				<li><a href="">Necesitas Atención</a></li>
	  				<li><a href="">Hospitalización </a></li>
	  				<li class="active"><a href="">Sugerencias y Reclamos</a></li>
	  			</ol>
	  		</div>
	  		<h2>Sugerencias y Reclamos</h2>
	  	</div>
  	</div>
      <div class="sub-header-2">
          <div class="container">
              <h3>Para realizar tu sugerencia y reclamo, necesitamos <strong>algunos de tus datos.</strong><br> Completa la información que falta en el formulario y <strong>envíalo.</strong></h3>
          </div>
      </div>

    <div class="half-bg2">
  	<div class="container">
  		<div class="row">
            <div class="contenedor-formularios paso2a-mgBottom">
  			<div class="col-md-5 hidden-xs">
                <div class="contactarte">
                    <p>También puedes contactarte con nosotros en nuestra Mesa Central al <strong>+56 2 29130000</strong> o visitándonos en <strong>Av. Santa María 0500, Providencia, Santiago.</strong></p>
                </div>
  			</div>
  			<div class="col-md-5 col-md-offset-2">
  				<div class="login-horas">
	  				<h4>Completa los siguientes datos</h4>
	  				<h5><span>*</span> Indica campo obligatorio</h5>
					<form action="">
                        <label class="obligatorio" for="">Nombre del consultante</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Nicolas">
						</div>
                        <label class="obligatorio" for="">Apellido paterno</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Arévalo">
						</div>
                        <label class="obligatorio" for="">Apellido materno</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Varela">
						</div>
                        <label class="obligatorio" for="">Teléfono</label>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Escribe tu teléfono">
						</div>
                        <label class="obligatorio" for="">Correo electrónico</label>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="Escribe tu correo electrónico">
						</div>
                        <label class="obligatorio" for="">Sucursal</label>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option disabled>Selecciona la sucursal</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <label class="obligatorio" for="">Área o dependencia de atención</label>
                        <div class="form-group">
                            <select name="" id="" class="form-control">
                                <option disabled>Selecciona la sucursal</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
	
                        <label class="obligatorio" for="">Descripción de los hechos</label>
						            <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Descripción de los hechos"></textarea>
						            </div>

                        <label class="obligatorio" for="">Sugerencia y/o posible solución</label>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Descripción de la solución"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <div class="checkbox-inline">
                                <input type="checkbox" name="no-robot" id="no-robot" value="option1"> 
                                <label for="no-robot">No soy robot</label>	
                            </div>
                        </div>

						<div class="form-group text-right">		
                            <button class="btn btn-light-blue btn-form">Enviar</button>
						</div>
					</form>
  				</div>
  			</div>
        </div>
  		</div>
  	</div>
  </div>
</div>

    
<?php include('footer.php'); ?>