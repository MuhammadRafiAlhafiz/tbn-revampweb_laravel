<!DOCTYPE html>
<html data-theme="light" lang="en">

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
     <nav
      id="navbar"
      class="px-8 py-3 md:py-1 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
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
  class="bg-cover bg-center relative md:w-full md:h-[600px]"
  style="background-image: url('{{ asset('assets/bg-blog-detail3.svg') }}');"
>
  <div
    class="flex justify-center flex-col mx-auto px-4 text-white"
  >
    <h1
      class="text-[30px] md:text-[56px] mt-96 ml-20 font-bold w-[800px]"
    >
    Mengapa Reuse Penting dalam Upaya Mendukung Lingkungan & Komunitas</h1>
  </div>
</section>
  <!-- END Background Blog -->

    <!-- LatePost & PopularPost -->
    <section>
        <div class="flex justify-between mx-20 mt-10">
            <div class="">
                <div class="">
                    <span class="text-[30px] w-[821px] h-[2000px]">
                    Dalam upaya menjaga lingkungan dan membangun masyarakat yang berkelanjutan,
                     konsep reuse atau penggunaan kembali memiliki peran yang sangat penting. 
                     Dibandingkan dengan hanya mengandalkan penggunaan sekali pakai atau pembuangan, 
                     reuse menawarkan pendekatan yang lebih berkelanjutan dengan memanfaatkan kembali 
                     barang atau material yang sudah ada. Mari kita telaah lebih dalam mengapa reuse 
                     menjadi kunci dalam menjaga bumi kita dan memperkuat komunitas kita.
                     1. Mengurangi Sampah:
                      Salah satu manfaat utama dari praktik reuse adalah kemampuannya untuk mengurangi 
                      jumlah sampah yang dihasilkan. Dengan mengambil kembali dan menggunakan kembali 
                      barang-barang yang masih dapat digunakan, kita dapat mengurangi jumlah limbah yang 
                      masuk ke tempat pembuangan akhir, membantu mengurangi pencemaran lingkungan dan 
                      mengurangi tekanan pada sistem pengelolaan sampah.

                    2. Menghemat Sumber Daya Alam:
                    Reuse juga berperan dalam menghemat sumber daya alam yang berharga. Dengan memperpanjang 
                    umur pakai barang-barang yang sudah ada, kita mengurangi kebutuhan akan bahan baku baru,
                     seperti kayu, logam, atau plastik. Ini membantu mengurangi tekanan ekstraksi sumber daya
                      alam yang berlebihan dan mengurangi dampak ekologis dari kegiatan industri.
            </span>
                </div>
            </div>
          <div class="flex-col mx-32">
          <div class="flex items-center gap-5">
             <img src="{{ asset('assets/detail-blog-lingkaran.svg') }}" alt="Detail Blog Lingkaran" class="w-16 h-16 mr-4">
              <div class="flex flex-col">
             <p class="font-bold">Nanda Ardika</p>
             <p>14 Mei 2024</p>
             </div>
          </div>

                <div>
                    <h1 class="font-popins text-[30px] font-semibold">Populer Post</h1>
                    <span class="flex">
              <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[162px] h-[4px]" />
              <img src="/assets/garis-blog-gray-popular.svg" alt="" class="w-[213px] h-[4px]" />
            </span>
                    <span class="flex mt-7 gap-5">
              <img src="/assets/blog-popular1.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">TBN Alliance: Kolaborasi Penting?</h1>
            </span>
                    <span class="flex py-10 gap-5">
              <img src="/assets/blog-popular2.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">kemiskinan dan Kerusakan Lingkungan</h1>
            </span>
                    <span class="flex gap-5">
              <img src="/assets/blog-popular3.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">Mengelola Sampah dengan Metode 3R</h1>
            </span>
                </div>
                <!-- Populer Post & Latest Post -->
                <div class="mt-10">
                    <h1 class="font-popins text-[34px] font-semibold">Latest Post</h1>
                    <span class="flex">
              <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[242px] h-[4px]" />
              <img src="/assets/garis-blog-gray.svg" alt="" />
            </span>
                    <div class="">
                        <div class="mt-10 gap-10">
                            <span>
                  <div class="flex gap-10">
                    <img src="/assets/latepos1.svg" alt="" class="w-[220px] h-[260px]" />
                    <span class=" flex-col justify-end align-middle">
                      <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">TBN Alliance : Kolaborasi Penting?</h1>
                      <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal">Meningkatkan Dampak Sosial dengan TBN Alliance</p>
                      <p class="w-[220px] text-biru text-[13px] font-normal font-popins">Nanda Ardika • 14 Mei 2024</p>
                      <a href=""><button class="border py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white">Read More</button></a>
                    </span>
                        </div>
                        </span>
                        <span>
                  <div class="flex mt-10 gap-10">
                    <img src="/assets/latepos2.svg" alt="" class="w-[220px] h-[260px]" />
                    <span class="">
                      <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">Menuntaskan Kemiskinan Melalui Pertanian</h1>
                      <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal mt-4">Upaya pemberantasan kemiskinan di Indonesia berada pada jalur tepat.</p>
                      <p class="w-[220px] text-biru text-[13px] font-normal font-popins">KPPN BITUNG • 07 November 2023</p>
                      <a href=""><button class="border mt-5 py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white">Read More</button></a>
                    </span>
                    </div>
                    </span>
                </div>
            </div>
        </div>
        <!-- END LatePost & PopularPost -->
        </div>
        </div>
    </section>
    <!-- Content Image -->

