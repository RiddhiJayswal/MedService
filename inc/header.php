<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>MedService</title> 
    <link rel="stylesheet" href="style/bootstrap.min.css"> 
    <link rel="stylesheet" href="style/style.css"> 
    <link rel="stylesheet" href="style/line-icons.css"> 
   
    <!-- Google Font --> 
    <link href="https://fonts.googleapis.com/css?family=Anton|Cabin|Lato|Fjalla+One|Montserrat|Roboto&display=swap" rel="stylesheet"> 
    
    <!-- Font Awesome --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css">


    <!-- Owl Carousel CSS --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> 

    <link rel="stylesheet" href="style/me.default.css"> 
</head>
<body> 
<nav class="Horizontal-nav fixed-top"> 
    <span class="smalllogo"> 
         <!-- <img src="images/map.jpeg" alt="">  --> 
    </span> 
    <span class="smalllogo"> 
        <img src="" alt=""> 
    </span> 
    <a href="#" id="address">123 Main St, Cityville</a>  
    <a href="#" id="phone"> Phone: (555) 123-4567</a> 
</nav> 
 
 
<nav class="d-flex justify-content-between fixed-top my-5">   
    <label class="logo"> 
        <img src="images/logo.png" width="60%" alt="company logo"> 
    </label> 
    <div class="navbar"> 
        <ul class="nav justify-content-end"> 
            <li class="nav-item <?php if($page=='home'){echo 'active';}?>"> 
                <a class="nav-link nav-content" aria-current="page" href="index.php">Home</a> 
            </li>  
            <li class="nav-item <?php if($page=='departments'){echo 'active';}?>"> 
                <a class="nav-link nav-content" href="departments.php">Departments</a> 
            </li> 
            <li class="nav-item <?php if($page=='profile'){echo 'active';}?>"> 
                <a class="nav-link nav-content" href="profile.php">Profile</a> 
            </li> 
            <li class="nav-item <?php if($page=='login'){echo 'active';}?>"> 
                <a class="nav-link nav-content" href="admin/adminpage.php">Login</a> 
            </li> 
            <li> 
                <button class="btn-1"><a href="appointment.php">Make an Appointment</a></button> 
            </li> 
        </ul> 
        <!-- Uncomment this for a menu icon --> 
        <!-- <div class="icon menu-btn"> 
            <i class="fas fa-bars"></i> 
        </div> --> 
    </div> 
</nav>

<!-- Rest of the page content -->

<!-- Include your script files here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="js/scroll.js"></script>

</body>
</html>
