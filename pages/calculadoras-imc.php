<?php include('header.php'); ?>

  <div class="calculadoras-imc">
    <div class="sub-header">
	  	<div class="container">
	  		<div class="breadcrumbs">
	  			<span>Estás en: </span>
	  			<ol>
	  				<li><a href="">Home</a></li>
	  				<li class="active"><a href="">Infórmate</a></li>
	  			</ol>
	  		</div>
	  		<h2>Calcula tu IMC</h2>
	  	</div>
  	</div>
    <div class="container">
      <p class="p-destacado-1">
        El índice de masa corporal (IMC) es el indicador más objetivo usado para evaluar el tamaño del cuerpo, suministrando una medida más exacta que sólo el peso. Sin embargo, éste puede sobrestimar la cantidad de grasa del cuerpo en las personas muy musculosas, muy pequeñas, o que tienen edema y subestimar la grasa en personas que han perdido masa muscular, como los ancianos.
      </p>
      <div class="c-imc-container">
        <div class="">
          <div class="col-sm-4 col-md-3 col-izq">
            <div class="form-group c-imc-select-cont col-xs-12">
              <div class="form-group">
                <label for="">Estatura</label>
                <select name="" id="" class="form-control">
                    <option disabled>Año</option>
                    <option>165</option>
                    <option>166</option>
                    <option>167</option>
                    <option>168</option>
                    <option>169</option>
                </select>
              </div>
              <p>cm</p>
            </div> 
            <div class="form-group c-imc-select-cont col-xs-12">
              <div class="form-group">
                <label for="">Peso</label>
                <select name="" id="" class="form-control">
                    <option disabled>Año</option>
                    <option>70</option>
                    <option>71</option>
                    <option>72</option>
                    <option>73</option>
                    <option>74</option>
                </select>
              </div>
              <p>Kg</p>
            </div> 
            <div class="container-fluid">
              <button class="btn boton-tipo-2">Calcular</button>
            </div>
          </div>
          <div class="col-sm-8 col-md-9 col-der">
            <div class="container-fluid">
              <h3>
                  <small class="cn1"><strong>Tu IMC es </strong></small> <strong>20.0</strong>

              </h3>
            </div>
            <div class="container-fluid">
            
              <div class="barra-ind-color">

                <div class="barra-ind-colores"></div>
                <div class="barra-ind-colores"></div>
                <div class="barra-ind-colores"></div>
                <div class="barra-ind-colores"></div>
                <div class="barra-ind-colores"></div>

                <div class="barra-ind-color-flecha" style="left: 37%;">
                  
                </div>
              </div>

            </div>
            <div class="labels-barra">
              <div class="col-sm-4"> <p>Desnutricion</p> </div>
              <div class="col-sm-4"> <p>Peso Saludable</p> </div>
              <div class="col-sm-4"> <p>Sobrepeso</p> </div>
            </div>
            <div class="container-fluid">
              <p>Tu IMC sugiere que estan en un peso saludable: 38.9kgs-52.4kgs <br>
              El peso normal según la clasificación del Instituto Nacional del Corazon, Pulmón y Sangre de Estados Unidos debe estar entre los 18.5 y los 24.9 IMC (KG/mts2)</p>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
    
<?php include('footer.php'); ?>