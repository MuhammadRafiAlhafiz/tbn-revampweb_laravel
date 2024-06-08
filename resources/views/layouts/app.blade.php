<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBN Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

  <body class="font-popins">
    <section>
 
        @include('layouts.navbar')

        @yield('content')
    
        @include('layouts.footer')
  
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script src="../js/caraousel.js"></script>
      <script src="../js/scrollnavbar.js"></script>
      <script src="../js/humberger.js"></script>
    </body>
  
  </html>