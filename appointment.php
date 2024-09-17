<?php 
include('inc/header.php'); 
// include('admin/config.php'); 
if (isset($_POST['request'])) { 
    $department = $_POST['department']; 
    $doctor = $_POST['doctor']; 
    $visits = $_POST['visits']; 
    $date = $_POST['date']; 
    $name = mysqli_real_escape_string($conn, $_POST['name']); 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $phone = $_POST['phone']; 
    $message = $_POST['message']; 
 
    $sql = "INSERT INTO `appointment`(`department`, `doctor`, `visits`, 
`date`, `name`, `email`, `phone`, `message`)  
    VALUES 
('$department','$doctor','$visits','$date','$name','$email','$phone','$message
 ')"; 
 
    if ($conn->query($sql)==TRUE) { 
        echo "Appointment Booked Successfully"; 
    } else { 
        echo "Error: " .$sql. "<br>" .$conn->error; 
    } 
} 
?> 
<section> 
        <div class="container-td"> 
            <div class="row"> 
                <div class="td-content"> 
                    <a href="index.php">Home</a><i class="fa fa-angle-double
right fa-small " aria-hidden="true"></i><span>Appointment</span> 
                    <h1>Appointment</h1> 
                </div> 
            </div> 
        </div> 
</section> 
 
<section> 
    <div class="form-container"> 
        <form action="" method="post"> 
            <h1>Book an Appointment</h1><hr> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Assumenda voluptatum labore vitae amet, magnam commodi consequatur ratione in 
consequuntur, omnis dicta esse atque doloribus porro eos nihil sunt! Tenetur, 
culpa! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, in 
eligendi saepe quaerat doloribus vero, eius provident deleniti assumenda alias 
voluptas ipsum facilis voluptatem quisquam distinctio ipsa cupiditate autem 
iste.</p> 
            <select name="department" id=""> 
                <option value="Select">Select Department</option> 
                <option value="pediatrics">Pediatrics Department</option> 
                <option value="neurology">Neurology Department</option> 
                <option value="haematology">Haematology Department</option> 
                <option value="X-ray">X-ray Diognostic Department</option> 
                <option value="MRI">MRI Department</option> 
                <option value="cardiology">Cardiology Department</option> 
                <option value="loboratory">Laboratory Services</option> 
                <option value="other">Other</option> 
            </select> 
            <select name="doctor" id=""> 
                <option value="Select">Select Doctor</option> 
                <option value="robert-peterson">Dr.Robert Peterson</option> 
                <option value="robert-peterson">Dr.Hannah  Harper</option> 
                <option value="robert-peterson">Dr.Megan Colaman</option> 
                <option value="robert-peterson">Dr.Matthew Anderson</option> 
                <option value="robert-peterson">Dr.Joshua Elledge</option> 
            </select> 
            <select name="visits" id=""> 
                <option value="visit">Have You Visited Us Before?*</option> 
                <option value="new">New Patient</option> 
                <option value="returning">Returning Patient</option> 
            </select> 
            <input type="date" name="date" required placeholder="Appointment 
Date" > 
            <input type="text" name="name" required placeholder="Enter Your 
Name*"> 
            <input type="email" name="email" required placeholder="Enter Your 
Email*"> 
            <input type="tel" name="phone" required placeholder="Enter Your 
Phone Number*"> 
            <textarea name="message" id="" cols="30" rows="6" 
placeholder="Your Message...."></textarea> 
            <input type="submit" name="request" value="Request an Appointment" 
class="appointment-btn"> 
        </form> 
    </div> 
     
</section> 
 
     
 
<?php 
 include('inc/footer.php')  
?> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> 
<script src="js/scroll.js"></script> 
<!-- Owl Carousel JS --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> 
<script> 
    $(document).ready(function () { 
        $(".owl-carousel").owlCarousel({ 
            items:1, 
            loop:true, 
            nav:true, 
            dots:false, 
            autoplay:true, 
            autoplaySpeed:1000, 
            smartSpeed:1500, 
            autoplayHoverPause:true, 
        }); 
    }); 
</script> 
</body> 
</html>
