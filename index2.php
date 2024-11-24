<?php
include('connect.php');
$id=$_GET['eid'];
session_start();
$_SESSION['user']=$_GET['eid'];
require 'header.php'; 
    session_start();

?>

<main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">
                        <a href="listEmployee.php"> Manage employee</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="editEmployee.php"> Edit employee</a>
                    </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

              <?php 
                $sql = 'select * from staff where id = "'.$id.'"';
                $query = mysqli_query($con , $sql);
                while($row=mysqli_fetch_array($query)){
               
               ?>
               <form action="edit/selecttype.php" method="POST">
                    <div>
                        old value staff: <?php echo $row['staff']?>
                    </div>
                    
                    <div class="input-group mb-3">
                    <select  name='newstaff'>
                        <option value="" class="Rece"> Select Staff Type</option>
                        <?php
                        $q="select * from employees";
                        $res=mysqli_query($con , $q);
                        
                        while($r = mysqli_fetch_assoc($res)){
                        ?>
                        <option value="<?php echo $r['staff_id']; ?>" class="option"><?php echo $r['staff']; ?></option>
                        <?php } ?>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>

                <form action="edit/selectshift.php" method="POST">
                <div>
                    old value shift: <?php echo $row['shift']?>
                </div>
                
                <div class="input-group mb-3">
                    <select name="newshift">
                        <option value="Morning-5.00AM-10.00AM" selected>Morning-5.00AM-10.00AM </option>
                        <option value="Day-10.00AM-4.00PM" selected>Day-10.00AM-4.00PM</option>
                        <option value="Evening-4.00PM-10.00PM" selected>Evening-4.00PM-10.00PM</option>
                        <option value="Night-10.00PM-5.00PM" selected>Night-10.00PM-5.00PM</option>
                    </select>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectfname.php" method="POST">
                <div>
                    old value fname: <?php echo $row['fname']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newfname' id='' placeholder='select fname'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectlname.php" method="POST">
                <div>
                    old value lname: <?php echo $row['lname']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newlname' id='' placeholder='select lname'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectemail.php" method="POST">
                    <div>
                        old value email: <?php echo $row['email']?>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type='email' name='newemail' id='' placeholder='select email'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="edit/selectpassword.php" method="POST">
                <div>
                    old value password: <?php echo $row['password']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='password' name='newpassword' id='' placeholder='select password'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectnumber.php" method="POST">
                <div>
                    old value number: <?php echo $row['number']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newnumber' id='' placeholder='select number'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectsalary.php" method="POST">
                <div>
                    old value salary: <?php echo $row['salary']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newsalary' id='' placeholder='select salary'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/selectcard.php" method="POST">
                <div>
                    old value card: <?php echo $row['card']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newcard' id='' placeholder='select card'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="edit/updatedate.php" method="POST">
                <div>
                    old value card: <?php echo $row['date_join']?>
                </div>
                
                <div class="input-group mb-3">
                    <input type='date' name='newdate' id=''>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>

                <?php }?>
            </div>
        </section>

    </main><!-- End #main -->

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