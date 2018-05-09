            
            <?php if(!isset($_SESSION)){
                session_start();
                	
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");

            } ?>	

<?php 
	
	include('conexiones/conexionLocalhost.php');
	include('funciones/funciones.php');

		$idUsuario = $_SESSION['userId'];

		$idOrden = faramallaMeca($idUsuario,$conexion);

		$result	= obtenerDestinatario($idOrden,$conexion);

		$datosOrden = obtenerDatosOrden($idOrden,$conexion);

		$platillosOrden = obtenerPlatillos($idOrden,$conexion);

 ?>

			<?php 
				$mostrarDestinatario = mysqli_fetch_array($result);
			 ?>
			<?php 
				$mostrarOrden = mysqli_fetch_array($datosOrden);

			 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
 
	<?php include("includes/header.php") ?>

<div class="col-lg-1">
	
</div>

<div <div class="col-lg-10">
	

<h4 style="margin-top: 30px;">Compras realizadas</h4>
<table class="table table-hover table-condensed"  style="margin-bottom: 30px;">
	
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
				<td>
					Número de compra
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
<div class="col-lg-1">

</div>

<div class="col-lg-12" style="margin-top: 30px;">
	
<?php include("includes/footer.php") ?>

</div>

 </body>
 </html>