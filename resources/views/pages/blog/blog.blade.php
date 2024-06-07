<!DOCTYPE html>
<html data-theme="light" lang="en">
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
    <nav
      id="navbar"
      class="px-8 py-2 md:py-3 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
    >
      <div class="flex items-center justify-between">
        <span class="flex items-center space-x-2 md:ml-10 py-1 z-10 md:py-0">
          <a href="{{ route('home') }}"
            ><img
              src="/assets/logo nav.svg"
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
            src="/assets/menu1.svg"
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

    <!-- Background Blog -->
    <section
      id="home"
      class="bg-[url('/assets/bg-blog.svg')] bg-cover bg-center relative md:w-full h-[500px] md:h-[550px]"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto text-white items-center"
      >
        <div class="w-full md:w-[1000px] mt-[375px]">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div
                  class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-2xl shadow-md"
                >
                  <img
                    src="/assets/banner-blog1.svg"
                    alt="Image 1"
                    class="object-cover w-[1106px] h-[519px]"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-lg shadow-md"
                >
                  <img
                    src="/assets/banner-blog2.svg"
                    alt="Image 2"
                    class="object-cover w-[1106px] h-[519px]"
                  />
                </div>
              </div>
              <div class="swiper-slide">
                <div
                  class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-lg shadow-md"
                >
                  <img
                    src="/assets/banner-blog3.svg"
                    alt="Image 3"
                    class="object-cover w-[1106px] h-[519px]"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END Background Blog -->

    <!-- TOP ARTICLES -->
    <section class="mt-[300px] mx-20">
      <h1 class="font-popins text-[56px] font-bold ">TOP ARTICLES</h1>
      <div class="flex justify-between items-center mt-10">
        <!-- Article 1 -->
        <div class="">
          <img
            src="/assets/blog-artikel1.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3"
          >
            Upaya Pemerintah Mengatasi Kemiskinan di Indonesia
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            Kemiskinan suatu topik yang terus diperbincangkan sampai saat ini,
            sebagai indikator tolak ukur mengenai kesejahteraan dan kemakmuran
            masyarakat.
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            William David P • 06 Februari 2020
          </p>
          <a href="{{ route('blog-detail1') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
        <!-- END Article 1 -->

        <!-- Article 2 -->
        <div class="">
          <img
            src="/assets/blog-artikel2.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3"
          >
            Reduce: Pengertian, Prinsip, Manfaat dan Penerapannya
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            Konsep green living sekarang ini menjadi salah satu tren yang
            diikuti oleh banyak orang. Rumus 3R, dipecahkan menjadi reduce,
            reuse, dan recycle.
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            Amira K • 07 September 2022
          </p>
          <a href="{{ route('blog-detail2') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
        <!-- END Article 2 -->

        <!-- Article 3 -->
        <div class="">
          <img
            src="/assets/blog-artikel3.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[350px] h-[103px] font-popins text-[23px] font-semibold mt-3"
          >
            Mengapa Reuse Penting dalam Upaya Mendukung Lingkungan & Komunitas
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            Dalam upaya menjaga lingkungan dan membangun masyarakat yang
            berkelanjutan, konsep reuse atau penggunaan kembali memiliki peran
            yang sangat penting.
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            Nanda Ardika • 14 Mei 2024
          </p>
          <a href="{{ route('blog-detail3') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
      </div>
      <!-- END Article 3 -->

      <!-- Article 4 -->
      <div class="flex justify-between items-center mt-20">
        <div class="">
          <img
            src="/assets/blog-artikel4.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[379px] h-[103px] font-popins text-[23px] font-semibold mt-3"
          >
            Kemiskinan Struktural, Pendidikan, dan Indonesia Emas 2045
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            BPJS Ketenagakerjaan siap memberikan pengobatan dan perawatan hingga
            sembuh kepada tenaga medis yang terdaftar sebagai peserta.
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            Waode N • 05 November 2023
          </p>
          <a href="{{ route('blog-detail4') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
        <!-- END Article 4 -->

        <!-- Article 5 -->
        <div class="">
          <img
            src="/assets/blog-artikel5.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3"
          >
            Kemiskinan dan Kerusakan Lingkungan
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            Jumlah penderita TBC di Kabupaten Majalengka mencapai 5.000 kasus
            hingga Oktober 2022. Lalumenjadi permasalahan serius bagi penanganan
            penyakit TBC.
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            Aditya Sudarmadi • 22 Januari 2020
          </p>
          <a href="{{ route('blog-detail5') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
        <!-- END Article 5 -->

        <!-- Article 6 -->
        <div class="">
          <img
            src="/assets/blog-artikel6.svg"
            alt=""
            class="w-[377px] h-[444px]"
          />
          <h1
            class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3"
          >
            Mengelola Sampah dengan Metode 3R
          </h1>
          <p class="w-[375px] h-[125px] font-popins text-[20px] font-normal">
            Reduce (mengurangi), Reuse (menggunakan ulang), Recycle (mendaur
            ulang) atau lebih dikenal sebagai 3R merupakan istilah sederhana
          </p>
          <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
          <p
            class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16"
          >
            Dinas Kesehatan • 01 Agustus 2023
          </p>
          <a href="{{ route('blog-detail6') }}"
            ><button
              class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white"
            >
              Read More
            </button></a
          >
        </div>
      </div>
      <a href="{{ route('blog') }}" class="flex justify-center items-center text-center mt-28"
        ><button
          class="border py-[14px] px-[98px] flex justify-center items-center gap-[10px] rounded-3xl bg-hijau text-white text-center text-[16px] font-semibold"
        >
          Loading More
        </button></a
      >
    </section>
    <!-- END Article 6 -->
    <!-- END TOP ARTICLES -->

    <!-- LatePost & PopularPost -->
    <section>
      <div class="flex justify-between mx-32 mt-20">
        <div>
          <h1 class="font-popins text-[34px] font-semibold">Latest Post</h1>
          <span class="flex">
            <img
              src="/assets/garis-blog-latepost.svg"
              alt=""
              class="w-[242px] h-[4px]"
            />
            <img src="/assets/garis-blog-gray.svg" alt="" />
          </span>
          <div class="flex mt-10 gap-32">
            <span>
              <img
                src="/assets/latepos1.svg"
                alt=""
                class="w-[220px] h-[260px]"
              />
              <h1
                class="w-[220px] h-[72px] font-popins text-[18px] font-semibold"
              >
                TBN Alliance: Kolaborasi Penting?
              </h1>
              <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal">
                Meningkatkan Dampak Sosial dengan TBN Alliance
              </p>
              <p
                class="w-[220px] text-biru text-[13px] font-normal font-popins"
              >
                Nanda Ardika • 14 Mei 2024
              </p>
            </span>
            <span>
              <img
                src="/assets/latepos2.svg"
                alt=""
                class="w-[220px] h-[260px]"
              />
              <h1
                class="w-[220px] h-[72px] font-popins text-[18px] font-semibold"
              >
                Menuntaskan Kemiskinan Melalui Pertanian
              </h1>
              <p
                class="w-[220px] h-[72px] font-popins text-[16px] font-normal py-2"
              >
                Upaya pemberantasan kemiskinan di Indonesia berada pada jalur
                tepat.
              </p>
              <p
                class="w-[220px] text-biru text-[13px] font-normal font-popins mt-2"
              >
                KPPN BITUNG • 07 November 2023
              </p>
            </span>
          </div>
        </div>
        <div>
          <h1 class="font-popins text-[34px] font-semibold">Populer Post</h1>
          <span class="flex">
            <img
              src="/assets/garis-blog-latepost.svg"
              alt=""
              class="w-[162px] h-[4px]"
            />
            <img
              src="/assets/garis-blog-gray-popular.svg"
              alt=""
              class="w-[213px] h-[4px]"
            />
          </span>
          <span class="flex mt-7 gap-5">
            <img
              src="/assets/blog-popular1.svg"
              alt=""
              class="w-[155px] h-[93px]"
            />
            <h1
              class="w-[193px] h-[83px] font-popins text-[21px] font-semibold"
            >
              TBN Alliance: Kolaborasi Penting?
            </h1>
          </span>
          <span class="flex py-10 gap-5">
            <img
              src="/assets/blog-popular2.svg"
              alt=""
              class="w-[155px] h-[93px]"
            />
            <h1
              class="w-[193px] h-[83px] font-popins text-[21px] font-semibold"
            >
              kemiskinan dan Kerusakan Lingkungan
            </h1>
          </span>
          <span class="flex gap-5">
            <img
              src="/assets/blog-popular3.svg"
              alt=""
              class="w-[155px] h-[93px]"
            />
            <h1
              class="w-[193px] h-[83px] font-popins text-[21px] font-semibold"
            >
              Mengelola Sampah dengan Metode 3R
            </h1>
          </span>
        </div>
      </div>
    </section>
    <!-- END LatePost & PopularPost -->

   <    <!-- FOOTER -->
    <section class="bg-white mt-10">
      <div class="flex flex-col md:flex-row md:p-10 justify-between mx-10">
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/scrollnavbar.js"></script>
    <script src="../js/humberger.js"></script>
    <script src="../js/caraousel.js"></script>
  </body>
</html>
