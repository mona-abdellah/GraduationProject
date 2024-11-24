<?php
include('db.php');
session_start();
require 'header.php'; 
?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="listRoomService.php"> Manage Room Services</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="addRoomService.php"> Add Room Services</a>
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
                        <div class="col-xxl-12 col-md-12">
                          
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body p-3">
                                            <h5 class="card-title text-center">Add Room Service</h5>
                                            <div class="row">
                                            <form method="post">
                                                <div class="col-md-12 mt-4">
                                                    
                                                <div class="form-group">
                                                        <label for="" class="label">Room Number</label>
                                                        <select name="roomn" id="" class="form-control booking-border mt-3">
                                                        <option value='none' class='option'>none</option>
                                                           <?php for($i = 1001; $i<=1100; $i++){
                                                              echo "
                                                                <option value=".$i." class='option'>
                                                                ".$i."
                                                               </option>";}?>
                                                            </select>
                                                    </div>
                                                   
                                                </div>

                                                
                        
                                                <div class="col-md-12 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <label for="rtype" class="label">Room Type</label>
                                                            <select name="rtype" id="" class="form-control booking-border mt-3">
                                                                <option value="single" class="select">Single</option>
                                                                <option value="double" class="option">Double</option>
                                                                <option value="suite" class="option">Suite</option>
                                                            </select>
                                                        </div>
                                                   
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <label for="" class="label">Service Type</label>
                                                            <select name="servtype" id="" class="form-control booking-border mt-3">

                                                                <option value="none" class="select">none</option>
                                                                <option value="Clean Up" class="select">Clean Up</option>
                                                                <option value="Maintenance" class="option">Maintenance</option>
                                                                <option value="Bringging BreakFast" class="option">Bringging BreakFast</option>
                                                                <option value="Bringging Lunch" class="option">Bringging Lunch</option>
                                                                <option value="Bringging Dinner" class="option">Bringging Dinner</option>

                                                            </select>
                                                        </div>
                                                   
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="" placeholder="Room Server"
                                                                class="form-control booking-border">
                                                        </div>
                                                   
                                                </div>

                                            


                                                <div class="col-md-12 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <label for="" class="label">Status of Service</label>
                                                            <select name="sserv" id="" class="form-control booking-border mt-3">
                        
                                                                <option value="In Serve" class="select">In Serve</option>
                                                                <option value="Out of Serve" class="option">Out of Serve</option>
                                                            </select>
                                                        </div>
                                                   
                                                </div>
                                                         
                                               
                                                
                                                <div class="col-md-6 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <label for="" class="label">Service Start</label>
                                                            <input type="date" name = "sstart" class="form-control booking-border mt-3">
                                                        </div>
                                                   
                                                </div>
                                                <div class="col-md-6 mt-4">
                                                    
                                                        <div class="form-group">
                                                            <label for="" class="label">Service Finish</label>
                                                            <input type="date" name = "send" class="form-control booking-border mt-3">
                                                        </div>
                                                   
                                                </div>

                                               
                        
                                                  <div class="col-md-10 m-auto mt-3">
                                                    
                                                        <div class="form-group">
                        
                                                          <button class="btn btn-primary w-100 " name="addbtn">
                                                                Add Room Service
                                                          </button>

                                                        </div>
                                                 </div>
                                            </form>
                                            <?php
                                            if(isset($_POST['addbtn'])){
                                              $roomn=$_POST['roomn'];
                                              $rtype=$_POST['rtype'];
                                              $servtype=$_POST['servtype'];
                                              $name=$_POST['name'];
                                              $sserv=$_POST['sserv'];
                                              $sstart=$_POST['sstart'];
                                              $send=$_POST['send'];
                                              $sql="INSERT INTO `room`(`roomnumber`,`roomtype` , `servtype` ,`rserver` ,`servstatus`,`servstart`,`servend`) VALUES ('$roomn','$rtype' ,'$servtype' ,'$name','$sserv' ,'$sstart' ,'$send')";
                                              $query= mysqli_query($con,$sql);
                                            }

                                           
                                            ?>
                                          </div>
                                        
                                        </div>
        
                                    </div>
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