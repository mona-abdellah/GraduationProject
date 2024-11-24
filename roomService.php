<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard | Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" class="" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->


  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="fa-solid fa-business-time"></i><span>Hotel Info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">


          <li class="nav-item " id="guest-parent">
            <a class=" collapsed" data-bs-target="#icon-guest" data-bs-toggle="collapse" href="#"><span>
                Manage
                Guests</span>
              <i class="bi bi-chevron-down ms-auto" style="font-size: 15px; color:#fff"></i>
            </a>
            <ul id="icon-guest" class="nav-content collapse" data-bs-parent="#guest-parent">
              <li>
                <a href="addGuest.php" class=" ms-4">
                  <span>Add Guest</span>
                </a>
                <a href="Guest.php" class=" ms-4">
                  <span>List Guest</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item" id="guest-parent">
            <a class=" collapsed" data-bs-target="#icon-room" data-bs-toggle="collapse" href="#"><span>
                Manage
                Rooms</span>
              <i class="bi bi-chevron-down ms-auto" style="font-size: 15px; color:#fff"></i>
            </a>
            <ul id="icon-room" class="nav-content collapse" data-bs-parent="#guest-parent">
              <li>
                <a href="addRoom.php" class=" ms-4">
                  <span>Add Room</span>
                </a>
                <a href="rooms.php" class=" ms-4">
                  <span>List Room</span>
                </a>

              </li>
            </ul>
          </li>


          <li class="nav-item" id="guest-parent">
            <a class=" collapsed" data-bs-target="#icon-roomEmployee" data-bs-toggle="collapse" href="#"><span>
                Manage
                Employee</span>
              <i class="bi bi-chevron-down ms-auto" style="font-size: 15px; color:#fff"></i>
            </a>
            <ul id="icon-roomEmployee" class="nav-content collapse" data-bs-parent="#guest-parent">
              <li>
                <a href="addEmployee.php" class=" ms-4">
                  <span>Add Employee</span>
                </a>
                <a href="listEmployee.php" class=" ms-4">
                  <span>List Employee</span>
                </a>
             

              </li>
            </ul>
          </li>

          <li class="nav-item" id="guest-parent">
            <a class=" collapsed" data-bs-target="#icon-roomService" data-bs-toggle="collapse" href="#"><span>
                Room
                Service</span>
              <i class="bi bi-chevron-down ms-auto" style="font-size: 15px; color:#fff"></i>
            </a>
            <ul id="icon-roomService" class="nav-content collapse" data-bs-parent="#guest-parent">
              <li>
                <a href="listRoomService.php" class=" ms-4">
                  <span>List Room Service</span>
                </a>
                <a href="addRoomService.php" class=" ms-4">
                  <span>Add Room Service</span>
                </a>

              </li>
            </ul>
          </li>

          






        </ul>
      </li> <!-- End Icons Nav -->



      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="users-profile.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->



      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.php">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->



    </ul>

  </aside><!-- End Sidebar-->


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
                  <h5 class="card-title">TOTAL GUESTS</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=" bi bi-people"></i>
                    </div>
                    <div class="ps-3">
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
                        <tr>
                          <td>170</td>
                          <td>Brandon Jacob</td>
                          <td> 01014052604</td>
                          <td> Ziad@gmail.com</td>
                          <td> A123456</td>
                          <td> 215</td>
                          <td>

                            <span>Active <i class="fa-solid fa-circle" style="color:green;"></i></span>
                          </td>

                          <td> Gpay</td>
                          <td> 2/5/2025</td>
                          <td> 7/5/2025</td>
                          <td>
                            <div class="status d-flex  justify-content-evenly">
                              <a href="editGuest.php" class="btn-view btn-border1 px-2 py-1">
                                <i class="fa-regular fa-pen-to-square"></i>
                                 <span class="dis-none" style="color: green;">Edit</span> 
                                <div class="overlay"></div>
                              </a>
                              <button class="btn-view btn-border2">
                                <i class="fa-solid fa-trash"></i>
                                <span class="dis-none">delete</span>
                                <div class="overlay" style="background-color: #ff2020;"></div>
                              </button>
                        
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>170</td>
                          <td>Brandon Jacob</td>
                          <td> 01014052604</td>
                          <td> .com</td>
                          <td> A123456</td>
                          <td> 215</td>
                          <td>

                            <span>Pending <i class="fa-solid fa-circle" style="color:yellow"></i></span>
                          </td>

                          <td> Gpay</td>
                          <td> 2/5/2025</td>
                          <td> 7/5/2025</td>
                          <td>
                            <div class="status d-flex  justify-content-evenly">
                              <a href="editGuest.php" class="btn-view btn-border1 px-2 py-1">
                                <i class="fa-regular fa-pen-to-square"></i>
                                 <span class="dis-none" style="color: green;">Edit</span> 
                                <div class="overlay"></div>
                              </a>
                              <button class="btn-view btn-border2">
                                <i class="fa-solid fa-trash"></i>
                                <span class="dis-none">delete</span>
                                <div class="overlay" style="background-color: #ff2020;"></div>
                              </button>
                              
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td>170</td>
                          <td>Brandon Jacob</td>
                          <td> 01014052604</td>
                          <td> Ziad@gmail.com</td>
                          <td> A123456</td>
                          <td> 215</td>
                          <td>

                            <span>Inactive <i class="fa-solid fa-circle" style="color:#ff2020;"></i></span>
                          </td>

                          <td> Gpay</td>
                          <td> 2/5/2025</td>
                          <td> 7/5/2025</td>
                          <td>
                            <div class="status d-flex  justify-content-evenly">
                              <a href="editGuest.php" class="btn-view btn-border1 px-2 py-1">
                                <i class="fa-regular fa-pen-to-square"></i>
                                 <span class="dis-none" style="color: green;">Edit</span> 
                                <div class="overlay"></div>
                              </a>
                              <button class="btn-view btn-border2">
                                <i class="fa-solid fa-trash"></i>
                                <span class="dis-none">delete</span>
                                <div class="overlay" style="background-color: #ff2020;"></div>
                              </button>
                            
                            </div>
                          </td>
                        </tr>
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