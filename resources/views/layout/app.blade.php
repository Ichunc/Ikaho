<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
    body {
        width: 90%;
        margin: 0 auto;
    }

    .header {
        height: 80px;
        width: auto;
        border: 1px solid black;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 2em 0 2em;
        background-color: #CCFF99;
    }

    .header-logo a {
        font-size: 30px;
        text-decoration: none;
    }

    .header-menu {
        text-align: right;
    }


    .container {
        height: auto;
        width: 100%;
        border: 1px solid black;
        display: flex;
        background-color: #CCFF99;
    }

    .side-menu {
        height: auto;
        width: 20%;
        border: 1px solid black;
    }

    .main {
        height: 100%;
        width: 80%;
        border: 1px solid black;
    }

    .footer {
        height: 80px;
        width: 100%;
        border: 1px solid black;
        background-color: #CCCC99;

    }

    .footer a {
        text-align: center;
    }

    .footer p {
        text-align: center;
        bottom: 0;
    }

    .footer-menu {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="header">
        <div class="header-logo"><a href="">新宿トラベル</a></div>
        <div class="header-menu">
            <a href="">会員登録</a>
            <a href="">ログイン</a>
        </div>

    </div>
    <div class="container">
        <div class="side-menu">
            @yield('side-menu')
        </div>
        <div class="main">@yield('content')</div>
    </div>
    <div class="footer">
        <div class='footer-menu'>
            <a href="">お問い合わせ</a>
            <a href="">会社概要</a>
        </div>

        <p>Copyright © sinjuku travel. All Rights Reserved.</p>
    </div>
</body>

</html>