<?php
// Start the session
session_start();

// echo "usename".$_SESSION["username"];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/reiviewStyle.css">
        <title>Test</title>
    </head>
    <body>

        <h1>Your Task</h1>

        <?php
            //establishing connection
            include_once "dbconnection.php";
            $username = $_SESSION["username"];

            $sql = "SELECT *
                    FROM staff
                    WHERE username='$username'";


            $result = $conn->query($sql);

            if($result -> num_rows > 0){

                while($rows = $result-> fetch_assoc()){
        

                    $staff_name=$rows['staff_name'];
                    
                    
                
                }
                
            }else{
                echo "No Result Found";
            }



            
            
            $sql = "SELECT *
                    FROM service
                    WHERE staff_name='$staff_name' and status='staff assigned'";

            $result = $conn->query($sql);

            if($result -> num_rows > 0){

                while($rows = $result-> fetch_assoc()){
        

                    $staff_name=$rows['staff_name'];

                    $name = $rows['username'];
                    $service_details = $rows['details'];
                    $room_number = $rows['type'];
                    ?>
                    <div class="review">
                        <span class="reviewer_name"><?php echo $name?></span>
                        <p class="review_text">
                             <?php echo "Please go to room number $room_number. MR. $name need some service and admin assigned you for this task.The service that MR. $name asked is --- <br>'''$service_details'''<br>You are asked to Do it quickly"?>
                        </p>
                        <a href="processStaffServiceRespond.php?serviceId=<?php echo $rows['id']?>" > <button id="back" > respond this task</button> </a>  
                    </div>

                    <?php
                
                }
                
            }else{
                echo "No Result Found";
            }
        ?>

        <!-- <div class="review">
            <span class="reviewer_name">Samiul Islam</span>
            <p class="review_text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quas temporibus est error consequuntur dolorem reprehenderit officia ipsam, eos non!
            </p>
        </div> -->
        
    </body>
</html>
