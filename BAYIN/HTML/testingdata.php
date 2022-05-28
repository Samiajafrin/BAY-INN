<?php
// Start the session
session_start();
echo "username = ".$_SESSION["username"];
echo "phone_number = ".$_SESSION["phonenumber"];
echo "roomnumber = ".$_SESSION["roomnumber"];
echo "price = ".$_SESSION["price"];
echo "day = ".$_SESSION["day"];
echo "checkinDate = ".$_SESSION["checkinDate"];
echo "checkoutDate = ".$_SESSION["checkoutDate"];
echo "payment = ".$_SESSION["payment"];
?>