<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Criollos</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('/css/adminPanel.css')}}">



</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                
                <a class="navbar-brand" target="_blank" href="{{ url('/') }}">
                    Criollos
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/admin') }}">Home</a></li>
                    @if (Auth::user())
                    <li>
                        <li role="presentation" class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Categories <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="{{ route('admin.clients.index', 1) }}">Branding &amp; Creativity </a></li>
                                <li><a href="{{ route('admin.clients.index', 2) }}">Strategy &amp; Media Planning </a></li>
                                <li><a href="{{ route('admin.clients.index', 3) }}">Digital Marketing &amp; Analytics </a></li>
                                <li><a href="{{ route('admin.clients.index', 4) }}">Digital Technology </a></li>
                                <li><a href="{{ route('admin.clients.index', 5) }}">Intelligence Insight </a></li>
                                <li><a href="{{ route('admin.clients.index', 6) }}">Live Experience </a></li>
                            </ul>
                        </li>
                    </li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    @else
                    <li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Options <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/') }}" target="_blank"><i class="fa fa-btn fa-desktop"></i>Go to page</a></li>
                                <li><a href="{{ route('admin.password') }}"><i class="fa fa-btn fa-keyboard-o"></i>Change password</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

        <script src="https://use.fontawesome.com/011b552131.js"></script>
        <script src="{{URL::asset('js/iconPicker/js/fontawesome-iconpicker.js')}}"></script>


    <script type="text/javascript">
        document.getElementById("originalImgName").onchange = function(){
            document.getElementById("frontUpload").value = this.value;
        };
    </script>
</body>
</html>