<div class="mx-32 mt-10">
    <span class="text-[27px] ">
    3. Mendorong Kreativitas dan Inovasi:
    Praktik reuse juga mendorong kreativitas dan inovasi dalam komunitas. Dengan memanfaatkan 
    kembali barang-barang yang sudah ada, kita sering kali dihadapkan pada tantangan untuk 
    menciptakan solusi baru dan menggunakan sumber daya yang tersedia dengan cara yang kreatif. 
    Ini dapat menginspirasi orang untuk menemukan cara baru untuk memanfaatkan barang-barang bekas dan 
    menciptakan produk yang unik dan berguna.
    
    4. Mendukung Ekonomi Lokal dan Sosial:
    Reuse juga dapat berdampak positif pada ekonomi lokal dan sosial. Dengan membeli atau menggunakan 
    kembali barang-barang dari pengecer lokal atau usaha sosial, kita dapat mendukung pengusaha kecil 
    dan komunitas yang rentan. Hal ini dapat membantu menciptakan lapangan kerja lokal dan memperkuat 
    ikatan sosial dalam masyarakat.
    
    5. Menyebarkan Kesadaran Lingkungan:
    Praktik reuse juga membantu menyebarkan kesadaran tentang pentingnya menjaga lingkungan di kalangan 
    masyarakat. Dengan menunjukkan contoh dan berbagi informasi tentang manfaat reuse, kita dapat 
    menginspirasi orang lain untuk mengadopsi kebiasaan yang lebih berkelanjutan dalam kehidupan sehari-hari mereka.
    <span>
    <img src="{{ asset('assets/blog-detail3image.svg') }}" class="flex justify-center items-center mx-auto py-4">
    </span>
    Jadi, dengan semua manfaatnya yang signifikan, penting bagi kita semua untuk memprioritaskan praktik reuse dalam kehidupan kita sehari-hari. Melalui langkah-langkah sederhana seperti mendaur ulang barang-barang, membeli barang bekas, atau memanfaatkan kembali kemasan, kita dapat berkontribusi pada upaya global untuk menjaga bumi kita dan membangun masyarakat yang lebih berkelanjutan.
    </span>
</div>
    <!-- End Content Image -->

    <!-- FOOTER -->
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