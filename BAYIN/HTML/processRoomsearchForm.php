<?php
// Start the session
session_start();
echo "username = ".$_SESSION["username"];
echo "<br>";
$checkIn = $_POST['checkin'];
$checkOut = $_POST['checkout'];
$datetime1 = date_create($checkIn);
$datetime2 = date_create($checkOut);

$interval = date_diff($datetime1,$datetime2);

//echo $interval->format('%a');

//$day=$_POST['checkout'] - $_POST['checkin'];
//$year= $_POST[''];
// echo "check in - ".$checkIn."<br>"."check out - ".$checkOut;
    // if($checkIn > $checkOut){
    //     echo "check in greater ";
    // }else if($checkIn < $checkOut){
    //     echo "check in lower ";
    // }else{
    //     echo "check in equal ";
    // }
    

    include_once "dbconnection.php";
    //sql_quary
    $sql = "SELECT *
            FROM bookings";
    $result = $conn->query($sql);

    $sql = "SELECT *
            FROM room";
    $result2 = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
    <head>
    <style>
            .h1d{
            background-color:rgb(147, 179, 210);
            /* background-color: dodgerblue; */
            /* color: purple; */
            color: black;
            /* color: dodgerblue; */
            font-size: 60px;
            box-shadow:0px 0px 20px 0px grey;
          }
          .h2d{
            background-color: whitesmoke;
            /* color:tomato; */
            color: dodgerblue;
            font-size: 50px;
            font: bold;
            box-shadow:0px 0px 20px 0px grey;
          }
        
          #back{
            /* background-color: tomato; */
            color: black;
            font: bold;
            /* background-color: dodgerblue; */
            background-color:rgb(129, 166, 202);
            padding: 10px;
            margin-top: 30px;
            box-shadow:0px 0px 20px 0px grey;
          }
          .form{
            background-color:whitesmoke;
            color:midnightblue;
            font-size: 20px;
            text-align: center;
            
          }
          #search{
            background-color: tomato;
            color: black;
            padding: 10px;
           
          }
          
          table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                box-shadow:0px 0px 20px 0px grey;
                
                }

                td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {
                background-color: #dddddd;
                }
        
        </style>
    </head>

    <body>
        
         <!-- <h1 style="text-align: center;" class="h1d"> ANALIZED DATA BASED ON YOUR QUERY </h1> -->
         <h2 style="text-align: center;" class="h1d"> AVAILABLE ROOM </h2>
         <table>
                    <tr>
                        <th>Room Number</th>
                        <th>Category</th>
                        <th>Bed</th>
                        <th>Price</th>
                        <th>check in</th>
                    </tr>
        <?php
                $bookedRoom = array();
                
                if($result->num_rows>0){
                    while($rows = $result->fetch_assoc()){
                        // if(($checkIn < $rows['checkin'] || $checkIn > $rows['checkout']) && ($checkOut < $rows['checkin'] || $checkOut > $rows['checkout']) ){
                          //  if(!($checkIn < $rows['checkin'] && $checkOut < $rows['checkin']) || ($checkIn > $rows['checkout'] && $checkOut > $rows['checkout']) ){  
                            if(!($checkIn >  $rows['checkout'] || $checkOut < $rows['checkin'])){  
                            array_push($bookedRoom,$rows['number']);
                          }
                    }
        
                }else{
                    echo "No data found";
                }
                
                $arrlength = count($bookedRoom);

                if($result2->num_rows>0){
                  while($rows = $result2->fetch_assoc()){

                  
                    $roomnumber = $rows['number'];
                    $flag=0;
                    for($x = 0; $x < $arrlength; $x++) {
                      // if(!strcmp($roomnumber,$bookedRoom[$x])){
                      //     $flag=1;
                      // }
                      if($roomnumber==$bookedRoom[$x]){
                          $flag=1;
                      }
                    }
                    if($flag==0){
                      
        ?>
                        <tr>
                        <td><?php echo $rows['number']?></td>
                        <td><?php echo $rows['category']?></td>
                        <td><?php echo $rows['bed']?></td>
                        <td><?php echo $rows['price']?></td>
                        <td> <a href="paymentProcess.php?info=<?php echo $rows['number']?>@@<?php echo $rows['price']?>@@<?php echo $interval->format('%a')?>@@<?php echo $checkIn?>@@<?php echo $checkOut?>"> check in </a> </td>
                        </tr>
        <?php

                    }
                  }
      
                }else{
                    echo "No data found";
                }

                
        ?>

        </table>
                     
                    <div style="text-align: center;" >
                     <a href="roomSearch.php" > <button id="back" > GO BACK </button> </a>  
                    </div>
    </body>            
</html>