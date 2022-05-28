<?php

    $serviceId=$_GET['serviceId'];
    $staffId=$_GET['staffId'];
    
    include_once "dbconnection.php";
    //sql_quary
    $sql = "SELECT *
            FROM staff
            WHERE staff_id=$staffId";
    $result = $conn->query($sql);
    $rows = $result->fetch_assoc();

    $choosen_Staff_Name = $rows['staff_name'];

    // UPDATE Customers
    // SET ContactName = 'Alfred Schmidt', City= 'Frankfurt'
    // WHERE CustomerID = 1;

    $sql = "UPDATE staff
            SET status = 'Currently Busy'
            WHERE staff_id=$staffId";

    if ($conn->query($sql) === TRUE) {

        $sql = "UPDATE service
                SET status = 'staff assigned', staff_name= '$choosen_Staff_Name'
                WHERE id=$serviceId";
        if ($conn->query($sql) === TRUE){

            //successfull both table update
            ?>
            <!-- php off then write other language then again php on -->
            <!-- going to login page-->
            <script>window.location.assign('successfullAssignedStaff.php')</script>
            <?php


        }else{
            echo "<br>Unsuccessful service update";
        }
        

    }else{
        echo "<br>Unsuccessful staff update";
    }

?>