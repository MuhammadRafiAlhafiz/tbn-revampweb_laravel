<!DOCTYPE html>
<html data-theme="light" lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>REVAMP TBN</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
</head>
<body class="font-popins">
  <!-- NAVBAR -->
  <nav class="bg-biru py-5 flex items-center justify-between w-full">
    <a href="{{ route('event') }}">
      <img src="/assets/panah.svg" alt="" class="md:ml-20 w-[50px] h-[30px]" />
    </a>
    <a href="{{ route('home') }}">
      <img src="/assets/logo nav.svg" alt="" class="md:mr-20" />
    </a>
  </nav>
  <!-- END NAVBAR -->

  <!-- Banner event 1 -->
  <section id="Payment-section">
    @foreach ($programs as $program)
    <div class="flex flex-col justify-center items-center mt-10">
      <img class="w-[500px] h-[750px]" src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $program->poster ?>" alt="Banner Event 1" />
      <div class="w-[1000px] mt-10">
        <a href="{{ route('event') }}">
          <p class="text-hijau py-5 font-nunito text-[20px] font-normal">[ About Conference ]</p>
        </a>
        <h1 class="font-popins text-[34px] font-semibold">
          {{$program->name}}
        </h1>
        <div class="w-[967px] h-[250px] font-popins text-[21px] font-semibold">
          <p class="py-1">
            {{$program->desc}}
          </p>

        </div>
      </div>
    </div>@endforeach
  </section>
  <!-- END Banner Event 1 -->

  <!-- SHARING experiences -->
  <section>
    <h1 class="mt-24 mx-28 text-[34px] font-semibold font-popins">Sharing Experience by Participants</h1>
    <div class="mt-10 mx-28"> @foreach ($experiences as $experience)
      <div class="flex gap-5">
        <img class="w-[43px] h-[43px]" src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $experience->picture ?>" alt="Feedback Customer 1" />
        <div class="flex-col mt-2">
          
          <p class="w-[570px] h-[60px] text-[17px] font-normal py-2">
            {{$experience->desc}}
          </p>
          <p class="text-[14px] mt-10 font-bold"> {{ auth()->user()->name }} </p>
          <p class="text-[13px] font-normal text-gray-700">{{$experience->id}}</p>
        </div>
      </div>
      <hr class="w-[700px] border-t-3 border-gray-300 mt-2" />
      @endforeach


      <a href="{{ route('event-feedback', ['id' => $program->id]) }}">
        <div class="flex gap-2 mt-5">
          <img src="/assets/event-feedbackrefresh.svg" alt="Refresh" />
          <p class="text-[11px] font-bold text-gray-500">LOAD MORE REVIEWS</p>
        </div>
      </a>
    </div>
  </section>
  <!-- END SHARING experiences -->

  <!-- FEED BACK FORM -->
  <section id="feedbackFormSection" class="flex justify-center mt-20">
    <div class="bg-white p-8 rounded-lg w-full max-w-md">
      <div class="flex flex-col items-center">
        <div class="bg-hijau w-[130px] h-[14px] rounded-lg mb-4"></div>
        <h1 class="font-popins text-[56px] font-bold text-blue-950 mb-2 text-center">Share Your Feedback</h1>
        <p class="font-popins text-[21px] font-semibold mb-6">how was your experience?</p>

      </div>
     
      <form method="POST" action="{{ route('experience.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <input type="text" placeholder="Name" class="w-full p-3 border rounded-lg " value="{{ auth()->user()->name }}" />
        </div>
        <div class="mb-4">
            <textarea placeholder="Your message..." class="w-full p-3 border rounded-lg" id="desc" name="desc" rows="4" cols="50"></textarea>
        </div>
        <div class="mb-6 justify-center flex items-center py-2 px-20 border-2 rounded-2xl text-gray-600 focus:outline-none">
            <input type="file" id="picture" name="picture">
        </div>
        <div class="mb-6">
            <input type="hidden" placeholder="Participant ID" class="w-full p-3 border rounded-lg" name="participant_id" value="1"> <!-- Make sure this value is set correctly -->
        </div>
        <div class="flex justify-center">
            <button type="submit" class="bg-hijau text-white rounded-full px-6 py-3 w-[610px] font-semibold hover:bg-gray-300">
                SUBMIT FEEDBACK
            </button>
        </div>
    </form>
        </div>
    
    </div>
  </section>
  <!-- END FEEDBACK FORM -->

  <!-- Thank you Section -->
  {{-- <section id="thankYouSection" class="hidden flex-col">
      <div class="text-center flex justify-center items-center mt-20">
        <div>
          <img
            src="/assets/event-payment-sucsses payment.svg"
            alt="Check Mark"
            class="w-[300px] h-[350px]"
          />
        </div>
        <div>
          <h1 class="text-[34px] font-semibold font-popins text-hijau">
            THANK YOU FOR YOUR FEEDBACK!
          </h1>
          <p class="mt-2 text-[34px] font-semibold">
          We hope you enjoyed this event and hope to see you at the next event.          </p>
          <a href="{{ route('event') }}">
            <button class="mt-6 bg-hijau text-white px-20 py-2 rounded-full">
              Done
            </button>
          </a>
        </div>
      </div>
    </section>
  <!-- END Thank you Section --> --}}

  <!-- FOOTER -->
  <section id="footerSection" class="bg-white mt-10">
    <div class="flex flex-col md:flex-row md:p-10 justify-between mx-10">
      <div class="w-full md:w-[400px] mb-5 md:mb-0">
        <img src="/assets/logo footer.svg" alt="" />
        <p class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins">
          TBN Indonesia adalah jaringan global wirausaha yang berorientasi pada
          tujuan, investor dampak, dan pembangun kapasitas yang mengambil
          pendekatan kewirausahaan untuk mengentaskan kemiskinan di masyarakat
          berpenghasilan rendah dan kurang terlayani.
        </p>
      </div>

      <div class="flex flex-col mt-5">
        <h1 class="text-[21px] md:text-lg font-semibold font-popins">
          LOKASI
        </h1>
        <p class="text-[18px] md:text-base font-normal font-popins mt-3 md:mt-5">
          Jl. M.H.Thamrin No.20, Menteng
        </p>
        <p class="text-[18px] md:text-base font-normal font-popins">
          Jakarta Pusat 10350, Indonesia
        </p>
      </div>

      <div>
        <h1 class="font-popins font font-semibold text-[21px] md:text-lg mt-2">
          Perusahaan
        </h1>
        <div class="flex flex-col font-popins font-normal text-[18px] md:text-base mt-3 md:mt-5">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}"class="py-2">About Us</a>
          <a href="{{ route('event') }}">Event</a>
          <a href="{{ route('blog') }}"class="py-2">Blog</a>
          <a href="{{ route('contact') }}">Contact Us</a>
        </div>
      </div>

      <div>
        <h1 class="font-popins font-semibold text-[21px] md:text-lg">
          Ikuti Social Media Kami
        </h1>
        <div class="flex gap-3 md:gap-[20px] py-5">
          <a href="https://www.instagram.com/tbn.indonesia/"><img src="/assets/nav-instagram.svg" alt=""/></a>
          <a href="https://www.youtube.com/@tbnindonesia902"><img src="/assets/nav-youtube.svg" alt=""/></a>
          <a href="https://wa.me/+6282310001908"><img src="/assets/nav-whatsapp.svg" alt=""/></a>
          <a href=""><img src="/assets/nav-gmail.svg" alt=""/></a>
          <a href=""><img src="/assets/nav-link.svg" alt=""/></a>
        </div>
        <h1 class="font-popins font-semibold text-[21px] md:text-lg">
          Hubungi Kami
        </h1>
        <div class="flex gap-1 mt-2">
          <img src="/assets/icon email.svg" class="font-popins font-normal text-[17px]" alt=""/>
          <a href="https://www.tbnalliance.org/">hello@tbnalliance.org</a>
        </div>
      </div>
    </div>
    <div class="bg-biru">
      <h1 class="justify-center items-center text-center p-5 text-white w-[380px] md:w-full text-[16px] font-bold">
        Copyright © 2023 - Transformational Business Network (TBN) Indonesia - All rights reserved.
      </h1>
    </div>
  </section>
  <!-- END FOOTER -->

  <!-- JavaScript -->
  <script>
    document.getElementById("submitButton").addEventListener("click", function (event) {
      event.preventDefault(); // Prevent form submission

      // Hide all sections except the "Thank You" section
      var sections = document.getElementsByTagName("section");
      for (var i = 0; i < sections.length; i++) {
        if (sections[i].id !== "thankYouSection") {
          sections[i].style.display = "none";
        }
      }

      // Hide the footer
      document.getElementById("footerSection").style.display = "none";

      // Show the "Thank You" section
      document.getElementById("thankYouSection").style.display = "flex";
    });
  </script>
  <!-- END JavaScript -->
</body>
</html>
