<?php
include('header.php');
?>
<?php 
	if(isset($_POST['entrar'])){
$user="root";
$pass="";
$host="localhost";

$Usuario=$_POST['usuario'];
$Pass=$_POST['contra'];
$con= new mysqli($host,$user,$pass,"appweb");

if($con){
	echo "Conexion Exitosa<br>";

}
else
    echo "Error en la conexion<br>";

$sqlq="SELECT * FROM login WHERE Usuario='$Usuario' and Pass='$Pass'";
$resultado=mysqli_query($con,$sqlq);

if($resultado){
//$row=mysql_num_rows($resultado);
//$existe=mysql_num_rows($resultado);  
while($row=mysqli_fetch_assoc($resultado)){
  	if ($row['Pass']==$Pass) {
  		if ($row['idLogin']==1) {
  			 $_SESSION["idLogin"]==1;
  			 header("Location:insertar1.php");
  		}else if($row['idLogin']==2){
  			 $_SESSION["idLogin"]==2;
  			 header("Location:insertar2.php");
  		}else if($row['idLogin']==3){
  			$_SESSION["idLogin"]==2;
  			 header("Location:insertar3.php");
  		} 		
  	}
  }//while


}  	
 
}
 else
 echo "";

?>
<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
				  <div class="col-md-4">
					  <form method="post" action="login.php">
					     <div class="form-group ">
					  	  	 <img src="img/progra.jpg" alt="login" title="login" align="center" class="img-responsive img-circle">
					  	  </div>
					  	  <div class="form-group">
					  	  	<label>Usuario:</label>
					  	  	<input type="text" name="usuario" class="form-control" required>
					  	  </div>

					  	  <div class="form-group">
					  	  	<label>Contraseña:</label>
					  	  	<input type="password" name="contra" class="form-control"  required>
					  	  </div>

					  	  <div class="form-group">
				                <br>
				                <div class="col-md-4 col-md-offset-5">
				                <input type="submit" name="entrar" class="btn btn-primary btn-md" value="Ingresar">
				                </div>
				           </div>
					  </form>
				  </div>
			  <div class="col-md-4"></div>
		</div>
</div>
<?php
include('footer.php');
?>