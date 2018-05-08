  <?php 
include("../conexiones/conexionLocalhost.php");

  $total = $_POST['total'];
  $cantidad = $_POST['cantidad'];
  $nombrePlatillo = $_POST['descripcion'];
  $idOrden = $_POST['ultimaOrden'];

  $result = mysqli_query($conexion,"SELECT id FROM tblplatillos WHERE nombre = '$nombrePlatillo'") or die(mysql_error());

  $row = mysqli_fetch_array($result);

   $idPlatillo = $row['id'];

  $ordenPlatillo = sprintf("INSERT INTO tblordenesplatillos (IdPlatillo, cantidad, IdOrden, total, descripcion) VALUES ('%s', '%s', '%s', '%s', '%s')",
      mysqli_real_escape_string(mysqli_connect(),trim($idPlatillo)),
      mysqli_real_escape_string(mysqli_connect(),trim($cantidad)),
      mysqli_real_escape_string(mysqli_connect(),trim($idOrden)),
      mysqli_real_escape_string(mysqli_connect(),trim($total)),
      mysqli_real_escape_string(mysqli_connect(),trim($nombrePlatillo))
    );


  	mysqli_query($conexion,$ordenPlatillo) or die("No jala");




   ?>
