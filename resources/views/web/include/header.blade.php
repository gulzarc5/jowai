<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>juwaiteer</title>
    <link rel="icon" href="{{('web/images/logo1.png')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">
</head>
<body>
    <!-- Header -->
    <header id="header">

        <!-- Logo -->
        <div class="header-logo">
            <a href="{{route('web.index')}}"><img id="header-img" src="{{asset('web/images/logo.png')}}" alt="logo"></a>
        </div>

        <!-- collapsed menu button -->
        <button class="btn-hamburger">
            <img src="{{asset('web/images/ham.png')}}">
        </button>

        <!-- Nabar menu -->
        <nav id="nav-bar" class="header-menu">
            <ul>
                <!-- <li>
                    <a class="nav-link" href="{{route('web.index')}}">Home</a>
                </li> -->
                <li>
                    <a class="nav-link" href="{{route('web.common.common')}}">Common Number</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('web.dream.dream')}}">Dream Number</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('web.previous.previous')}}">Previous Result</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('web.calender.calender')}}">Teer Calendar</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('web.about.about')}}">About Us</a>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Main -->
    <main>