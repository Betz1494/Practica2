<?php
include('header1.php');
?>
<div class="container">

	<div class="jumbotron">
		<h1>Bienvenido</h1>
		<p>Datos Ingresados Correctamente! . </p>
		
	</div>

</div>

		<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "appweb";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		if(isset($_POST['Alias']))
		$Alias = $Alias = $_POST['Alias'];

		if(isset($_POST['Sexo']))
		$Sexo = $Sexo = $_POST['Sexo'];

		if(isset($_POST['Edad']))
		$Edad = $Edad = $_POST['Edad'];

		if(isset($_POST['Pasatiempo']))
		$Pasatiempo= $Pasatiempo= $_POST['Pasatiempo'];

		 $sql= "INSERT INTO usuario (Alias,Sexo,Edad,Pasatiempo) VALUES('$Alias','$Sexo','$Edad','$Pasatiempo')";
		     
		     	$result = mysqli_query($conn, $sql);         

		mysqli_close($conn);

		?>



<?php
include('footer.php');
?>