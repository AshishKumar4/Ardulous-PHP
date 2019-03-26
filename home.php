<!DOCTYPE html>
<html>
<head>
	<title>Ardulous</title>
	<link href="css/style.css" rel="stylesheet">
	<style>
		body	
			{
				background-size: cover;
				background-repeat: no-repeat;
			}

		p	
			{
				color: black;
				text-align: center;
				font-family: maiandra gd;
				font-size: 500%;
				padding-top: 0px;
				position: relative;
			}
		
		button
			{
				border-radius: 8px;
				font-size: 135%;
				background-color: teal;
				margin:auto;
			}
		
	</style>
	<script type="text/javascript" src="js/particles.min.js"></script>
</head>
<body>
	<div id="particles-js"></div>
	<div id="holder">
			<p>Ardulous</p><br>
			<form>
				<div align="center"><button type="button" name="login" id="b1">Login</button>
				<button type="button" name="register" id="b2">Register</button></div><br>
				
			</form>
	</div>
</body>
<script type="text/javascript">
	particlesJS.load("particles-js","js/particlesjs-config.json");
</script>
</html>
	