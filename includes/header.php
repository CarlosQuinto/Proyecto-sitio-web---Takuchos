<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
 ?>


<header>
<nav> 
	<ul class="row text-center quitar secciones">
		<a href="index.php"><li class="col-md-6 col-lg-3 logo cambiarColorLogo">Los Takuchos</li></a>
		<a href="menu.php"><li class="col-md-6 col-lg-3 cambiarColor">Menu</li></a>
		<a href="contacto.html"><li class="col-md-6 col-lg-3 cambiarColor">Galeria</li></a>

<?php 
				if (isset($_SESSION)) {
					
					if (!isset($_SESSION['userFullName'])) {
						?>
							<a href="login.php"><li class="col-md-6 col-lg-3 cambiarColor">Iniciar Sesion</li></a>

					<?php
					}else{
						?>
							<a href="profile-editar_perfil.php"><li class="col-md-6 col-lg-3 cambiarColor">
								
							<?php 
							echo $_SESSION['userFullName'];
							 ?>

							</li></a>						
							<?php
					}
				
				}
				 ?>

			


	</ul>	
</nav>

</header>




				