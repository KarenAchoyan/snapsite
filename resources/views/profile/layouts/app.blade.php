<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>

            <div class="dokkle">
                <div>
              <a href="http://127.0.0.1:8000/">  <img src="images/logo11.png" alt=""></a>
                </div>
            </div>
            <div class="dokkle">
                <ul>
                    <li><a href=""></a>Home</li>
                    <li><a href=""></a>About</li>
                    <li><a href=""></a>Service</li>
                    <li><a href=""></a>Portfilo</li>
                    <li><a href=""></a>Contact</li>

                </ul>

            </div>
            <div class="dokkle">
                <span>Admin</span>
                <i class='fa fa-user-circle'>

                </i>

            </div>
    <div class="subm">
        <div class="subm1"></div>
        <ul>
            <li>Profile</li>
            <li>log out</li>
        </ul>
    </div>


</header>

                  <div class="content mt-5">
          @yield('content')
      </div>
</body>
<script src="{{ asset('js/profile.js') }}"></script>
</html>
