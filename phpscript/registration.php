<!DOCTYPE html>
<html>
<head>
	<title>
		Registration
	</title>
</head>
<style>
	body, html {
		height: 100%;
		margin: 0;
	}
	.ncat {
		background-image: url("ncat.png") ;
		height:100%;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.paragraph {
		color: black;
		font-size: 50px;
		font-weight: bold;
		text-align: center;
	}
	.button {
		width: 150px;
		border-radius: 5px;
		padding: 10px;
		text-align: center;
		font-size: 17px;
		background-color: grey;
		color: whitesmoke;
	}
	.button:hover {
		background-color: darkblue;
		color: whitesmoke;
	}
	.center {
		text-align: center;
		margin-top: 200px;
	}

	input[type=text] {
		border-color: black;
		background-color:whitesmoke ;
		width: 40%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}
</style>
<div class="ncat">
	<body>
	<p class="paragraph"> Welcome To The Graduation Guide</p>
	<div class="center">
		<form name = "save" action = " " method = "GET">

		<input type="text" id="username" name="name" placeholder="Enter Username">
		<br><br>
		<input type="text" id="password" name="password" placeholder="Enter Password">
		<br><br>

		<input type="text" id="aggieID" name="bannerid" placeholder="Enter Aggie ID">
        		<br><br><br> <br> <br>
		<button class="button" onclick="save.action = 'login.html';"> Signup
        </button>
		</form>
	</div>
	</body>
</div>

<?php

    $name = $_GET['name'];
    $password = $_GET["password"];
    $bannerid= $_GET["bannerid"];




    echo $password;

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "graduation guide";

	$connection = new mysqli($servername,$username, $password, $database);
	if ($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	$sql = "INSERT INTO student ( name, password, bannerid)
			VALUES(?, ?, ?)";

	$stmt = mysqli_stmt_init($connection);
	if( !mysqli_stmt_prepare($stmt, $sql)){
		die(mysqli_error($conn));
	}

	mysqli_stmt_bind_param($stmt, "ssi",
							$name,
							$password,
							$bannerid);

	mysqli_stmt_execute($stmt);



?>
</html>
