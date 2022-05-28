<?php
// Start the session
session_start();


$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("bayin62755bc25d430");
$store_passwd=urlencode("bayin62755bc25d430@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

} else {

	echo "Failed to connect with SSLCOMMERZ";
}

// echo "username = ".$_SESSION["username"];
// echo "phone_number = ".$_SESSION["phonenumber"];
// echo "roomnumber = ".$_SESSION["roomnumber"];
// echo "price = ".$_SESSION["price"];
// echo "day = ".$_SESSION["day"];
// echo "checkinDate = ".$_SESSION["checkinDate"];
// echo "checkoutDate = ".$_SESSION["checkoutDate"];
// echo "payment = ".$_SESSION["payment"];
// echo "<br><br>";
// echo "room = ".$_GET['id'];
// echo "<br><br>";
// echo "user = ".$_GET['user'];
//getting info from url variable or get method
// $str= $_GET['info'];
// echo $str."<br>";
// $array = explode("@@",$str);

// //separate room number and price and days separated by @@
// $roomNumber = $array[0];
// $price = $array[1];
// $day = $array[2]+1; //add 1 because include day itself
// $checkinDate=$array[3];
// $checkoutDate=$array[4];
// $payment=$array[5];


//starting new season
$_SESSION["username"]=$_GET['user'];

$currentuser=$_SESSION["username"];
$roomNumber=$_GET['roomnumber'];
$checkin=$_GET['checkin'];
$checkout=$_GET['checkout'];
$payment=$_GET['payment'];

// echo "<br>";
// echo $status."<br>".$tran_date."<br>".$tran_id."<br>".$card_type;

// echo "<br>";
// echo "roomnumber = ".$roomNumber;
// echo "<br>";
// echo "user = ".$currentuser;
// echo "<br>";
// echo "checkin = ".$checkin;
// echo "<br>";
// echo "checkout = ".$checkout;
// echo "<br>";
// echo "payment = ".$payment;
// echo "<br>";

include_once "dbconnection.php";
//inserting values into database
$sql = "INSERT INTO payment (status,tran_date,tran_id,card_type,amount,username)
VALUES ('$status ', '$tran_date', '$tran_id','$card_type',$payment,'$currentuser')";  

if ($conn->query($sql) === TRUE) {
           
	$sql = "INSERT INTO bookings (number,checkin,checkout,username)
	VALUES ('$roomNumber ','$checkin','$checkout','$currentuser')";  
	if ($conn->query($sql) === TRUE) {
		//successfull payment and booking
		?>
		<!-- php off then write other language then again php on -->
		
		<!-- going to login page-->

		<script>window.location.assign('bookingSuccess.php')</script>

		<?php
	}else{
		echo "<br>Unsuccessful booking";
	}
} else {
//echo "Error: " . $sql . "<br>" . $conn->error;
echo "<br>Unsuccessful payment";
}

$conn->close();



// echo "<br><br>";
// echo $roomNumber." ".$price." ".$day." ".$checkinDate." ".$checkoutDate." ".$payment;

?>
<!-- <div style="text-align: center;" >
    <a href="testingdata.php" > <button> GO BACK </button> </a>  
</div> -->