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
    <!-- NAVBAR -->
    <nav class="bg-biru py-5 flex items-center justify-between">
      <a href="{{ route('home') }}"
        ><img
          src="/assets/panah.svg"
          alt=""
          class="md:ml-20 w-[50px] h-[30px]"
      /></a>
      <a href="{{ route('home') }}"
        ><img src="/assets/logo nav.svg" alt="" class="md:mr-20"
      /></a>
    </nav>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
    <div class="flex flex-col justify-center items-center mt-5">
      <img src="/assets/logo_email.svg" alt="" class="w-[400px] h-[250px]" />
      <h1 class="font-popins text-hijau text-[44px] font-bold py-6">
        Email Confirmation
      </h1>
      <p
        class="font-popins text-[21px] font-semibold w-[690px] h-[75px] text-center"
      >
        We have sent email to example@gmail.com to confirm the validity of our
        email address. Please take a second to make sure we have your correct
        email address.
      </p>
      <a href="https://mail.google.com/" class="mt-10"
        ><button
          class="border bg-hijau text-white p-[3px] w-[400px] rounded-2xl text-[27px] font-semibold font-popins"
        >
          Check your email address
        </button></a
      >
      <img src="/assets/garis hitam.svg" alt="" class="py-5" />
      <p class="text-[17px] font-normal font-popins">
        If you not got any email
        <a href=""><span class="text-hijau">Resend confirmation maiil</span></a>
      </p>
    </div>
    <!-- END CONTENT -->
  </body>
</html>
