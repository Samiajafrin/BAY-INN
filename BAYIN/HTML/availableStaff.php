<?php
    include_once "dbconnection.php";
    //sql_quary
    $serviceId=$_GET['serviceId'];
    
    $sql = "SELECT *
            FROM staff
            WHERE status='available'";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .h1d{
            background-color:whitesmoke;
            color: purple;
            font-size: 60px;
            
          }
          .h2d{
            background-color: whitesmoke;
            color:tomato;
            font-size: 50px;
          }
        
          #back{
            background-color: tomato;
            color: black;
            padding: 10px;
            margin-top: 30px;
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
        
         <h1 style="text-align: center;" class="h1d"> YOUR RESULT BASED ON YOUR SEARCH </h1>
         <h2 style="text-align: center;" class="h2d"> CONTENT LIST </h2>
         <table>
                    <tr>
                        <th>id</th>
                        <th>Full Name</th>
                        <th>username</th>
                        <th>status</th>
                        <th>Action</th>
                        
                    </tr>
        <?php
                

                if($result->num_rows>0){
                  while($rows = $result->fetch_assoc()){

                      
        ?>
                        <tr>
                        <td><?php echo $rows['staff_id']?></td>
                        <td><?php echo $rows['staff_name']?></td>
                        <td><?php echo $rows['username']?></td>
                        <td><?php echo $rows['status']?></td>
                        <td> <a href="chooseStaff.php?staffId=<?php echo $rows['staff_id']?>&serviceId=<?php echo $serviceId?>"> choose staff </a> </td>
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