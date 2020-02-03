<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Tymebrokers.com</title>
  <!--favicon-->
  <link rel="icon" href="{{ URL::asset('assets/images/favicon.ico')}}" type="image/x-icon">
  <link href="{{ URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
  <link href="{{ URL::asset('assets/css/animate.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ URL::asset('assets/css/app-style.css')}}" rel="stylesheet"/>
  @toastr_css

</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-signin2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h4 class="text-white">Welcome</h4>
                 <h2 class="text-white">Tymebrokers.com</h2>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
             </div>
	    	</div>

	    	<div class="card mb-0 ">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="{{ URL::asset('assets/images/logo-icon.png')}}" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign In</div>
					   <form Method="POST" action="{{route('auth.login.post')}}">
                       {{csrf_field()}}
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							   <label for="exampleInputUsername" class="sr-only">Username</label>
								 <input type="text" id="username" name="email" class="form-control" placeholder="Username">
								 <div class="form-control-position">
									<i class="icon-user"></i>
								</div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="password" name="password" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-material-success">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
						</div>
						<button type="submit" class="btn btn-success btn-block waves-effect waves-light">Sign In</button>
						 <div class="text-center pt-3">
						<hr>
						</div>
					</form>
				 </div>
				</div>
	    	</div>
	     </div>
	    </div>

     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->



	</div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="{{ URL::asset('assets/js/jquery.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/popper.min.js')}}"></script>
  <script src="{{ URL::asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- sidebar-menu js -->
  <script src="{{ URL::asset('assets/js/sidebar-menu.js')}}"></script>

  <!-- Custom scripts -->
  <script src="{{ URL::asset('assets/js/app-script.js')}}"></script>
     @jquery
    @toastr_css
    @toastr_js
</body>
=======
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tymebrokers.com</title>
    <link href="{{url('/index/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('/index/css/main.css')}}" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="{{url('/index/css/flexslider.css')}}"
      type="text/css"
      media="screen"
    />
    <link
      rel="stylesheet"
      href="{{url('/index/css/font-awesome.css')}}"
      type="text/css"
      media="screen"
    />
    <link
      href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic"
      rel="stylesheet"
      type="text/css"
    />
  </head>
  <body>
    <section class="banner">
      <div
        id="bannerSlider"
        class="carousel carousel-fade slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div
            class="item active"
            style="background-image:url({{url('/index/images/header/banner1.jpg')}});"
          >
            <div class="carousel-caption">
              <div class="container">
                <div class="col-md-12">
                  <div class="content">
                    <h3>welcome to</h3>
                    <h1>Tymebrokers.com</h1>
                    <div class="btn-orange">
                      <a href="{{route('auth.login.page')}}">LOGIN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="item"
            style="background-image:url({{ url('/index/images/header/banner2.jpg')}});"
          >
            <div class="carousel-caption">
              <div class="container">
                <div class="col-md-12">
                  <div class="content">
                    <h1>Save with Ease</h1>
                    <h3>One time account top up</h3>
                    <div class="btn-orange">
                      <a href="{{route('auth.login.page')}}">LOGIN</a>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="item"
            style="background-image:url({{ url('/index/images/header/banner3.jpg')}});"
          >
            <div class="carousel-caption">
              <div class="container">
                <div class="col-md-12">
                  <div class="content">
                    <h1>Simple & Easy</h1>
                    <h3>Funds transfer at your finger tip</h3>
                    <div class="btn-orange">
                      <a href="{{route('auth.login.page')}}">LOGIN</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#bannerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#bannerSlider" data-slide-to="1"></li>
          <li data-target="#bannerSlider" data-slide-to="2"></li>
        </ol>
      </div>
      <!-- /.carousel -->
    </section>
    <section id="footer">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer">
        <!-- <div class="social-icons text-center">
          <ul>
            <li>
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
          </ul>
        </div> -->
        <div class="copyright">
          Copyright © {{date('Y')}} Tymebrokers.com All rights reserved.
        </div>
      </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="{{ url('/index/js/custom.js')}}"></script>
    <script src="{{ url('/index/js/bootstrap.js')}}"></script>
    <script src="{{ url('/index/js/jquery.easing.1.3.js')}}"></script>
    <script defer src="{{ url('/index/js/jquery.flexslider-min.js')}}"></script>
  </body>
>>>>>>> f243db703019ed331394c3fcd91a3c1bcf33305b
</html>
