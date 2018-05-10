            

            <?php if(!isset($_SESSION)){
                session_start();             
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: login.php");

            } ?>	

<!DOCTYPE html>
<html>
<head>
	<title>Los Takuchos - Menu</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="alertifyjs/css/alertify.css">
		<link rel="stylesheet" type="text/css" href="alertifyjs/css/themes/default.css">
		<script src="alertifyjs/alertify.js"></script>
		<?php include('conexiones/conexionLocalhost.php') ?>
		<?php include("funciones/funciones.php") ?>

</head>
<body>

		<?php crearOrden($_SESSION['userId'],$conexion);?>

		<?php $lastId = faramallaMeca($_SESSION['userId'],$conexion);?>

		<script type="text/javascript" src="js/jQuery.min.js"></script>

		<script type="text/javascript">
			
			function anadirCarrito(pTaco, campoTaco, descripcion, ultimaOrden){
				var cantidad = document.getElementsByName(campoTaco)[0].value;
				if (cantidad <= 0) {
							alertify.error("Favor de ingresar solo cantidades positivas.");
															
				}else{

					var total = pTaco * cantidad;

					$.ajax({
						url: "funciones/anadirPlatillo.php",
						type: "POST",
						data: {total:total,descripcion:descripcion,cantidad:cantidad,ultimaOrden:ultimaOrden},
						success:function(){
							alertify.success("Platillo agregado, revisa tu carrito.");

						}});		

					$.ajax({
						url: "includes/tabla.php",
						type: "POST",
						data: {total:total,descripcion:descripcion,cantidad:cantidad,ultimaOrden:ultimaOrden},
						success:function(){
							$('#nuevaFila').load('includes/tabla.php',{total:total,descripcion:descripcion,cantidad:cantidad,ultimaOrden:ultimaOrden});
							$('#botonCompra').load('includes/botonCompra.php',{ultimaOrden:ultimaOrden});
						}});	

				}}

		</script>

	<?php include("includes/header.php") ?>


		    <div id="menus" class="col-lg-12">
		    	
		    	<center>

						<div id="menu-tacos" class="col-lg-6">

   	    <div id="titulos-menu" class="col-lg-12">

			 <div id="titulo-tacos">
			 	<h2 class="col-lg-12">
	               Tacos
		        </h2>   
			 </div>
        </div>
		    	<div id="fotos-menu" class="col-lg-12">
			    	<div class="col-lg-12">
			        	<img id="img-tacos" src="img/tacos.jpg"/> 
			        </div>
		    	</div>
					

					<form method="POST">
		    		<div class="margenMenu">
		    			<h4>
		    			 Suadero	
		    			</h4>
		    			<p>
		    			 Taco de suadero | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoSuadero" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-suadero" value="Agregar" onclick="anadirCarrito(10, 'campoSuadero','Suadero', '<?php echo $lastId ?>');">
				 	  	 </div>
					</form>

					<form method="POST">
						
                     <div class="margenMenu">
		    			<h4>
		    			 Adobada	
		    			</h4>
		    			<p>
		    			 Taco de adobada | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="adobada">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoAdobada" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" value="Agregar" name="orden-adobada" onclick="anadirCarrito(10,'campoAdobada','Adobada', '<?php echo $lastId ?>');">
		    		  </div>


					</form>

					<form method="POST">
						<div class="margenMenu">
		    			<h4>
		    			 Mixto	
		    			</h4>
		    			<p>
		    			 Taco Mixto| $18.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="mixto">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoMixto" min="0" max="5"/>
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-mixto" value="Agregar" onclick="anadirCarrito(18,'campoMixto','Mixto', '<?php echo $lastId ?>');">
		    			
		    		  </div>

					</form>

					<form method="POST">
						<div class="margenMenu">
		    			<h4>
		    			 Longaniza	
		    			</h4>
		    			<p>
		    			 Taco de Longaniza | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="longaniza">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoLonganiza" min="0" max="5"/>
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-longaniza" value="Agregar" onclick="anadirCarrito(10,'campoLonganiza','Longaniza', '<?php echo $lastId ?>');">
		    			
		    		  </div>

					</form>

					<form method="POST">
						<div class="margenMenu">
		    			<h4>
		    			 Chicharron	
		    			</h4>
		    			<h5>
		    			 Salsa verde	
		    			</h5>
		    			<p>
		    			 Taco de Chicharron Salsa verde | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="chicharronsv">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoChicharronsv" min="0" max="5"/>
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-chicharronsv" value="Agregar" onclick="anadirCarrito(10,'campoChicharronsv','ChicharronSV', '<?php echo $lastId ?>');">
		    			
		    		  </div>

					</form>

					<form method="POST">
						
						<div class="margenMenu">
		    			<h4>
		    			 Chicharron	
		    			</h4>
		    			<h5>
		    			 Salsa roja	
		    			</h5>
		    			<p>
		    			 Taco de Chicharron Salsa Roja | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="chicharronss">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoChicharronss" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-chicharronss" value="Agregar" onclick="anadirCarrito(10,'campoChicharronss','ChicharronSR', '<?php echo $lastId ?>');">
		    		  </div>
					</form>

		    	 </div>
		    	
		    	
		    	<div id="menu-bebidas" class="col-lg-6">

			   	    <div id="titulos-menu" class="col-lg-12">
						<div id="titulo-bebidas">
					  		<h2 class="col-lg-12">
								Bebidas
					 		 </h2>
						</div>  
			        </div>
							<div id="fotos-menu" class="col-lg-12">
						        <div class="col-lg-12">
						        	<img id="img-bebidas" src="img/bebidas.jpg"/> 
						        </div> 
					    	</div> 
	
		    		<form method="POST">
		    			<div class="margenMenu">
		    			<h4>
		    			 Horchata	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="horchata">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoHorchata" min="0" max="5"/>
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-horchata" value="Agregar" onclick="anadirCarrito(10,'campoHorchata','Agua de horchata', '<?php echo $lastId ?>');">
		    			
		    		  </div>

		    		</form>
		    		  <form method="POST">
		    		  	<div class="margenMenu">
		    			<h4>
		    			 Jamaica	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="jamaica">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoJamaica" min="0" max="5"/>
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-jamaica" value="Agregar" onclick="anadirCarrito(10,'campoJamaica','Agua de jamaica', '<?php echo $lastId ?>');">
		    			 
		    		  </div>
		    		  </form>

		    		   <form method="POST">
		    		   	<div class="margenMenu">
		    			<h4>
		    			 Melón	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="melon">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoMelon" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-melon" value="Agregar" onclick="anadirCarrito(10,'campoMelon','Agua de melon', '<?php echo $lastId ?>');">
		    			 
		    		  </div>
		    		   </form>
		    		   
		    		   <form method="POST">
		    		   	<div class="margenMenu">
		    			<h4>
		    			 Té de limón	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="tedelimon">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoTedelimon" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-tedelimon" value="Agregar" onclick="anadirCarrito(10,'campoTedelimon','Te de limon', '<?php echo $lastId ?>');">
		    			 
		    		  </div>
		    		   </form>

		    		  <form method="POST">
		    		  	<div class="margenMenu">
		    			<h4>
		    			 Coca-cola	
		    			</h4>
		    			<h5>
		    			  (vidrio) 500 ml
		    			</h5>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="cocacolav">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoCocacolav" min="0" max="5" />
				 	  	 
				 	  	 <input id="botones-menu" type="button" name="orden-cocacolav"  value="Agregar" onclick="anadirCarrito(10,'campoCocacolav','Coca Cola 500 ml', '<?php echo $lastId ?>');">
		    			 
		    		  </div>
		    		  </form>


		    		  <form method="POST">
		    		  	<div class="margenMenu">
		    			<h4>
		    			 Coca-cola	
		    			</h4>
		    			<h5>
		    			  600 ml
		    			</h5>
		    			<p>
		    			  $15.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="cocacola">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="campoCocacola" min="0" max="5" />
				 	  	 
					 	  	 <input id="botones-menu" type="button" name="orden-cocacola" value="Agregar" onclick="anadirCarrito(15,'campoCocacola','Coca Cola 600 ml', '<?php echo $lastId ?>');">
		    			 
		    		  		</div>
		    		  	</form>

		    		  
		    			</div>
		    		</center>		         
		        </div>

				<div class="col-lg-1">
					
				</div>

		        <div class="col-lg-10 carrito">
					
					<div>
						<div id="nuevaFila" class="col-lg-12">
							<h2>Tu orden</h2>

						</div>
					</div>


					</div>
		        

		        </div>


				<div class="col-lg-1">
					
				</div>

<div class="col-lg-12" style="margin-bottom: 20px;">
	<center>
	<label id="botonCompra">
		

	</label>
	</center>

</div>
		    
<div class="col-lg-12">
		<?php include('includes/footer.php') ?>
</div>

</body>
</html>

</script>
