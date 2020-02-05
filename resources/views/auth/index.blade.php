<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>Tymebrokers.com</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Font
  ================================================== -->

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{ URL::asset('homeassets/css/font-awesome.min.css')}}">
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="{{ URL::asset('homeassets/css/bootstrap.min.css')}}"/>
  <!-- SELECTBOX
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('homeassets/css/fancySelect.css')}}" media="screen" />
  <!-- SLIDER REVOLUTION 4.x SCRIPTS
  ================================================== -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('homeassets/css/extralayers.css')}}" media="screen" />
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('homeassets/rs-plugin/css/settings.css')}}" media="screen" />
  <!-- OWL CAROUSEL
  ================================================== -->
  <link rel="stylesheet" href="{{ URL::asset('homeassets/css/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('homeassets/css/owl.theme.default.css')}}">
   <!-- Progress Bar
  ================================================== -->
  <link rel="stylesheet" href="{{ URL::asset('homeassets/css/bootstrap-progressbar-3.3.4.min.css')}}">
  <!-- SCROLL BAR MOBILE MENU
  ================================================== -->
  <link rel="stylesheet" href="{{ URL::asset('homeassets/css/jquery.mCustomScrollbar.css')}}" />
  <!-- MAIN STYLE
  ================================================== -->
  <link rel="stylesheet" href="{{ URL::asset('homeassets/style.css')}}"/>
  <!-- color scheme -->
  <link rel="stylesheet" href="{{ URL::asset('homeassets/switcher/demo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('homeassets/switcher/colors/')}}" type="text/css" id="colors">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.png">

