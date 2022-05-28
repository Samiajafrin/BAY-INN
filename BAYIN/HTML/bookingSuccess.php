<?php
// Start the session
 session_start();
// echo "username = ".$_SESSION["username"];


// //getting info from url variable or get method
// $str= $_GET['info'];
// echo $str."<br>";
// $array = explode("@@",$str);


// //separate room number and price and days separated by @@
// $roomNumber = $array[0];
// $price = $array[1];
// $day = $array[2]+1; //add 1 because include day itself
// $checkinDate=$array[3];
// $checkoutDate=$array[4];
// //echo "room = $roomNumber price = $price day = $day";

// //total payment
// $payment = $price*$day;
echo "username = ".$_SESSION["username"];
echo "<br>Booking done";
echo "<br>thanx";

?>