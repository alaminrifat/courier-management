<!DOCTYPE html>
<html lang="en">
<head>
    <title>Courier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
    <!-- Navbar start -->
    <header>
    
        <div class="menu-bar">
        <nav class="navbar navbar-expand-md navbar-light">
            <a href="" class="navbar-brand"> Courier Management</a>
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

    <!-- Carousel Start  -->
    <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"  data-bs-interval="2000">
                    <img src="img/b1.jpg" class="d-block w-100" alt="...">
                    
                </div>
              <div class="carousel-item"  data-bs-interval="2000">
                <img src="img/b4.png" class="d-block w-100" alt="...">
            
              </div>
              <div class="carousel-item"  data-bs-interval="2000">
                <img src="img/b3.png" class="d-block w-100" alt="...">
                
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- <div class="container">				 -->
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">				
              <div class="section-status card">
                <!-- <div class="img-container">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Android_O_Preview_Logo.png/768px-Android_O_Preview_Logo.png" alt="">
                </div> -->
                <div class="text">
                  <p class="title">
                    Sing Up
                  </p>
                  <small class="sub-title mey-text-color-gray">
                    Sign Up as a New User to send your parcel
                  </small>
                </div>
                <div class="btn-footer">
                  <a href="csignupview.php" class="btn btn-primary mey-btn mey-btn-md">
                    Sign Up
                  </a>
                </div>
              </div>
       </div>
       </div>
       </div>
    <!-- Carousel End   -->

    <!-- Footer -->
    <div class="footer">
      <div class="footer-content">
        <div class="footer-section about"></div>
        <div class="footer-section links"></div>
        <div class="footer-section contact-form"></div>
      </div>

      <div class="footer-bottom">
        &copy; courier management system | AIUB  
      </div>
    </div>
    <!-- Footer -->
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>