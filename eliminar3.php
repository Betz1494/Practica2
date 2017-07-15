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
                <th>Eliminar</th>
             </tr>
            <?php 
                $servername = "localhost";
        				$username = "root";
        				$password = "";
        				$dbname = "appweb";

                 
 
                $query = "DELETE FROM usuario WHERE idUsuario = 'idUsuario'";  
                $result = mysql_query($query); 
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
                           /*echo "<td><a href='eliminar.php?".$row["idUsuario"]."'class='btn btn-danger btn-circle'>".
                           "<span class='glyphicon glyphicon-remove' aria-hidden='true'></span>";*/
                           echo "<td>
                           <form method='post' action='eliminar3.php'> 
                            <input type='hidden' name='idUsuario' value='".$row["idUsuario"]."'>
                            <input type='submit' class='btn btn-danger btn-circle' value='Eliminar'>

                            </td>
                          </form>";
        				   }
				        
                            if (isset($_POST["idUsuario"]))
                    {
                    //Se almacena en una variable el id del registro a eliminar
                    $idUsuario = $_POST["idUsuario"];

                    //Preparar la consulta
                    $consulta = "DELETE FROM usuario WHERE idUsuario=$idUsuario";

                    //Ejecutar la consulta
                    //$resultado = mysql_query($consulta, $conn) or die(mysql_error());
                    $result = mysqli_query($conn, $consulta);

                    //redirigir nuevamente a la página para ver el resultado
                    
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