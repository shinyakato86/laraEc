<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <header class="header shadow-sm">
            <nav class="navbar navbar-expand-md navbar-light bg-white headerNav">
                    <a class="header_logo" href="{{ url('/') }}">
                    <img src="{{ asset('/image/logo.png') }}" alt="" class="" >
                    </a>

                    <div class="" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="btn btn-danger mr-3" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="btn btn-link text-danger" href="{{ route('register') }}">{{ __('新規登録') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('ログアウト') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                        <a class="dropdown-item" href="{{ route('shop.cart') }}">
                                        カートを見る
                                    </a>

                                    </div>
                                </li>

                                <a href="{{ route('shop.cart') }}" >
                                <img src="{{ asset('image/cart.png') }}" class="cartImg ml-3" >
                            </a>

                            @endguest
                        </ul>
                    </div>
            </nav>
        </header>
        <main class="main">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="footer_inner">
            <p class="mt20"><img src="{{ asset('/image/logo_02.png') }}" alt=""></p>
            <p class="mt10"><small class="fz-s">©️shinya kato このページは架空のページです。実際の人物・団体とは関係ありません。</small></p>
            </div>
       </footer>

    </div>
 
</body>
</html>
