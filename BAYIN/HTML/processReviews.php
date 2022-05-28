<?php
    // Start the session
    session_start();
    //echo "usename".$_SESSION["username"];

    //establishing connection
    include_once "dbconnection.php";

    $currUser = $_SESSION["username"];
    $review=$_POST['review'];


    //inserting values into database
    $sql = "INSERT INTO review (username,reviews)
    VALUES ('$currUser','$review')";

    if ($conn->query($sql) === TRUE) {
                
        //successfull Insert
        ?>
        <!-- php off then write other language then again php on -->
        
        <!-- going to login page-->
    
        <script>window.location.assign('reviewSuccessPage.php')</script>
    
        <?php
    
    } else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
        echo "<br>failed to insert review";
    }

?>