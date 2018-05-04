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
 ?>