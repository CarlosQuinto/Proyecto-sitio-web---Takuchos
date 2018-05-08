<?php if(!isset($_SESSION)){
                session_start();
                
            } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Los Takuchos - Galeria</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	

</head>
<body>
	<?php include('includes/header.php') ?>
         
        <div >
            <center>
                <h4>"ALGUNAS DE LAS FOTOS TOMADAS EN NUESTRO LOCAL"</h4>
            </center>
            
        </div>

		<div class="contenedor-galeria" class="col-lg-12">
			<div class="galeria">
                <img src="img/1.jpg">
            </div>
            <div class="galeria">
                <img src="img/2.jpg">
            </div>
            <div class="galeria">
                <img src="img/3.jpg">
            </div>
            <div class="galeria">
                <img src="img/4.jpg">
            </div>
            <div class="galeria">
                <img src="img/5.jpg">
            </div>
            <div class="galeria">
                <img src="img/6.jpg">
            </div>
            <div class="galeria">
                <img src="img/7.jpg">
            </div>
            <div class="galeria">
                <img src="img/8.jpg">
            </div>
            <div class="galeria">
                <img src="img/9.jpg">
            </div>
            <div class="galeria">
                <img src="img/10.jpg">
            </div>
            <div class="galeria">
                <img src="img/11.jpg">
            </div>
            <div class="galeria">
                <img src="img/12.jpg">
            </div>
            <div class="galeria">
                <img src="img/13.jpg">
            </div>
            <div class="galeria">
                <img src="img/14.jpg">
            </div>
             <div class="galeria">
                <img src="img/15.jpg">
            </div>
             <div class="galeria">
                <img src="img/16.jpg">
            </div>
             <div class="galeria">
                <img src="img/index.jpg">
            </div>
             <div class="galeria">
                <img src="img/bebidas.jpg">
            </div>



		</div>


<div class="col-xs-12">
	<?php 
	include('includes/footer.php');
 ?>
</div>

</body>
</html>