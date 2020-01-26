<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="app">
    <head>
        <meta charset="utf-8" />
        <title>{{ 'Tymebrokers' }}</title>
        <meta name="description" content="Tymebrokers Services" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href=" {{ url('/favicon.ico') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/animate.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/icon.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/font.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ url('/css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" type="text/css"/>
        @toastr_css
        <script>
            var base_url = '{{ url('/') }}';
        </script>
        <style>
            .dataTables_length {
                padding: 10px;
            }
            .dataTables_filter {
                padding: 10px;
            }
        </style>
    </head>
    <body class="" >
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="/" class="navbar-brand">
                    <img src="{{ url('/images/logo.png') }}" class="m-r-sm" alt="scale">
                    <span class="hidden-nav-xs">Tymebrokers</span>
                </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                    <i class="fa fa-cog"></i>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="thumb-sm avatar pull-left">
                    <!-- <img src="" alt="No Image"> -->
                    </span>
                    <b>{{ Sentinel::getUser()->surname }}</b> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <li>
                    <a href="{{route('auth.logout')}}" >Logout</a>
                    </li>
                </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                            <div class="clearfix wrapper dk nav-user hidden-xs">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="thumb avatar pull-left m-r">
                                    <img src="" class="dker" alt="...">
                                    <i class="on md b-black"></i>
                                </span>
                                <span class="hidden-nav-xs clear">
                                    <span class="block m-t-xs">
                                    <strong class="font-bold text-lt">{{ Sentinel::getUser()->surname }}</strong>
                                    <b class="caret"></b>
                                    </span>
                                    <span class="text-muted text-xs block">{{ Sentinel::getUser()->surname }}</span>
                                </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                    <li>
                                        <a href="{{route('auth.logout')}}" >Logout</a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                            <nav class="nav-primary hidden-xs">
                            <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">
                                 Account Manager
                            </div>
                            <ul class="nav nav-main" data-ride="collapse">
                                <li  class="@yield('dashboard')">
                                    <a href="{{route('admin.index')}}" class="auto">
                                        <span class="pull-right text-muted">
                                            <i class="i i-circle-sm-o text"></i>
                                            <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <i class="i i-lab icon"></i>
                                        <span class="font-bold">Dashboard</span>
                                    </a>
                                </li>
                                <li class="@yield('passwordupdate')">
                                    <a href="{{route('admin.change.password')}}" class="auto">
                                        <span class="pull-right text-muted">
                                            <i class="i i-circle-sm-o text"></i>
                                            <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <span class="font-bold">Change Password</span>
                                        <i class="i i-lab icon"></i>
                                    </a>
                                </li>
                                <!-- <li class="@yield('disabledAccount')" >
                                    <a href="#" class="auto">
                                        <span class="pull-right text-muted">
                                            <i class="i i-circle-sm-o text"></i>
                                            <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <i class="i i-lab icon"></i>
                                        <span class="font-bold">Disable Account</span>
                                    </a>
                                </li> -->
                                <li class="@yield('transactions')" >
                                    <a href="#" class="auto">
                                        <span class="pull-right text-muted">
                                        <i class="i i-circle-sm-o text"></i>
                                        <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <i class="i i-lab icon">
                                        </i>
                                        <span class="font-bold">Transactions</span>
                                    </a>
                                    <ul class="nav dk">
                                        <li >
                                            <a href="{{ route('admin.credits') }}" class="auto">
                                                <i class="i i-dot @yield('tools')"></i>
                                                <span>Credits</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="{{ route('admin.debits') }}" class="auto">
                                                <i class="i i-dot @yield('tools')"></i>
                                                <span>Debits</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="@yield('createuser')" >
                                    <a href="#" class="auto">
                                        <span class="pull-right text-muted">
                                            <i class="i i-circle-sm-o text"></i>
                                            <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <i class="i i-lab icon"></i>
                                        <span class="font-bold">User Management</span>
                                    </a>
                                    <ul class="nav dk">
                                        <li >
                                            <a href="{{ route('admin.users') }}" class="auto">
                                                <i class="i i-dot @yield('tools')"></i>
                                                <span>All</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="{{ route('admin.create') }}" class="auto">
                                                <i class="i i-dot @yield('tools')"></i>
                                                <span>Create</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li >
                                    <a href="{{route('auth.logout')}}" class="auto">
                                        <span class="pull-right text-muted">
                                        <i class="i i-circle-sm-o text"></i>
                                        <i class="i i-circle-sm text-active"></i>
                                        </span>
                                        <i class="i i-lab icon">
                                        </i>
                                        <span class="font-bold">Log Out</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="line dk hidden-nav-xs"></div>
                            </nav>
                        </div>
                        </section>

                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                        <a href="" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                            <i class="i i-logout"></i>
                        </a>
                        <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                            <i class="i i-circleleft text"></i>
                            <i class="i i-circleright text-active"></i>
                        </a>
                        </footer>
                    </section>
                </aside>
                <section id="content">
                    @yield('content')
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="{{ url('js/bootstrap.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('js/charts/easypiechart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ url('js/charts/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('js/charts/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ url('js/charts/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ url('js/charts/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ url('js/charts/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ url('js/charts/flot/demo.js') }}"></script>
    <script src="{{ asset('js/sortable/jquery.sortable.js') }}"></script>
  <script src="{{ asset('js/app.plugin.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
            })
        });
        $(document).ready(function() {
            $('#user').DataTable( {
                scrollY: '50vh',
                scrollCollapse: true,
                paging:true
            } );
        });
    </script>
    </body>
    <!-- //@jquery - skip if already have. -->
    @toastr_css - toastr css lib.
    @toastr_js - toastr js lib.
    @toastr_render - for render toastr notification.
</html>
