<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/18.png" type="image/x-icon">
    <title> Makkah Hotels || فنادق مكة</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/vendor/glightbox/css/glightbox.min.css">
    <link rel="stylesheet" href="assets/vendor/owl carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owl carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/booking.css">
</head>

<body>

    <section class="booking p-70">

        <div class="booking-text text-center">
            <h1>احجز الآن داخل الفندق</h1>
        </div>


        <div class="container mt-5">

            <form action="ins.php" method="post">
                <div class="row justify-content-center">

                    <div class="col-lg-8 booking-bg p-4">
                        <div class="row">

                            <div class="col-md-6 mt-3">

                                <div class="form-group">
                                    <input type="text" name="name" id="" placeholder="الاسم"
                                        class="form-control booking-border">
                                </div>

                            </div>
                            <div class="col-md-6 mt-3">

                                <div class="form-group">
                                    <input type="text" name="email" id="" placeholder="الإيميل"
                                        class="form-control booking-border">
                                </div>

                            </div>
                            <div class="col-md-12 mt-4">

                                <div class="form-group">
                                    <input type="number" name="phone" id="" placeholder="رقم الهاتف"
                                        class="form-control booking-border">
                                </div>

                            </div>
                            <div class="col-md-12 mt-3">

                                <div class="form-group">
                                    <label for="">نوع الغرفة </label>
                                    <select name="troom" id="roomType" class="form-control booking-border mt-3">

                                        <option value="none" class="option">اختر النوع</option>
                                        <option value="singel" class="option">فردية</option>
                                        <option value="double" class="option">زوجية</option>
                                        <option value="suite" class="option">جناح</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group Room" style="display: none; visibility: hidden;">
                                    <label for="">عدد الغرف</label>
                                    <input type="number" id="card" class="form-control booking-border pay" name="nroom">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group Room" id="bed" style="display: none; visibility: hidden;">
                                    <label for="">عدد الأَسِرَّة</label>
                                    <input type="number" class="form-control booking-border pay" name="nbeds">
                                </div>

                            </div>
                            <div class="col-md-12 mt-1">
                                    <div class="form-group">
                                        <label for="" >رقم الغرفة</label>
                                        <select name="roomn" id="" class="form-control booking-border mt-3" disabled>

                                            <option value="one" class="option" >غير متاح </option>
                                            
                                        </select>
                                    </div>
                            </div>
                            <br>
                            <div class="col-md-12 mt-1">
                                    <div class="form-group">
                                        <label for="" >حالة الحجز</label>
                                        <select name="status" id="" class="form-control booking-border mt-3" disabled>

                                            <option value="panding" class="option" >قيد الانتظار</option>
                                            
                                        </select>
                                    </div>
                            </div>

                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for="">خطة الوجبات</label>
                                    <select name="meal" id="" class="form-control booking-border mt-3">
                                        <option value="" class="option">الاختيارات</option>
                                        <option value="" class="option">فطار-غداء-مشروبات</option>
                                        <option value="" class="option">فطار-عشاء-مشروبات</option>
                                        <option value="" class="option">ثلاث وجبات يومياً-مشروبات</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for="">عدد البالغين</label>
                                    <input type="number" class="form-control booking-border mt-3" name="nadults">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for="">عدد الأطفال</label>
                                    <input type="number" class="form-control booking-border mt-3" name="nchildren">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for="">تاريخ الدخول</label>
                                    <input type="date" class="form-control booking-border mt-3" name="cin">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for="">تاريخ المغادرة</label>
                                    <input type="date" class="form-control booking-border mt-3" name="cout">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group">
                                    <label for=""> طريقة الدفع</label>
                                    <select name="" id="visa" class="form-control booking-border mt-3" name="payment">

                                        <option value="none" class="option">اختر الطريقة</option>
                                        <option value="cash" class="option">نقدى</option>
                                        <option value="visa" class="option">بطاقة إئتمان</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group cardNumber" style="display: none; visibility: hidden;">
                                    <label for="">رقم الحساب</label>
                                    <input type="number" name="card_num" id="card" class="form-control booking-border pay">
                                </div>

                            </div>
                            <div class="col-md-6 mt-4">

                                <div class="form-group cardNumber " id="" style="display: none; visibility: hidden;">
                                    <label for="">تاريخ انتهاء الصلاحية</label>
                                    <input type="date" name="expired" id="card" class="form-control booking-border pay">
                                </div>
                            </div>
                            <div class="col-md-8 m-auto mt-4">
                                <div class="form-group">

                                    <input type="submit" name="send" value="احجز الآن"
                                        class="form-control booking-border btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>



    <!-- Vendor JS Files -->
    <script src="assets/vendor/jQuery/jquery-3.6.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/owl carousel/owl.carousel.min.js"></script>

    <!-- main js -->
    <script src="assets/js/main.js"></script>
</body>

</html>