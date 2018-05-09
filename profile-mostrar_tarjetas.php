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

				$consulta = obtenerTarjetas($conexion,$idUsuario);
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
    
    <div  class="col-lg-12">
    	<!-- Menu opciones -->
    <div id="menu-opciones" class="col-lg-4">
                <h4>OPCIONES</h4> 
            <ul style="list-style: none;">
              <li><a href="profile-agregar_tarjeta.php">AGREGAR TARJETA</a></li>
              <li><a href="profile-cambiar_contraseña.php">CAMBIAR CONTRASEÑA</a></li>
                  <li><a href="profile-mostrar_tarjetas.php">TARJETAS</a></li>
                  <li><a href="profile-mostrar-pedidos.php">HISTORIAL DE PEDIDOS</a></li>

          </ul>
          <form id="form-cerrar-sesion" action="profile-editar_perfil.php" method="POST">
            <input id="cerrarsesion" type="submit" value="CERRAR SESION" name="sentclose">
          </form>
     </div>
     <div id="contenidotablatarjetas"class="col-lg-8" >
     	<div class="col-lg-2"></div>

	
		<div class="col-lg-8">




			<h4 style="margin-top: 30px;">Tarjetas de crédito</h4>
			<table class="table table-hover table-condensed"  style="margin-bottom: 30px;">
				
				<thead style="background-color: #dc3545; color: #f2f2f2f2; font-weight: bold;">
					<tr>
						<td>Número de tarjeta</td>
						<td>Nombre del propietario</td>
						<td>Fecha de expiración</td>
						<td>Código de seguridad</td>
					</tr>
				</thead>		
				<tbody>
					<?php 
						while ($listaTarjetas = mysqli_fetch_array($consulta)) {
					 ?>
						<tr>
						<td><?php echo $listaTarjetas['Numero'] ?></td>
						<td><?php echo $listaTarjetas['nombreCompleto'] ?></td>
						<td><?php echo $listaTarjetas['fechaExpiracion'] ?></td>
						<td><?php echo $listaTarjetas['codigoSeguridad'] ?></td>
						</tr>


					<?php 
						}
					 ?>

				</tbody>
				<tfoot>
					
				</tfoot>
			</table>
		</div>
	<div class="col-lg-2"></div>
     </div>

    </div>


	<div class="col-lg-12">
		<?php include("includes/footer.php") ?>
	</div>

</body>
</html>