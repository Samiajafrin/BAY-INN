<?php

    $number=$_GET['number'];
    $checkin=$_GET['checkin'];
    $checkout=$_GET['checkout'];
    $username=$_GET['username'];
    $id=$_GET['id'];

    // echo $number."<br>". $checkin."<br>".  $checkout."<br>".  $username;
    include_once "dbconnection.php";

    //sql_quary
    $sql = "DELETE FROM bookings
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {

        //successfull payment and booking
        ?>
        <!-- php off then write other language then again php on -->
        <!-- going to login page-->
        <script>window.location.assign('revervationCancelSuccess.php')</script>
        <?php

    }else{
        echo "<br>Unsuccessful Cancel";
    }

?>