<?php
   require("connection.php");
?>
<html>
<title>Courier Hub Login Panel</title>
<meta charset="utf-8" name="viewpoint" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
</head>
<body>

    <div class="login-form">
        <h2> Courier Hub Log In Panel</h2>
        <form mmethod="POST">
            <div class="input-field">
            <i></i>
            <input type="text" placeholder="Courierhub Name" name="CourierHubName">
    
            </div>

        <div    class="input-field">
            <i></i>
            <input type="password" placeholder="Password" name="Password">
        </div>

        <button type="submit" name="LogIn">Log In</button>

        <div class="extra">
        <a href="#"> Forgot Password?</a>
        </div>
        </form>
    </div>
</body>
</html>
<?php

if(isset($_POST['LogIn']))
{
    $query="SELECT * FROM ch_login WHERE ch_email='$_POST[CourierHubName]' AND ch_pass='$_POST[Password]'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rowss($result)==1)
    {
        session_start();
        $_SESSION['AdminLoginId']=$_POST['CourierHubName'];
        echo 'Done';
        header("location:hubdashboard.php");
    }
    else
    {
    echo"<script>alert('Incorrect Password');</script>";

    }
}
?>

</body>
</html>