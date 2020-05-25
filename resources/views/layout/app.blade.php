<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark mt-3 mb-3">
        <div class="container-fluid">
            <div class="navbar-header mx-auto">

                <a class="navbar-brand" href="#">
                    <h2>新宿Travell</h2>
                </a>
            </div>

            <ul class="nav justify-content-end">
                @yield('header-menu')
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-2 border ml-5">
            <div class="sidebar_fixed">@yield('side-menu')</div>
        </div>
        <div class="col-8">@yield('content')</div>
    </div>
    <footer class="footer bg-secondary">
        <ul class="nav justify-content-center">
            <li class="nav-item text-light mr-5">お問い合わせ
            </li>
            <li class="nav-item text-light mr-5">会社概要
            </li>
            <li class="nav-item">Copyright © sinjuku travel. All Rights Reserved.
            </li>
        </ul>
    </footer>
</body>

</html>
