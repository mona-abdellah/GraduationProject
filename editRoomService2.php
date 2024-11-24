<?php
include('db.php');
$id=$_GET['eid'];
session_start();
$_SESSION['user']=$_GET['eid'];
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
             
                <h5 class="card-title text-center">Edit Room Service</h5>
                <div class="row">
                <?php 
                $sql = "SELECT * FROM `room` WHERE `id` = '$id'";
                $query = mysqli_query($con , $sql);
                while($row=mysqli_fetch_array($query)){
               
               ?>
               <form action="updating/updateroomnumser.php" method="POST">
                <div>
                    old value Roomn : <?php echo $row['roomnumber']?>
                </div>
                
                <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="newroomn">
                        <option value='none' class='option'>none</option>
                    <?php for($i = 1001; $i<=1100; $i++){
                        echo "
                        <option value=".$i." class='option'>
                        ".$i."
                        </option>";}?>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
    
               <form action="updating/updateroomtypeser.php" method="POST">
                <div>
                    old value : <?php echo $row['roomtype']?>
                </div>
                
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="type">
                        <option selected>new value</option>
                        <option value="Single">Single</option>
                        <option value="Double">Double</option>
                        <option value="Suit">Suit</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <?php
                if ($row['roomtype'] == "Suit"){
                ?>
                <form action="updating/updatenumberbedsser.php" method="POST">
                    <div>
                        old value  : <?php echo $row['numbeds']?>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type='text' name='newnumbeds' id='' placeholder='number of beds'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="updating/updatenumberroom.php" method="POST">
                    <div>
                        old value  : <?php echo $row['numr']?>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type='text' name='newnumr' id='' placeholder='number of rooms'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <?php } ?>
               <form action="updating/updateroomstatusser-.php" method="POST">
                <div>
                    old value price : <?php echo $row['status']?>
                </div>
                
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="newstate">
                        <option selected>new value</option>
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                        <option value="Idle">Idle</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatesalaryser.php" method="POST">
                <div>
                    old value price: <?php echo $row['roomprice']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='salary' id='' placeholder='price'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
             
               <form action="updating/updatecheckinser.php" method="POST">
                <div>
                    old value cin: <?php echo $row['cin']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='date' name='newcin' id='' placeholder='Cin'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatecheckoutser.php" method="POST">
                <div>
                    old value cout : <?php echo $row['cout']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='date' name='newcout' id='' placeholder='Cout'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <?php
               }?>
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