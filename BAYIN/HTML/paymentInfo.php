<?php
    include_once "dbconnection.php";
    //sql_quary
    $sql = "SELECT *
            FROM payment";
    $result = $conn->query($sql);
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
        
         <!-- <h1 style="text-align: center;" class="h1d"> YOUR RESULT BASED ON YOUR SEARCH </h1> -->
         <h2 style="text-align: center;" class="h1d"> PAYMENT HISTORY </h2>
         <table>
                    <tr>
                        <th>status</th>
                        <th>trans_date</th>
                        <th>trans_id</th>
                        <th>card type</th>
                        <th>amount</th>
                        <th>username</th>
                    </tr>
        <?php
                

                if($result->num_rows>0){
                  while($rows = $result->fetch_assoc()){

                      
        ?>
                        <tr>
                        <td><?php echo $rows['status']?></td>
                        <td><?php echo $rows['tran_date']?></td>
                        <td><?php echo $rows['tran_id']?></td>
                        <td><?php echo $rows['card_type']?></td>
                        <td><?php echo $rows['amount']?></td>
                        <td><?php echo $rows['username']?></td>
                        </tr>
        <?php

                    }
                  
      
                }else{
                    echo "No data found";
                }

                
        ?>

        </table>
                     
                    <div style="text-align: center;" >
                     <a href="adminDashboard.php" > <button id="back" > GO BACK </button> </a>  
                    </div>
    </body>            
</html>