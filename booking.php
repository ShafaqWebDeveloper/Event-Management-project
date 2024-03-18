<!doctype html>
<html class="no-js" lang="zxx">

<?php include('./includes/header.php'); ?>
<body>
    <!-- header-start -->
    <?php include('./includes/navbar.php'); ?>
    <!-- header-end -->
    
     <!-- bradcam_area -->
     <div class="bradcam_area">
		<div class="single_bradcam  d-flex align-items-center bradcam_bg_1 overlay">
			  <div class="container">
					<div class="row align-items-center justify-content-center">
					   <div class="col-xl-12">
						  <div class="bradcam_text text-center">
							<div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
								<img src="img/shape/shape_1.svg" alt="">
							</div>
							<div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
								<img src="img/shape/shape_2.svg" alt="">
							</div>
								<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Book Now</h3>
						  </div>
					   </div>
					</div>
			  </div>
		   </div>
	 </div>
	<!-- bradcam_area end -->

	


    <!-- brand_area_start  -->
    <div class="brand_area black_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <h3 class="mb-30 text-white">booking form</h3>
                <div class="card black_bg">
                <form id="data" method="post">
                    <!-- <div class="card-header">
                      <h4>booking</h4>
                      <div class=" text-right">
                    <a class="btn btn-primary" href="./bookingview.php">view booking</a>
                    </div> -->
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label class="text-white">client name</label>
                        <input type="text" name="bname"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="text" name="bemail"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Mobile</label>
                        <input type="text" name="bmobile"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occasion name</label>
                        <input type="text" name="boccasion"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occassion Start Date</label>
                        <input type="date" name="bsdate"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occassion Start time</label>
                        <input type="time" name="bstime"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occassion end Date</label>
                        <input type="date" name="bedate"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occassion End Time</label>
                        <input type="time" name="betime"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">occassion vanue </label>
                        <select name="bvenue" id="" class="single-input">
                            <option value="">select venue</option>
                            <option value="silver spoon">silver spoon</option>
                            <option value="zoom">zoom</option>
                            <option value="quilliam">quilliam</option>
                            <option value="kohinoor">kohinoor</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="text-white">occassion vanue city</label>
                        <select name="bcity" id="" class="single-input">
                        <option value="">select city</option>
                            <option value="faisalabad">faisalabad</option>
                            <option value="lahore">lahore</option>
                            <option value="islamabad">islamabad</option>
                            <option value="murree">murree</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="text-white">Occassion description</label>
                        <input type="text" name="bdes"class="form-control" required="">
                      </div>
                    </div>
                    <div class="card-footer text-right">
                    <input class="btn btn-primary" type="button" id="sub" value="Submit" name="sub"/>
                    </div>
                  </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand_area_end  -->
    <!-- footer_start  -->
    <?php include('./includes/footer.php'); ?>
    <script>
    $(document).ready(function(){
     $("#sub").on("click",function(f){
      f.preventDefault();
      alert("run");
      var d=new FormData(data);
      alert(d);
         $.ajax({
           url:"./ajaxfiles/bookin.php",
          method:"post",
           contentType:false,
           processData:false,
           data:d,
           success:function(r){
             alert(r);
             if(r==1){
              Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your booking is confirmed',
  showConfirmButton: false,
  timer: 1500
});
             }
             else{
              alert("data not insurted");
             }
           }
        });
     });
    });
  </script>
</body>
</html>