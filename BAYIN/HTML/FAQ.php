<?php
	session_start();
    include_once "dbconnection.php";
    //sql_quary
    $sql = "SELECT *
            FROM basicfaq";
    $result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  <link rel="stylesheet" href="../CSS/FAQstyle.css">
  <title>FAQ Template | CodyHouse</title>
</head>
<body>
<header class="cd-header flex flex-column flex-center">
  <div class="text-component text-center">
    <h1>FAQ</h1>
    <!-- <p>👈 <a class="cd-article-link" href="https://codyhouse.co/gem/css-faq-template">Article &amp; Download</a></p> -->
  </div>
</header>

<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
		<li><a class="cd-faq__category cd-faq__category-selected truncate" href="#basics">Basics</a></li>
		<!-- <li><a class="cd-faq__category truncate" href="#mobile">Mobile</a></li> -->
		<!-- <li><a class="cd-faq__category truncate" href="#account">Account</a></li> -->
		<li><a class="cd-faq__category truncate" href="#payments">Payments</a></li>
		<li><a class="cd-faq__category truncate" href="#privacy">Privacy</a></li>
		<!-- <li><a class="cd-faq__category truncate" href="#delivery">Delivery</a></li> -->
	</ul> <!-- cd-faq__categories -->

	<div class="cd-faq__items">

		
		<ul id="basics" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Basics</h2></li>
		<?php
		if($result->num_rows>0){
        	while($rows = $result->fetch_assoc()){
				$question=$rows['question'];
				$answer=$rows['answer'];
		?>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span><?php echo $question ?></span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p><?php echo $answer?></p>
          </div>
				</div>
			</li>
		<?php
			}
		}
		?>
			

		</ul> 



		<?php
			
			include_once "dbconnection.php";
			//sql_quary
			$sql = "SELECT *
					FROM paymentfaq";
			$result = $conn->query($sql);
		?>
		<ul id="payments" class="cd-faq__group">
			<li class="cd-faq__title"><h2>payment</h2></li>
		<?php
		if($result->num_rows>0){
        	while($rows = $result->fetch_assoc()){
				$question=$rows['question'];
				$answer=$rows['answer'];
		?>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span><?php echo $question ?></span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p><?php echo $answer?></p>
          </div>
				</div>
			</li>
		<?php
			}
		}
		?>


		<?php
			
			include_once "dbconnection.php";
			//sql_quary
			$sql = "SELECT *
					FROM privacyfaq";
			$result = $conn->query($sql);
		?>
		<ul id="privacy" class="cd-faq__group">
			<li class="cd-faq__title"><h2>Privacy</h2></li>
		<?php
		if($result->num_rows>0){
        	while($rows = $result->fetch_assoc()){
				$question=$rows['question'];
				$answer=$rows['answer'];
		?>
			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span><?php echo $question ?></span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p><?php echo $answer?></p>
          </div>
				</div>
			</li>
		<?php
			}
		}
		?>

		

		
	</div> 

	<a href="#0" class="cd-faq__close-panel text-replace">Close</a>
  
  <div class="cd-faq__overlay" aria-hidden="true"></div>
</section> <!-- cd-faq -->
<script src="../faqjs/util.js"></script> <!-- util functions included in the CodyHouse framework -->
<script src="../faqjs/main.js"></script> 
</body>
</html>