<?php
// Start the session
session_start();

// echo "usename".$_SESSION["username"];

// echo "sercice id = ".$_GET['serviceId'];

$servieID = $_GET['serviceId'];

//establishing connection
include_once "dbconnection.php";

$sql = "UPDATE service
SET status='staff responded'
WHERE id = $servieID";

if ($conn->query($sql) === TRUE) {

    echo "<h1>successfull respond of staff</h1>";

}else{
    echo "<br>Unsuccessful Cancel";
}


?>