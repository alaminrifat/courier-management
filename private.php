<?php
session_start();
    require('connection.php');

    if(empty($_SESSION["umail"])) 
    {
    header("Location: c_login.php"); 
    }

    $email = $_SESSION["umail"];

    $sql = "SELECT customer_id, customer_name, customer_email, customer_address, customer_phone FROM customer_table WHERE customer_email='$email'";
    $result = $conn->query($sql);
    $uid ;$uname ;$uaddress;$uemail;$uphone;
    
    while($row = $result->fetch_assoc()) {
        $uid = $row['customer_id'];
        $uname = $row['customer_name'];
        $uaddress = $row['customer_address'];
        $uemail = $row['customer_email'];
        $uphone = $row['customer_phone'];
        //echo 'Your information <br>ID: '.$row['customer_id'].'<br>Name: '.$row['customer_name'].'<br>Address: '.$row['customer_address'].'<br>Email: '.$row['customer_email'].'<br>Phone '.$row['customer_phone'];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <!-- Navbar start -->
    <header>
    <div class="menu-bar">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="index.php" class="navbar-brand"> Courier Management</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="parcel_send.php" class="nav-link">Send A Parcel</a>
                </li>
                <li class="nav-item">
                    <a  href="parcelSearch.php" class="nav-link">Track Parcel</a>
                </li>
                <li class="nav-item">
                    <a  href="c_login.php" class="nav-link">Logout<?php $_SESSION["umail"]=""?></a>
                </li>
            </ul>
        </nav>
    </div>
    </header>
    <!-- Navbar end   -->    

    <div class="container">
             
    <br><br>
    <div class="profile">
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> ID : <?php echo $uid ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Name : <?php echo $uname ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Address : <?php echo $uaddress ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Email : <?php echo $uemail ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Phone : <?php echo $uphone ?></p>
    </div>
    <br>
    <a href="parcel_send.php"><button class="btn btn-primary box shadow rounded-3">Send Parcel Now</button></a>


    </div>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>