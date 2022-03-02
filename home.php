<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0%;
			overflow: hidden;
			background-color: #05233D;
			width: 38%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 35px 34px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #09C77A;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		</style>
		
		<title>UserHome : TCC Project 4th Sem Project -
		Team System Trons</title>
	</head>
	
	<body>
		<h2>Technology Challenge Competition Project 4th Sem Project <br> ---Team System Trons---</h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="borrow.php">Borrow Book</a></li>
			
		</ul>
		<br>
		<h3>Welcome to Library Autometed System With RFID </h3> <hr>
		<br>
		<h3>Team Members</h3>
		
		<img src="system tron.png" alt="" style="width:60%;"><br>
		<img src="system tron2.png" alt="" style="width:60%;">
		 <hr> <h3><u>Main Objectives</u></h3>
		<br>  <ol>
			<li>Identify the main requirements of a Library automation system.</li> <br>

<li>Make unique id for each book by attaching QR codes.</li> <br>

<li>Build an input method to identify the readers in the library.</li> <br>

<li>Develop an attractive and simple UI that every user can easily identify.</li> <br>

<li>Gathering the required Hardware components (Smart cards and QR code reader)</li> <br>

<li>Identify the weaknesses of the system and give solutions to them.</li> <br>
</ol> 
<hr>



	</body>
</html>