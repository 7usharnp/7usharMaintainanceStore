<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7ushar Np</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- google font  -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    
    <!-- FontAwsome css -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- customer css -->
    <link rel="stylesheet" href="css/custom.css">
    
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand" >7ushar Np</a>
    <span class="navbar-text">Customer's Happinness is our Aim</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li> 
    </ul>
    </div>

    
    
    </nav>
<!-- End Navbar -->

<!-- Start header Jumbotron -->
<header class="jumbotron back-image" style="background-image: url(images/Banner1.jpeg)">
  <div class="myclass mainHeading">
      <h1 class="text-uppercase text-danger font-weight-bold">Welcome Folks</h1>
      <p class="font-italic">Customer's Happinness is our Aim</p>
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">Login</a>
      <a href="#Registration" class="btn btn-danger mr-4">Sign Up</a>
  </div>
</header>
<!-- jumbotron end -->

<!-- Start introduction Section -->
<div class="container"  id="Services">
    <div class="jumbotron">
        <h3 class="text-center">7ushar Np Services</h3>
        <p>
        7ushar Np Services is India’s leading chain of multi-brand Electronics and Electrical service workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class Electronic Appliances maintenance services. Our sole mission is “To provide Electronic Appliances care services to keep the devices fit and healthy and customers happy and smiling”.
            
            With well-equipped Electronic Appliances service centres and fully trained mechanics, we provide quality services with excellent packages that are designed to offer you great savings.
            
            Our state-of-art workshops are conveniently located in many
            cities across the country. Now you can book your service online by doing Registration.    
        </p>
  
    </div>
</div>
<!-- End introduction section -->

<!-- Start Service section -->
<div class="container text-center border-bottom" >
    <h2>Our Services</h2>
    <div class="row mt-4">
    <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-tv fa-8x text-success"></i> </a>
            <h4>Electronic Appliances</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i> </a>
            <h4>Preventive Maintenance</h4>
        </div>
        <div class="col-sm-4 mb-4">
            <a href="#"><i class="fas fa-cogs fa-8x text-primary"></i> </a>
            <h4>Fault Repair</h4>
        </div>

    </div>
</div>
<!-- End service section-->

<!--Start Registration Form  -->
<?php include('userRegistration.php') ?>
<!-- End Registration Form-->

<!-- Start happy customers -->
<div class="jumbotron bg-danger">
   <div class="container">
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
      <div class="col-lg-3 col-sm-6"> <!-- Start 1st Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt1">
        <h4 class="card-title">Rahul Kumar</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 1st Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 2nd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt2">
        <h4 class="card-title">Sonam Sharma</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 2nd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 3rd Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt3">
        <h4 class="card-title">Sumit Vyas</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 3rd Column -->
     <div class="col-lg-3 col-sm-6"> <!-- Start 4th Column -->
      <div class="card shadow-lg mb-2">
       <div class="card-body text-center">
        <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius:100px;" alt="avt4">
        <h4 class="card-title">Jyoti Sinha</h4>
        <p class="card-text">Itaque illo explicabo voluptatum,saepe libero rerum, adducimus voluptas nesciunt debitis numquam.</p>
       </div>
      </div>
     </div> <!-- End 4th Column -->
      </div>
   </div>    
</div> 
<!-- end happy customers -->


<!-- Start contact us -->
<div class="container" id="contact">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">
        <!-- Start First coloumn -->
           <?php include('contactForm.php'); ?>   
        <!-- End First coloumn -->
        <div class="col-md-4 text-center">
            <strong>Headquarter:</strong><br>
            7ushar pvt Ltd, <br>
            Ambegaon Bk, <br>
            Pune <br>
            phone No: 1234568<br>
            <a href="#" target="_blank">www.abc.com</a><br>
            <br><br>
            <strong>Branch:</strong><br>
            7ushar pvt Ltd, <br>
            Atpadi,  <br>
            Sangli <br>
            phone No: 1234568<br>
            <a href="#" target="_blank">www.abc.com</a><br>
        </div>
    </div>
</div>

<!-- Start Footer -->
<footer class="container-fluid bg-dark mt-5">
    <div class="container">
        <div class="row py-3">
            <div class="col-md-6"> <!-- Start 1st Column -->
                <span style="color:white" class="pr-2">Follow Us: </span>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
                </div> <!-- End 1st Column -->
                <div class="col-md-6 text-right"> <!-- Start 2nd Column -->
                    <small style="color:white">Designed by 7usharNp &copy; 2020</small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                </div> <!-- End 2nd Column -->       
            </div>           
        </div>
    </div>
</footer>
<!-- End Footer -->


<!-- end contact us -->



<!-- Bootstrap javascript -->

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
</body>
</html>