<?php
require('connection.php');
session_start();

$status = "";
$courierID = NULL;
if(isset($_POST["submit"])){
  $pid = $_POST["pid"];

    $sql = "SELECT * FROM parcel_track WHERE pid = '$pid'";
    $result = $conn->query($sql);
    //$row = $result->fetch_assoc();

  if ($result == TRUE) {
         if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $courierID = $row['pid'];
                $delR = $row["delR"];
                $chR = $row["chR"];
                $chS  = $row["chS"];
                $delS  = $row["delS"];
                $rfinal  = $row["rfinal"];

                
                echo '<br>';
                if($delR == 't') {
                    $status = 'Delivery Man Recieved The Parcel from Sender';
                }
                else if($chR == 't'){
                    $status = 'Courier Hub Recieved The Parcel from Delievery Man And Processing to Send to Reciever';
                }
                else if($chS == 't'){
                    $status = 'Courier Hub Send The Parcel to Delievery Man';
                    
                }
                else if($delS == 't'){
                    $status ='Delivery Man is out to Send the Parcel today SOON!';
                }
                else if($rfinal == 't'){
                    $status = 'Reciever recieved the parcel Successfully';
                }
            }
         }else{
            $status =  'Parcel Not Found in our beautiful Database!';
        }       
    }else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    $conn->close();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                    <a href="c_login.php" class="nav-link">Customer Login</a>
                </li>
                <li class="nav-item">
                    <a href="adminloginview.php" class="nav-link">Admin Login</a>
                </li>
                <li class="nav-item">
                    <a href="dloginview.php" class="nav-link">Delivery Man Login</a>
                </li>
                <li class="nav-item">
                    <a  href="parcelSearch.php" class="nav-link">Track Parcel</a>
                </li>
            </ul>
        </nav>

        </div>   
    </header>
    <!-- Navbar end   -->

    
    <div class="container">   
        <div class="trackParcel">
            <div>
            <img src="img/delivery.png" alt="" width="10%">
            </div>
            <p class="alert alert-secondary fw-bolder ">Parcel ID : <?php echo $courierID ?></p>
            <p class="alert alert-secondary fw-bolder "><?php echo $status ?></p>
        </div>
    </div>
</body>
</html>
