<?php
session_start();
require 'connect.php';
include("header.php");
$id=$_GET['eid'];
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">
            <a href="listEmployee.php"> Manage Employees</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="listEmployee.php"> List Employee</a>
          </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <a href="">More Info</a>
                    </li>


                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">TOTAL EMPLOYEES</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=" bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>86</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

          
                  

            <div class="col-12">
              <div class="card">
                <div class="card-body recent-sales overflow-auto">

                  <!-- Table with stripped rows -->
                  <div class="order-table" id="order">
                    <table class="table datatable">
                      <thead class="">
                        <tr>

                          <th scope="col">id</th>
                          <th scope="col">Name</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Email</th>
                          <th scope="col">Password</th>
                          <th scope="col">Staff Type</th>
                          <th scope="col">Salary</th>
                          <th scope="col" colspan="2">Shift</th>
                          <th scope="col">joined date </th>
                          <th scope="col" colspan="6">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $sql="select * from staff";
                      $result=mysqli_query($con ,$sql);  
                      while($row=mysqli_fetch_array($result)){
                        $id=$row['id'];
                        $query ='select * from employee';
                       
                        echo "<tr>
                          <td>".$row['id']."</td>
                          <td>".$row['fname'] . " ". $row['lname']."</td>
                          <td> ".$row['number']."</td>
                          <td> ".$row['email']."</td>
                          <td> ".$row['password']."</td>
                          <td>  ".$row['staff']."</td>
                          <td> ".$row['salary']."</td>
                          <td> ".$row['shift']."</td>
                          <td colspan='2'>".$row['date_join']." </td>
                         
                          <td colspan='6'>
                          <div class='status d-flex  justify-content-evenly'>
                          <a href=index2.php?eid=".$id." class='btn-view btn-border1 px-2 py-1'>
                            <i class='bi bi-pencil-square'></i>
                             <span class='dis-none' style='color: green;'>Edit</span> 
                            <div class='overlay'></div>
                          </a>
                          <a href='deleteEmployee.php?eid=".$id."'>
                          <button class='btn-view btn-border2'>
                            <i class='bi bi-trash'></i>
                            <span class='dis-none'>delete</span>
                            <div class='overlay' style='background-color: #ff2020;'></div>
                              </button>
                              </a> 
                            </div>
                          </td>
                        </tr>";}?></tbody>
                    </table>
                  </div>
                  <!-- End Table with stripped rows -->
                </div>
              </div>
            </div>



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