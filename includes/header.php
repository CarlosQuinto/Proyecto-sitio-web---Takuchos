<?php 
	if (!isset($_SESSION)) {
		session_start();
	}
 ?>


<header>
	<div class="wrapper">
		<div class="logo">Los Takuchos</div>

			<nav>
				<a href="index.php">Inicio</a>
				<a href="menu.php">Menú</a>
				<a href="galeria.php">Galería</a>

				<?php 
				if (isset($_SESSION)) {
					
					if (!isset($_SESSION['userFullName'])) {
						?>

							<a href="formularios.php">Iniciar Sesion</a>

					<?php
					}else{
						?>
							<a href="profile.php">
								
								<?php echo $_SESSION['userFullName']; ?>

							</a>
						<?php
					}
				
				}
				 ?>

				
			</nav>
	</div>
</header>