</head>
<body>

    <div id=jSplash>
      <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>
    </div>
    <div id="overlay"></div>
    <!-- Overlay Mobile Menu Click -->
    <div class="mobile-menu-first">
        <div id="mobile-menu-right" class="mobile-menu-dark">
          <div class="mCustomScrollbar light" data-mcs-theme="minimal-dark">
               <div class="header-mobile-menu hmm-v1">
                  <a class="has-icon" href="tel:01128262789"><span class="lnr lnr-phone-handset icon-set-1 icon-xs"></span> <span class="sub-text-icon text-middle">0112-826-2789</span></a>
                  <a class="has-icon"><span class="lnr lnr-map-marker icon-set-1 icon-xs"></span> <span class="sub-text-icon text-middle">info@tymebrokers.com</span></a>

                <a href="{{route('auth.login.page')}}" class="ot-btn btn-rounded btn-hightlight-color">Login</a>
              </div> <!-- End header mobile menu -->

              </div><!-- End footer mobile menu -->
          </div>
        </div> <!-- /#rmm   -->
    </div><!-- End Mobile Menu -->
  <div id="page">
    <div class="top-bar top-bar-dark">
      <div class="container">
        <div class="left-top-bar left-top-bar-long">
              <p class="hidden-xs" ><span class="lnr lnr-map-marke large-lnr"></span>Let's help you with your financials</p>

        </div> <!-- End left top bar -->

      </div> <!-- End container -->
    </div> <!-- End top bar -->

    <header id="sticked-menu" class="header header-v5">
      <div class="container">
        <div class="logo">
            <div class="mm-toggle visible-xs visible-sm">
              <i class="fa-remove fa fa-bars"></i><span class="mm-label">Menu</span>
            </div>
            <a href="{{route('home')}}"><img src="{{ URL::asset('homeassets/images/Header/tymelogo.png')}}" class="img-responsive" alt="Image"></a>
        </div>
        <div class="navi-right navi-right-v1">
                            <ul>
                                  <li class="hidden-sm">
                                      <span class="has-icon">
                                          <span class="lnr lnr-phone-handset "></span>
                                          <span class="sub-text-icon text-top">
                                              <strong>0112-826-2789</strong>
                                              <!-- call us -->
                                          </span>
                                      </span>
                                  </li>
                                 <li class="hidden-sm">
                                      <span class="has-icon">
                                          <span class="lnr lnr-map-marker "></span>
                                          <span class="sub-text-icon text-top">
                                        <strong>info@tymebrokers.com</strong>
                                            <!-- send us a mail -->
                                     </span>
                                      </span>
                                  </li>
                                   <!-- <li class="hidden-sm">
                                      <span class="has-icon">
                                          <span class="lnr lnr-clock icon-set-1 icon-xs "></span>
                                          <span class="sub-text-icon text-top">
                                        <strong>07:30 am – 06:00 pm</strong>
                                        Every Day
                                     </span>
                                      </span>
                                  </li> -->
                                  <li>
                                      <a href="{{route('auth.login.page')}}" class="ot-btn btn-rounded small-btn btn-hightlight-color">Login</a>
                                  </li>
                            </ul>
                          </div> <!-- End Navi right -->
        <!-- <nav class="navi-desktop-site hidden-sm hidden-xs">
            <ul class="navi-level-1 uppercase">
            <li><a href="{{route('home')}}">Home</a></li>
            <ul>
        </nav> -->
      </div> <!-- End container -->
    </header><!-- END HEADER -->

    <div class="slider clearfix">
         <div class="fullwidthbanner-container">
          <div id="revolution-slider-home-3" class="slider-home-5">
            <ul>
              <!-- SLIDE  -->
              <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                  <!-- MAIN IMAGE -->
                  <img src="{{ URL::asset('homeassets/images/Slider/5.jpg')}}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption sfb h1-text text-white text-cap"
                    data-x="55"
                    data-y="178"
                    data-speed="500"
                    data-start="800"
                    data-easing="easeInOutCubic"

                    >Finance Consulting
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sfb h3-text text-white text-light"
                    data-x="55"
                    data-y="236"

                    data-speed="500"
                    data-start="1000"
                    data-easing="easeInOutCubic"
                   style="max-width: 565px">
                     Comprehensive financial advice and financial services<br>
                     that are tailored to meet your individual needs
                  </div>
                  <!-- LAYER NR. 4 -->
                   <!-- <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div> -->
              </li>
               <!-- SLIDE  -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                  <!-- MAIN IMAGE -->
                  <img src="{{ URL::asset('homeassets/images/Slider/7.jpg')}}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption sfb h1-text text-white text-cap"
                    data-x="55"
                    data-y="178"
                    data-speed="500"
                    data-start="800"
                    data-easing="easeInOutCubic"

                    >We are Experienced Experts
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sfb h3-text text-white text-light"
                    data-x="55"
                    data-y="236"

                    data-speed="500"
                    data-start="1000"
                    data-easing="easeInOutCubic"
                   style="max-width: 565px">
                   Whether it's the research and evaluation done by our financial specialists,
                    the people behind our technology make all the difference.
                  </div>
                  <!-- LAYER NR. 4 -->
                   <!-- <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div> -->
              </li>
              <!-- SLIDE  -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                  <!-- MAIN IMAGE -->
                  <img src="{{ URL::asset('homeassets/images/Slider/14.jpg')}}"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center" data-bgrepeat="no-repeat">

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption sfb h1-text text-white text-cap"
                    data-x="55"
                    data-y="178"
                    data-speed="500"
                    data-start="800"
                    data-easing="easeInOutCubic"

                    >Investment outlook
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption sfb h3-text text-white text-light"
                    data-x="55"
                    data-y="236"

                    data-speed="500"
                    data-start="1000"
                    data-easing="easeInOutCubic"
                   style="max-width: 565px">
                     Comprehensive financial advice and financial services<br>
                     that are tailored to meet your individual needs
                  </div>
                  <!-- LAYER NR. 4 -->
                   <!-- <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div> -->
              </li>
            </ul>
          </div>
        </div>
    </div><!-- Revoslider End -->

     <!-- Component Thumbnail Left Icon SVG -->
    <div class="padding-top-70 padding-bottom-70">
      <div class="container">
          <div class="row clearfix">
            <div class="col-md-12">
              <article class=" col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-center no-margin">

                   <div class="thumbnail">
                      <img src="{{ URL::asset('homeassets/images/Services/1.png')}}" alt="">
                     <div class="caption">
                       <h4>Finacial Planning</h4>
                       <p>
                       We’ll advise you how to allocate your capital across stocks and bonds
                                  as well as how much to invest each month and year.                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
              <article class=" col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-center no-margin">

                   <div class="thumbnail">
                       <img class="img-icon-thumbnail" src="{{ URL::asset('homeassets/images/Services/2.png')}}" alt="">
                     <div class="caption">
                       <h4>Investments Management</h4>
                       <p>
                       We can help you establish a robust financial foundation while providing the ongoing advice you need to preserve and enhance your wealth.                       </p>

                     </div>
                   </div>

              </article><!-- End article -->


               <article class=" col-sm-6 col-md-4 thumbnail-style thumbnail-icon-item text-center no-margin">

                 <div class="thumbnail">
                     <img class="img-icon-thumbnail" src="{{ URL::asset('homeassets/images/Services/6.png')}}" alt="">
                   <div class="caption">
                     <h4>Retirement Managerment</h4>
                     <p>
                     Our investment approach for retirement is based on extensive research and backtested to provide a tailored experience.
                   </div>
                 </div>

            </article><!-- End article -->

            </div>
          </div><!-- End Row -->
      </div><!-- End container -->
    </div> <!-- End section -->

    <!-- Component Courter Up -->
    <section class="bg-grey">
            <div class="container">
               <div class="row">
                  <div class="counter-up counter-up-style-1 text-center">

                      <!-- <h2 class="title">Tymebrokers</h2> -->
                      <div class="clearfix"></div>
                      <div class="row">
                        <div class="three-column-text clearfix">
                          <div class="col-md-12">
                            <div class="make-easy-item">
                               <h2>Tymebrokers</h2>
                               <p> It's all
                                    coming together.
                                    tymebrokers makes managing your personal finances a cinch. Be the master
                                    of your money so you can get more out of life.
                                </p>
                            </div>
                          </div><!-- end col -->

                        </div> <!-- End 3 column text -->
                      </div><!-- End row -->
                  </div><!-- End col12 -->
              </div><!-- End row -->
            </div><!-- End Container -->
    </section><!-- End Section -->

     <!-- Component Accrodion -->
    <section class="our-process bg-dark no-padding">
         <div class="row">
            <div class="process-warp">
              <div class=" col-sm-6 col-md-6 col-lg-6 img-demo-our-process">
                <img src="{{ URL::asset('homeassets/images/Process/1.jpg')}}" class="img-responsive" alt="Image">
             </div>
             <div class=" col-sm-6 col-md-6 col-lg-6 accordion-process padding-top-70 padding-bottom-50">
                <div class="accordion-warp">
                  <h2 class="title text-white">FAQs</h2>
                  <div class="clearfix"></div>
                  <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How do I become a member</a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <div class="accordion-content">
                              <p>Registration and onboarding process is performed by agents of the platform after which you be issue login credentials
                            </p>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">what is the minumum deposit/balance</a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <p>There is no minimum investment at tymebrokers, and no minimum balance.
                                    One reason we have no minimum balance is to ensure that every investor can get started building wealth with both long-term and short-term goals.</p>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">How long does it take to transfer funds</a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <p>Electronic deposits/transfers are executed withing 48hrs of the transaction </p>
                            </div>
                          </div>
                      </div>
                  </div>

                  </div> <!-- End panel group -->
                </div>

             </div> <!-- End Col -->
            </div>
         </div> <!-- End Row -->
    </section> <!-- End container -->
    <!-- Testimonial 3 column -->

    <!-- Section Text 3 Column-->
    <section class="bg-grey">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="counter-up counter-up-style-1 text-center">
                  <h2>We can help you grow your business</h2>
                  <p>No global movement springs from individuals.
                      It takes an entire team united behind something big.
                      Together, we work hard on creating the best investment platform.
                 </p>
                  <ul>
                    <li>
                      <p><span class="couterup" id="yoe"></span></p>
                      <span class="label-counter">Amazing Staff</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="hc"></span><span class="unit">+</span></p>
                      <span class="label-counter"> Over Happy Customers</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="satis"></span><span class="unit">%</span></p>
                      <span class="label-counter">Satisfaction</span>
                    </li>
                  </ul>
                </div><!-- End counter up -->
              </div> <!-- End cold -->
            </div><!-- End row -->
          </div><!-- End container -->
    </section><!-- End Section -->
    <!-- Component Get a Call Back-->

    <!-- Footer -->
    <footer class=" bg-dark footer">
            <div class="container">
              <div class="row">

                <div class="col-md-12 footer-link">
                  <p>Copyright © {{date('Y')}} Tymebrokers.com. All rights reserved.</p>
                </div>
              </div><!-- End Row -->

            </div><!-- End container -->
    </footer><!-- End  -->
  </div> <!-- End Page -->
    <a id="to-the-top" style="display: block;"><i class="fa fa-angle-up"></i></a> <!-- Back To Top -->
     <!-- SCRIPT
    ================================================== -->
    <script src="{{ URL::asset('homeassets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/jpreLoader.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/jquery.waypoints.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/easing.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/fancySelect.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/custom.js')}}"></script>
    <!-- Switcher
    ================================================== -->
    <script src="{{ URL::asset('homeassets/switcher/demo.js')}}"></script>
    <!-- Mobile Menu
    ================================================== -->
     <script src="{{ URL::asset('homeassets/js/plugins/jquery.mobile-menu.js')}}"></script>
     <script src="{{ URL::asset('homeassets/js/plugins/sticky.min.js')}}"></script>
    <!-- Revo Lib
    ================================================== -->
    <script type="text/javascript" src="{{ URL::asset('homeassets/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('homeassets/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Custom Revoslider -->
    <script src="{{ URL::asset('homeassets/js/plugins/revoslider-custom.js')}}"></script>
    <!-- Counter Up
    ================================================== -->
    <script src="{{ URL::asset('homeassets/js/plugins/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/custom-counterup.js')}}"></script>
    <!-- Initializing the isotope
    ================================================== -->
    <script src="{{ URL::asset('homeassets/js/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/custom-isotope.js')}}"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="{{ URL::asset('homeassets/js/plugins/owl.carousel.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/custom-owl.js')}}"></script>
    <!-- Progress Bar Chart
    ================================================== -->
    <script src="{{ URL::asset('homeassets/js/plugins/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{ URL::asset('homeassets/js/plugins/custom-progressbar.js')}}"></script>
</body>
</html>
