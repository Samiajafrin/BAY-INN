<?php

    $id=$_GET['id'];

    // echo $number."<br>". $checkin."<br>".  $checkout."<br>".  $username;
    include_once "dbconnection.php";

    //sql_quary
    $sql = "DELETE FROM staff
            WHERE staff_id=$id";

    if ($conn->query($sql) === TRUE) {

        //successfull payment and booking
        ?>
        <!-- php off then write other language then again php on -->
        <!-- going to login page-->
        <script>window.location.assign('staffInfo.php')</script>
        <?php

    }else{
        echo "<br>Unsuccessful Cancel";
    }

?>