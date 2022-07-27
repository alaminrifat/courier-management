
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <?php include 'links.php';?>
    
        <link rel="stylesheet" href="css/styles.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <Style>

body{
    background-image:linear-gradient(to right, #f46b45, #eea849);
}
            </style>

</head>
<body>
    <!-- Navbar start -->
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
        <h1> List of the Current Employees</h1>
        <div class="center-div">
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>emp_id</th>
                        <th>emp_name</th>
                        <th>emp_dob</th>
                        <th>emp_phone</th>
                        <th>emp_address</th>
                        <th colspan="2">Operation</th>
</tr>
</thead>
<tbody>

<?php

include 'connection.php';

$selectquery =" select * from employee";
$query = mysqli_query($conn,$selectquery);
$nums = mysqli_num_rows($query);
$res =  mysqli_fetch_array($query);

while($res =  mysqli_fetch_array($query)){
?>
    <div class="container">
    <table>
    <tr>
        <td><?php echo $res['emp_id'];?></td>
        <td><?php echo $res['emp_name'];?></td>
        <td><?php echo $res['emp_dob'];?></td>
        <td><?php echo $res['emp_phone'];?></td>
        <td><?php echo $res['emp_address'];?></td>
        <td> <i class="fa fa-edit" aria-hidden="true"></i></td>
        <td> <i class="fa fa-trash" aria-hidden="true"></i></td>
    </tr>

    </table>
    </div>
    
<?php

}

?>
   
</tbody>

</table>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>