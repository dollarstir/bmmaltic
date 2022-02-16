<?php
require 'loader/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>BM Maltic Enterprise</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="vendors/hamburgers/hamburgers.min.css" rel="stylesheet">
    <link href="vendors/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="assets/css/theme.min.css" rel="stylesheet" />
    <link href="assets/css/user.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  </head>

  <body>
    <?php require 'nav.php'; ?>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
      <section class="py-0">
        <div class="swiper theme-slider header-classic" data-swiper='{"autoplay":true,"loop":true,"allowTouchMove":false,"effect":"fade","speed":800}'>
          <div class="swiper-wrapper">
          <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url('assets/img/s4.jpg');"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-11 col-lg-8 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" data-zanim-xs='{"delay":0}'>Mineral Water</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>The first sachet water producing company in both Eastern and the Volta region of Ghana West Africa</p>
                    </div>
                    <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="/bmm/services">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="/bmm/contactus">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url('assets/img/st.jpg');"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-11 col-lg-8 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" style="color:white;" data-zanim-xs='{"delay":0}'>Stone Quarrying</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" style="color:transparent;" data-zanim-xs='{"delay":0.1}'>Stone quarrying is a form of land use concerned with the extraction of non-fuel and non-metal minerals from rocks</p>
                    </div>
                    <div class="overflow-hidden">
                      <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="/bmm/services">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="/bmm/contactus">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide d-flex align-items-center d-sm-block" data-zanim-timeline="{}">
              <div class="bg-holder" style="background-image:url('assets/img/rb.jpg');"></div>
              <!--/.bg-holder-->
              <div class="container">
                <div class="row py-8 align-items-center" data-inertia='{"weight":1.5}'>
                  <div class="col-11 col-lg-8 px-5 px-sm-3">
                    <div class="overflow-hidden">
                      <h1 class="fs-4 fs-md-5 lh-1" style="color:white;" data-zanim-xs='{"delay":0}'>Plastic & Rubber Raw Materials</h1>
                    </div>
                    <div class="overflow-hidden">
                      <p class="text-primary pt-4 mb-5 fs-1 fs-md-2 lh-xs" data-zanim-xs='{"delay":0.1}'>Supply and delivery of all kinds of Rubber and plastic Raw materials to the needed manufacturing companies.</p>
                    </div>
                    <div class="overflow-hidden">
                    <div data-zanim-xs='{"delay":0.2}'><a class="btn btn-primary me-3 mt-3" href="/bmm/services">Read more<span class="fas fa-chevron-right ms-2"></span></a><a class="btn btn-warning mt-3" href="/bmm/contactus">Contact us<span class="fas fa-chevron-right ms-2"></span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="swiper-nav">
            <div class="swiper-button-prev"><span class="fas fa-chevron-left"></span></div>
            <div class="swiper-button-next"><span class="fas fa-chevron-right"></span></div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-white text-center">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-10 col-md-6">
              <h3 class="fs-2 fs-lg-3">Welcome to BM Maltic Enterprise</h3>
              <p class="px-lg-4 mt-3">We deals in .</p>
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row mt-4 mt-md-5">
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><img src="assets/img/s3.jpg" width="150px" height="100px" /></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Drinking Water</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>The first sachet water producing company in both Eastern and the Volta region of Ghana West Africa</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><img src="assets/img/rb.jpg" width="150px" height="100px" /></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Plastic & Rubber Raw Materials</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Supply and delivery of all kinds of Rubber and plastic Raw materials to the needed manufacturing companies in Ghana and nearby western Africa Countries in like Togo, Burkina Faso, Nigeria, Mali, Benin and Cote d’Ivoire etc.</p>
            </div>
            <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><img src="assets/img/st.jpg" width="150px" height="100px" /></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Stone Quarrying</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Stone quarrying is a form of land use concerned with the extraction of non-fuel and non-metal minerals from rocks</p>
            </div>
            <!-- <div class="col-sm-6 col-lg-3 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="ring-icon mx-auto" data-zanim-xs='{"delay":0}'><span class="fas fa-headset"></span></div>
              <h5 class="mt-4" data-zanim-xs='{"delay":0.1}'>Quality Services</h5>
              <p class="mb-0 mt-3 px-3" data-zanim-xs='{"delay":0.2}'>Experience unparalleled service, from beginning <br /> to final construction.</p>
            </div> -->
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-0">
        <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10 col-md-6">
              <h3 class="fs-2 fs-lg-3">COMPANY STRATEGY</h3>
              <!-- <p class="px-lg-4 mt-3">We deals in .</p> -->
              <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-users"></span>Purpose</h5>
              <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>To be a leader in dealing with all kinds of plastic Raw materials in western Africa and also providing enhanced services, relationship and profitability.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-comments"></span>Vision</h5>
              <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>To provide quality services raw materials that exceed the expectations of our esteemed customers.</p>
            </div>
            <div class="col-sm-6 col-lg-4 mt-3 mt-lg-0 px-4 px-sm-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <h5 data-zanim-xs='{"delay":0}'><span class="text-primary me-3 fas fa-bolt"></span>Mission</h5>
              <p class="mt-3 pe-3 pe-lg-5" data-zanim-xs='{"delay":0.1}'>statements: To build long term relationships with our customers and service by pursing business through innovation.</p>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
     
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary py-6 text-center text-md-start">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h4 class="text-white mb-0">If you have any query related investment... <br class="d-md-none" />we are available 24/7</h4>
            </div>
            <div class="col-md-auto mt-md-0 mt-4"><a class="btn btn-light rounded-pill" href="/bmm/contactus">Contact Us</a></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!-- <section class="text-center">
        <div class="container">
          <div class="text-center">
            <h3 class="fs-2 fs-md-3">Things You Get</h3>
            <hr class="short" data-zanim-xs='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}' data-zanim-trigger="scroll" />
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/sharing.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creative Support</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We transform brands, grow businesses, and tell brand and product stories in a most creative way.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/mail.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Creating Experiences</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We cover a large range of creative platforms and digital projects with one purpose: to create experiences.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/target.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Product Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We guide you through the pipelines that generate new products with higher potential and lower risk.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/world-globe.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Business Boosting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We provide energy-efficient and environmentally conservative solutions to our clients to boost their business.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/money.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Strategic Approach</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>Based on solid strategic framework and real, relevant research, we create prototypes, not presentations.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
              <div class="px-3 py-4 px-lg-4">
                <div class="overflow-hidden"><img src="assets/img/icons/data-analytics.png" alt="icon" height="37" data-zanim-xs='{"delay":0}' /></div>
                <div class="overflow-hidden">
                  <h5 class="mt-3" data-zanim-xs='{"delay":0.1}'>Logistic Consulting</h5>
                </div>
                <div class="overflow-hidden">
                  <p class="mb-0" data-zanim-xs='{"delay":0.2}'>We work buy side and sell side to give our clienrts hard hitting answers and focus hard on best opportunities.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-primary">
        <div class="container">
          <div class="row align-items-center text-white">
            <div class="col-lg-4">
              <div class="border border-2 border-warning p-4 py-lg-5 text-center rounded-3" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                <div class="overflow-hidden">
                  <h4 class="text-white" data-zanim-xs='{"delay":0}'>Request a call back</h4>
                </div>
                <div class="overflow-hidden">
                  <p class="px-lg-1 text-100 mb-0" data-zanim-xs='{"delay":0.1}'>Would you like to speak to one of our Customer care representatives over the phone? Just submit your details and we’ll be in touch shortly. You can also email us if you would prefer.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-8 ps-lg-5 mt-6 mt-lg-0">
              <h5 class="text-white">I would like to discuss:</h5>
              <form class="mt-4 request">
                <div class="row">
                  <div class="col-6"><input class="form-control" type="hidden" name="to" value="username@domain.extension" /><input class="form-control" type="text" placeholder="Your Name" aria-label="Your Name" name="name" /></div>
                  <div class="col-6"><input class="form-control" type="text" placeholder="Phone Number" aria-label="Phone Number" name="phone" /></div>
                  <div class="col-6 mt-4"><input class="form-control" type="text" placeholder="Subject" aria-label="Subject" name="subject" /></div>
                  <div class="col-6 mt-4"><button class="btn btn-warning w-100" type="submit">Submit</button></div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
     



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      



      <!-- ============================================-->
      <!-- <section> begin ============================-->
     

      <!-- <div class="bg-200 py-6">
        <div class="container">
          <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo2.png" alt="partnerco" data-zanim-xs="{}" /></div>
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo1.png" alt="tvc" data-zanim-xs="{}" /></div>
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo6.png" alt="arcade" data-zanim-xs="{}" /></div>
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo3.png" alt="bearbrand" data-zanim-xs="{}" /></div>
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo5.png" alt="fast brothers" data-zanim-xs="{}" /></div>
            <div class="col-4 col-md-2 my-3 overflow-hidden"><img class="img-fluid" src="assets/img/partner/logo4.png" alt="harculis beards" data-zanim-xs="{}" /></div>
          </div>
        </div>
      </div> -->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!--===============================================-->
    <!--    Footer-->
    <!--===============================================-->

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <?php require 'footer.php'; ?>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/bigpicture/BigPicture.js"> </script>
    <script src="vendors/countup/countUp.umd.js"> </script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/gsap/gsap.js"></script>
    <script src="vendors/gsap/customEase.js"></script>
    <script src="assets/js/theme.js"></script>

    <script src="vendors/jquery/jquery.js"></script>
    <script src="processor.js"></script>
  </body>

</html>