<?php
include('header2.php');
?>
<div class="container">
<form class="form-horizontal"  method="post" action="buscar2.php">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" name="buscar"  placeholder="Buscar por sexo...">
         </div>
        <button type="submit" class="btn btn-default">Buscar</button>
</form>
      <div class="row">
        <div class="col-md-12">
          <h2>Usuarios Registrados</h2>
          <!-- CREANDO MI TABLA -->
          <div class="table-responsive">
            <table class="table table-hover table-bordered">
             <tr>
                <th>Id Usuario</th>
                <th>Alias</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Pasatiempo</th>
             </tr>
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
				 if (isset($_POST['buscar'])) 
				$buscarU=$buscarU=$_POST['buscar'];

				$sql="SELECT *FROM usuario WHERE Sexo='$buscarU' ";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
					                echo "<tr>";
                                    echo "<td>".$row["idUsuario"]."</td>";
                                    echo "<td>".$row["Alias"]."</td>";
                                    echo "<td>".$row["Sexo"]."</td>";
                                    echo "<td>".$row["Edad"]."</td>";
                                    echo "<td>".$row["Pasatiempo"]."</td>";
				   }
				}
				mysqli_close($conn);

            ?> 
            </table>
          </div>
        </div>

<?php
include('footer.php');
?>