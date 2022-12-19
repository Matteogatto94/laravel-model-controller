<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-Model-Controller @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Movies</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <!-- /header -->

    <main>
        @yield('content')
    </main>
    <!-- /main -->

    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <h2 class="text-uppercase">Laravel-Model-Controller</h2>
                    </div>
                </div>

                <div class="col">
                    <h3>Legal</h3>
                    <ul class="list-unstyled">
                        <li>Privacy & Policy</li>
                        <li>Terms & Conditions</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

</body>

</html>