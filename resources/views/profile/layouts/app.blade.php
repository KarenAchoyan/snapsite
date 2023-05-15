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
</head>
<body>
<header>
    <nav>
        <div class="menu-toggle"></div>
        <ul class="navigation">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" id="profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle"></i>
                    <span class="profile-name">John Doe</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="profile-dropdown">
                    <a class="dropdown-item" href="#">Change Profile</a>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
</header>

      <div class="content mt-5">
          @yield('content')
      </div>
</body>
<script src="{{ asset('js/profile.js') }}"></script>
</html>
