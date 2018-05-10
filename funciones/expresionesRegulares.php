<?php

function is_valid_email($str)
{
  return (false !== filter_var($str, FILTER_VALIDATE_EMAIL));
}



function confirmarExistenciaEmail($conexion,$email){

	 $consulta = mysqli_query($conexion,"SELECT id FROM tblusuarios WHERE email = '$email' ");
	
	 $numeros = mysqli_num_rows($consulta);

	 if ($numeros) {
	 	return true;
	 }else{
	 	return false;
	 }

}


function validarTelefono(){





}


?>
