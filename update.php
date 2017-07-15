<?php
include('header3.php');
?>
<?php
    $idUsuario = $_GET['idUsuario'];
    $link = mysqli_connect('localhost', 'root', '', 'appweb');
    if(isset($_GET['idUsuario'])){
      $idUsuario = $_GET['idUsuario'];//le asigno una variable 
      $query1 = "SELECT * FROM usuario WHERE idUsuario ='$idUsuario'"; //cadena de consulta para el elemento $id
      if($result = mysqli_query($link, $query1)){ //si obtengo resultados ejecutando la consulta anterior
        while($usua = mysqli_fetch_assoc($result)){ //asigno ese resultado a un array asociativo $user
          $idUsuario=$usua['idUsuario'];
          $Alias = $usua['Alias']; //creo variables con los nombres de los campos de la tabla "users" 
          $Sexo = $usua['Sexo'];
          $Edad = $usua['Edad'];
          $Pasatiempo = $usua['Pasatiempo'];
       


  if(isset($_POST['sw']) == 1){ //si se ha presionado el boton "Actualizar" 
 
  
  $query2 = "UPDATE usuario SET Alias='".$_POST['Alias']."', Sexo='".$_POST['Sexo']."', Edad='".$_POST['Edad']."', Pasatiempo='".$_POST['Pasatiempo']."' WHERE idUsuario=".$_POST['idUsuario'];
   /*$query2 = "UPDATE usuario SET Alias='$Alias', Sexo='$Sexo',
      Edad='$Edad', Pasatiempo='$Pasatiempo' WHERE idUsuario='$idUsuario'" ;*/
  if(mysqli_query($link, $query2)){ 
    echo "La informacion se actualizo con exito"; 
    header('Location: actualizar3.php'); 
  }else{ //si ocurrio un error
    echo "Ocurrio un error al intentar actualizar"; 
  }
}
 
//cierro conexion a bbdd


?>

<div class="container">

        <div class="jumbotron">
            <div class="row">
            <div class="col-md-2"></div>
              <div class="col-md-8">
                <h2 align="center">Actualizar Datos:</h2>
                <form method="post" action="<?php echo 'update.php?idUsuario='.$idUsuario ?>">
                    <div class="form-group col-md-8">
                      <label>Alias:
</label> <input type="text" name="Alias"  class="form-control" value="<?php if(isset($Alias)) echo $Alias;?>">
                    </div>
                    <div class="form-group col-md-8">
                      <label>Sexo</label>
                      <label class="radio-inline">
                          <input type="radio" name="Sexo" id="Sexo" value="Femenino"
                          <?php if(($Sexo)=="Femenino")echo 'checked="true"'?>>
                          Femenino</label>

                        <label class="radio-inline">
                          <input type="radio" name="Sexo" id="Sexo" value="Masculino"
                           <?php if(($Sexo)=="Masculino")echo 'checked="true"'?>>
                           Masculino</label>    
                    </div> 

                    <div class="form-group col-md-8">
                    <label>Edad:</label><input type="text" name="Edad" id="Edad" class="form-control" value="<?php if(isset($Edad)) echo $Edad;?>"></input>
                    </div>

                    <div class="form-group col-md-8">
                    <label>Pasatiempos:</label><br>
                      <div class="radio">
                    <label> <input type="radio" name="Pasatiempo" id="Pasatiempo" value="Leer"
                    <?php if(($Pasatiempo)=="Leer") echo 'checked="true"'?>>Leer</label><br><br>

                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Escuchar Musica"
                     <?php if(($Pasatiempo)=="Escuchar Musica") echo 'checked="true"'?>>Escuchar Musica</label><br><br>


                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Series y Movies"
                    <?php if(($Pasatiempo)=="Series y Movies") echo'checked="true"'?>>
                    Ver Series de TV y Movies</label><br><br> 

                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Jugar Futbol"
                     <?php if(($Pasatiempo)=="Jugar Futbol") echo 'checked="true"'?>>
                    Jugar Futbol
                    </label><br><br>

                    <label><input type="radio" name="Pasatiempo" id="Pasatiempo" value="Cocinar"
                    <?php if(($Pasatiempo)=="Cocinar") echo 'checked="true"'?>>
                    Cocinar</label><br><br> 
                      </div>
                    </div> 

                    <div class="form-group">
                        <br>
                        <div class="col-md-4 col-md-offset-5">
                        <input type="submit" class="btn btn-primary btn-md" name="actualizar" value="Actualizar">
                        <input type="hidden" name="idUsuario" value="<?php if(isset($idUsuario)) echo $idUsuario; ?>" />
                        <input type="hidden" name="sw" value="1" />
                        </div>
                   </div>

                </form>
             </div>
            
           </div>


        </div>
</div>

<?php
 }
      }
    
    }
mysqli_close($link);
?>

<?php
include('footer.php');
?>