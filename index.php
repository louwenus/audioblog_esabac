<!DOCTYPE html>
<head>
	<title>Audioblo - Senza donne niente storia</title>
	<link rel="stylesheet" href="style.css">
	<script src="jscript.js"></script> 
</head>







<body>
	<input type="checkbox" id="toggle_darkmode">
	<script>
		if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
  			document.getElementById("toggle_darkmode").checked = true;}</script>
	<div id="background-color"></div>
	<h1>Senza donne niente storie</h1>
	
	<label for="toggle_darkmode">
  		<div id="star">
    		<div class="star" id="star-1">★</div>
    		<div class="star" id="star-2">★</div>
  		</div>
  		<div id="moon"></div>
	</label>


	<?php include('./main.php'); ?>


</body>
