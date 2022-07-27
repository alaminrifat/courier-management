<?php
require('connection.php');
session_start();
    if (session_status() != 0)
    {
        if(isset($_SESSION['adminmail']))
        {
           header("refresh:0.5; url = admindashboard.php");
        }

    }
    
    if(isset($_POST['submit']))
    {
        $email=$_POST['mail'];
        $pass = $_POST['pass'];
        //$conn = mysqli_connect('localhost','root','','courier_management');
        $sql = "SELECT * FROM admin WHERE mail ='$email' and pass = '$pass'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            

            $_SESSION['umail'] = $email;

            echo "Success<br>";
            echo "You are now redirected";
            //echo "<br>".$_SESSION['adminmail'];
            header ("refresh:2; url = admindashboard.php");
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