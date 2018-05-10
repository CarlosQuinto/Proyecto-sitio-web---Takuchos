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
 
   function registrarTarjeta($idUsuario,$numerotarjeta,$nombreCompleto,$fechaexpiracion,$codigo,$conexion){
    
    $agregar_tarjeta = sprintf("INSERT INTO tbltarjetascredito (idUsuario, Numero, nombreCompleto, fechaExpiracion, codigoSeguridad) VALUES ('%s', '%s', '%s', '%s' , '%s')",
      mysqli_real_escape_string(mysqli_connect(),trim($idUsuario)),
      mysqli_real_escape_string(mysqli_connect(),trim($numerotarjeta)),
      mysqli_real_escape_string(mysqli_connect(),trim($nombreCompleto)),
      mysqli_real_escape_string(mysqli_connect(),trim($fechaexpiracion)),
      mysqli_real_escape_string(mysqli_connect(),trim($codigo))
      
    );
    mysqli_query($conexion,$agregar_tarjeta) or die("Ha ocurrido un error al registrar la tarjeta.");
  } 

  function cambiarContrasena($idUsuario,$contra,$conexion){

     $encryptpass = password_hash($contra, PASSWORD_DEFAULT);
     
    $queryCambiarContra = sprintf("UPDATE tblusuarios SET  contrasena = '%s' WHERE id = $idUsuario",
      mysqli_real_escape_string(mysqli_connect(),trim($encryptpass))
    );
     
     mysqli_query($conexion, $queryCambiarContra ) or die("Lo sentimos ocurrio un error al intentar ejecutar el query");
      header("Location: profile-editar_perfil.php");
  } 

   function editarInformacion($idUsuario,$nombre,$apellido,$telefono,$conexion){

  
    $queryEditarInformacion = sprintf("UPDATE tblusuarios SET  nombre = '%s', apellido = '%s', telefono = '%s' WHERE id = $idUsuario",
      mysqli_real_escape_string(mysqli_connect(),trim($nombre)),
      mysqli_real_escape_string(mysqli_connect(),trim($apellido)),
      mysqli_real_escape_string(mysqli_connect(),trim($telefono))
    );
     
     mysqli_query($conexion, $queryEditarInformacion ) or die("Lo sentimos ocurrio un error al intentar ejecutar el query");

  } 

  function validarTarjeta($numerotarjeta)

    {

        $pattern_1 ='/^((4[0-9]{12})|(4[0-9]{15})|(5[1-5][0-9]{14})|(3[47][0-9]{13})|(6011[0-9]{12}))$/';

        $pattern_2 = '/^((30[0-5][0-9]{11})|(3[68][0-9]{12})|(3[0-9]{15})|(2123[0-9]{12})|(1800[0-9]{12}))$/';

 

        if (preg_match($pattern_1, $numerotarjeta)) {

            return true;

        } else if (preg_match($pattern_2, $numerotarjeta)) {

            return true;

        } else {

            return false;

        }

    }
  
    function obtenerDestinatario($idOrden,$conexion){

       $consulta = mysqli_query($conexion,"SELECT * FROM datosdestinatario WHERE idOrden = $idOrden") or die(mysql_error());

       return $consulta;
    }


    function obtenerDatosOrden($idOrden, $conexion){

    $consulta = mysqli_query($conexion,"SELECT * FROM tblordenes WHERE id = $idOrden") or die(mysql_error());

       return $consulta;


    }

    function obtenerPlatillos($idOrden,$conexion){

      $consulta = mysqli_query($conexion,"SELECT descripcion, cantidad, total FROM tblordenesplatillos WHERE IdOrden = $idOrden") or die(mysql_error());

       return $consulta;

    }


    function obtenerTarjetas($conexion,$idUsuario){

      $consulta = mysqli_query($conexion,"SELECT * FROM tbltarjetascredito WHERE idUsuario = $idUsuario") or die(mysql_error());

      return $consulta;

    }

    function ordenesUsuario($conexion, $idUsuario){

      $consulta = mysqli_query($conexion, "SELECT id FROM tblordenes WHERE idUsuario = $idUsuario") or die(mysql_error());

      return $consulta;

    }

    function longitudPin($pin){

$longitud = strlen($pin);

if ($longitud =! 3) {
  return true;
}else{
  return false;
}
}






 ?>