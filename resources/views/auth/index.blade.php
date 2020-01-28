<!DOCTYPE html>
<html lang="en">
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
</html>
