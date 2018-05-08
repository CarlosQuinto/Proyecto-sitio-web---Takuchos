<?php 	

	include("../conexiones/conexionLocalhost.php");
	
	$total = $_POST['total'];
	$cantidad = $_POST['cantidad'];
	$nombrePlatillo = $_POST['descripcion'];
    $idOrden = $_POST['ultimaOrden'];	


 ?>			
		<h2>Tu orden</h2>
		<table style="background-color: #F2F2F2F2; font-size: 20px" class="table table-condensed">
			<tr>
				<td class="col-lg-4">Platillo</td>
				<td class="col-lg-4">Cantidad</td>
				<td class="col-lg-4">Total</td>
			</tr>
			</table>
	
	<?php 

		 $consulta  = mysqli_query($conexion,"SELECT total, cantidad, descripcion  FROM tblordenesplatillos WHERE idOrden = $idOrden") or die(mysql_error());

		 while($row = mysqli_fetch_array($consulta)) { 
 ?>	   
			<table style="background-color: #F2F2F2F2; font-size: 15px;" class="table table-condensed ">
				<tr>
				<td class="col-lg-4"><?php echo $row['descripcion']; ?></td>
				<td class="col-lg-4"><?php echo $row['cantidad']; ?></td>
				<td class="col-lg-4"><?php echo $row['total']; ?></td>	
		    </tr>				

		</table>

<?php } ?>
			
