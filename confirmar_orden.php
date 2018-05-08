
<?php include('conexiones/conexionLocalhost.php') ?>
<?php include("funciones/funciones.php") ?>

            <?php if(!isset($_SESSION)){
                session_start();
                	
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");

            } ?>	

<?php 


if (isset($_POST['confirmar'])) {

	$n = $_POST['campoNombre'];
	$a = $_POST['campoApellido'];
	$t = $_POST['campoTelefono'];	
	$d = $_POST['campoDireccion'];
	$r = $_POST['campoReferencias'];
	$m = $_POST['metodopago'];
	$idUsuario = $_SESSION['userId'];


	$bandera=0;

	if (empty($n)) {$bandera++;}

	if (empty($a)) {$bandera++;}

	if (empty($t)) {$bandera++;}

	if (empty($d)) {$bandera++;}

	if (empty($r)) {$bandera++;}

	if (empty($m)) {$bandera++;}

	if ($bandera > 0) {
		
		echo "No dejes campos vacios.";

		/*
			Aqui va un alertify
			Favor de no dejar campos vacios.
		*/

	}else{
		registrarDestinatario($n, $a, $t, $d, $r, $m, $idUsuario, $conexion);
	}

	


	

}

 ?>




<!DOCTYPE html>
<html lang="es">
<head>

	<title>Los Takuchos - Confirmar orden</title>
         <meta charset="UTF-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/stilosperfil.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		


</head>
<body>
	<?php include('includes/header.php') ?>
<center>
<div id="contenido-c-o"  >
		<div class="col-lg-3"></div>
      		<div id="formulario-c-d" class="col-lg-6">
      			<h3 class="col-lg-12"><strong>Confirmar orden</strong></h3>
      			 <form action="" method="POST" class="col-lg-12">
      			 	 <div class="col-lg-6">
      			 	 	 <h4 class="col-lg-12">Confirma tus datos</h4>

				 	  	 <div class="col-lg-12">
				 	  	 	<label><input id="campo" type="text" name="campoNombre" placeholder="Nombre" /></label>
				 	  	 </div>                       
				 	
				 		<div class="col-lg-12">
					 	  	<label><input id="campo" type="texto" name="campoApellido" placeholder="Apellido"/></label>
				 	  	 </div>
                         
						 <div class="col-lg-12">
					 	  	 <label><input id="campo" type="tel" name="campoTelefono" placeholder="Telefono" /></label>
				 	  	 </div>
				 	</div>


				 	<div id="inf-l"  class="col-lg-6">
				 		 <h4 class="col-lg-12">Tu ubicacion</h4>

				 		 	<div class="col-lg-12">
				 	  	        <label><input id="campo" type="text" name="campoDireccion" placeholder="Direccion"/></label>				 	  	 	    
				 	  	    </div>

				 		    <div class="col-lg-12">
				 	  	        <label><input id="campo" type="text" name="campoReferencias" placeholder="Referencias"/></label>   
				 	  	    </div>


				 	<div id="contenido-c-mp" class="col-lg-12" style="margin-top: 10px;">

      		        	<h4 >Tipo de pago</h4>
      		        	<div>
      		            <label class="col-lg-12"><input type="radio" name="metodopago" value="Efectivo" checked>Efectivo
      		            </label> 
                        <label class="col-lg-12">
                        <input type="radio" name="metodopago" value="Tarjeta de credito">
                        Tarjeta
                        </label>
      		        	</div>
      		        
      	            </div>
      		        <div class="col-lg-12">
                      <button id="actualizarc" type="submit" name="confirmar" >Confirmar</button>
                    </div>
      		        </div>

      			</form>
      		</div>
        <div class="col-lg-3"></div>
    </div>
</center>
    
      

<div class="col-lg-2">	</div>
 
<div class="col-lg-12" style="margin-top: 25px;">
		<?php include('includes/footer.php') ?>
</div>




</body>
</html>



