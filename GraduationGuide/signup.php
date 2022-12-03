<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style type="text/css">
        input[type="submit"]{
            cursor:pointer;
        }
    </style>
</head>
<body>
<center>
    <h3>Register Here</h3>
    <form action=" " method="GET">
        <table>
            <tr>
                <td>Name:</td>
                <input type="hidden" name="name" value = 'John Smith'>
                <td><input type="text" name="name" placeholder="Enter first and last name Here"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="Enter Password Here"></td>
            </tr>

            <tr>
                <td>Banner ID:</td>
                <td><input type="ID" name="bannerid" placeholder="Enter Banner ID Here"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><p>Already a user? <a href="loginPage.html">Login Here</a></p></td>
            </tr>
        </table>
    </form>



</center>
<?php

    $name = $_GET['name'];
    $password = $_GET["password"];
    $bannerid= $_GET["bannerid"];
    //$classification = $_GET["classification"];



    echo $password;

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "graduation guide";

 $connection = new mysqli($servername,$username, $password, $database);
                if ($connection-> connect_error){
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

</body>

</html>
