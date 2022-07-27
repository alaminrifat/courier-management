<?php
 session_start();
require('connection.php');
    if (session_status() != 0)
    {
        if(isset($_SESSION['umail']))
        {
           header("refresh:0.5; url = private.php");
        }

    }
    
    if(isset($_POST['submit']))
    {
        $email=$_POST['umail'];
        $pass = $_POST['upass'];
        $conn = mysqli_connect('localhost','root','','courier_management');
        $sql = "SELECT * FROM customer_table WHERE customer_email ='$email' and customer_password = '$pass'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
           

            $_SESSION['umail'] = $email;

            echo "Success<br>";
            echo "You are now redirected";
            echo "<br>".$_SESSION['umail'];
            header ("refresh:2; url = private.php");
            exit();
        }
        else
        {
            echo "User not found";
            header("refresh:2; url= index.php");
            exit();
        }
    }
    if(!isset($_POST['submit']))
    {
        echo "Fill the email and password  data";
        header("refresh:2; url =  index.php");
    }
?>