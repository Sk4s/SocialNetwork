<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'WTTSSSNSP1') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
        .active-like {
            text-decoration: underline;
            color: #222;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background: url('default/profile-background.jpg') no-repeat center fixed; -webkit-background-size: cover; background-size: cover;">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: white; background-color: rgba(24,24,24,0.8);">
                        <!-- {{ config('app.name', 'Laravel') }} -->
                        HOME
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Login</a></li>
                            <li><a href="{{ route('register') }}" style="color: white; background-color: rgba(24,24,24,0.8);">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="background-color: rgba(24,24,24,0.8);">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px; color: white; background-color: rgba(24,24,24,0.8);"> 
                                        @if(Auth::user()->set_avatar == false)
                                            <img src="/default/{{ Auth::user()->profile_picture }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                        @else
                                            <img src="/images/{{ Auth::user()->profile_picture }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                        @endif
                                        {{ Auth::user()->username }} <span class="caret"></span>
                                    </a>
                                </a>

                                <ul class="dropdown-menu" style="background-color: rgba(24,24,24,0.8);">
                                    <li> <a style="color: white;" href="{{ url('/home') }}">Profile</a></li>
                                    <li> <a style="color: white;" href="{{ url('/post') }}">Post</a></li>
                                    <li> <a style="color: white;" href="{{ url('/category') }}">Category</a></li>
                                    <li>
                                        <a style="color: white;" href="{{ route('logout') }}"
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.like').click(function(e) {
                e.preventDefault();
                var like = e.target.previousElementSibling == null;
                var postid = e.target.parentNode.dataset['postid'];
                var data = {
                    isLike: like,
                    post_id: postid
                }
                axios.post('/like', data).then(response => {
                    e.currentTarget.className = "btn btn-link like active-like"
                })
            });
        });
    </script>
</body>
</html>
