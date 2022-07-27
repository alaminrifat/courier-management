<?php
    require('connection.php');
    if(isset($_POST["submit"])){
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $sql = "SELECT * FROM delivery_man where email='$email' AND pass='$pass'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            session_start();

            $_SESSION['dmail'] = $email;

            echo "Success<br>";
            echo "You are now redirected";
            echo "<br>".$_SESSION['dmail'];
            header ("refresh:3; url = dprivate.php");
            
        }
        else
        {
            echo "User not found";
            header("refresh:2; url= dloginview.php");
            
        }


    }

?>