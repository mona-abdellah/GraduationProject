<?php
session_start();
include('connect.php');
require 'header.php'; 
    ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">
            <a href="listEmployee.php"> Manage Employee</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="addEmployee.php"> Add Employee</a>
          </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <form action="connectadd.php" method="POST">

          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row justify-content-center">

              <!-- Sales Card -->
              <div class="col-xxl-6 col-md-8">
                <div class="card">

                  <div class="card-body">
                    <h5 class="card-title text-center">Add Employee</h5>

                    <div class="row">
                      <div class="col-md-12 mt-4">

                        <div class="form-group">
                          <label for="" class="label">Staff : </label>
                          <select name="staff" id="" class="form-control booking-border mt-3">
                            <option value="" class="Rece"> Select Staff Type</option>
                            <?php
                            $query="select * from employees";
                            $result=mysqli_query($con , $query);
                            
                            while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <option value="<?php echo $row['staff_id']; ?>" class="option"><?php echo $row['staff']; ?></option>
                            <?php } ?>
                          </select>
                        </div>

                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="form-group">


                          <label for="" class="label">Shift : </label>
                          <select name="shift" class="w-100 py-2 type mt-2">
                            <option value="Morning-5.00AM-10.00AM" selected>Morning-5.00AM-10.00AM </option>
                            <option value="Day-10.00AM-4.00PM" selected>Day-10.00AM-4.00PM</option>
                            <option value="Evening-4.00PM-10.00PM" selected>Evening-4.00PM-10.00PM</option>
                            <option value="Night-10.00PM-5.00PM" selected>Night-10.00PM-5.00PM</option>
                          </select>
                        </div>

                        <!-- suit hidden div -->
                        <div class="hide statusSelect">
                          <div class="form-group mt-3">
                            <input type="text" placeholder="Number Of Rooms" class="form-control">
                          </div>
                          <div class="form-group mt-3">
                            <input type="text" placeholder="Number Of Beds" class="form-control">
                          </div>
                        </div>


                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="form-group">
                          <input type="text" placeholder="Frist Name" class="form-control" name = 'fname'>
                        </div>
                      </div>
                      <div class="col-md-12 mt-4">
                        <div class="form-group">
                          <input type="text" placeholder="Last Name" class="form-control" name = 'lname'>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="form-group">
                        <input type="email" placeholder="Email" class="form-control" name = 'email'>
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="form-group">
                        <input type="text" placeholder="Contact Number" class="form-control" name = 'number'>
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="form-group">
                        <input type="text" placeholder="Salary" class="form-control" name = 'salary'>
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="form-group">
                        <input type="text" placeholder="ID Card Number" class="form-control" name = 'card'>
                      </div>
                    </div>
                    <div class="col-md-12 mt-4">
                      <div class="form-group">
                        <input type="date"  class="form-control" name = 'date'>
                      </div>
                    </div>



                    <button class="btn btn-primary w-100 mt-4 ">
                      Add Employee
                    </button>

                  </div>

                </div>
              </div><!-- End Sales Card -->


            </div>
          </div><!-- End Left side columns -->


        </form>

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