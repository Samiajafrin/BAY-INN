<?php
    // Start the session
    session_start();
    //echo "usename".$_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="../CSS/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="../CSS/searchstyle.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>Review</h1>
							<p>See what other people thinks about us
							</p>
                            <div class="form-btn">
									<!-- <button class="submit-btn">make review</button>
                                    <button class="submit-btn">see review</button> -->
									<!-- <input type="submit" class="submit-btn" value="Check availability"> -->
                                    
                                    <button class="submit-btn"> <a href="reviewpage.php"> make review </a></button>
                                    <button class="submit-btn"> <a href="allReviews.php"> see review </a></button>
                                   
                                    
							</div>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-7">
						<div >
							<form>
								<div >
									<!-- <span class="form-label">Your Destination</span> -->
									<!-- <input class="form-control" type="text" placeholder="Enter a destination or hotel name"> -->
                                    
								</div>
								<!-- <div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check In</span>
											<input class="form-control" type="date" name="checkin" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<span class="form-label">Check out</span>
											<input class="form-control" type="date" name="checkout" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Adults</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Children</span>
											<select class="form-control">
												<option>0</option>
												<option>1</option>
												<option>2</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div> -->
								<div class="form-btn">
									<!-- <button class="submit-btn">make review</button>
                                    <button class="submit-btn">see review</button> -->
									<!-- <input type="submit" class="submit-btn" value="Check availability"> -->
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>