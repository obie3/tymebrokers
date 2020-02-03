<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">
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
=======
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="app">
    <head>
        <meta charset="utf-8" />
        <title>{{ 'Tymebrokers' }}</title>
        <meta name="description" content="e-Thrift Services" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href=" {{ url('/favicon.ico') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/animate.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/icon.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/font.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css" />
        @toastr_css
        <script>
            var base_url = '{{ url('/') }}';
        </script>
    </head>
    <body class="" >
        <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
            <div class="container aside-xl">
                <a class="navbar-brand block" href="{{'/'}}">{{'Tymebrokers.com'}}</a>
                <section class="m-b-lg">
                    <header class="wrapper text-center">
                        <strong>Sign in to get started</strong>
                    </header>
                    <form action="{{route('auth.login.post')}}" method="post">
                        {{csrf_field()}}
                        <div class="list-group ">
                            <div class="list-group-item {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <input type="email" name="email" placeholder="Email" value="{{old('email')}}" class="form-control no-border">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="list-group-item {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                <input type="password" name="password" placeholder="Password" class="form-control no-border">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                    </form>
                </section>
            </div>
        </section>
        <footer id="footer">
            <div class="text-center padder">
                <p>
                    <small>copyright {{date('Y')}}</small>
                </p>
            </div>
        </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/app.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="js/app.plugin.js"></script>
        @jquery
        @toastr_css
        @toastr_js
        @toastr_render
    </body>
>>>>>>> f243db703019ed331394c3fcd91a3c1bcf33305b

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
</html>
