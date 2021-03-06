<!DOCTYPE html>
<html>

<head>
	<title>Ardulous</title>
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/particles.min.js"></script>
	<style>
		#holder{
			margin:10vh 50vw 40vh 37vw;
		}
	</style>
</head>

<body>
	<div id="particles-js"></div>
	<div id="holder">
		<p id="logo"><b>Ardulous</b></p>
		<br>
		<br>
		<br>
		<form method="POST" id="register">
			<br>
			<br>
			<h2>Register as user</h2>
			<br>
			<br>
			<span class="left">Choose a unique username: </span>
			<input type="text" name="id">
			<br>
			<br>
			<span class="left">Name: </span>
			<input type="text" name="name">
			<br>
			<br>
			<span class="left">Email: </span>
			<input type="email" name="email">
			<br>
			<br>
			<span class="left">Password: </span>
			<input type="password" name="pw">
			<br>
			<br>
			<span class="left">Date of birth: </span>
			<input type="date" name="dob">
			<br>
			<br>
			<span class="left">Address: </span>
			<input type="text" name="address">
			<br>
			<br>
			<span class="left">City: </span>
			<input type="text" name="city">
			<br>
			<br>
			<span class="left">Occupation: </span>
			<input type="text" name="occupation">
			<br>
			<br>
			<span class="left">Tell us about yourself: </span>
			<input type="text" name="info">
			<br>
			<br>
			<span class="left">Interests: </span>
			<input type="text" name="interest">
			<br>
			<br>
			<input type="text" name="profile_cover" value=" " hidden>
			<input type="text" name="profile_pic" value=" " hidden>
			<button type="submit" name="register">Register</button>
			<br>
			<br>
		</form>
		<a href="{{ url_for('register_org">Not a User? Register as Organization here</a>
		<a href="{{ url_for('login_user">Already Registered? Login here</a>
	</div>
</body>
<script type="text/javascript">
	particlesJS.load("particles-js", "js/particlesjs-config.json");
</script>

</html>