            

            <?php if(!isset($_SESSION)){
                session_start();             
            } ?>

			<?php if(!isset($_SESSION['userId'])){
                
              header("Location: formularios.php");

            } ?>	





<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/stilosmenu.css"/>
<link rel="stylesheet" type="text/css" href="css/style-index.css">
</head>
<body>

	<?php include("includes/header.php") ?>

   <div id="contenido-menu" class="col-xs-12">
   	 
   	    <div id="titulos-menu" class="col-xs-12">
			<center>
			  
			 <div id="titulo-tacos">
			 	<h2 class="col-xs-6">
	               Tacos
		        </h2>
		        
			 </div>

		     <div id="titulo-bebidas">

		     	<h2 class="col-xs-6">
			       Bebidas
		       </h2>

		     </div>
		       


		    </center>
        </div>

		    <div id="fotos-menu" class="col-xs-12">
		    	<center>
		    		<div class="col-xs-6">
		        	<figure> 
                      <img id="img-tacos" src="img/tacos.jpg"/> 
                     <!--
                      <figcaption> 
                           poner aqui pie de imagen.
                      </figcaption>
                      -->
		         </div>
		         <div class="col-xs-6">
		        	<figure> 
                      <img id="img-bebidas" src="img/bebidas.jpg"/> 
                      <!--
                      <figcaption> 
                           poner aqui pie de imagen.
                      </figcaption>
                      -->
		         </div>
		    	</center>
		    	 
		    </div>
		    <div id="menus" class="col-xs-12">
		    	<!--  Nose si deba ser un formulario  -->
		    	<center>

						<div id="menu-tacos" class="col-xs-6">

					<form action="menu.php" method="POST">
		    		<div >
		    			<h4>
		    			 Suadero	
		    			</h4>
		    			<p>
		    			 Taco de suadero | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="suadero">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="suadero" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-suadero" >Agregar</button>
				 	  	 </div>
					</form>

					<form action="menu.php" method="POST">
						
                     <div >
		    			<h4>
		    			 Adobada	
		    			</h4>
		    			<p>
		    			 Taco de adobada | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="adobada">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="adobada" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-adobada" >Agregar
				 	  	 </button>
		    		  </div>


					</form>

					<form action="menu.php" method="POST">
						<div >
		    			<h4>
		    			 Mixto	
		    			</h4>
		    			<p>
		    			 Taco Mixto| $18.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="mixto">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="mixto" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-mixto" >Agregar
				 	  	 </button>
		    			
		    		  </div>

					</form>

					<form action="menu.php" method="POST">
						<div >
		    			<h4>
		    			 Longaniza	
		    			</h4>
		    			<p>
		    			 Taco de Longaniza | $10.00
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="longaniza">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="longaniza" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-longaniza" >Agregar</button>
		    			
		    		  </div>

					</form>

					<form action="menu.php" method="POST">
						<div >
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
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="chicharronsv" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-chicharronsv" >Agregar</button>
		    			
		    		  </div>

					</form>

					<form action="menu.php" method="POST">
						
						<div >
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
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="chicharronss" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-chicharronss" >Agregar</button>
		    			
		    		  </div>
					</form>

		    	 </div>
		    	
		    	
		    	<div id="menu-bebidas" class="col-xs-6">
		    		<form action="">
		    			<div >
		    			<h4>
		    			 Horchata	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="horchata">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="horchata" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-horchata" >Agregar</button>
		    			 
		    			
		    		  </div>

		    		</form>
		    		  <form action="menu.php" method="POST">
		    		  	<div >
		    			<h4>
		    			 Jamaica	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="jamaica">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="jamaica" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-jamaica" >Agregar</button>
		    			 
		    		  </div>
		    		  </form>

		    		   <form action="menu.php" method="POST">
		    		   	<div >
		    			<h4>
		    			 Melón	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="melon">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="melon" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-melon" >Agregar</button>
		    			 
		    		  </div>
		    		   </form>
		    		   
		    		   <form action="menu.php" method="POST">
		    		   	<div >
		    			<h4>
		    			 Té de limón	
		    			</h4>
		    			<p>
		    			  $10.00  c/u
		    			</p>
		    			  
				 	  	 <label id="cantidad" for="tedelimon">Cantidad:</label>
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="tedelimon" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-tedelimon" >Agregar</button>
		    			 
		    		  </div>
		    		   </form>

		    		  <form action="menu.php" method="POST">
		    		  	<div >
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
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="cocacolav" />
				 	  	 
				 	  	 <button id="botones-menu" type="submit" name="orden-cocacolav" >Agregar</button>
		    			 
		    		  </div>
		    		  </form>


		    		  <form action="menu.php" method="POST">
		    		  	<div >
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
				 	  	 
				 	  	 <input id="campos-menu" type="number" name="cocacola" />
				 	  	 
					 	  	 <button id="botones-menu" type="submit" name="orden-cocacola" >Agregar</button>
		    			 
		    		  </div>
		    		  </form>

		    		  
		    	</div>
		    	</center>

		    	<div id="carrito" class="col-xs-12">
		    	  <center>
		    	  	<div class="col-xs-6">
		    	  	<h2>Tu orden</h3>
		    	  </div>
		    	  
		    	  <div class="col-xs-6" id="botones-carrito">
		    	    
		    	  	<button id="boton-ordenar" type="submit" name="ordenar" >Ordenar</button>
		    	  	<a id="cancelar" href="#">Cancelar orden</a>
		    	  </div>
		    	  </center>
		    	  
		         
		        </div>

		    </div>
		    

   </div>

		<?php include("includes/footer.php") ?>

</body>
</html>
