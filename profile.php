            <?php if(!isset($_SESSION)){
                session_start();
                
            } ?>

<!DOCTYPE html>
<html>
<head>
	<title>		
	</title>

	<link rel="stylesheet" type="text/css" href="css/style-index.css">	

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){

		$(window).scroll(function(){
			if ( $(this).scrollTop() > 0 ) {
				$('header').addClass('header2');	
			}else{
				$('header').removeClass('header2');
			}
		});

	});	

	</script>

</head>
<body>


<?php include('includes/header.php') ?>

	<section class="contenido wrapper">
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam lectus, hendrerit a libero et, gravida lacinia lacus. Cras justo augue, pharetra in accumsan et, ultrices ut odio. Duis feugiat vulputate urna, in mollis leo consectetur et. Proin non elit augue. Quisque non lacus justo. Ut quis ex est. Nunc ullamcorper faucibus dolor ut condimentum. Quisque sit amet magna lectus. Fusce tempor quis dui id accumsan. Sed malesuada bibendum facilisis. Etiam gravida eget sem vitae dignissim. Quisque varius ultricies velit, nec pharetra urna viverra sed. Maecenas varius ante felis, vel posuere nisl facilisis ut. Donec malesuada nibh eu lorem porta, sed consequat elit congue.
		</p>

		<p>
		Proin massa quam, fermentum id congue ac, vestibulum et magna. Mauris tristique, eros in pretium feugiat, ante augue interdum erat, vel bibendum est ligula a urna. Donec viverra fermentum tristique. Praesent sollicitudin a nunc id pharetra. Vivamus imperdiet nisl ut felis luctus, sed congue dolor vestibulum. Sed dignissim finibus urna, in commodo quam dignissim eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac commodo mi. Nam sit amet euismod sem. Praesent finibus leo eu urna blandit tincidunt. Maecenas id magna eget velit gravida luctus ut sed orci. Sed ultricies elit vitae tortor rhoncus rutrum. Morbi dapibus, est eu ultrices laoreet, massa enim faucibus erat, fermentum eleifend magna quam blandit nunc. Ut ornare maximus consequat. Pellentesque vehicula, felis a vulputate placerat, libero lorem porttitor libero, sed tempus nibh ipsum quis mi. Cras tempor, velit sed commodo lacinia, sem neque placerat odio, eget congue neque nulla vel nisl.	
		</p>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam lectus, hendrerit a libero et, gravida lacinia lacus. Cras justo augue, pharetra in accumsan et, ultrices ut odio. Duis feugiat vulputate urna, in mollis leo consectetur et. Proin non elit augue. Quisque non lacus justo. Ut quis ex est. Nunc ullamcorper faucibus dolor ut condimentum. Quisque sit amet magna lectus. Fusce tempor quis dui id accumsan. Sed malesuada bibendum facilisis. Etiam gravida eget sem vitae dignissim. Quisque varius ultricies velit, nec pharetra urna viverra sed. Maecenas varius ante felis, vel posuere nisl facilisis ut. Donec malesuada nibh eu lorem porta, sed consequat elit congue.
		</p>

		<p>
		Proin massa quam, fermentum id congue ac, vestibulum et magna. Mauris tristique, eros in pretium feugiat, ante augue interdum erat, vel bibendum est ligula a urna. Donec viverra fermentum tristique. Praesent sollicitudin a nunc id pharetra. Vivamus imperdiet nisl ut felis luctus, sed congue dolor vestibulum. Sed dignissim finibus urna, in commodo quam dignissim eget. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac commodo mi. Nam sit amet euismod sem. Praesent finibus leo eu urna blandit tincidunt. Maecenas id magna eget velit gravida luctus ut sed orci. Sed ultricies elit vitae tortor rhoncus rutrum. Morbi dapibus, est eu ultrices laoreet, massa enim faucibus erat, fermentum eleifend magna quam blandit nunc. Ut ornare maximus consequat. Pellentesque vehicula, felis a vulputate placerat, libero lorem porttitor libero, sed tempus nibh ipsum quis mi. Cras tempor, velit sed commodo lacinia, sem neque placerat odio, eget congue neque nulla vel nisl.	
		</p>
		<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam lectus, hendrerit a libero et, gravida lacinia lacus. Cras justo augue, pharetra in accumsan et, ultrices ut odio. Duis feugiat vulputate urna, in mollis leo consectetur et. Proin non elit augue. Quisque non lacus justo. Ut quis ex est. Nunc ullamcorper faucibus dolor ut condimentum. Quisque sit amet magna lectus. Fusce tempor quis dui id accumsan. Sed malesuada bibendum facilisis. Etiam gravida eget sem vitae dignissim. Quisque varius ultricies velit, nec pharetra urna viverra sed. Maecenas varius ante felis, vel posuere nisl facilisis ut. Donec malesuada nibh eu lorem porta, sed consequat elit congue.
		</p>

	</section>

    <?php include('includes/footer.php') ?>

</body>
</html>