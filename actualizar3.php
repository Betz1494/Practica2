<?php
include('header3.php');
?>
<div class="container">
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
                <th>Actualizar</th>
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
				 
				$sql="SELECT *FROM usuario";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
					                echo "<tr>";
                                    echo "<td>".$row["idUsuario"]."</td>";
                                    echo "<td>".$row["Alias"]."</td>";
                                    echo "<td>".$row["Sexo"]."</td>";
                                    echo "<td>".$row["Edad"]."</td>";
                                    echo "<td>".$row["Pasatiempo"]."</td>";
                                    //echo "<td>".  ."</td>";
                   echo "<td><a href='update.php?idUsuario=".$row["idUsuario"]."'class='btn btn-primary btn-circle' name='idUsuario'>".
                   "<span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>";
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