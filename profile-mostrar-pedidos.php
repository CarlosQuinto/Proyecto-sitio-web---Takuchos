			
			<?php include('conexiones/conexionLocalhost.php') ?>
			<?php include('funciones/funciones.php') ?>


            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");
            } ?>	


		<?php 

			$idUsuario = $_SESSION['userId'];

			$consulta = ordenesUsuario($conexion,$idUsuario);
		 	
			while ($idOrden = mysqli_fetch_array($consulta)) {
			
			$result	= obtenerDestinatario($idOrden['id'],$conexion);

			$datosOrden = obtenerDatosOrden($idOrden['id'],$conexion);

			$platillosOrden = obtenerPlatillos($idOrden['id'],$conexion);

			}

		 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

			<link rel="stylesheet" href="css/style.css"/>
			<link rel="stylesheet" href="css/stilosperfil.css"/>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>



	<?php include("includes/header.php") ?>

<center>
	    <div id="menu-opciones" class="col-lg-12">
                <h4>OPCIONES</h4> 
            <ul style="list-style: none;">
              <li><a href="profile-agregar_tarjeta.php">AGREGAR TARJETA</a></li>
              <li><a href="profile-cambiar_contraseña.php">CAMBIAR CONTRASEÑA</a></li>
                  <li><a href="profile-mostrar_tarjetas.php">TARJETAS</a></li>
                  <li><a href="profile-mostrar-pedidos.php">HISTORIAL DE PEDIDOS</a></li>

          </ul>
          <form id="form-cerrar-sesion" method="POST">
            <input id="cerrarsesion" type="submit" value="CERRAR SESION" name="sentclose">
          </form>
     </div>
</center>

            <?php 
            if (isset($_POST['sentclose'])) {
              
             session_destroy();
             header('Location: index.php');
             }

            ?>


			<?php 

			$consulta = ordenesUsuario($conexion,$idUsuario);
		 	
			while ($idOrden = mysqli_fetch_array($consulta)) {
			
			$result	= obtenerDestinatario($idOrden['id'],$conexion);

			$datosOrden = obtenerDatosOrden($idOrden['id'],$conexion);

			$platillosOrden = obtenerPlatillos($idOrden['id'],$conexion);

						
				$mostrarDestinatario = mysqli_fetch_array($result);
			 ?>
			<?php 
				$mostrarOrden = mysqli_fetch_array($datosOrden);

			 ?>


<div class="col-lg-12">   <!-- Este es el div que modificaras-->


<div class="col-lg-1"></div>

<div class="col-lg-10">
	

<h4 style="margin-top: 30px;">Compras realizadas</h4>
<table class="table table-hover table-condensed"  style="margin-bottom: 10px;">
	
	<thead style="background-color: #dc3545; color: #f2f2f2f2; font-weight: bold;">
		<tr>
			<td>Descripción</td>
			<td>Cantidad</td>
			<td>Precio Total</td>
		</tr>
	</thead>

	<tbody>
		
		<?php 
			while ($mostrarPlatillos = mysqli_fetch_array($platillosOrden)) {
				?>
				<tr>
					<td><?php echo $mostrarPlatillos['descripcion'] ?></td>
					<td><?php echo $mostrarPlatillos['cantidad'] ?></td>
					<td><?php echo $mostrarPlatillos['total'] ?></td>
				</tr>
				<?php
			}

		 ?>


	</tbody>

	<tfoot>
		
	</tfoot>

</table>

	<h4>Datos de orden</h4>
 	<table class="table table-hover table-condensed">
 		<thead style="background-color: #dc3545; color: #f2f2f2f2; font-weight: bold;">
 			<tr>
 				<td>
 					Fecha
 				</td>
 				<td>
 					Destinatario
 				</td>
				<td>
					Teléfono
				</td>
				<td>
					Dirección
				</td>
				<td>
					Referencias
				</td>
				<td>
					Forma de pago
				</td>
				<td>
					Total $
				</td>
 			</tr>
 		</thead>
		
		<tbody>
				<tr>
					<td><?php echo $mostrarOrden['fecha']; ?></td>
					<td><?php echo $mostrarDestinatario['Nombre'] . " " . $mostrarDestinatario['Apellido'];?></td>
					<td><?php echo $mostrarDestinatario['Telefono']; ?></td>
					<td><?php echo $mostrarOrden['direccion']; ?></td>
					<td><?php echo $mostrarOrden['referencias']; ?></td>
					<td><?php echo $mostrarOrden['formaPago']; ?></td>
					<td><?php echo $mostrarOrden['total']; ?></td>
				</tr>
		</tbody>

		<tfoot>
			

		</tfoot>

 	</table>


</div>
<div class="col-lg-1"></div>
</div>
<?php 
}
 ?>
			
	<div class="col-lg-12">
		
	<?php include("includes/footer.php") ?>

	</div>


</body>
</html>