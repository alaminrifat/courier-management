<?php
session_start();
    require('connection.php');
    if(empty($_SESSION["dmail"])) 
    {
    header("Location: dloginview.php"); 
    }
    $email = $_SESSION["dmail"];

    $sql = "SELECT id,name,email,phone,address,dob FROM delivery_man_data WHERE email='$email'";
    $result = $conn->query($sql);
    
    $did;$dname;$daddress;$dphone;$demail;$ddob;
    
    if($result == TRUE){
        while($row = $result->fetch_assoc()) {
            $did = $row['id'];
            $dname = $row['name'];
            $daddress = $row['address'];
            $dphone = $row['phone'];
            $demail = $row['email'];
            $ddob = $row['dob'];
            // echo 'Your information <br>ID: '.$row['id'].'<br>Name: '.$row['name'].'<br>Address: '.$row['address'].'<br>Email: '.$row['email'].'<br>Phone: '.$row['phone'].'<br>DOB: '.$row['dob'];
            
        }   
        $status =  '<br><br><br>Your working history '.' Not Created Yet';
    }
    else{
        echo'error';
    }
    
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Man</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                    <a  href="dloginview.php" class="nav-link">Logout<?php $_SESSION["umail"]=""?></a>
                </li>
            </ul>
        </nav>
    </div>
    </header>
    <!-- Navbar end   --> 


    <div class="container">
             
    <br><br>
    <div class="profile">
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> ID : <?php echo $did ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Name : <?php echo $dname ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Address : <?php echo $daddress ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Email : <?php echo $dphone ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Phone : <?php echo $demail ?></p>
        <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"> Date of Birth : <?php echo $ddob ?></p>
    </div>
    <br>
    <!-- <a href="parcel_send.php"><button class="btn btn-primary box shadow rounded-3">Send Parcel Now</button></a> -->

    <p class="box shadow bg-white profile p-4 m-2 rounded-3 fw-bolder"><?php echo $status?></p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

