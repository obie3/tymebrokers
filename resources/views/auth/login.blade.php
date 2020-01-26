<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="app">
    <head>
        <meta charset="utf-8" />
        <title>{{ 'e-Thrift' }}</title>
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
                <a class="navbar-brand block" href="{{'/'}}">{{'e-Thrift'}}</a>
                <section class="m-b-lg">
                    <header class="wrapper text-center">
                        <strong>Sign in to get started</strong>
                    </header>
                    <form action="{{route('auth.login.post')}}" method="post">
                        {{csrf_field()}}
                        <div class="list-group ">
                            <div class="list-group-item {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <input type="email" name="email" placeholder="Email" class="form-control no-border">
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
                    <small>copyright<br>{{date('Y')}}</small>
                </p>
            </div>
        </footer>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/app.js"></script>
        <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="js/app.plugin.js"></script>
    </body>
</html>
