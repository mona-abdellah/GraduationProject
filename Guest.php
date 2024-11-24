<?php
session_start();
include('db.php');
$id =$_GET['eid'];
include('header.php');
?>
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">
            <a href="Guest.php"> Manage Guests</a>
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
                  <div class='col-xxl-4 col-md-4'>
                  <div class='card info-card sales-card'>
                    
                    <div class='filter'>
                      
                      <a class='icon' href='#' data-bs-toggle='dropdown'><i class='bi bi-three-dots'></i></a>
                      <ul class='dropdown-menu dropdown-menu-end dropdown-menu-arrow'>
                        <li class='dropdown-header text-start'>
                          <a href=''>More Info</a>
                        </li>


                  </ul>
                  
                </div>
                <div class='card-body'>
               <h5 class='card-title'>TOTAL GUESTS</h5>

               <div class='d-flex align-items-center'>
                 <div class='card-icon rounded-circle d-flex align-items-center justify-content-center'>
                   <i class=' bi bi-people'></i>
                 </div>
                 <div class='ps-3'>
                   <h6>145</h6>
                 </div>
                 </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <a href="">More Info</a>
                    </li>


                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title"> GUESTS IN ROOMS </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-thumbs-up"></i>
                    </div>
                    <div class="ps-3">
                      <h6>100</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-4 col-md-4">

              <div class="card info-card customers-card">


                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <a href="">More Info</a>
                    </li>


                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">GUESTS LEAVING </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center text-danger">
                      <i class="fa-solid fa-thumbs-down"></i>
                    </div>
                    <div class="ps-3">
                      <h6>45</h6>


                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->


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
                          <th scope="col">Room Number</th>
                          <th scope="col" colspan="2">Status Reservation</th>
                          <th scope="col">Payment</th>
                          <th scope="col">Check in </th>
                          <th scope="col">Check Out</th>
                          <th scope="col" colspan="6">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $avaguest=0;
                        $leaveguest=0;
                        $sql ="SELECT * FROM `booking`";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                          $id=$row['id'];
                          ?>
                        <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['phone'] ?></td>
                        <td> <?php echo $row['email'] ?></td>
                        <td> <?php echo $row['password'] ?></td>
                        <td><?php echo $row['roomn']?> </td>
                        <td colspan='2'>
                            <?php 
                            if($row['status'] == "Active"){
                              $avaguest++;
                              echo "<span>".$row['status']."<i class='fa-solid fa-circle' style='color:green;'></i></span>";}
                            else if($row['status'] == "Inactive"){
                              $leaveguest++;
                              echo "<span>".$row['status']."<i class='fa-solid fa-circle' style='color:#ff2020;'></i></span>";}
                            else if($row['status'] == "Pending"){
                              echo "<span>".$row['status']."<i class='fa-solid fa-circle' style='color:yellow;'></i></span>";  }
                            else{
                            echo "<span>".$row['status']."</span></td>"; 
                            }?>
                                     
                        <td> <?php echo $row['payment'] ?> </td>
                        <td> <?php echo $row['cin'] ?></td>
                        <td> <?php echo $row['cout'] ?></td>
                        <td colspan='6'>
                          <div class='status d-flex  justify-content-evenly'>
                            <a href="editGuest2.php?eid=<?php echo $id ?>"  class='btn-view btn-border1 px-2 py-1'>
                              <i class='fa-regular fa-pen-to-square'></i>
                               <span class='dis-none' style='color: green;'>Edit</span> 
                              <div class='overlay'></div>
                            </a>
                            <a href="delete.php?eid=<?php echo $id ?>" >
                    
                            <button class='btn-view btn-border2'>
                              <i class='fa-solid fa-trash'></i>
                              <span class='dis-none'>delete</span>
                              <div class='overlay' style='background-color: #ff2020;'></div>
                            </button></a>
                      
                          </div>
                        </td>
                      </tr>
                      <?php
                      }?>

                      
                      </tbody>
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