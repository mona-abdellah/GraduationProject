<?php
include('db.php');
$id=$_GET['eid'];
session_start();
$_SESSION['user']=$_GET['eid'];
include('header.php');
?>
<main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="manageBusiness.php
                        "> Manage Business</a>
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
     <section class="section dashboard">
           <div class="row">
              <?php 
                $sql = "SELECT * FROM `booking` WHERE `id` = '$id'";
                $query = mysqli_query($con , $sql);
                while($row=mysqli_fetch_array($query)){
               
               ?>
               <form action="updating/updatename.php" method="POST">
                <div>
                    old value Name : <?php echo $row['name']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newname' id='' placeholder='Name'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               
               <form action="updating/updatephone.php" method="POST">
                <div>
                    old value Phone : <?php echo $row['phone']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newphone' id='' placeholder='phone'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updateemail.php" method="POST">
                <div>
                    old value Email : <?php echo $row['email']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='email' name='newemail' id='' placeholder='email'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatepass.php" method="POST">
                <div>
                    old value Password : <?php echo $row['password']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='password' name='newpassword' id='' placeholder='password'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updateroomn.php" method="POST">
                <div>
                    old value Roomn : <?php echo $row['roomn']?>
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
               <form action="updating/updatestate.php" method="POST">
                <div>
                    old value Status : <?php echo $row['status']?>
                </div>
                
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="newstate">
                        <option selected>new value</option>
                        <option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                        <option value="Pending">Pending</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>

               </form>
               <form action="updating/updatetroom.php" method="POST">
                <div>
                    old value type room : <?php echo $row['troom']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newtroom' id='' placeholder='type Room'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatemeal.php" method="POST">
                <div>
                    old value Meal : <?php echo $row['meal']?>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="newmeal">
                    <option value="none" class="option">none</option>
                    <option value="breackfast-lunch-drinks" class="potion">breackfast-lunch-drinks</option>
                    <option value="breakfast-Dinner-drinks" class="option">breakfast-Dinner-drinks</option>
                    <option value="breakfast_lunch_Dinner-drinks" class="option">breakfast_lunch_Dinner-drinks</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatenadultas.php" method="POST">
                <div>
                    old value Adultas: <?php echo $row['n_adults']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newadultas' id='' placeholder='number Adultas'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatenchildren.php" method="POST">
                <div>
                    old value Children: <?php echo $row['n_children']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newchildren' id='' placeholder='number Children'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatepayment.php" method="POST">
                <div>
                    old value Payment : <?php echo $row['payment']?>
                </div>
                
                <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" name="newpayment">
                    <option value="none" class="option">none</option>
                    <option value="cash" class="option">Cash</option>
                    <option value="visa" class="option">Credit Card</option>
              </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <?php
                if ($row['payment'] == "visa"){
                ?>
                <form action="updating/updatecard.php" method="POST">
                    <div>
                        old value Card : <?php echo $row['card_num']?>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type='text' name='newcard' id='' placeholder='Card_num'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="updating/updateexpire.php" method="POST">
                    <div>
                        old value Expire : <?php echo $row['expire_date']?>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type='date' name='newexpire' id='' placeholder='Expire'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
            
                <?php } ?>

               <form action="updating/updatecin.php" method="POST">
                <div>
                    old value cin: <?php echo $row['cin']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='date' name='newcin' id='' placeholder='Cin'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
               </form>
               <form action="updating/updatecout.php" method="POST">
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
        </section>

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Admin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="#">Zoz</a>
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