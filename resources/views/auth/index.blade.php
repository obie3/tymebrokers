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
    <div id="switcher">
        <span class="custom-close"></span>
        <span class="custom-show"></span>

        <a href="#" class="ot-btn btn-rounded btn-hightlight-color block-btn">Buy Now</a>

        <div class="clearfix"></div>

        <span class="sw-title">Layout Style</span>
        <select name="switcher" id="tm-layout-switch">
            <option value="wide" selected="selected">Wide</option>
            <option value="boxed">Boxed</option>
        </select>
        <div class="clearfix spacing-10"></div>

        <span class="sw-title">Boxed Background</span>
        <ul id="tm-boxed-bg">
            <li class="bg1" data-value="01"></li>
            <li class="bg2" data-value="02"></li>
            <li class="bg3" data-value="03"></li>
            <li class="bg4" data-value="04"></li>
            <li class="bg5" data-value="05"></li>
            <li class="bg6" data-value="06"></li>
            <li class="bg7" data-value="07"></li>
            <li class="bg8" data-value="08"></li>
            <li class="bg9" data-value="09"></li>
            <li class="bg10" data-value="10"></li>
            <li class="bg11" data-value="11"></li>
            <li class="bg12" data-value="12"></li>
            <li class="bg13" data-value="13"></li>
            <li class="bg14" data-value="14"></li>
            <li class="bg15" data-value="15"></li>
            <li class="bg16" data-value="16"></li>
            <li class="bg17" data-value="17"></li>
        </ul>
        <div class="clearfix spacing-10"></div>

        <span class="sw-title">Main Colors:</span>
        <ul id="tm-color">
            <li class="color11"></li>
            <li class="color2"></li>
            <li class="color3"></li>
            <li class="color5"></li>
            <li class="color8"></li>
            <li class="color9"></li>
        </ul>
    </div>  <!-- End Switch -->
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
                <a href="#" class="ot-btn btn-rounded btn-hightlight-color">Get A Quote</a>
              </div> <!-- End header mobile menu -->
              <ul>
                  <li>
                          <a href="index.html"><i class="icon-home"></i> Home</a>
                          <ul>
                               <li><a href="index.html">Home Page Verison 1</a></li>
                                <li><a href="home_2.html">Home Page Verison 2</a></li>
                                <li><a href="home_3.html">Home Page Verison 3</a></li>
                                <li><a href="home_4.html">Home Page Verison 4</a></li>
                                <li><a href="home_5.html">Home Page Verison 5</a></li>
