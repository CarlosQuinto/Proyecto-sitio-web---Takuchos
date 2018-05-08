<?php 

  function registrar($nombre, $apellido, $email , $pass , $telefono , $conexion){

    $encryptpass = password_hash($pass, PASSWORD_DEFAULT);

    $sign_up = sprintf("INSERT INTO tblusuarios (nombre, apellido, email, contrasena, telefono) VALUES ('%s', '%s', '%s', '%s', '%s')",
      mysqli_real_escape_string(mysqli_connect(),trim($nombre)),
      mysqli_real_escape_string(mysqli_connect(),trim($apellido)),
      mysqli_real_escape_string(mysqli_connect(),trim($email)),
      mysqli_real_escape_string(mysqli_connect(),trim($encryptpass)),
      mysqli_real_escape_string(mysqli_connect(),trim($telefono))
    );

    mysqli_query($conexion,$sign_up) or die("No jala");

  } 


  function crearOrden($idUsuario,$conexion){

      $crear = sprintf("INSERT INTO tblordenes (idUsuario) VALUES ('%s')",
      mysqli_real_escape_string(mysqli_connect(),trim($idUsuario)));

          mysqli_query($conexion,$crear) or die("No jala");
  }

//Todo meco haciendo una mexicanada, como me odio.
  function faramallaMeca($idUsuario,$conexion){

    $consulta  = mysqli_query($conexion,"SELECT MAX(id) AS id FROM tblordenes") or die(mysql_error());
    $id;
    if($row = mysqli_fetch_row($consulta)){
      $id = trim($row[0]);
    }

    return $id;
  }


 ?>




 