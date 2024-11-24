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
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
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
                  <h5 class="card-title">Total Room (s)</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="ps-3">
                      <h6>100</h6>
                      

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
                  <h5 class="card-title">Total customer (s) </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <!-- <h6>250</h6> -->
                      <?php
                      $sql='SELECT COUNT(id) as total FROM booking';
                      $query=mysqli_query($con,$sql);
                      $row_total=mysqli_fetch_array($query);
                      ?>
                      <h6><?php echo $row_total['total']; ?></h6>
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
                  <h5 class="card-title">Total Booking (s) </h5>
                  <?php
                    $sql="SELECT COUNT(id) as unav FROM `room` WHERE status= 'unavailable'";
                    $query=mysqli_query($con,$sql);
                    $row_unav = mysqli_fetch_assoc($query);
                      ?>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $row_unav['unav'];?></h6>

                    </div>
                  </div>
                </div>
              </div>

            </div><!-- End Customers Card -->




            <div class="row m-0 p-0">
              <!-- Recent Sales -->
              <div class="col-lg-8 col-md-6">
                <div class="card recent-sales overflow-auto">

                  <div class="card-body">
                    <h5 class="card-title Border"> <i class="fa-sharp fa-solid fa-share-nodes"></i> OVERVIEW </h5>
                    <div class="action-parent">

                      <div class="btn-action my-2">
                        <button class="Btn active-actions" onclick="Btn1()" id="btn_1">users</button>
                      </div>
                      <div class="btn-action my-2">
                        <button class="Btn" onclick="Btn2()" id="btn_2">Rooms</button>
                      </div>
                      <div class="btn-action  my-2">
                        <button class="Btn" onclick="Btn3()" id="btn_3">Orders</button>
                      </div>
                    </div>



                    <!-- User info -->
                    <div class="order-table  mt-3">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-6 Border">
                            <span>Total Users</span>
                            <span class="float-end">4511</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>Active Users</span>
                            <span class="float-end">248</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>Inactive Users</span>
                            <span class="float-end">4550</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>User Joined This Week</span>
                            <span class="float-end">0</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>User Joined This Month</span>
                            <span class="float-end">4</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>User Joined This Year</span>
                            <span class="float-end">32</span>
                          </div>



                        </div>
                      </div>
                    </div>
                    <!-- End info -->

                    <!-- Rooms -->
                    <?php
                              $sql='select * from room';
                              $query=mysqli_query($con,$sql);
                              while($row=mysqli_fetch_array($query)){
                            ?>
                    <div class="order-table  display-none ">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-6 Border">
                            <span>Total Rooms</span>
                            <span class="float-end">100</span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>Active Rooms</span>
                            <span class="float-end">
                            
                                <?php echo $row['ava'];?>
                          
                            </span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>Inactive Rooms</span>
                            <span class="float-end"><?php echo $row['unava'];?></span>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-6 mt-3 Border">
                            <span>Pending Activation Rooms</span>
                            <span class="float-end"><?php echo $row['inorder'];?></span>
                          </div>
                          <?php
                             } 
                            ?>



                        </div>
                      </div>
                    </div>
                    <!-- End Resturant -->


                    <!-- Table with stripped rows -->
                    <div class="order-table display-none" id="order">
                      <table class="table datatable ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col" colspan="">ِAddress</th>
                            <th scope="col">Order</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Brandon Jacob</td>
                            <td class="text-center">
                              3881 Valley Centre Dr, San Diego, CA 92130,

                            </td>
                            <td>28</td>
                            <td>$24,255</td>
                            <td>2016-05-25</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Brandon Jacob</td>
                            <td class="text-center">
                              cairo , sohag<br>

                            </td>
                            <td>114</td>
                            <td>$1000</td>
                            <td>2010-05-10</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Ashleigh Langosh</td>
                            <td>England , Man city</td>
                            <td>225</td>
                            <td>$255</td>
                            <td>2011-08-12</td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Angus Grady</td>
                            <td>3881 Valley Centre Dr</td>
                            <td>107</td>
                            <td>$24,255</td>
                            <td>2012-06-11</td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Raheem Lehner</td>
                            <td>Dynamic Division Officer</td>
                            <td>47</td>
                            <td>$11,220</td>
                            <td>2011-04-19</td>
                          </tr>
                          <tr>
                            <th scope="row">6</th>
                            <td>Mohamed</td>
                            <td>Cairo , Giza</td>
                            <td>47</td>
                            <td>$11,220</td>
                            <td>2011-04-19</td>
                          </tr>
                          <tr>
                            <th scope="row">7</th>
                            <td>Raheem Lehner</td>
                            <td>Dynamic Division Officer</td>
                            <td>47</td>
                            <td>$11,220</td>
                            <td>2011-04-19</td>
                          </tr>


                        </tbody>
                      </table>
                    </div>
<!-- End Table with stripped rows --> 

                  </div>

                </div>
              </div><!-- End Recent Sales -->


              <!-- Right side columns -->
              <div class="col-lg-4 col-md-6">


                <!-- Website Traffic -->
                <div class="card">

                  <div class="card-body pb-0">
                    <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                    <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
                    <?php
                              $sql='select * from room';
                              $query=mysqli_query($con,$sql);
                              while($row=mysqli_fetch_array($query)){
                              
                      echo "<script>
                      document.addEventListener('DOMContentLoaded', () => {
                        echarts.init(document.querySelector('#trafficChart')).setOption({
                          tooltip: {
                            trigger: 'item'
                          },
                          legend: {
                            top: '5%',
                            left: 'center'
                          },
                          series: [{
                            name: 'Access From',
                            type: 'pie',
                            radius: ['40%', '70%'],
                            avoidLabelOverlap: false,
                            label: {
                              show: false,
                              position: 'center'
                            },
                            emphasis: {
                              label: {
                                show: true,
                                fontSize: '18',
                                fontWeight: 'bold'
                              }
                            },
                            labelLine: {
                              show: false
                            },
                            data: [{
                              value:  ".$row['ava'].",
                              name: 'Available Rooms'
                            },

                            {
                              value: ".$row['unava'].",
                              name: 'Busy Rooms'
                            },
                            {
                              value: ".$row['inorder'].",
                              name: 'Rooms in order'
                            }

                            ]
                          }]
                        });
                      });
                    </script>";}?>

                  </div>
                </div><!-- End Website Traffic -->


              </div><!-- End Right side columns -->
            </div>

          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

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