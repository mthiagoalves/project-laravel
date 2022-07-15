<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    @yield('title')
    <title>Page Teste</title>


    </head>

        <body>

            <nav class="navbar-content">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="imagem" id="navbar img">
                    </a>
                    <ul class="navbar-nav" >
                        <li class="nav-item">
                            <a href="/menu" class="nav-link">MENU</a>
                        </li>
                        <li class="nav-item">
                            <a href="/cafe" class="nav-link">CAFÉ</a>
                        </li>
                        <li class="nav-item">
                            <a href="/delivery" class="nav-link">DELIVERY</a>
                        </li>
                        <li class="nav-item">
                            <a href="/responsabilidade" class="nav-link">RESPONSABILIDADE</a>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')

            <footer>Copyright 2022</footer>

        </body>

</html>
