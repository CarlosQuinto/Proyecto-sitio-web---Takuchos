          <?php if(!isset($_SESSION)){
                session_start();
                
            } ?>

<!DOCTYPE html>
<html>
<head>
	<title>Los Takuchos - Inicio</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

</head>
<body>
	<?php include('includes/header.php') ?>
    
    <div class="col-lg-12">
    	<center>
    		<div class="col-lg-6">
    			<h3>
    			    Localizanos en: 
    			</h3>
    		</div>
    		<div class="col-lg-6">
    			<h3>
    				 Disfruta de los mejores tacos de la region.
    			</h3>
    		</div>
    	</center>
    </div>
	
	<div  class="col-lg-12">
		<div id ="mapa-ubicacion" class="col-xs-6">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3525.1777094593194!2d-110.92804988536858!3d27.927196822403687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86c97a94bb1b4207%3A0x9601736253a9bd18!2sLos+Takuchos!5e0!3m2!1ses-419!2smx!4v1525798938136" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-xs-6">
			<div id="contenedor-slider" class="contenedor-slider">
 <div id="slider" class="slider">
 	<section class="slider__section"><img src="img/1.jpg"></section>
    <section class="slider__section"><img src="img/2.jpg"></section>
    <section class="slider__section"><img src="img/3.jpg"></section>
    <section class="slider__section"><img src="img/4.jpg"></section>
    <section class="slider__section"><img src="img/5.jpg"></section>
    <section class="slider__section"><img src="img/6.jpg"></section>
    <section class="slider__section"><img src="img/7.jpg"></section>
    <section class="slider__section"><img src="img/8.jpg"></section>
    <section class="slider__section"><img src="img/9.jpg"></section>
    <section class="slider__section"><img src="img/10.jpg"></section>
    <section class="slider__section"><img src="img/11.jpg"></section>
    <section class="slider__section"><img src="img/12.jpg"></section>
    <section class="slider__section"><img src="img/13.jpg"></section>
    <section class="slider__section"><img src="img/14.jpg"></section>
    <section class="slider__section"><img src="img/15.jpg"></section>
    <section class="slider__section"><img src="img/16.jpg"></section>
 
  </div>
  <div id="btn-prev" class="btn-prev">&#60;</div>
  <div id="btn-next" class="btn-next">&#62;</div>
 </div>
    
 <script src="js/slider.js"></script>
		</div>

	</div>
		

<div class="col-xs-12">
	<?php 
	include('includes/footer.php');
 ?>
</div>

</body>
</html>