<li><a href="home_6.html">Home Page Verison 6</a></li>
                          </ul>
                  </li>

                  <li><a href="servicesList.html">Services</a>
                      <ul>
                          <li><a href="servicesList.html">Services Style 1</a></li>
                          <li><a href="servicesList2.html">Services Style 2</a></li>
                          <li><a href="services-detail.html">Services Details</a></li>
                      </ul>
                  </li>
                  <li><a href="projectList.html">Projects</a>
                     <ul>
                        <li><a href="projectList.html">Project Grid</a></li>
                        <li><a href="projectsDetail.html">Project Details</a></li>
                    </ul>
                  </li>
                  <li><a href="blogList.html">News</a>
                       <ul>
                          <li><a href="blogList.html">Blog List</a></li>
                          <li><a href="blogDetail.html">Blog Detail</a></li>
                      </ul>
                  </li>
                  <li><a href="shop-catalog.html">Shop</a>
                        <ul>
                            <li><a href="shop-catalog.html">Online Store Catalog</a></li>
                            <li><a href="shop-cart.html">Online Store Shopping Cart</a></li>
                            <li><a href="shop-checkout.html">Online Store Checkout</a></li>
                            <li><a href="shop-single.html">Single Store Product</a></li>
                        </ul>
                  </li>
                  <li><a href="#">Pages</a>
                      <ul>
                          <li><a href="elements.html">Element</a></li>
                          <li><a href="typography.html">Typography</a></li>
                          <li><a href="testimonial.html">Testinmonials</a>
                          <li><a href="404.html">404 Page</a></li>
                          <li><a href="comingsoon.html">Coming Soon</a></li>
                      </ul>
                  </li>
                  <li><a href="about.html">About Us </a></li>
                  <li><a href="contact.html">Contact Us </a>
                      <ul>
                          <li><a href="contact.html">Contact Style 1</a></li>
                          <li><a href="contact2.html">Contact Style 2</a></li>
                          <li><a href="contact3.html">Contact Style 3</a></li>
                      </ul>
                  </li>
              </ul>
              <div class="footer-mobile-menu fmm-v1">
                  <ul class="social">
                      <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                      <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                      <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                      <li class="youtube"><a href=""><i class="fa fa-youtube-play"></i></a></li>
                      <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                  <ul class="address-footer-mobile">

                    <li><a href=""><span class="lnr lnr-map-marker"></span> 8th floor, 379 Hudson St, New York, NY 10018</a></li>
                    <li><a href="tel:18001236879 "><span class="lnr lnr-smartphone"></span> 1-800-123-6879 </a></li>
                    <li><a href="mailto:contact@finance.com"><span class="lnr lnr-envelope"></span> contact@finance.com</a></li>

                  </ul>
              </div><!-- End footer mobile menu -->
          </div>
        </div> <!-- /#rmm   -->
    </div><!-- End Mobile Menu -->
  <div id="page">
    <div class="top-bar top-bar-dark">
      <div class="container">
        <div class="left-top-bar left-top-bar-long">
              <p class="hidden-xs" ><span class="lnr lnr-map-marker large-lnr"></span> 8th floor, 379 Hudson St, New York, NY 10018</p>
               <p class="hidden-xs"><span class="lnr lnr-smartphone large-lnr"></span> 1-800-123-6879 </p>
                <p class="hidden-xs"><span class="lnr lnr-envelope large-lnr"></span> contact@finance.com</p>
                <div class="popover-container visible-xs">
                    <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="0112-826-2789" data-content="contact@site.com">
                        <span class="lnr lnr-phone-handset"></span>
                      </button>
                       <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="8th floor, 379 Hudson St" data-content="New York, NY 10018">
                        <span class="lnr lnr-map-marker"></span>
                      </button>
                      <button type="button" class="btn btn-popover popover-dark" data-container="body" data-toggle="popover" data-placement="bottom" title="07:30 am – 06:00 pm" data-content="Every Day">
                        <span class="lnr lnr lnr-clock"></span>
                      </button>
                </div>
        </div> <!-- End left top bar -->
        <div class="right-top-bar">
            <ul class="social">
                <li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href=""><i class="fa fa-google-plus"></i></a></li>
                <li class="youtube"><a href=""><i class="fa fa-youtube-play"></i></a></li>
                <li class="linkedin"><a href=""><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div><!-- End right top bar -->
      </div> <!-- End container -->
    </div> <!-- End top bar -->

    <header id="sticked-menu" class="header header-v5">
      <div class="container">
        <div class="logo">
            <div class="mm-toggle visible-xs visible-sm">
              <i class="fa-remove fa fa-bars"></i><span class="mm-label">Menu</span>
            </div>
            <a href="index.html"><img src="{{ URL::asset('homeassets/images/Header/logo.png')}}" class="img-responsive" alt="Image"></a>
        </div>
        <nav class="navi-desktop-site hidden-sm hidden-xs">
                 	<ul class="navi-level-1 uppercase">
                        <li class="has-sub"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                             <ul class="navi-level-2 ">
                                <li><a href="index.html">Home Page Verison 1</a></li>
                                <li><a href="home_2.html">Home Page Verison 2</a></li>
                                <li><a href="home_3.html">Home Page Verison 3</a></li>
                                <li><a href="home_4.html">Home Page Verison 4</a></li>
                                <li><a href="home_5.html">Home Page Verison 5</a></li>
