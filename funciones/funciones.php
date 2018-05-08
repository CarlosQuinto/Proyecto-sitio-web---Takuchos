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

    $consulta  = mysqli_query($conexion,"SELECT id FROM tblordenes tbl1 WHERE tbl1.idUsuario = $idUsuario AND tbl1.fecha = (SELECT max(tbl2.fecha) FROM tblordenes tbl2 WHERE tbl2.idUsuario = tbl1.idUsuario)") or die(mysql_error());
    $id;
    if($row = mysqli_fetch_row($consulta)){
      $id = trim($row[0]);
    }

    return $id;
  }



function calcularTotal($idOrden,$conexion){

  $consulta = mysqli_query($conexion,"SELECT total FROM tblordenesplatillos WHERE idOrden = $idOrden") or die(mysql_error());

  $sumaTotal = 0;

  while ($row = mysqli_fetch_array($consulta)) {
    
    $sumaTotal += $row['total'];

  }

  
  return $sumaTotal;

}


  function registrarDestinatario($nombre,$apellido,$telefono,$direccion,$referencias, $metodo,$idUsuario,$conexion){


     $idOrden = faramallaMeca($idUsuario,$conexion);
     $total = calcularTotal($idOrden,$conexion);

     $orden = sprintf("UPDATE tblordenes SET direccion = '%s', referencias = '%s' , total = '%s' , formaPago = '%s' WHERE id = $idOrden",
      mysqli_real_escape_string(mysqli_connect(),trim($direccion)),
      mysqli_real_escape_string(mysqli_connect(),trim($referencias)),
      mysqli_real_escape_string(mysqli_connect(),trim($total)),
      mysqli_real_escape_string(mysqli_connect(),trim($metodo))
    );


      mysqli_query($conexion,$orden) or die("No jala");

      $destinatarios = sprintf("INSERT INTO datosdestinatario (Nombre, Apellido, Telefono, IdOrden) VALUES ('%s', '%s', '%s', '%s')",
      mysqli_real_escape_string(mysqli_connect(),trim($nombre)),
      mysqli_real_escape_string(mysqli_connect(),trim($apellido)),
      mysqli_real_escape_string(mysqli_connect(),trim($telefono)),
      mysqli_real_escape_string(mysqli_connect(),trim($idOrden))
    );

      mysqli_query($conexion,$destinatarios) or die(mysql_error());

  }

 ?>
