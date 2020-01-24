<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css" type="text/css">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-primary">
            <a class="navbar-brand text-light" href="">俺の一冊</a>
        </nav>
    </header>
    @yield('content')
    <footer class="bg-primary text-center text-light">© 俺の一冊. All Right Reserved.</footer>
</body>
</html>