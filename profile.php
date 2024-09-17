<?php 
include('inc/header.php'); 
?> 

<section> 
    <div class="container-td"> 
        <div class="row"> 
            <div class="td-content"> 
                <a href="index.php">Home</a>
                <i class="fa fa-angle-double-right fa-small" aria-hidden="true"></i>
                <span> Our Doctors</span> 
                <h1>Meet the Doctors</h1> 
            </div> 
        </div> 
    </div> 
</section> 

<section class="Doctor"> 
    <div class="container"> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile1.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Robert Peterson</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
            </div> 
        </div> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile2.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Megan Coleman</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
            </div> 
        </div> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile3.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Robert Peterson</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
            </div> 
        </div> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile4.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Hannah Harper</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
            </div> 
        </div> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile1.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Matthew Anderson</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
            </div> 
        </div> 
        <div class="card"> 
            <div class="imgBx"> 
                <img src="images/profile2.jpg" alt=""> 
            </div> 
            <div class="content-d"> 
                <h3>Joshua Elledge</h3> 
                <span>Neurologist/cardiologist</span> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui hic totam rem amet fuga quae animi laboriosam maiores</p> 
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
        items: 1, 
        loop: true, 
        nav: true, 
        dots: false, 
        autoplay: true, 
        autoplaySpeed: 1000, 
        smartSpeed: 1500, 
        autoplayHoverPause: true 
    }); 
}); 
</script> 

</body> 
</html>
