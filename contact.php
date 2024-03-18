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
                                <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Contact</h3>
                          </div>
                       </div>
                    </div>
              </div>
           </div>
     </div>
    <!-- bradcam_area end -->

    <!-- ================ contact section start ================= -->
     <section class="contact-section">
            <div class="container">
                <!-- <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: -25.363,
                                lng: 131.044
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#ccdee9'
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: -31.197,
                                    lng: 150.744
                                },
                                zoom: 9,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>
    
                </div> -->
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form method="post" id="data">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="text"  placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="button" value="send" id="sub" name="sub" class="button boxed-btn"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Buttonwood, California.</h3>
                                <p>Rosemead, CA 91770</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+1 253 565 2365</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>support@colorlib.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    
    <!-- brand_area_start  -->

    <!-- brand_area_end  -->
    <!-- footer_start  -->
    <?php include('./includes/footer.php'); ?>
    <script>
$(document).ready(function(){
$("#sub").on("click",function(f){
f.preventDefault();
// alert("run");
var d=new FormData(data);
// alert(d);
$.ajax({
url:"./ajaxfiles/contactin.php",
method:"post",
contentType:false,
processData:false,
data:d,
success:function(r){
    alert(r);
    if(r==1){
        alert("data inserted");
    }
    else{
        alert("data not inserted");
    }
}
});
});
});
    </script>
    </body>
    
    </html>