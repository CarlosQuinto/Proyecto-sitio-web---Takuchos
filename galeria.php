            <?php if(!isset($_SESSION)){
                session_start();
               
            } ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Galeria</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style-index.css">  
    <link rel="stylesheet" href="css/stilosgaleria.css"/>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>

   <?php include('includes/header.php') ?>

<section class="maincra">
    
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

</section>

 <?php include('includes/footer.php') ?>

</body>
</html>