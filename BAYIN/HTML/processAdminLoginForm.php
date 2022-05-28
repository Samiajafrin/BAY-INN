<?php
    // Start the session
    session_start();
    ?>
    <?php
    include_once "dbconnection.php";

    //sql_quary
    $sql = "SELECT username,admin_pass
            from admin";

    $result = $conn->query($sql);
    $wrongpassword=false;
    if($result -> num_rows > 0){

        while($rows = $result-> fetch_assoc()){

            //if($_SERVER["REQUEST_METHOD"]=="POST"){
                if(($rows['username'] == $_POST['username']) && ($rows['admin_pass'] == $_POST['password'])){
                    //matched username and password 
                    // Set session variables
                    echo "Session variables are set.";
                   $_SESSION['username'] = $rows['username'];
                   $wrongpassword=false;
                    

                    
                    ?>
                    <!-- now going to client interface -->
                    <script>window.location.assign('admindashboard.php')</script>

                    <?php
                    break;//this break is very important 
                    

                }else{
                $wrongpassword=true;        
                }
           // }
        
        }
        if($wrongpassword){
            echo "wrong password or username ";
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
        }
        
    }else{
        echo "No Result Found";
    }


?>