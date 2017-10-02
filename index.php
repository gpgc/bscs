<!DOCTYPE html>
<html>
<head>
	<title>Welcome to My World</title>
	<head>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<style type="text/css">
		

		body {
			margin: 0;
			@media{
				width: 300px;
			}
		}
		header{
			background-color: black;
			color: white;
			height: 60px;
			padding: 11px;

		}

		
		nav {
			float: right;

		}
		nav ul li {
			display: inline-block;
			padding: 5px;
						transition: all 300ms ease-in;


		}
		
		nav ul li a:hover{
			background-color: #2d2d2d;
			padding: 10px;
			text-decoration: none;
			color: white;
						transition: all 300ms ease-in;


		}
		#active {
				background-color: #2d2d2d;
			padding: 10px;
			text-decoration: none;
			color: white;
		}

		nav ul  {
			margin-top: -35px;
			margin-right: 20px;
		}
		nav ul li a {
			text-decoration: none;
			color: white;
		}

		#main {
			width: 70%;
			padding: 20px;
			text-align: center;
			margin-top: 20px;
			margin-left: 15%;
			color: black;
			border: 1px solid black;
			border-radius: 5px;
		}


		#username {
			background-color: black;
			border: 2px solid black;
			border-radius: 5px;
			text-align: center;
			transition: all 300ms ease-in;

		}

		#username:focus{
			background-color: white;
			color: black;
			transition: all 300ms ease-in;

		}
			#pass {
			background-color: black;
			border: 2px solid black;
			border-radius: 5px;
			text-align: center;
			transition: all 300ms ease-in;

		}

		#pass:focus{
			background-color: white;
			color: black;
			transition: all 300ms ease-in;
			
		}
		#submit {
			background-color: black;
			color: white;
			padding: 5px;
			width: 10%;
			border: 1px solid black;
			transition: all 300ms ease-in;

			border-radius: 10px;
		}
		#submit:hover  {
			background-color: white;
			color: black;
			transition: all 300ms ease-in;
		}
		button {
			background-color: black;
			color: white;
			border: 1px solid white;
			border-radius: 5px;
		}
	</style>
</head>
<body id="body">


<header>
	<h2>BS Computer Science</h2>

	<nav>
		<ul>
			<li ><a  id="active" href="index.html">Home</a></li>
			<li><a href="notes.html">Notes</a></li>
			<li><a href="#">Sylabus</a></li>
			<li><a href="#">Datesheet</a></li>
			<li><button onclick="darkmode()">Dark Mode</button></li>



		</ul>
	</nav>
</header>

<section id="main" >

	<h2>Welcome To BS Computer Science Portal</h2>
	<p>This Page Is Availabe For Any Batch </p>

		<h3>Login Form</h3>
	<form action="#" method="POST">
	<label><strong>Username   </strong> <input type="text" name="username" placeholder="Enter Your Username" max="6" id="username" required="Username"></label><br>
	<label><strong>Password   </strong> <input type="text" name="password" placeholder="Enter Your Password"  id="pass" required="Password"></label><br>
	<input type="submit" value="Login" name="submit" id="submit">
	</form>
</section>

<section id="right"></section>
<center>
<footer> Coded By <a href="https://www.facebook.com/akmarwat9997">Abid Khan Marwat</a></footer>
</center>
</body>

</html>
<?php

if (isset($_POST['submit']))
{
	$usernames = $_POST['username'];
	$passs = $_POST['password'];

	if ($usernames == "abidhan"){
		echo "<script>alert('Bingo') </script>";
	}else {
				echo "<script>alert('Hacked') </script>";

	}
}

?>

<script type="text/javascript">
	
	function darkmode(){
var a = document.getElementById('body').setAttribute(
	"style","background-color:black;color:white;transition:all 300ms ease-in;");

var b = document.getElementById('main').setAttribute(
		"style","color:white;border:1px solid white;");



}

</script>

