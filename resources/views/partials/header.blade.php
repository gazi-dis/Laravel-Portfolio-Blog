<!DOCTYPE html>
<html lang="en">

<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="{{ asset('src/favicon.png') }}"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('src/css/open-iconic-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/animate.css') }}">

  <link rel="stylesheet" href="{{ asset('src/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/magnific-popup.css') }}">

  <link rel="stylesheet" href="{{ asset('src/css/aos.css') }}">

  <link rel="stylesheet" href="{{ asset('src/css/ionicons.min.css') }}">

  <!-- <link rel="stylesheet" href="{{ asset('src/css/flaticon.css') }}">-->
  <link rel="stylesheet" href="{{ asset('src/admin/flaticon/font/flaticon.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('src/css/toastr.min.css') }}">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand"
        href="{{ url('/') }}"><span>{{ config('settings.name')[0] }}</span>{{   substr(config('settings.name'),1,(strlen(config('settings.name'))-1))  }}</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
        data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          @if (config('settings.entry'))
          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
          @endif
          @if (config('settings.about'))
          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
          @endif
          @if (config('settings.services'))
          <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
          @endif
          @if (config('settings.projects'))
          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
          @endif
          @if (config('settings.blog'))
          <li class="nav-item"><a href="{{ url('blog') }}" class="nav-link"><span>Blog</span></a></li>
          @endif
          @if (config('settings.contact'))
          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
          @endif
        </ul>
      </div>
    </div>
    @if (config('settings.admin-link'))
    <a href="admin">
      <div class="btn btn-outline-secondary mr-2">Giriş</div>
    </a>
    @endif
  </nav>