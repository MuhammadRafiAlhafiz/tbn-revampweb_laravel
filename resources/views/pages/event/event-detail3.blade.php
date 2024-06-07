<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REVAMP TBN</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
    
  </head>
  <body class="font-popins">
    <!-- NAVBAR -->
    <nav class="bg-biru py-5 flex items-center justify-between w-full">
      <a href="{{ route('event') }}">
        <img
          src="/assets/panah.svg"
          alt=""
          class="md:ml-20 w-[50px] h-[30px]"
        />
      </a>
      <a href="{{ route('home') }}">
        <img src="/assets/logo nav.svg" alt="" class="md:mr-20" />
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- Banner event 3 -->
    <section>
      <div class="flex flex-col justify-center items-center">
        <img
          class="w-[500px] h-[750px]"
          src="/assets/banner-event3.svg"
          alt=""
        />
        <span class="w-[1000px] mb-5">
          <a href="{{ route('event') }}"><p class="text-hijau py-5 font-nunito text-[20px] font-normal">
            [ About Conference ]
          </p></a>
          <h1 class="font-popins text-[34px] font-semibold">
            The Future for Social Enterprises          </h1>
          <div class="w-[967px] h-[250px] font-popins text-[21px] font-semibold">
          <p class="py-1">
            Traditionally, social enterprises have relied on market rate investments or pure philanthropic grants for their funding. With the development of innovative financial models like blended finance and risk adjusted market rate return impact investing, rich opportunities are generated for social enterprises to tap into the huge potential of private markets for capital. These opportunities can be catalytic for the social enterprise, and enable them to scale. Social enterprises are entrepreneurial organizations that blend social benefits and financial returns. 
          </p>

          <p class="py-5"
            >So the capital that they rely on should also sit on a continuum that ranges from philanthropy to market-return impact investing. This is the emerging capital market for social enterprises, and the future.</p
          >
        </span>
      </div>
      </div>
    </section>
    <!-- END Banner Event 3 -->

    <!-- THE SPEAKER -->
    <img class="flex justify-center w-full mt-20" src="/assets/event-detailspeaker3.svg" alt="">
    <!-- END THE SPEAKER -->

   <!-- CARD PRICE -->
   <section class="mt-20 bg-background py-16 mx-52 rounded-3xl">
    <div class="flex justify-center gap-14">
        <div class="bg-biru w-[292px] h-[550px] flex flex-col rounded-3xl">
        <span class="ml-6">
          <span class="flex items-center mt-24 gap-2">
            <img class="w-[26px] h-[24px]" src="/assets/icon-cardevent.svg" alt="">
            <h1 class="font-popins text-[27px] font-semibold text-white">Free</h1>
          </span>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">1 Conference Day</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">e-Certificate</p>
        </span>
      <span class="mt-52 justify-center items-center text-center">
        <a class="border-transparent py-3 px-10 rounded-xl bg-hijau text-white" href="{{ route('register') }}"><button>Choose plan</button></a>
      </span>
      </div>

      <div class="bg-biru w-[292px] h-[550px] flex flex-col rounded-3xl">
        <span class="ml-6">
          <span class="flex items-center mt-16 gap-2">
            <img class="w-[26px] h-[24px]" src="/assets/icon-cardevent.svg" alt="">
            <h1 class="font-popins text-[27px] font-semibold text-white">Regular</h1>
          </span>
          <p class="font-popins text-[20px] font-semibold text-white">RP.1.500.000<span class="text-[15px] font-normal">/1 Person</span></p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">1 Conference Day</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">Free Coffee & Lunch</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">Goodie Bags</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">e-Certificate</p>
        </span>
      <span class="mt-24 justify-center items-center text-center">

        <a class="border-transparent py-3 px-10 rounded-xl bg-hijau text-white" href="{{ route('register') }}"><button>Choose plan</button></a>
      </span>
      </div>


    <div class="bg-biru w-[292px] h-[550px] flex flex-col rounded-3xl">
      <span class="flex justify-end mr-5 py-3">
        <a class="border-transparent py-2 px-2 rounded-xl bg-purple text-foundationgreen font-popins text-[10px] font-extrabold" href=""><button>MOST POPULAR</button></a>
      </span>
        <span class="ml-6">
          <span class="flex items-center gap-2">
            <img class="w-[26px] h-[24px]" src="/assets/icon-cardevent.svg" alt="">
            <h1 class="font-popins text-[27px] font-semibold text-white">Group Table</h1>
          </span>
          <p class="font-popins text-[20px] font-semibold text-white">RP.6.000.000<span class="text-[15px] font-normal">/1 Groub</span></p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">1 Reserved Table for 6 Persons</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">1 Conference Day</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">Free Coffee & Lunch</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">Goodie Bags</p>
          <p class="text-white">............................................</p>
          <p class="mt-2 text-[14px] font-normal text-white">e-Certificate</p>
        </span>
      <span class="mt-12 justify-center items-center text-center">
        <a class="border-transparent py-3 px-10 rounded-xl bg-hijau text-white" href="{{ route('register') }}"><button>Choose plan</button></a>
      </span>
      </div>
    </div>
