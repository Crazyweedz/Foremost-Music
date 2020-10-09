<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ setting('site.title') }} | @yield('title')</title>

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat%3A500%2C700%7CRoboto+Condensed:700%7CRoboto%3A700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/perso.css') }}">
    @yield('css')

    <!-- Icon -->
    <link rel="icon" href="{{ setting('site.favicon') }}" sizes="32x32"/>
</head>

<body class="{{ Request::routeIs('home') ? 'ashade-home-template' : '' }} has-spotlight ashade-smooth-scroll">
<!-- Header -->
<header id="ashade-header">
    <div class="ashade-header-inner" style="flex-direction: column">
        <div class="ashade-logo-block">
            <a href="index.html" class="ashade-logo is-retina">
                <img src="{{ asset('img/mini-logo-trans.png') }}" alt="Foremost Music Logo" width="128" height="110">
            </a>
        </div>
        <div class="ashade-nav-block">
            <nav class="ashade-nav">
                <ul class="main-menu">
                    <li class="{{ isActiveMenu('home') }}">
                        <a href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="{{ isActiveMenu('artists.index') }}">
                        <a href="{{ route('artists.index') }}">Artistes</a>
                    </li>
                    <li class="{{ isActiveMenu('events.index') }}">
                        <a href="{{ route('events.index') }}">Évènements</a>
                    </li>
                    <li class="{{ isActiveMenu('booking.index') }}">
                        <a href="{{ route('booking.index') }}">Réservation</a>
                    </li>
                    <li class="{{ isActiveMenu('ticketing') }}">
                        <a href="{{ route('ticketing') }}">Billetterie</a>
                    </li>
                    <li class="{{ isActiveMenu('contact.index') }}">
                        <a href="{{ route('contact.index') }}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

@yield('content')

<!-- UI Elements -->
<div class="ashade-home-block-overlay"></div>
<div class="ashade-menu-overlay"></div>
<div class="ashade-aside-overlay"></div>
<div class="ashade-cursor is-inactive">
    <span class="ashade-cursor-circle"></span>
    <span class="ashade-cursor-slider"></span>
    <span class="ashade-cursor-close ashade-cursor-label">Close</span>
    <span class="ashade-cursor-zoom ashade-cursor-label">Zoom</span>
</div>

<!-- SCRIPTS -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/masonry.min.js') }}"></script>
<script src="{{ asset('js/core.js') }}"></script>
@yield('js')
</body>

</html>
