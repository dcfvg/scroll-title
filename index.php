<?php 

include("lib/parsedown.php");
include("lib/parsedownExtra.php");

$Extra = new ParsedownExtra();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="assets/css/screen.css" type="text/css">	
</head>
<body class="container">
	<h4>scroll down !</h4>

	<div id="messages">
		<?php foreach (glob("content/*.txt") as $f) echo $Extra->text(file_get_contents ($f));?>
	</div>

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.lettering-0.6.1.min.js"></script>
	<script type="text/javascript" src="assets/js/TweenMax.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.scrollmagic.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.scrollmagic.debug.js"></script>
	<script type="text/javascript" src="assets/js/st.js"></script>
</body>
</html>