<li><a href="home_6.html">Home Page Verison 6</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="servicesList.html">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="navi-level-2">
                                <li><a href="servicesList.html">Services Style 1</a></li>
                                <li><a href="servicesList2.html">Services Style 2</a></li>
                                <li><a href="services-detail.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="projectList.html">Projects  <i class="fa fa-angle-down"></i></a>
                               <ul class="navi-level-2">
                                    <li><a href="projectList.html">Project Grid</a></li>
                                    <li><a href="projectsDetail.html">Project Details</a></li>
                                </ul>
                        </li>
                        <li class="has-sub"><a href="blogList.html">News<i class="fa fa-angle-down"></i></a>
                             <ul class="navi-level-2">
                                <li><a href="blogList.html">Blog List</a></li>
                                <li><a href="blogDetail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li class="has-sub"><a href="shop-catalog.html">Shop<i class="fa fa-angle-down"></i></a>
                              <ul class="navi-level-2">
                                  <li><a href="shop-catalog.html">Online Store Catalog</a></li>
                                  <li><a href="shop-cart.html">Online Store Shopping Cart</a></li>
                                  <li><a href="shop-checkout.html">Online Store Checkout</a></li>
                                  <li><a href="shop-single.html">Single Store Product</a></li>
                              </ul>
                        </li>
                        <li class="has-sub"><a href="">Pages  <i class="fa fa-angle-down"></i></a>

                          <ul class="navi-level-2">
                              <li><a href="elements.html">Element</a></li>
                              <li><a href="typography.html">Typography</a></li>
                              <li><a href="testimonial.html">Testinmonials</a>
                              <li><a href="404.html">404 Page</a></li>
                              <li><a href="comingsoon.html">Coming Soon</a></li>
                          </ul>
                        </li>
                        <li><a href="about.html">About Us  </a></li>
                        <li class="has-sub"><a href="contact.html">Contact Us  <i class="fa fa-angle-down"></i></a>
                          <ul class="navi-level-2">
                              <li><a href="contact.html">Contact Style 1</a></li>
                              <li><a href="contact2.html">Contact Style 2</a></li>
                              <li><a href="contact3.html">Contact Style 3</a></li>
                          </ul>
                        </li>
                  	</ul>
        </nav>
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
                   <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div>
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
                     Comprehensive financial advice and financial services<br>
                     that are tailored to meet your individual needs
                  </div>
                  <!-- LAYER NR. 4 -->
                   <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div>
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
                   <div class="tp-caption sfb group-btn-slider"
                    data-x="55"
                    data-y="351"

                    data-speed="500"
                    data-start="1400"
                    data-easing="easeInOutCubic"
                    > <a href="servicesList.html" class="ot-btn large-btn btn-rounded btn-main-color btn-1">Our Services</a>
                    <a href="servicesList2.html" class="ot-btn large-btn btn-rounded btn-border-ghost btn-2">Get Free Call Back</a>
                  </div>
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
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center no-margin">

                   <div class="thumbnail">
                      <img src="{{ URL::asset('homeassets/images/Services/1.png')}}" alt="">
                     <div class="caption">
                       <h4>Finacial Planning</h4>
                       <p>
                        Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center no-margin">

                   <div class="thumbnail">
                       <img class="img-icon-thumbnail" src="{{ URL::asset('homeassets/images/Services/2.png')}}" alt="">
                     <div class="caption">
                       <h4>Investments Management</h4>
                       <p>
                        Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
              <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center no-margin">

                   <div class="thumbnail">
                       <img class="img-icon-thumbnail" src="{{ URL::asset('homeassets/images/Services/3.png')}}" alt="">
                     <div class="caption">
                       <h4>Taxes Planning</h4>
                       <p>
                        Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                       </p>

                     </div>
                   </div>

              </article><!-- End article -->
               <article class=" col-sm-6 col-md-3 thumbnail-style thumbnail-icon-item text-center no-margin">

                 <div class="thumbnail">
                     <img class="img-icon-thumbnail" src="{{ URL::asset('homeassets/images/Services/6.png')}}" alt="">
                   <div class="caption">
                     <h4>Retirement Managerment</h4>
                     <p>
                      Quisque pulvinar libero dolor, quis bibendum eros euismod sit amet. Proin dapibus id diam at
                     </p>

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
              <div class="col-md-12">
                <div class="counter-up counter-up-style-1 text-center">
                  <h2>We are help you to grow your business</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id lectus quis dui euismod consectetur. Pellentesque ac ante sollicitudin, tincidunt nulla in, bibendum massa. Phasellus bibendum, sem velue aliquam gravida, eros ex dapibus neque, eget fermentum dolor arcu a tortor. Integer placerat massa nec elit egestas efficitur. </p>
                  <ul>
                    <li>
                      <p><span class="couterup" id="yoe"></span></p>
                      <span class="label-counter">Years of experience</span>
                    </li>
                    <li>
                      <p><span class="couterup" id="hc"></span><span class="unit">K</span></p>
                      <span class="label-counter">Happy Customers</span>
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
     <!-- Component Accrodion -->
    <section class="our-process bg-dark no-padding">
         <div class="row">
            <div class="process-warp">
              <div class=" col-sm-6 col-md-6 col-lg-6 img-demo-our-process">
                <img src="{{ URL::asset('homeassets/images/Process/1.jpg')}}" class="img-responsive" alt="Image">
             </div>
             <div class=" col-sm-6 col-md-6 col-lg-6 accordion-process padding-top-70 padding-bottom-50">
                <div class="accordion-warp">
                  <h2 class="title text-white">Our Process</h2>
                  <div class="clearfix"></div>
                  <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">01. Define Objectives</a>
                          </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <div class="accordion-content">
                              <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  </p>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">02. Develop a Plan</a>
                          </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  </p>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">03. Implementation</a>
                          </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  </p>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          <h4 class="panel-title">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">04. Monitor Results</a>
                          </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                              <div class="accordion-content">
                              <p>Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat id. Vivamus interdum urna at sapien varius elementum. Suspendisse ut mi felis et interdum libero lacinia vel. Aenean elementum odio ut lorem cursus, eu auctor magna pellentesque.  </p>
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
    <section class="bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2 class="title">Testimonials</h2>
              <div class="customNavigation">
                <a class="btn prev-testimonials-3-columns"><i class="fa fa-angle-left"></i></a>
                <a class="btn next-testimonials-3-columns"><i class="fa fa-angle-right"></i></a>
              </div>
              <div id="owl-testimonials-3-columns" class="owl-carousel owl-theme owl-testimonials-3-columns clearfix">
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/1.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">Linda Campbell</h4>
                  <span class="job-testimonials-3-columns">CEO Finanace Theme Group</span>
              </div><!-- end item -->
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/2.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">John Walker</h4>
                  <span class="job-testimonials-3-columns">Photographer</span>
              </div><!-- end item -->
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/3.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">Cheryl Cruz</h4>
                  <span class="job-testimonials-3-columns">Marketing Manager</span>
              </div><!-- end item -->
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/4.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">James Smith</h4>
                  <span class="job-testimonials-3-columns">Senior Finance Manager</span>
              </div><!-- end item -->
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/5.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">Maria Garcia</h4>
                  <span class="job-testimonials-3-columns">Finance Director Theme Group</span>
              </div><!-- end item -->
              <div class="item item-testimonials-3-columns text-left">
                  <p class="quote-icon">“</p>
                  <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                  <div class="avatar-testimonials-3-columns">
                    <img src="{{ URL::asset('homeassets/images/Testimonials/6.jpg')}}" class="img-responsive" alt="Image">
                  </div>
                  <h4 class="name-testimonials-3-columns">Robert Johnson</h4>
                  <span class="job-testimonials-3-columns">Finance Assistant - PR Agency</span>
              </div><!-- end item -->
              </div>
          </div>
        </div><!-- End row -->
      </div><!-- End container -->
    </section><!-- End section -->

    <!-- Component Progress Bar -->
    <section class="no-padding">
        <div class="container">
          <div class="row">
              <div class="overflow-hidden">
                    <div class="col-md-6 col-lg-6 padding-top-70 padding-bottom-35">
                      <div class=" bar-chart-container ">
                        <h2 class="clearfix">Our Commitment</h2>
                        <p>
                          Who we are, how we work, our priorities and our values. Phasellus mauris arcu, facilisis vel velit vitae, tincidunt scelerisque mauris. Phasellus placerat elementum ornare. Cras scelerisque eu metus tincidunt euismod.
                        </p>
                        <div class="chart-2 chart-2-v">
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="80"></div>
                                </div>
                                <span class="label-v">PARTNERSHIP</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="90"></div>
                                </div>
                                <span class="label-v">OPPORTUNITY</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="85"></div>
                                </div>
                                <span class="label-v">SAVE TIME</span>
                            </div>
                            <div style="" class="chart-v-item">

                                <span class="percent-v update-v"></span>
                                <div class="progress  vertical bottom progress-v">
                                    <div class="progress-bar bar-chart" role="progressbar" data-transitiongoal="100"></div>
                                </div>
                                <span class="label-v">INCOME</span>
                            </div>


                        </div> <!-- End chart -->
                      </div> <!-- End chart container -->
                    </div> <!-- End col -->
                    <div class="col-sm-4 col-md-6 col-lg-6 hidden-xs thumbs-img-for-chart ">
                          <img src="{{ URL::asset('homeassets/images/Commitment/1.png')}}" class="img-responsive" alt="Image">
                    </div> <!-- End row -->
              </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Section Text 3 Column-->
    <section class="bg-grey">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">

                      <h2 class="title">We Makes It Easy</h2>
                      <div class="clearfix"></div>
                      <div class="row">
                        <div class="three-column-text clearfix">
                          <div class="col-md-4">
                            <div class="make-easy-item">
                               <h4>Whatever</h4>
                               <p>Maecenas et varius mauris, in viverra urna. Praesent eu lacinia lacus. Nam ac velit vitae justo congue dignissim dignissim vitae nulla. Donec quis leo lorem. Morbi bibendum vehicula nibh id sodales. Vivamus in vestibulum magna, ut lobortis neque. </p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Wherever</h4>
                              <p>In placerat sapien urna, quis faucibus metus lacinia commodo. Integer feugiat ullamcorper risus, sed efficitur velit dignissim at. Donec tincidunt elit a neque venenatis varius. Phasellus eget tempor est. Vivamus ut cursus ligula. </p>
                            </div>
                          </div><!-- end col -->
                          <div class="col-md-4">
                            <div class="make-easy-item">
                              <h4>Whenever</h4>
                              <p>Cras non odio tempus, euismod eros eget, venenatis ligula. Nullam augue sem, tincidunt sed elit ac, mollis eleifend justo. Aliquam non magna ac risus lacinia lacinia quis eu justo. Praesent a tempus ante. Etiam ac turpis finibus, aliquam augue quis, feugiat est.</p>
                            </div>
                          </div><!-- end col -->
                        </div> <!-- End 3 column text -->
                      </div><!-- End row -->
                  </div><!-- End col12 -->
              </div><!-- End row -->
            </div><!-- End Container -->
    </section><!-- End Section -->

    <!-- Component Get a Call Back-->
    <section class="bg-dark">
            <div class="container">
                 <div class="row">
                  <div class="get-call-back-contain">
                    <div class="col-md-6 get-call-back-left">
                      <div class="call-back-text">
                        <h2 class="text-white">Get a Call Back</h2>
                        <div class="clearfix"></div>
                        <p class="text-grey">If you need to speak to us about a general query fill in<br> the form below and we will call you back within the<br> same working day.</p>
                      </div><!-- End call back text left -->
                    </div>
                    <div class="col-md-6 get-call-back-right">
                      <div class="call-back-form">
                        <form action="GET" method="POST">
                          <p>How can we help? *</p>

                          <select class="form-control custom-form custom-select">
                            <option selected="selected">Discussions with Financial Experts</option>
                            <option>Meet Finance Assistant - PR Agency </option>
                            <option>Discussions with Senior Finance Manager</option>
                            <option>Designer</option>
                            <option>Our CEO Finanace Theme Group</option>
                          </select>
                          <div class="row">
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" id="name" placeholder="Your Name: *">
                            </div>
                            <div class="form-group col-md-6 custom-form">
                              <input type="text" class="form-control" id="phone" placeholder="Phone Number: *">
                            </div>
                          </div>


                          <button type="submit" class="ot-btn large-btn btn-rounded btn-main-color btn-submit">Submit</button>
                        </form>
                      </div><!-- End call back form -->
                    </div>
                  </div>
                </div><!-- End row -->
            </div><!-- End container -->
    </section><!-- End Section -->

     <!-- Component Our Experts Owl -->
    <section>
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h2 class="title">Our Experts</h2>
                      <div class="customNavigation">
                        <a class="btn prev-experts"><i class="fa fa-angle-left"></i></a>
                        <a class="btn next-experts"><i class="fa fa-angle-right"></i></a>
                      </div><!-- End owl custom button -->
                      <div id="owl-experts" class="owl-carousel owl-theme owl-experts clearfix">
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/1.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                               <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                          </div> <!-- end expert img container -->


                          <div class="clearfix"></div>
                          <h4 class="">Peter Hart</h4>
                          <p class="job-experts">Chartered Financial Advisor</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/2.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Betty Lane</h4>
                          <p class="job-experts">Chartered Financial Advisor</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/3.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Richard Pierce</h4>
                          <p class="job-experts">Certified Public Accountant</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/4.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Janice Rose</h4>
                          <p class="job-experts">Registered Tax Preparer</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="images/Experts/5.jpg" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Peter Hart</h4>
                          <p class="job-experts">Chartered Financial Advisor</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/6.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Betty Lane</h4>
                          <p class="job-experts">Chartered Financial Advisor</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/7.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Richard Pierce</h4>
                          <p class="job-experts">Certified Public Accountant</p>
                        </div><!-- end item -->
                        <div class="item item-experts text-center">
                          <div class="expert-img-container">
                              <a href="https://www.linkedin.com/" class="in-experts">
                                  <i class="fa fa-linkedin"></i>
                              </a>
                              <div class="avatar">
                                <img src="{{ URL::asset('homeassets/images/Experts/8.jpg')}}" class="img-responsive" alt="Image">
                              </div>
                          </div> <!-- end expert img container -->
                          <div class="clearfix"></div>
                          <h4 class="">Janice Rose</h4>
                          <p class="job-experts">Registered Tax Preparer</p>
                        </div><!-- end item -->
                      </div> <!-- End owl container -->
                  </div> <!-- End col -->
              </div><!-- End row -->
          </div>
    </section><!-- End container -->

    <!-- Component Lastest News -->
    <section class="bg-grey">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h2 class="title ">Latest From News</h2><span class="seperator"></span>
                <a href="blogList.html" class="more-all">More All</a>
                <div class="row clearfix">
                <article class=" col-sm-6 col-md-6 item-lastest-news">
                  <a href="blogDetail.html" class="img-news-container">
                    <img src="{{ URL::asset('homeassets/images/Blog/b1.jpg')}}" class="img-responsive" alt="Image">
                  </a>
                  <div class="news-text-container">
                    <a href="blogDetail.html"><h3 class="title-news">The best experience from the experts</h3></a>
                    <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. </p>
                    <div class="latest-news-data">
                        <span class="tags"><a href="blogDetail.html">Financial</a>, <a href="blogDetail.html"> Maketing</a></span>
                        <span class="dates">March 22,2016</span>
                    </div>
                  </div>
                </article>
                <article class=" col-sm-6 col-md-6 item-lastest-news">
                  <a href="blogDetail.html" class="img-news-container">
                    <img src="{{ URL::asset('homeassets/images/Blog/b2.jpg')}}" class="img-responsive" alt="Image">
                  </a>
                  <div class="news-text-container">
                    <a href="blogDetail.html"><h3 class="title-news">Plans for growing businesses</h3></a>
                    <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. </p>
                    <div class="latest-news-data">
                        <span class="tags"><a href="blogDetail.html">Financial</a>, <a href="blogDetail.html"> Maketing</a></span>
                        <span class="dates">March 22,2016</span>
                    </div>
                  </div>
                </article>
                <article class=" col-sm-6 col-md-6 item-lastest-news no-margin">
                  <a href="blogDetail.html" class="img-news-container">
                    <img src="{{ URL::asset('homeassets/images/Blog/b3.jpg')}}" class="img-responsive" alt="Image">
                  </a>
                  <div class="news-text-container">
                    <a href="blogDetail.html"><h3 class="title-news">Help you planning for your retirement</h3></a>
                    <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. </p>
                    <div class="latest-news-data">
                        <span class="tags"><a href="blogDetail.html">Retirement</a></span>
                        <span class="dates">March 18,2016</span>
                    </div>
                  </div>
                </article>
                <article class=" col-sm-6 col-md-6 item-lastest-news no-margin">
                  <a href="blogDetail.html" class="img-news-container">
                    <img src="{{ URL::asset('homeassets/images/Blog/b4.jpg')}}" class="img-responsive" alt="Image">
                  </a>
                  <div class="news-text-container">
                    <a href="blogDetail.html"><h3 class="title-news">Solution financial for good startup</h3></a>
                    <p>Morbi vehicula a nibh in commodo. Aliquam quis dolor eget lectus pulvinar malesuada. </p>
                    <div class="latest-news-data">
                        <span class="tags"><a href="blogDetail.html">Financial</a></span>
                        <span class="dates">March 12,2016</span>
                    </div>
                  </div>
                </article>
                </div>
            </div><!-- End col -->

        </div> <!-- End Row -->
      </div>
    </section><!-- End section -->

    <!-- Component Our Partners Owl -->
    <section>
          <div class="container">
             <div class="row">
               <div class=" col-sm-12 col-md-12 col-lg-12">
                  <h2 class="title">Our Partners</h2>
              <div class="customNavigation">
                <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
              </div><!-- End owl button -->

              <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/1.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/2.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/3.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/4.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/5.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/1.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/2.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/3.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/4.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
                 <div class="item">
                    <a href="#">
                      <img src="{{ URL::asset('homeassets/images/Partner/5.jpg')}}" class="img-responsive" alt="Image">
                    </a>
                </div>
               </div>

              </div><!-- End row partners -->
             </div><!-- End Row -->
          </div>
    </section><!-- End Section -->

    <!-- Footer -->
    <footer class=" bg-dark footer">
            <div class="container">
              <div class="row">
                <div class="footer-row">

                    <div class="footer-col-1">
                        <a href="index.html"><img src="{{ URL::asset('homeassets/images/Footer/logo-footer.png')}}" class="img-responsive" alt="Image"></a>
                        <ul class="clearfix">
                          <li><a href="services-detail.html">Finacial Planning</a></li>
                          <li><a href="services-detail.html">Insurance Consulting</a></li>
                          <li><a href="services-detail.html">Investments Management</a></li>
                          <li><a href="services-detail.html">Retirement Strategies</a></li>
                          <li><a href="services-detail.html">Taxes Planning</a></li>
                          <li><a href="services-detail.html">Business Loan</a></li>
                        </ul>
                      </div>


                    <div class="footer-col-2">
                      <h3 class="text-white">Contact us</h3>
                      <div class="border-2-side">
                        <p>Address: 8th floor, 379 Hudson St, New York, NY 10018</p>
                        <p><span >Phone: (+1) 96 716 6879</span></p>
                        <p><span >Email: contact@site.com</span></p>
                      </div>
                    </div>


                    <div class="footer-col-3">
                          <h3 class="text-white">Follow us</h3>
                          <ul class="social social-footer">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          </ul>
                    </div>

                </div> <!-- End footer row -->
                <div class="col-md-12 footer-link">
                  <p>Copyright © 2016 Designed by AuThemes. All rights reserved.</p>
                  <ul>
                    <li><a href="about.html">About </a></li>
                    <li><a href="contact.html">Contact Us </a></li>
                    <li><a href="#">Term & Conditions</a></li>
                    <li><a href="#">Privacy Policy </a></li>
                    <li><a href="#">Sites Map</a></li>
                  </ul>
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
