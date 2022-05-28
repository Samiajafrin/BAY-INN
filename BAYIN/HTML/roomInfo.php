<?php
    include_once "dbconnection.php";
    //sql_quary
    $sql = "SELECT *
            FROM room";
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
        
         <!-- <h1 style="text-align: center;" class="h1d"> ANALIZE DATA BASED ON YOUR QUERY </h1> -->
         <h2 style="text-align: center;" class="h1d"> ROOM DETAILS </h2>
         <table>
                    <tr>
                        <th>room number</th>
                        <th>category</th>
                        <th>Bed type</th>
                        <th>price</th>
                        
                    </tr>
        <?php
                

                if($result->num_rows>0){
                  while($rows = $result->fetch_assoc()){

                      
        ?>
                        <tr>
                        <td><?php echo $rows['number']?></td>
                        <td><?php echo $rows['category']?></td>
                        <td><?php echo $rows['bed']?></td>
                        <td><?php echo $rows['price']?></td>
                        
                        </tr>
        <?php

                    }
                  
      
                }else{
                    echo "No data found";
                }

                
        ?>

        </table>
                     
                    <div style="text-align: center;"  >
                     <a href="adminDashboard.php" > <button id="back" > GO BACK </button> </a>  
                    </div>
    </body>            
</html>