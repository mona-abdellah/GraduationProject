<?php
include('db.php');
session_start();
include("header.php");

?>
<section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row justify-content-center">

                       
                        <!-- Sales Card -->
                        <div class="col-xxl-12 col-md-12">
                          
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <form method = 'post'>
                                    <div class="card">
                                        <div class="card-body p-3">
                                            <h5 class="card-title text-center">Add order</h5>
                                            <div class="row">
                                                
                                                <div class="form-group">
                                                    <label for="" class="label">Meals</label>
                                                    <select name="servtype" id="" class="form-control booking-border mt-3">

                                                <?php
                                                    $q = 'select * from meals';
                                                    $res = mysqli_query($con , $q);
                                                    while($r=mysqli_fetch_array($res)){
                                                    ?>
                                                    <option value="<?php echo $r['id_meals'];?>" class="option"><?php echo $r['ordertype'];?></option>
                                                    <?php } ?>
                                            </select>
                                                </div>
                                               </div>


                                                <div class="col-md-12 mt-4">
                                                        <div class="form-group">
                                                            <label for="" class="label">Guest Name</label>
                                                            <select name="guestid" id="" class="form-control booking-border mt-3">

                                                <?php
                                                    $q = 'select * from booking';
                                                    $res = mysqli_query($con , $q);
                                                    while($r=mysqli_fetch_array($res)){
                                                    ?>
                                                    <option value="<?php echo $r['id'];?>" class="option"><?php echo $r['name'];?></option>
                                                    <?php } ?>
                                                </select>
                                                        </div>
                                                </div>


                                                

                                                  <div class="col-md-10 m-auto mt-3">

                                                        <div class="form-group">
                        
                                                          <button class="btn btn-primary w-100 " name='addbtn'>
                                                                Add Order
                                                          </button>

                                                        </div>
                                            </div>

                                        </div>
        
                                    </div>
                                </div>
                                                    </form>
                                <?php
                                        if(isset($_POST['addbtn'])){
                                        $sertype=$_POST['servtype'];
                                        $idguest=$_POST['guestid'];
                                        $sql="INSERT INTO `orders` (`id_guest`,`id_meals`)values('$idguest','$sertype')";
                                        $query=mysqli_query($con,$sql);
                                        }?>
                            </div>
                        </div><!-- End Sales Card -->


                    </div>
                </div><!-- End Left side columns -->



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