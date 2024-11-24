<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/18.png" type="image/x-icon">
    <title> Makkah Hotels || فنادق مكة</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/vendor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/about.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <header class="">
            <section class="header">

                <div class="flex">
                    <a href="sign_in.php" class="btnn">تسجيل الدخول</a>
                    <img src="assets/img/18.png" class="logo">
                    <div id="menu-btn" class="fas fa-bars"></div>
                </div>

                <nav class="navbar">
                    <a href="aboutReservation.php">معلومات الحجز</a>
                    <a href="contact.php" class="Active">تواصل معنا</a>
                    <a href="booking.php">أحجز الآن </a>
                    <a href="about.php">معلومات عنا</a>
                    <a href="index.php#gallery">الصور</a>
                    <a href="index.php#services">الخدمات</a>
                    <a href="index.php" class="">الرئيسية</a>


                </nav>

            </section>
        </header>


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">تواصل معنا</h1>
              
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase text-ss">تواصل معنا</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase">تواصل معنا</span> لأي استفسار</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase" style="font-size: 18px;">الحجز</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>book@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase" style="font-size: 18px;">عام</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</p>
                            </div>
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase" style="font-size: 18px;">فني</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>tech@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6 m-0 p-0">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form method="POST">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                            <label for="name">اسمك</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email">
                                            <label for="email">بريدك الإلكتروني</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            <label for="subject">الموضوع</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here"
                                                id="message" style="height: 150px"></textarea>
                                            <label for="message">رسالتك</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" name ="btn" type="submit">إرسال</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['btn'])){

                                $name=$_POST['name'];
                                $email=$_POST['email'];
                                $subject=$_POST['subject'];
                                $sql="INSERT INTO `contact` (`fullname`,`email`,`subject`) VALUES('$name','$email','$subject')";
                                $query=mysqli_query($con,$sql);
                            }
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <footer id="footer">
            <div class="footer-top">
            <div class="container">
            <div class="row">
            
                <div class="col-lg-3 col-md-6 footer-contact">
                  <h3>فنادق مكة </h3>
                  <p>
                    الشارع  108 <br>
                    القاهره التجمع الخامس   <br>
                      مصر <br><br>
                    <strong>الهاتف:</strong> +1 5589 55488 55<br>
                    <strong>البريد الإلكتروني:</strong> info@example.com<br>
                  </p>
                </div>
            
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>روابط مفيدة</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">الرئيسية</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">خدماتنا</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#gallery">الصور</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="booking.php">احجز الآن</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="about.php">معلومات عنا</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="contact.php">تواصل معنا</a></li>
      
                  </ul>
                </div>
            
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>خدماتنا</h4>
                  <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">واي فاي مجاني</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">قائمة طعام متنوعة</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">موقف سيارات خاص</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">غرف الاجتماعات</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">تنظيف الغرف</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#services">مصعد</a></li>
      
                  </ul>
                </div>
            
                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>شبكاتنا الاجتماعية</h4>
                  <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
                </div>
            
              </div>
            </div>
         </footer>  




    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/lib/wow/wow.min.js"></script>
    <script src="assets/vendor/lib/easing/easing.min.js"></script>
    <script src="assets/vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="assets/vendor/lib/counterup/counterup.min.js"></script>
    <script src="assets/vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/lib/tempusdominus/js/moment.min.js"></script>
    <script src="assets/vendor/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="assets/vendor/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="assets/js/about.js"></script>
</body>

</html>