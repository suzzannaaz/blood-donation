<?php include 'config.php';
$admin = new Admin();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Bank</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .toast {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  background-color: #333;
  color: #fff;
  padding: 15px 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.2);
  z-index: 1000;
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
}

.toast.show {
  opacity: 1;
}

    </style>
    
   
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-danger" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
  
 
  

        <?php include 'Dheader.php'; ?>

</div>





       
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="blood2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h1 class="display-1 text-white animated slideInRight mb-3">Every Drop Counts: Be a Hero, Donate Blood.</h1>
                                    <p class="mb-5 animated slideInRight">Your single donation can make a monumental difference in someone's life.</p>
                                    <a href="" class="btn btn-danger py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="blod.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h1 class="display-1 text-white animated slideInLeft mb-3">Spread Love, Donate Blood.</h1>
                                    <p class="mb-5 animated slideInLeft"> By donating blood, you're spreading love and kindness, one drop at a time. Join us in this compassionate act and make a difference in someone's life today.</p>
                                    <a href="" class="btn btn-danger py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

   


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-3.jpg">
                        </div>
                        <div class="col-6">
                            <div class="bg-danger w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-dark"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">15</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Save Lives Through Blood Donation: Join Us Today!</h1>
                    <p class="mb-4">Make a difference in someone's life by donating blood. Your generous contribution can save lives and provide hope to those in need. Join our blood donation drive today and be a hero in someone's story. Every donation counts, and together, we can make a significant impact on our community. Join us in this life-saving mission and help ensure a brighter and healthier future for all.</p>
                    <div class="row g-4 g-sm-5 justify-content-center">
                        <div class="col-sm-6">
                            <div class="about-fact btn-square flex-column rounded-circle bg-danger ms-sm-auto">
                                <p class="text-white mb-0">Awards Winning</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">10</h1>
                            </div>
                        </div>
                        <div class="col-sm-6 text-start">
                            <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                                <p class="text-white mb-0">Complete Cases</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">500</h1>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                                <p class="text-white mb-0">Happy Clients</p>
                                <h1 class="text-white mb-0" data-toggle="counter-up">1000</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-0 feature-row">
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-danger mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Campaign for Life</h5>
                        <p class="mb-0">Welcome to our Campaign for Life! Whether you're a potential blood donor or in need of blood, this guide is here to assist you. For potential donors: Your participation in our upcoming blood donation camp can be a lifesaving act. Join us in this noble cause to contribute to the health and well-being of others. For those in need of blood: We understand the urgency of your situation and are committed to providing you with the support you require.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-danger mb-4">
                            <i class="bi bi-people text-dark"></i>
                        </div>
                        <h5 class="mb-3">Generous Contributors</h5>
                        <p class="mb-0">Generous Contributors to the Cause of Life! Whether you're a blood donor or someone in need of blood, your role in empowering communities through benevolence is invaluable. Blood donors selflessly donate their time, resources, and expertise to support causes they believe in, making a profound impact on the lives of others. For potential blood donors: Your generosity can save lives and provide hope to those in need.For those in need of blood: We understand the urgency of your situation and are here to support you. Together, let's recognize the power of giving and receiving blood, and the positive change it brings to our lives and communities. Let's unite in our shared mission to make a lasting difference and empower lives. </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-danger mb-4">
                            <i class="bi bi-cash-coin text-dark"></i>
                        </div>
                        <h5 class="mb-3">Benevolent Champions</h5>
                        <p class="mb-0">Benevolent Champions of Life! These extraordinary individuals embody the spirit of selflessness, devoting their time, resources, and energy to uplift communities and champion causes dear to their hearts. Blood donors and recipients alike play a vital role in this noble endeavor. Whether you're generously giving blood or bravely navigating a health journey, you are a true champion of life. Let's unite in our shared commitment to make a meaningful difference and uplift those in need.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-danger mb-4">
                            <i class="bi bi-headphones text-dark"></i>
                        </div>
                        <h5 class="mb-3">24/7 Support</h5>
                        <p class="mb-0">Always Here for You. Our commitment to providing round-the-clock support means that assistance is just a call or message away, no matter the time or day. Whether you have questions, concerns, or need immediate help, our dedicated team is ready to assist you at any hour. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Features Start -->
  
    <!-- Features End -->


    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Blood Group Names and Their Usage</h1>
                <!-- <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor.</p> -->
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">A</i>

                        </div>
                        <!-- <h5 class="mb-3">Pathology Testing</h4> -->
                            <p class="mb-4">Individuals with blood group A have red blood cells that carry the A antigen on their surface and antibodies against the B antigen in their plasma. They can donate blood to individuals with blood groups A and AB, and they can receive blood from individuals with blood groups A and O.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">A+</i>

                        </div>
                        <!-- <h5 class="mb-3">Microbiology Tests</h4> -->
                            <p class="mb-4">This blood group is similar to blood group A, but with an additional Rh factor (positive). A+ individuals can donate blood to individuals with blood groups A+ and AB+, and they can receive blood from individuals with blood groups A, A+, O, and O+.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">B-</i>

                        </div>
                        <!-- <h5 class="mb-3">Biochemistry Tests</h4> -->
                            <p class="mb-4"> Individuals with blood group B have red blood cells that carry the B antigen on their surface and antibodies against the A antigen in their plasma. They can donate blood to individuals with blood groups B and AB, and they can receive blood from individuals with blood groups B and O.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">B+</i>

                        </div>
                        <!-- <h5 class="mb-3">Histopatology Tests</h4> -->
                            <p class="mb-4">  Similar to blood group B, but with an additional Rh factor (positive). B+ individuals can donate blood to individuals with blood groups B+ and AB+, and they can receive blood from individuals with blood groups B, B+, O, and O+.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">AB-</i>

                        </div>
                        <!-- <h5 class="mb-3">Urine Tests</h4> -->
                            <p class="mb-4"> Individuals with blood group AB have red blood cells that carry both A and B antigens on their surface but do not have antibodies against A or B antigens in their plasma. They are universal recipients and can receive blood from individuals with any blood group (A, B, AB, or O), making them "universal recipients."</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">AB+</i>

                        </div>
                        <!-- <h5 class="mb-3">Blood Tests</h4> -->
                            <p class="mb-4"> Similar to blood group AB, but with an additional Rh factor (positive). AB+ individuals are universal recipients and can receive blood from individuals with any blood group (A, B, AB, or O).</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">O+</i>

                        </div>
                        <!-- <h5 class="mb-3">Fever Tests</h4> -->
                            <p class="mb-4"> Individuals with blood group O have red blood cells that do not carry A or B antigens on their surface but have antibodies against both A and B antigens in their plasma. They are universal donors and can donate blood to individuals with any blood group (A, B, AB, or O).</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-danger mb-4">
                        <i class="bi bi-heart-fill text-dark">O-</i>

                        </div>
                        <!-- <h5 class="mb-3">Allergy Tests</h4> -->
                            <p class="mb-4">Similar to blood group O, but with an additional Rh factor (negative). O- individuals are universal donors and can donate blood to individuals with any blood group (A, B, AB, or O), including those with Rh-negative blood.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Appoinment Start -->
   
    <!-- Appoinment Start -->

   

    <!-- Team Start -->
  
    <!-- Team End -->


    <!-- Testimonial Start -->
  
    <!-- Testimonial End -->


    <!-- Footer Start -->
   <?php include 'footer.php'; ?>
    <!-- Footer End -->


    <script>
    // Display the toast
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('.toast').classList.add('show');
    });
</script>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>