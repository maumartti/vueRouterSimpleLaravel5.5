<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <base href="/" target="_blank">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

<body>
    <!-- START SECTION HEADINGS -->
    <div class="header">
 
        <div class="header-bottom heading sticky-header" id="heading">
            <div class="container">
                <a href="index.html" class="logo">
                    <img src="images/logoCasas.png" alt="casas online Uruguay">
                </a>
                <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <div class="get-quote hidden-lg-down">
                    <a href="submit-property.html">
                        <p>Publicar</p>
                    </a>
                </div>
                <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <form action="#" id="bloq-search" class="collapse">
                    <div class="bloq-search">
                        <input type="text" placeholder="search...">
                        <input type="submit" value="Search">
                    </div>
                </form>

                <nav id="main-menu" class="collapse">
                    <ul>
                        <li><a href="contact-us.html">Casas</a></li>
                        <li><a href="contact-us.html">Apartamentos</a></li>
                        <li><a href="contact-us.html">Campos</a></li>
                        <li><a href="contact-us.html">Comercios</a></li>
                        <li><a href="contact-us.html">Blog</a></li>
                        <li><a href="contact-us.html">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

        @yield('content')
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
