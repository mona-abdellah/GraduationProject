<?php
include("connect.php");
session_start();
// $_SESSION['user']=$_GET['eid'];
$id = $_SESSION['id']; 
$job = $_SESSION['staff']; 
// if ($job != 1) {
//   header('location:../login_signuo_dashboard.php');
// }
if ( !isset($_SESSION['id'])) {
  header('location:../login-signup_dashboard/index.php');
}
include('header.php');
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
      <div class="row">

        
        <div class="col-xl-4">
          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <?php
        $sql="SELECT * FROM `staff` INNER JOIN employees ON employees.staff_id = staff.staff WHERE id = '$id'";
        $query=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($query)){
          ?>
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
              <h2> <?php echo $row['fname'] . " " .$row['lname'];?></h2>
              <h3><?php echo $row['staff'];?></h3>
              <div class="social-links mt-2">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
              
              <?php }
        ?>
            </div>
          </div>
        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab"
                    data-bs-target="#profile-overview">Overview</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change
                    Password</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">About</h5>
                  <p class="small fst-italic">Sunt est soluta temporibus accusantium neque nam maiores cumque
                    temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem
                    eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</p>

                  <h5 class="card-title">Profile Details</h5>
                  <?php
                    $sql="SELECT * FROM `staff` INNER JOIN employees ON employees.staff_id = staff.staff WHERE id = '$id'";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query)){
                      ?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Full Name</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['fname'] . " " .$row['lname'];?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Company</div>
                    <div class="col-lg-9 col-md-8">Lueilwitz, Wisoky and Leuschke</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Job</div>
                    <div class="col-lg-9 col-md-8"><?php $row['fname'] ;?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Country</div>
                    <div class="col-lg-9 col-md-8">USA</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Address</div>
                    <div class="col-lg-9 col-md-8">A108 Adam Street, New York, NY 535022</div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Phone</div>
                    <div class="col-lg-9 col-md-8"><?php $row['number'] ;?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8"><?php $row['email'] ;?></div>
                  </div>

                </div><?php } ?>


                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  
                  <form action = "editprofile/edit.php" method = "POSt">
                    <div class="row mb-3">
                      <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                      <div class="col-md-8 col-lg-9">
                        <img src="assets/img/profile-img.jpg" alt="Profile">
                        <div class="pt-2">
                          <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i
                              class="bi bi-upload"></i></a>
                          <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i
                              class="bi bi-trash"></i></a>
                        </div>
                      </div>
                    </div>
                </form>
                <?php
                    $sql="SELECT * FROM `staff` INNER JOIN employees ON employees.staff_id = staff.staff WHERE id = '$id'";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query)){
                      ?>
        
                      <form action="editprofile/editname.php" method="POST">
                    <div>
                      old value fname: <?php echo $row['fname'];?>
                    </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newfname' id='' placeholder='select fname'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="editprofile/editlname.php" method="POST">
                    <div>
                      old value fname: <?php echo $row['lname'];?>
                    </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newlname' id='' placeholder='select lname'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about"
                          style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                      </div>
                    </div>
                    <form action="editprofile/editcountry.php" method="POST">
                           <div>
                      old value Country: <?php echo $row['Country'];?>
                    </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newcountry' id='' placeholder='enter country'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="editprofile/editaddress.php" method="POST">
                    <div>
                      old value address: <?php echo $row['address'];?>
                    </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newaddress' id='' placeholder='enter address'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="editprofile/editjob.php" method="POST">
                    <div>
                      old value job: <?php echo $row['staff'];?>
                    </div>
                
                <div class="input-group mb-3">
                    <input type='text' name='newjob' id='' placeholder='enter job'>
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                </div>
                </form>
                <form action="editprofile/editphone.php" method="POST">
                    <div>
                      old value phone: <?php echo $row['phone'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='text' name='newphone' id='' placeholder='enter phone number'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="editprofile/editemail.php" method="POST">
                    <div>
                      old value email: <?php echo $row['email'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='email' name='newemail' id='' placeholder='enter phone number'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="editprofile/edittwitter.php" method="POST">
                    <div>
                      old value of twitter prfile: <?php echo $row['Twitter_Profile'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='email' name='twitter' id='' placeholder='enter twitter_profile'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <form action="editprofile/editfacebook.php" method="POST">
                    <div>
                      old value of facebook prfile: <?php echo $row['Facebook_Profile'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='email' name='facebook' id='' placeholder='enter facebook_profile'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>

                <form action="editprofile/editinstagrame.php" method="POST">
                    <div>
                      old value of instagrame prfile: <?php echo $row['Instagram_Profile'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='email' name='instagrame' id='' placeholder='enter instagrame_profile'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>

                <form action="editprofile/editlinkedin.php" method="POST">
                    <div>
                      old value of linkedin prfile: <?php echo $row['Linkedin_Profile'];?>
                    </div>
                
                    <div class="input-group mb-3">
                        <input type='email' name='linkedin' id='' placeholder='enter linkedin_profile'>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2" >change</button>
                    </div>
                </form>
                <?php }?>
                    <!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <form action = "editprofile/password.php" method = "POSt">

                    <div class="row mb-3">
                      <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="password" type="password" class="form-control" id="currentPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="newpassword" type="password" class="form-control" id="newPassword">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                      </div>
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                  </form><!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->


            </div>

          </div>
        
        </div>

        <div class="col-xl-8 offset-4">

          <div class="card">
            <div class="card-body pt-3">


                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Employee More Info</h5>
                  <?php
                    $sql="SELECT * FROM `staff` INNER JOIN employees ON employees.staff_id = staff.staff WHERE id = '$id'";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query)){
                      ?>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Type</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['staff'];?></div>
                  </div>
      
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Shift</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['shift'];?></div>
                  </div>
      
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Salary</div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['salary'];?></div>
                  </div>
      
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Date Of Join </div>
                    <div class="col-lg-9 col-md-8"><?php echo $row['date_join'];?></div>
                  </div>
                  <?php  } ?>
               </div>
               


            </div>

          </div>

        </div>


      </div>
    </section>

  </main><!-- End #main -->

 

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