<?php
    // Start the session
    session_start();
    //echo "usename".$_SESSION["username"];
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar | CodingNepal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Bay In</label>
      <ul>
        <li><a class="active" href="#">overview</a></li>
        <li><a href="FAQ.php">FAQ</a></li>
        <li><a href="roomSearch.php">Rooms</a></li>
        <li><a href="serviceOption.php">Services</a></li>
        <li><a href="reviewOption.php">Feedback</a></li>
        <li><a href="complainPage.php">Complain Box</a></li>
        <li><a href="staffLogInForm.php">Staff</a></li>
        <li><a href="adminLoginForm.php">Admin</a></li>
        <li><a href="userLogInForm.php">Log in</a></li>
      </ul>
    </nav>
    <section></section>
  </body>
</html>