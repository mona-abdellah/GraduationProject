<?php
session_start();
require 'header.php'; 
include('db.php');

?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="#"> Manage Rooms</a>
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">

                        <!-- Sales Card -->
                        <div class="col-xxl-6 col-md-8">
                            <div class="card">

                                <div class="card-body">
                                    <h5 class="card-title text-center">Add Room</h5>
                                    <form action=""   method="post">
                                        <div class="row">
                                            <div class="col-md-12 mt-4">
                                                
                                                    <div class="form-group">
                                                        <label for="" class="label">Room Number</label>
                                                        <select name="roomn" id="" class="form-control booking-border mt-3">
                                                        <option value='none' class='option'>none</option>
                                                           <?php
                                                                $sql='SELECT * FROM allroom WHERE av_state = 0' ;
                                                                $query=mysqli_query($con,$sql);
                                                                while($row=mysqli_fetch_array($query)){
                                                            ?>
                                                                <option value="<?php echo $row['room_num'] ; ?>"> <?php echo $row['room_num'] ; ?> </option>
                                                            <?php } ?>
                                                            
                                                            <?php //for($i = 1001; $i<=1100; $i++){
                                                            //   echo "
                                                                // <option value=".$i." class='option'>
                                                                // ".$i."
                                                            //    </option>";}?>
                                                            </select>
                                                    </div>
                                                
                                            </div>

                                            <div class="col-md-12 mt-4">
                                                <div class="form-group">


                                                    <label for="" class="label">Room Type :</label>
                                                    <select name="rtype" class="w-100 py-2 type mt-2" id="selectRoom" onchange="Room()">
                                                        <option value="single" selected>Single</option>
                                                        <option value="double" id="double">Double</option>
                                                        <option value="suit">Suit</option>


                                                    </select>
                                                </div>

                                                <!-- suit hidden div -->
                                                <div class="hide statusSelect">
                                                    <div class="form-group mt-3">
                                                        <input type="text" name ="numr" placeholder="Number Of Rooms"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-group mt-3">
                                                        <input type="text" name="nbeds" placeholder="Number Of Beds"
                                                            class="form-control">
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <div class="col-md-12 mt-4">
                                                
                                                    <div class="form-group">
                                                        <label for="" class="label">Status of Room :</label>
                                                        <select name="rstatus" id="" class="w-100 py-2 type mt-2">
                    
                                                            <option value="available" class="select">Available</option>
                                                            <option value="idle" class="option">Idle</option>
                                                            <option value="unavailable" class="option">Unavailable</option>
                                                        </select>
                                                    </div>
                                                
                                            </div>

                                            <div class="col-md-12 mt-4">
                                                <div class="form-group">
                                                    <input type="text" name ="rprice" placeholder="Room Price" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mt-4">
                                            
                                                <div class="form-group">
                                                    <label for="" class="label">Check in</label>
                                                    <input type="date" name="cin" class="w-100 py-2 type mt-2">
                                                </div>
                                            
                                        </div>
                                        <div class="col-md-12 mt-4">
                                           
                                                <div class="form-group">
                                                    <label for="" class="label">Check out</label>
                                                    <input type="date"  name ="cout" class="w-100 py-2 type mt-2">
                                                </div>
                                            
                                        </div>

                                        <button class="btn btn-primary w-100 mt-4 " name="btn">
                                            Add Room
                                      </button>
                                    </form>
                                        <?php
                                        if(isset($_POST['btn'])){
                                            $roomn=$_POST['roomn'];
                                            $rtype=$_POST['rtype'];
                                            $rstatus=$_POST['rstatus'];
                                            $rprice=$_POST['rprice'];
                                            $cin=$_POST['cin'];
                                            $cout=$_POST['cout'];
                                            $numr=$_POST['numr'];
                                            $nbeds=$_POST['nbeds'];
                                            if($rtype=='suit'){
                                                $sql="INSERT INTO `room`(`roomnumber`,`roomtype`, `status` , `roomprice`,`numr`,`numbeds`,`cin`,`cout`) VALUES ('$roomn' , '$rtype','$rstatus','$rprice','$numr','$nbeds','$cin','$cout')";
                                                mysqli_query($con,$sql);
                                            }
                                            else{
                                                $sql="INSERT INTO `room`(`roomnumber`,`roomtype`, `status` , `roomprice`,`cin`,`cout`) VALUES ('$roomn' , '$rtype','$rstatus','$rprice','$cin','$cout')";
                                                mysqli_query($con,$sql);
                                            }
                                            
                                        }
                                        ?>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->


                    </div>
                </div><!-- End Left side columns -->



            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Ahmed Emam</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>