<?php
include('db.php');
session_start();
include('header.php');
?>
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="manageBusiness.php"> Manage Business</a>
                    </li>
                </ol>
            </nav>
        </div>
        <!--  End Page Title --> 

        <section class="section dashboard">
            <div class="row">

             <form action="add_guest.php" method = "POST">
                
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">

                        <!-- Sales Card -->
                        <div class="col-xxl-12 col-md-12">
                          
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body p-3">
                                            <h5 class="card-title text-center">Add Guest</h5>
                                            <div class="row">
                                                <div class="col-md-6 mt-3">
                                                    
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="" placeholder="Name"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                        
                                                <div class="col-md-6 mt-3">
                                                        <div class="form-group">
                                                            <input type="number" name="phone" id="" placeholder="Phone"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="" placeholder="Email"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="" placeholder="Password"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="" class="label">type Room</label>
                                                            <select name="troom" id="" class="form-control booking-border mt-3">
                                                                <option value="none" class="option">none</option>
                                                                <option value="single" class="potion">single</option>
                                                                <option value="Dubel" class="option">Dubel</option>
                                                                <option value="suite" class="option">Suite</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <input type="text" name="nadults" id="" placeholder="Number of Adults"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <input type="text" name="nchildren" id="" placeholder="Number of Childern"
                                                                class="form-control booking-border">
                                                        </div>
                                                </div>
                                                 <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="" class="label">Meal Plan</label>
                                                            <select name="meal" id="" class="form-control booking-border mt-3">
                                                                <option value="none" class="option">none</option>
                                                                <option value="breackfast-lunch-drinks" class="potion">breackfast-lunch-drinks</option>
                                                                <option value="breakfast-Dinner-drinks" class="option">breakfast-Dinner-drinks</option>
                                                                <option value="breakfast_lunch_Dinner-drinks" class="option">breakfast_lunch_Dinner-drinks</option>
                                                            </select>
                                                        </div>
                                                </div>
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
                                                            <label for="" class="label">Status of Reservation</label>
                                                            <select name="status" id="" class="form-control booking-border mt-3">
                                                                <option value="none" class="option">none</option>
                                                                <option value="Active" class="potion">Active</option>
                                                                <option value="Pending" class="option">Pending</option>
                                                                <option value="Inactive" class="option">Inactive</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                         
                                               
                                                
                                                <div class="col-md-6 mt-4">
                                                        <div class="form-group">
                                                            <label for="" class="label">Check in</label>
                                                            <input type="date" class="form-control booking-border mt-3" name = "cin">
                                                        </div>
                                                </div>
                                                <div class="col-md-6 mt-4">
                                                        <div class="form-group">
                                                            <label for="" class="label">Check Out</label>
                                                            <input type="date" class="form-control booking-border mt-3" name ="cout">
                                                        </div>
                                                </div>

                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="">Select Payment</label>
                                                            <select name="payment" id="visa" class="form-control booking-border mt-3" onchange="payyment()">
                                                                <option value="none" class="option">none</option>
                                                                <option value="cash" class="option">Cash</option>
                                                                <option value="visa" class="option">Credit Card</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                
                                                <div class="col-md-6 mt-4">
                                                        <div class="form-group cardNumber" style="display: none; visibility: hidden;">
                                                            <label for="">Card Number</label>
                                                            <input type="number" name="card_num" id="card" class="form-control booking-border pay">
                                                        </div>
                                                </div>


                                                <div class="col-md-6 mt-4">
                                                        <div class="form-group cardNumber " id="" style="display: none; visibility: hidden;">
                                                            <label for="">Expire Date</label>
                                                            <input type="date" name="expired" id="card" class="form-control booking-border pay">
                                                        </div>
                                            
                                               </div> 


                                                  <div class="col-md-10 m-auto mt-3">

                                                        <div class="form-group">
                        
                                                          <button class="btn btn-primary w-100" name="send">
                                                                Add Guest
                                                          </button>

                                                        </div>
                                            </div>

                                        </div>
        
                                    </div>
                                </div>
                               
                            </div>
                        </div><!-- End Sales Card -->

                    </div>
                </div><!-- End Left side columns -->


             </form>
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
    <script>
        function payyment() {
  let visa = document.getElementById("visa");
  let card = document.querySelectorAll(".cardNumber");

  if (visa.value == "visa") {
    card[0].style.display = "block";
    card[0].style.visibility = "visible";
    card[1].style.display = "block";
    card[1].style.visibility = "visible";
  } else {
    card[0].style.display = "none";
    card[0].style.visibility = "hidden";
    card[1].style.display = "none";
    card[1].style.visibility = "hidden";
  }
}
    </script>

</body>

</html>