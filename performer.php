<!doctype html>
<html class="no-js" lang="zxx">

<?php include('./includes/header.php'); ?>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

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
                                <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                          </div>
                       </div>
                    </div>
              </div>
           </div>
     </div>
    <!-- bradcam_area end -->

    <!-- performar_area_start  -->
    <div class="performar_area black_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-80">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Performer</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                                <div data-tilt class="thumb">
                                    <img src="img/performer/1.png" alt="">
                                </div>
                                <div class="performer_heading">
                                    <h4>Mr. Zosoldos</h4>
                                    <span>Acoustic drum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <div data-tilt class="thumb">
                                    <img src="img/performer/2.png" alt="">
                                </div>
                                <div class="performer_heading">
                                    <h4>Protik Hasan</h4>
                                    <span>Acoustic drum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div  class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                <div  data-tilt class="thumb">
                                    <img src="img/performer/3.png" alt="">
                                </div>
                                <div class="performer_heading">
                                    <h4>Salmon Vicky</h4>
                                    <span>Acoustic drum</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div   class="single_performer wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                                <div data-tilt class="thumb">
                                    <img src="img/performer/4.png" alt="">
                                </div>
                                <div class="performer_heading">
                                    <h4>Filaris Habol</h4>
                                    <span>Acoustic drum</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- performar_area_end  -->


    <!-- map_area_start  -->
    <div class="map_area">
        <div id="map" style="height: 600px; position: relative; overflow: hidden;">
        
        </div>
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
        <div class="location_information black_bg wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
            <h3>Concert 2020</h3>
            <div class="info_wrap">
                <div class="single_info">
                    <span>Vanue:</span>
                    <p>26/A, Coontum Avenu
                        New York-2783</p>
                </div>
                <div class="single_info">
                    <span>Phone:</span>
                    <p>+10 (88) 267 368 283</p>
                </div>
                <div class="single_info">
                    <span>Email:</span>
                    <p>contact@concert20.com</p>
                </div>
            </div>
        </div>
    </div>
    <!-- map_area_end  -->

    <!-- brand_area_start  -->
    <div class="brand_area black_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                        <h4 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Sponsor Logos</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand_wrap">
                        <div class="brand_active owl-carousel">
                            <div class="single_brand text-center">
                                <img src="img/brand/1.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/2.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/3.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/4.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/5.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/1.png" alt="">
                            </div>
                            <div class="single_brand text-center">
                                <img src="img/brand/2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand_area_end  -->
    <!-- footer_start  -->
    <?php include('./includes/footer.php'); ?>
</body>

</html>