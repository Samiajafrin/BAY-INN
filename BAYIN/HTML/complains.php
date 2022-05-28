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

        <h1>Complain Box </h1>

        <?php
            //establishing connection
            include_once "dbconnection.php";

            //inserting values into database
            $sql = "SELECT *
                    FROM complainbox";
            $result = $conn->query($sql);
            if($result -> num_rows > 0){

                while($rows = $result-> fetch_assoc()){
        
                    $name = $rows['username'];
                    $complain = $rows['complain'];
                    ?>
                    <div class="review">
                        <span class="reviewer_name"><?php echo $name?></span>
                        <p class="review_text">
                             <?php echo $complain?>
                        </p>
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
