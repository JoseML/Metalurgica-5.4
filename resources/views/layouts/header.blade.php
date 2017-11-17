<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Siderurgica Bilzerian</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/signin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pages/plans.css') }}" rel="stylesheet">

</head>




<body>

    <div class="navbar navbar-fixed-top">
    
    <div class="navbar-inner">
        
        <div class="container">
            
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            
            <a class="brand" href="index.html">
                Siderurgica Bilzerian           
            </a>        
            
            <div class="nav-collapse">
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                
            </div><!--/.nav-collapse -->    
    
        </div> <!-- /container -->
        
    </div> <!-- /navbar-inner -->
    
</div> <!-- /navbar -->

<div id="app">
@yield('content')    
</div>
 





        
       
   
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery-1.7.2.min.js') }}"></script> 
    <script src=" {{ asset('js/excanvas.min.js') }}"></script> 
    <script src="{{ asset('js/chart.min.js') }}" type="text/javascript"></script> 
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/full-calendar/fullcalendar.min.js') }}"> language="javascript" type="text/javascript" </script>
    <script src="{{ asset('js/base.js') }}"></script> 

    @yield('js')

</body>
</html>
