<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>@yield('title')</title>

  <style>
    header {
      position: fixed;
      top: 0;
      z-index: 1;
      height: 60px;
      width: 100vw;
      background-color: #FFFFDD;
    }

    .header-logo{
      text-align: center;
      line-height: 15px;
      font-weight: bold;
      font-size: 30px;
    }
    footer{
      position: fixed;
      bottom: 0;
      height: 40px;
      width: 100%;
      text-align: center;
      padding-bottom: 10px;
      background-color: #FFFFDD;
      margin-top: 20px;
      z-index: 1;
    }

    body, html {
      margin: 0;
      padding: 0;
    }

    .footer-text{
      font-size: 16px;
      line-height: 40px;
    }

    .container-create{
      padding-top: 140px;
      margin:0 auto;
      width: 400px;
    }
    </style>


</head>
<body>
<header>
  <p class="header-logo">初めてのアプリ</p>
</header>
<footer>
  <a href="/" class="footer-text">トップ画面へ</a>
</footer>
  @yield('content')


</body>

</html>

