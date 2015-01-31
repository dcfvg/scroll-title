<?php 

include("lib/parsedown.php");
include("lib/parsedownExtra.php");

$Extra = new ParsedownExtra();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title></title>
	
	<link href='http://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/screen.css" type="text/css">	
</head>
<body class="container-fluid">

	<?php if(isset($_POST['message'])): ?>
		<form action="" method="post" class="form-horizontal">
			<fieldset>
				<legend>scroll-title</legend>
				<textarea id="message" class="col-sm-6" name="message">artistic *lab*</textarea>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary col-sm-6">Button</button>
			</fieldset>
		</form>
	<?php else:?>
<hr>
		<h1 class="message">ARTISTIC lab</h1>
		<hr>
		<h1 class="message">Contre - Courant Tokyo</h1>
		<hr>
		<h1 class="message">CCMMP CCMMP CCMMP CCMMP CCMMP CCMMP </h1>
		<hr>
	<?php endif ?>



	<script type="text/javascript" src="js/greensock/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.lettering-0.6.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
	<script>
		$(document).ready(function() {
			var controller = $.superscrollorama();
			$('.message').lettering().each(function() {

				var parent = $( this );
				controller.addTween(parent, TweenMax.to(parent, 0, {css:{visibility: "visible"}}));

				$( this ).find('span').each(function() {
					controller.addTween(
							parent,
							TweenMax.from( $( this ), 3, 
								{css:{top:+rand(-1300,-600)+'px'}}
							),
							300
						);
				})
			});
			function rand(min,max)
			{
			    return Math.floor(Math.random()*(max-min+1)+min);
			}
		});
	</script>
</body>
</html>