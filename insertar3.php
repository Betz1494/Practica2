<?php
include('header3.php');
?>


<div class="container">

    	<div class="jumbotron">
        	<div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <h2 align="center">Ingrese sus datos Personales:</h2>
                <form method="post" action="funcionesForm.php">
                    <div class="form-group col-md-8">
                      <label>Alias:</label> <input type="text" name="Alias" id="Alias" class="form-control">
                    </div>
                    <div class="form-group col-md-8">
                      <label>Sexo</label>
                      <label class="radio-inline">
                          <input type="radio" name="Sexo" id="Sexo" value="Femenino"> Femenino
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="Sexo" id="Sexo" value="Masculino"> Masculino
                        </label>    
                    </div> 

                    <div class="form-group col-md-8">
                    <label>Edad:</label><input type="text" name="Edad" id="Edad" class="form-control"></input>
                    </div>

                    <div class="form-group col-md-8">
                    <label>Pasatiempos:</label><br>
                      <div class="radio">
                    <label> <input type="radio" name="Pasatiempo" id="Pasatiempo" value="Leer">Leer</label><br><br>
                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Escuchar Musica">Escuchar Musica</label><br><br><label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Series y Movies">Ver Series de TV y Movies</label><br><br> 
                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Jugar Futbol" >Jugar Futbol</label><br><br>
                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Cocinar" >Cocinar</label><br><br> 
                      </div>
                    </div> 

                    <div class="form-group">
                        <br>
                        <div class="col-md-4 col-md-offset-5">
                        <input type="submit" class="btn btn-primary btn-md" value="Ingresar Datos">
                        </div>
                   </div>

                </form>
             </div>
            
           </div>


    	</div>
</div>



<?php
include('footer.php');
?>