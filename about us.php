<?php 
 include('inc/header.php');  
?> 

<section> 
    <div class="container-td"> 
        <div class="row"> 
            <div class="td-content"> 
                <a href="index.php">Home</a><i class="fa fa-angle-double-right fa-small" aria-hidden="true"></i><span> About US</span> 
                <h1>About Us</h1> 
            </div> 
        </div> 
    </div> 
</section> 

<section class="about"> 
    <div class="container-au"> 
        <div class="row"> 
            <h3>Our Story</h3>
            <hr> 
            <div class="col-lg-5 col-md-6"> 
                <div class="text"> 
                    <p>Welcome to MedService, where compassionate care meets cutting-edge medicine. Our journey began with a vision to create a healthcare haven, a place where expertise and empathy converge to redefine patient-centric healthcare. As a team of dedicated medical professionals, we embarked on the mission to build a state-of-the-art hospital that stands as a beacon of hope and healing in our community. <br><br> 
                    At MedService, we prioritize your well-being, combining the latest advancements in medical technology with a personalized approach to ensure each patient receives the highest quality care. Our commitment to excellence extends beyond the operating room, fostering a culture of continuous learning and innovation. Together, we strive to build a healthier tomorrow, one patient at a time. Thank you for entrusting us with your care – at MedService, your health is our priority.</p> 
                </div> 
            </div> 
            <div class="col-lg-5 col-md-6"> 
                <img class="img-cd" src="images/abou.jpg" alt="About Us" width="120%" height="300px"> 
            </div> 
        </div> 
    </div> 
    
    <div class="container-abu"> 
        <div class="row"> 
            <h3>Chairman's Message</h3> 
            <hr> 
            <div class="col-lg-5 col-md-6"> 
                <img class="img-md" src="images/chairman.jpg" alt="Chairman" width="70%" height="80%"> 
            </div> 
            <div class="col-lg-5 col-md-6"> 
                <div class="content-ed"> 
                    <p>MedService envisions a healthcare future of unparalleled patient care, where cutting-edge medical expertise meets compassionate healing. Our vision is to be a beacon of health, fostering innovation and personalized wellness for a community-centric approach, ensuring a healthier tomorrow for all.</p> 
                </div> 
                <hr> 
                <h4>Divyesh Jayswal</h4> 
                <h6 class="chairman">Chairman & Managing Director</h6> 
            </div> 
        </div> 
    </div> 

    <div class="container-val"> 
        <div class="row"> 
            <h3>Our Values</h3>
            <hr> 
            <div class="col-md-6"> 
                <div class="card"> 
                    <h2>Compassion</h2> 
                    <p>We prioritize empathy and understanding, ensuring every patient feels cared for and supported throughout their healthcare journey.</p> 
                </div> 
            </div> 
            <div class="col-md-6"> 
                <div class="card"> 
                    <h2>Excellence</h2> 
                    <p>Our commitment to excellence drives us to uphold the highest standards in medical care, from state-of-the-art technologies to continuous professional development.</p> 
                </div> 
            </div> 
            <div class="col-md-6"> 
                <div class="card"> 
                    <h2>Integrity</h2> 
                    <p>We operate with unwavering integrity, maintaining transparency, honesty, and ethical conduct in all aspects of our medical services.</p> 
                </div> 
            </div> 
            <div class="col-md-6"> 
                <div class="card"> 
                    <h2>Collaboration</h2> 
                    <p>We believe in the power of teamwork and collaboration, fostering a multidisciplinary approach to healthcare that ensures comprehensive and well-rounded treatment for our patients.</p> 
                </div> 
            </div> 
        </div> 
    </div> 
</section> 

<?php 
 include('inc/footer.php');  
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
