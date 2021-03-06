<!DOCTYPE html>
<html>
<head>
	<title>map</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/map.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/map.js" type="text/javascript"></script>
	
</head>
<body>

<div id="map">
</div>

<nav class="nav">
	<div class="menuButton" id="openMenu">
		<i class="fa fa-bars fa-2x"></i>
	</div>
	<div class="menuBar">
		<div class="menuButtons">
			<div class="menuButton" id="myPos">
				<i class="fa fa-compass fa-2x"></i>
			</div>
			<div class="menuButton" id="openContext">
				<i class="fa fa-map fa-2x"></i>
			</div>
			<div class="contextMenu">
					<div class="menuButton" id="event">
						<label><i class="fa fa-university"></i> Show locations</label>
					</div>

					<div class="menuButton" id="location">
						<label><i class="fa fa-map-marker fa-2x"></i> Show events</label>
					</div>
			</div>
			<div class="menuButton">
				<i class="fa fa-user-o fa-2x"></i>
			</div>
			<div class="menuButton">
				<i class="fa fa-sign-in fa-2x" id="regBtn"></i>
			</div>
			<div class="menuButton" id="searchBox">
				<i class="fa fa-search fa-2x"></i> <span id="search"> <input type="text" name="search" placeholder="Search.."> </span>
			</div>
		</div>
	</div>
</nav>

<div class="logIn">

	<div class="registrationButtons">
		<div id="signInBtn" class="regBtn draw">
			Log in
		</div>
		<div id="signUpBtn" class="regBtn draw">
			Sign up
		</div>
	</div>
	<form>
		<div class="container" id="signInForm">
		    <label><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="uname" required>

		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>

		    <button type="submit">Login</button>
		    <label class="check"><input type="checkbox" checked="checked"> Remember me</label>
		</div>

		<div class="container" id="signUpForm">
		    <label><b>Email</b></label>
		    <input type="text" placeholder="Enter Email" name="email" required>

		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>

		    <label><b>Repeat Password</b></label>
		    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
		    <label class="check"><input type="checkbox" checked="checked"> Remember me</label>
		    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

		    <div class="clearfix">
		      <button type="button"  class="cancelbtn">Cancel</button>
		      <button type="submit" class="signupbtn">Sign Up</button>
		    </div>
		</div>
	</form>
</div>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyiNcTXu1HKoePkgTbNf_YJnRj9iQ3KB0&callback=showMap">
</script>

</body>
</html>