</section>
<!-- END Card Price -->

 <!-- Venue Information -->
 <section class="bg-hijau p-20 ">
        <h1 class="text-[36px] font-bold text-center">Venue Information</h1>
        <p class="text-center text-[18px] font-normal">Where this conference will be held</p>
        <div class="mt-20 flex justify-between text-center mx-20 gap-5">
            <div class="flex flex-col justify-center items-center">
              <img class="w-[28px] h-[48px]" src="/assets/event-iconlocation.svg" alt="">
              <p class="text-[24px] font-bold mt-5 py-2 ">Location</p>
              <p class="w-[350px] text-[14px] font-medium font-Roboto">PLEASE NOTE: The conference takes place at the Menara Danareksa (Arya Nusa Ballroom) , Jakarta. See the map below for exact information.</p>
            </div>
            <div class="flex flex-col justify-center items-center">
              <img class="w-[28px] h-[48px]" src="/assets/event-iconcar.svg" alt="">
              <p class="text-[24px] font-bold mt-5 py-2 ">Transport</p>
              <p class="w-[350px] text-[14px] font-medium font-Roboto">To get to the venue place, you can take one of the city
                busway, MRT, or train service. All the services are
                comfortable to reach into the place.</p>
            </div>
            <div class="flex flex-col justify-center items-center">
              <img class="w-[28px] h-[48px]" src="/assets/event-iconhotel.svg" alt="">
              <p class="text-[24px] font-bold mt-5 py-2 ">Hotels</p>
              <p class="w-[350px] text-[14px] font-medium font-Roboto">The near suitable hotel recommendation is Mercure
                Jakarta Sabang or Ashley Jakarta Sabang.</p>
            </div>
        </div>
    </section>
    <!-- END Venue Information -->

   <!-- FOOTER -->
   <section class="bg-white mt-10">
      <div class="flex flex-col md:flex-row md:p-10 justify-between mx-20">
        <div class="w-full md:w-[400px] mb-5 md:mb-0">
          <img src="/assets/logo footer.svg" alt="" />
          <p
            class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins"
          >
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
          <p
            class="text-[18px] md:text-base font-normal font-popins mt-3 md:mt-5"
          >
            Jl. M.H.Thamrin No.20, Menteng
          </p>
          <p class="text-[18px] md:text-base font-normal font-popins">
            Jakarta Pusat 10350, Indonesia
          </p>
        </div>

        <div>
          <h1
            class="font-popins font font-semibold text-[21px] md:text-lg mt-2"
          >
            Perusahaan
          </h1>
          <div
            class="flex flex-col font-popins font-normal text-[18px] md:text-base mt-3 md:mt-5"
          >
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
            <a href="https://www.instagram.com/tbn.indonesia/"
              ><img src="/assets/nav-instagram.svg" alt=""
            /></a>
            <a href="https://www.youtube.com/@tbnindonesia902"
              ><img src="/assets/nav-youtube.svg" alt=""
            /></a>
            <a href="https://wa.me/+6282310001908"><img src="/assets/nav-whatsapp.svg" alt="" /></a>
            <a href=""><img src="/assets/nav-gmail.svg" alt="" /></a>
            <a href=""><img src="/assets/nav-link.svg" alt="" /></a>
          </div>
          <h1 class="font-popins font-semibold text-[21px] md:text-lg">
            Hubungi Kami
          </h1>
          <div class="flex gap-1 mt-2">
            <img
              src="/assets/icon email.svg"
              class="font-popins font-normal text-[17px]"
              alt=""
            />
            <a href="https://www.tbnalliance.org/">hello@tbnalliance.org</a>
          </div>
        </div>
      </div>
      <div class="bg-biru">
        <h1
          class="justify-center items-center text-center p-5 text-white w-[380px] md:w-full text-[16px] font-bold"
        >
          Copyright © 2023 - Transformational Business Network (TBN) Indonesia -
          All rights reserved.
        </h1>
      </div>
    </section>

    <!-- END FOOTR -->
    
    
  </body>
</html>
