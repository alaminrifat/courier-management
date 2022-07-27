
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'links.php';?>
        <link rel="stylesheet" href="css/styles.css">
        <Style>

body{
    background-image:linear-gradient(to right, #f46b45, #eea849);
}
            </style>
       

</head>
<body>
    <!-- Navbar Start -->
    <header>
    
    <div class="menu-bar">
    <nav class="navbar navbar-expand-md navbar-light m-b-4">
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
    <!-- Navbar End -->


    <div class="main-div">
        <h1> List of the Current Delivery Mans</h1>
        <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>dob</th>
                        <th colspan="2">Operation</th>
</tr>
</thead>
<tbody>

<?php

include 'connection.php';

$selectquery =" select * from delivery_man_data";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res =  mysqli_fetch_array($query);

while($res =  mysqli_fetch_array($query)){
?>
    <table border="1">
    <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['phone'];?></td>
        <td><?php echo $res['address'];?></td>
        <td><?php echo $res['dob'];?></td>
    
        <td> <i class="fa fa-edit" aria-hidden="true"></i></td>
        <td> <i class="fa fa-trash" aria-hidden="true"></i></td>
    </tr>

    </table>
    
<?php

}

?>
   
</tbody>

</table>
</div>
</div>
</div>
</body>
</html>