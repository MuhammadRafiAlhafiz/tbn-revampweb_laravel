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
      class="px-8 py-2 md:py-1 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
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
    <section id="home" class="bg-[url('/assets/bg-blog.svg')] bg-cover bg-center relative md:w-full h-[500px] md:h-[550px]">
        <div class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto text-white items-center">
            <div class="w-full md:w-[1000px] mt-[375px]">
                <div class="swiper-container"></div>
            </div>
        </div>
    </section>
    <!-- END Background Blog -->

    <!-- LatePost & PopularPost -->
    <section>
        <div class="flex justify-between mx-32 mt-20">
            <div class="">
                <div class="">
                  @foreach ($blogdetail as $blogdetails )
                    
              
                    <span class="text-[22px]">
                      {{$blogdetail->content}}
            </span>    @endforeach
                </div>
            </div>
            <div class="flex-column flex-col mx-32">
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
                        <div class="mt-10 gap-32">
                            <span>
                  <div class="flex">
                    <img src="/assets/latepos1.svg" alt="" class="w-[220px] h-[260px]" />
                    <span class="ms-32 flex-col justify-end align-middle">
                      <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">TBN Alliance : Kolaborasi Penting?</h1>
                      <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal">Meningkatkan Dampak Sosial dengan TBN Alliance</p>
                      <p class="w-[220px] text-biru text-[13px] font-normal font-popins">Nanda Ardika • 14 Mei 2024</p>
                      <a href=""><button class="border py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white">Read More</button></a>
                    </span>
                        </div>
                        </span>
                        <span>
                  <div class="flex mt-10">
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
    <div class="mt-10 flex align-middle justify-center">
        <img src="/assets/img-faktor-blog-detail.svg" class="w-[606px] h-[400px]" alt="img" />

    </div>
    <div class="mx-32 mt-10">
        <span class="text-[22px] ">
      menurut data World Bank, Tercatat Indonesia berada menempati peringkat sembilan dalam daftar negara dengan jumlah orang miskin terbesar di dunia. Madagaskar menempati peringkat pertama sebagai negara dengan jumlah orang miskin
      terbanyak. Disusul oleh Kongo, Monzambik, Nigeria, Tanzania, Bangladesh, Etiopia, India, Indonesia dan China Berdasarkan hasil Persentase dari Badan Pusat Statistik (BPS) mengenai Penduduk Miskin di Indonesia per Maret 2019 Sebesar
      9,41 Persen. Persentase penduduk miskin pada Maret 2019 sebesar 9,41 persen, menurun 0,25 persen poin terhadap September 2018 dan menurun 0,41 persen poin terhadap Maret 2018. Jumlah penduduk miskin pada Maret 2019 sebesar 25,14
      juta orang, menurun 0,53 juta orang terhadap September 2018 dan menurun 0,80 juta orang terhadap Maret 2018. Persentase penduduk miskin di daerah perkotaan pada September 2018 sebesar 6,89 persen, turun menjadi 6,69 persen pada
      Maret 2019. Sementara persentase penduduk miskin di daerah perdesaan pada September 2018 sebesar 13,10 persen, turun menjadi 12,85 persen pada Maret 2019. Dibanding September 2018, jumlah penduduk miskin Maret 2019 di daerah
      perkotaan turun sebanyak 136,5 ribu orang (dari 10,13 juta orang pada September 2018 menjadi 9,99 juta orang pada Maret 2019). Sementara itu, daerah perdesaan turun sebanyak 393,4 ribu orang (dari 15,54 juta orang pada September
      2018 menjadi 15,15 juta orang pada Maret 2019). Garis Kemiskinan pada Maret 2019 tercatat sebesar Rp425.250,-/kapita/bulan dengan komposisi Garis Kemiskinan Makanan sebesar Rp313.232,- (73,66 persen) dan Garis Kemiskinan Bukan
      Makanan sebesar Rp112.018,- (26,34 persen). Pada Maret 2019, secara rata-rata rumah tangga miskin di Indonesia memiliki 4,68 orang anggota rumah tangga. Dengan demikian, besarnya Garis Kemiskinan per rumah tangga miskin secara
      rata-rata adalah sebesar Rp1.990.170,-/rumah tangga miskin/bulan. Ini membuktikan dari tahun ke tahun jumlah angka kemiskinan yang terjadi di Indonesia mengalami penurunan, semua tidak lepas dari peran penting dan campur tangan
      pemerintah dalam mengatasi permasalahan kemiskinan dan meningkatkan sumber daya manusianya di Indonesia. beras Sejahtera, Kartu Indonesia Sehat dan bantuan non-tunai yang diberikan pemerintah dapat berkontribusi dengan baik pada
      penurunan kemiskinan ini. Selain itu juga hal yang perlu diperhatikan untuk dapat mengurangi kemiskinan di negeri ini dengan memperluas lapangan pekerjaan bagi masyarakat, memberikan bantuan pendidikan gratis kepada masyarakat yang
      tinggal jauh dipelosok dan putus sekolah. saat ini pemerintah telah mengadakan program bantuan pendidikan berupa wajib belajar sembilan tahun bagi masyarakat yang tidak mampu. dan yang terakhir Memberikan fasilitas yang memadai dan
      subsidi gratis. peran pemerintah diharapkan membantu dalam memberi fasilitas yang merata di setiap wilayah. Pemberian fasilitas tersebut dapat diwujudkan dengan melengkapi sejumlah sarana dan prasarana yang dinilai kurang atau masih
      belum cukup keberadaannya. Setelah fasilitas terpenuhi, diharapkan masyarakat dapat hidup dengan layak dan sejahtera serta permasalahan mengenai kemiskinan itu dapat diatasi dengan baik.
    </span>
    </div>
    <!-- End Content Image -->
   <!-- FOOTER -->
   <section class="bg-white mt-10">
      <div class="flex flex-col md:flex-row md:p-10 justify-between">
        <div class="w-full md:w-[400px] mb-5 md:mb-0">
          <img src="/assets/logo footer.svg" alt="" />
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
              ><img src="/assets/nav-instagram.svg" alt=""
            /></a>
            <a href="https://www.youtube.com/@tbnindonesia902"
              ><img src="/assets/nav-youtube.svg" alt=""
            /></a>
            <a href=""><img src="/assets/nav-whatsapp.svg" alt="" /></a>
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
          Copyright © 2023 - Transformational Business Network (TBN) Alliance -
          All rights reserved.
        </h1>
      </div>
    </section>

    <!-- END FOOTR -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/js/scrollnavbar.js"></script>
    <script src="/js/humberger.js"></script>
    <script src="/js/caraousel.js"></script>
</body>

</html>