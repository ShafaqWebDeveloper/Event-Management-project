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
								<h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Planner</h3>
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
                <h3 class="mb-30 text-white">Planner registration form</h3>
                <div class="card black_bg">
                  <form id="data" method="post">
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label class="text-white">first name</label>
                        <input type="text" name="pfname"class="form-control" required="" pattern="[a-zA-Z]{6}">
                      </div>
                      <div class="form-group">
                        <label class="text-white">last name</label>
                        <input type="text" name="plname"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Email</label>
                        <input type="text" name="pemail"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">DOB</label>
                        <input type="text" name="pdob"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Gender</label><br/>
                        <input type="radio" name="pgender" value="male" /><span class="text-white">male</span><br/>
                        <input type="radio" name="pgender" value="female" /><span class="text-white">female</span>
                      </div>
                      <div class="form-group">
                        <label class="text-white">Mobile</label>
                        <input type="text" name="pmobile"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Address</label>
                        <input type="text" name="paddress"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">City</label>
                        <input type="text" name="pcity"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Experience</label>
                        <input type="text" name="pexperience"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Achievements</label>
                        <input type="text" name="pachievements"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Skills</label>
                        <input type="text" name="pskills"class="form-control" required="">
                      </div>
					  <div class="form-group">
                        <label class="text-white">Partners</label>
                        <input type="text" name="ppartners"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Password</label>
                        <input type="text" name="ppass"class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label class="text-white">Confirm password</label>
                        <input type="text" name="pcpass"class="form-control" required="">
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
           url:"./ajaxfiles/pinsert.php",
          method:"post",
           contentType:false,
           processData:false,
           data:d,
           success:function(r){
             alert(r);
//              if(r==1){
//               Swal.fire({
//   position: 'top-end',
//   icon: 'success',
//   title: 'You are registered as volunteer',
//   showConfirmButton: false,
//   timer: 1500
// });
//              }
//              else{
//               alert("data not insurted");
//              }
           }
        });
     });
    });
  </script>
</body>
</html>