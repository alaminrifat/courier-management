<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup As Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
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

    <div class="container">
    <div class="row content d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <div class="box shadow bg-white p-4">
                    <h3 class="mb-4 text-center fs-1"> Customer Signup</h3>
                    <form action="csignup.php" method="POST" class="mb-3">

                    <h6>Name</h6>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-0" name="cname" id="cname" placeholder="EX. Alice">
                    </div>

                    <h6>Email</h6>
                    <div class="form-floating mb-3">
                    <input type="text"  class="form-control rounded-0" name="cmail" id="cmail" placeholder="EX. alice@gmail.com">
                    </div>
                    
                    <h6>Phone</h6>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-0" name="cphone" id="cphone" placeholder="EX. 017877801xxx">
                    </div>

                    <h6>Address</h6>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-0" name="caddress" id="caddress" placeholder="EX. House 3, Road 5, Block C, Bashundhara R/A, Dhaka">
                    </div>

                    <h6>Date of Birth</h6>
                    <div class="form-floating mb-3">
                    <input type="date" class="form-control rounded-0" name="cdob" id="cdob" placeholder="13/09/1988">
                    </div>

                    <h6>Password</h6>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control rounded-0" name="cpass" id="cpass" placeholder="Worst Password">
                    </div>


                    <div class="d-grid gap-2 mb-3">
                    <input type="submit" class="btn btn-dark btn-lg border-0 rounded-0"  value="Signup" name="submit">
                    </div>
                    </form>
                    
                    <a href="c_login.php">Already Registered? Login</a>

                </div>
            </div>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>