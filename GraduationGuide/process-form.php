<?php
    $name = "";
    $password = "";
    $bannerid = "";
    $classification = "";

    $name = $_POST['name'];
    $password = $_POST["password"];
    $bannerid= $_POST["bannerid"];
    $classification = $_POST["classification"];


    echo $name;

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "graduation guide";


    $sql = "INSERT INTO student (name, password, bannerid, classification)
            VALUES('$name', '$password', $bannerid, $classification)";

            echo "record saved";
?>