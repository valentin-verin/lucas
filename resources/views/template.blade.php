<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.2/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="/css/app.css">

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.2/dist/js/uikit-icons.min.js"></script>

</head>

<body>
    <header>
        <nav class="uk-navbar-container">
            <div class="uk-container">
                <div uk-navbar>

                    <div class="uk-navbar-left">

                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="/">Home</a>
                            </li>
                            <li><a href="/albums">Mes albums</a></li>
                        </ul>

                    </div>
                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav">
                            <li>
                                <a href="#"><span uk-icon="user"></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        @auth
                                        <li><a href="#"><span uk-icon="user"></span> {{Auth::user()->name}}</a></li>
                                        <li>
                                            <a href="{{route("logout")}}" onclick="document.getElementById('logout').submit(); return false;">
                                                <span uk-icon="sign-out"></span>Logout
                                            </a>
                                            <form id="logout" action="{{route("logout")}}" method="post">@csrf</form>
                                        </li>
                                        <li><a href="#"><span uk-icon="cog"></span>Preferences</a></li>
                                        @else
                                        <li><a href="{{route("login")}}">Login</a></li>
                                        <li><a href="{{route("register")}}">Register</a></li>
                                        @endauth
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <div class="uk-margin-large-left uk-margin-large-right uk-margin">
        @yield('content')
    </div>

    <footer class="uk-section-secondary ">
        <div class="uk-container uk-padding-small">
            <a class="uk" href="">Legal notice</p>
            <a class="uk" href="">CGU</p>
            <a class="uk" href="">Contact Us</p>
        </div>
    </footer>
</body>

</html>