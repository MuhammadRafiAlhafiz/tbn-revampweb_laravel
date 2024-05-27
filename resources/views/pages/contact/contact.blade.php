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
    <nav
      id="navbar"
      class="px-8 py-2 md:py-1 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
    >
      <div class="flex items-center justify-between">
        <span class="flex items-center space-x-2 md:ml-10 py-1 z-10 md:py-0">
          <a href="{{ route('home') }}"
            ><img
              src="../assets/logo nav.svg"
              alt="logo navbar"
              class="w-[100px]"
          /></a>
        </span>

        <div class="lg:flex hidden gap-6 mt-2 mb-2 mr-5">
          <ul
            class="hidden mt-2 item-center space-x-10 lg:mr-20 text-white font-semibold tracking-wide md:flex"
          >
            <a href="{{ route('home') }}"><li>Home</li></a>
            <a href="{{ route('about') }}"><li>About Us</li></a>
            <a href="{{ route('event') }}"><li>Event</li></a>
            <a href="{{ route('blog') }}"><li>Blog</li></a>
            <a href="{{ route('contact') }}"><li>Contact Us</li></a>
          </ul>
          <a href="{{ route('login') }}" class="border-2 px-8 py-2 rounded-lg font-bold font-xs text-hijau border-hijau">JOIN US</a
          >
        </div>
        <button class="w-16 lg:hidden block buttonToogle">
          <img
            src="../assets/menu1.svg"
            alt="Menu"
            class="w-[100px] md:w-0 h-"
          />
        </button>
      </div>
      <!-- MOBILE MENU -->
      <div class="Mobilemenu hidden">
        <ul class="text-sm font-bold gap-6 bg-background z-10">
          <a href="{{ route('home') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300 z-10"
            >
              Home
            </li></a
          >
          <a href="{{ route('about') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              About Us
            </li></a
          >
          <a href="{{ route('event') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Event
            </li></a
          >
          <a href="{{ route('blog') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Blog
            </li></a
          >
          <a href="{{ route('contact') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Contact Us
            </li></a
          >
        </ul>

        <div class="gap-6 mt-2 mb-2">
          <a href="{{ route('login') }}">
            <button
              class="border px-1 py-3 rounded-md font-bold font-xs bg-hijau w-full"
            >
              LOGIN
            </button>
          </a>
        </div>
      </div>
    </nav>

    <script>
      window.addEventListener("scroll", function () {
        var navbar = document.getElementById("navbar");
        if (window.scrollY > 0) {
          navbar.classList.add("bg-blues");
        } else {
          navbar.classList.remove("bg-blues");
        }
      });
    </script>

    <!-- END NAVBAR -->

    <!-- BACKGROUND CONTACT -->
    <section
      id="home"
      class="bg-[url('../assets/bg-contact.svg')] bg-cover bg-center relative"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-biru"
      >
        <h1
          class="text-[30px] md:text-[56px] font-extrabold text-end leading-tight md:leading-normal mt-96"
        >
          Contact Us
        </h1>
      </div>
    </section>
    <!-- END BACKGROUND CONTACT -->

    <!-- LET'S TALK WITH US -->
    <div class="md:ml-40 mt-10 md:mt-">
      <h1 class="text-black text-[24px] md:text-[36px] font-bold">
        Let's talk with us
      </h1>
      <p
        class="w-full md:w-[300px] text-[14px] md:text-[16px] font-normal font-popins"
      >
        Questions, comments, or suggestions? Simply fill in the form and we’ll
        be in touch shortly.
      </p>
    </div>
    <div
      class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-20"
    >
      <div class="bg-hijau rounded-xl w-full md:w-[600px]">
        <div class="py-10 md:py-14 px-6 md:px-14">
          <div class="">
            <h1
              class="text-white text-[20px] md:text-[27px] font-semibold font-popins"
            >
              info
            </h1>
            <span
              class="flex items-center mb-2 text-white text-[14px] md:text-[17px] py-7 font-normal"
            >
              <img
                src="../assets/email-contact.svg"
                alt=""
                class="mr-2"
              />hello@tbnalliance.org
            </span>
            <span
              class="flex items-center mb-2 text-white text-[14px] md:text-[17px] font-normal"
            >
              <img src="../assets/telp-contact.svg" alt="" class="mr-2" />+62
              2222 3333 4444
            </span>
            <span
              class="flex items-center mb-2 text-white text-[14px] md:text-[17px] font-normal py-7"
            >
              <img src="../assets/lokasi-contact.svg" alt="" class="mr-2" />Jl.
              M.H.Thamrin No.20, Menteng
            </span>
            <span
              class="flex items-center text-white text-[14px] md:text-[17px] font-normal"
            >
              <img src="../assets/jam-contact.svg" alt="" class="mr-2" />08.30 -
              17.00
            </span>
          </div>
        </div>
      </div>

      <div class="flex-col border p-14 md:p-[40px] rounded-xl">
        <div class="flex flex-col md:flex-row md:mb-4 md:gap-3">
          <input
            type="text"
            id="first_name"
            name="first_name"
            placeholder="First Name*"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[220px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
          />
          <input
            type="text"
            id="last_name"
            name="last_name"
            placeholder="Last Name*"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
          />
        </div>

        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email*"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[480px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
        />
        <div class="py-5">
          <input
            type="tel"
            id="phone_number"
            name="phone_number"
            placeholder="Phone Number*"
            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[480px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
          />
        </div>
        <input
          type="text"
          id="your_message"
          name="your_message"
          placeholder="Your Message...."
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[480px] p-3 py-14 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
        />
        <a href="{{ route('thanks') }}">
          <button
            class="mt-4 md:mt-10 border py-2 ml-2 md:ml-0 px-14 md:px-48 bg-hijau text-white rounded-3xl text-[18px] font-semibold font-popins"
          >
            Send Message
          </button>
        </a>
      </div>
    </div>
    <!-- END LET'S TALK WITH US -->

    <!-- MAPS -->
    <div class="flex flex-col justify-center items-center mt-16">
        <h1 class="text-[36px] font-bold">Where We Are</h1>
        <p class="text-[20px] font-normal">Find Us Via Maps</p>
    </div>
    <section
      id="home"
      class="bg-[url('../assets/peta-contact.svg')] bg-cover w-[1000px] h-[545px] mt-10 ml-72"
    >
        <div class="flex justify-center items-center gap-56">
          <h1 class="text-[32px] font-bold text-hijau mt-36 mr-36 ">
            <img src="../assets/map-contact.svg" alt="" />
            TBN American
          </h1>
          <h1 class="text-[32px] font-bold text-hijau mt-36">
            <img src="../assets/map-contact.svg" alt="" />
            TBN Asia
          </h1>
        </div>

        <div class="flex justify-center ml-[500px] gap-24">
          <h1 class="text-[32px] font-bold text-hijau mt-20">
            <img src="../assets/map-contact.svg" alt="" />
            TBN Afrika
          </h1>
          <h1 class="text-[32px] font-bold text-hijau ">
            <img src="../assets/map-contact.svg" alt="" />
            TBN Indonesia
          </h1>
        </div>
      </div>
    </section>
    <!-- END MAPS -->

    <!-- click -->
    <section>
        <div class="bg-background py-8 px-20">
            <h1 class="text-[27px] font-semibold w-[1215px]">Click on the links below to learn more about the ecosystems and impact in our founding chapter locations.</h1>
            <p class="text-[27px] font-semibold font-popins py-2">-Africa<a href="https://tbnetworkafrica.org/">tbnetworkafrica.org</a></p>
            <p class="text-[27px] font-semibold font-popins">-America<a href="https://tbn-americas.org/">tbnetworkafrica.org</a></p>
            <p class="text-[27px] font-semibold font-popins py-2">-Asia<a href="https://www.tbn.asia/">tbnetworkafrica.org</a></p>
            <p class="text-[27px] font-semibold font-popins">-Indonesia<a href="https://tbnindonesia.org/">tbnetworkafrica.org</a></p>
        </div>
    </section>
    <!-- END CLICK -->

    <!-- FOOTER -->
    <section class="bg-white mt-10">
      <div class="flex flex-col md:flex-row md:p-10 justify-between">
        <div class="w-full md:w-[400px] mb-5 md:mb-0">
          <img src="../assets/logo footer.svg" alt="" />
          <p
            class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins"
          >
            TBN Alliance adalah jaringan global wirausaha yang berorientasi pada
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
              ><img src="../assets/nav-instagram.svg" alt=""
            /></a>
            <a href="https://www.youtube.com/@tbnindonesia902"
              ><img src="../assets/nav-youtube.svg" alt=""
            /></a>
            <a href=""><img src="../assets/nav-whatsapp.svg" alt="" /></a>
            <a href=""><img src="../assets/nav-gmail.svg" alt="" /></a>
            <a href=""><img src="../assets/nav-link.svg" alt="" /></a>
          </div>
          <h1 class="font-popins font-semibold text-[21px] md:text-lg">
            Hubungi Kami
          </h1>
          <div class="flex gap-1 mt-2">
            <img
              src="../assets/icon email.svg"
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
          Copyright © 2023 - Transformational Business Network (TBN) Alliance -
          All rights reserved.
        </h1>
      </div>
    </section>

    <!-- END FOOTR -->
    <script src="../js/scrollnavbar.js"></script>
    <script src="../js/humberger.js"></script>
  </body>
</html>
