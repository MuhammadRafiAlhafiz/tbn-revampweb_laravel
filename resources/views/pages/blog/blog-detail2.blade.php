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
  style="background-image: url('{{ asset('assets/bg-blog-detail2.svg') }}');"
>
  <div
    class="flex justify-center flex-col mx-auto px-4 text-white"
  >
    <h1
      class="text-[30px] md:text-[56px] mt-96 ml-20 font-bold w-[800px]"
    >
    Reduce: Pengertian, Prinsip, Manfaat dan Penerapannya</h1>
  </div>
</section>
  <!-- END Background Blog -->

    <!-- LatePost & PopularPost -->
    <section>
        <div class="flex justify-between mx-20 mt-10">
            <div class="">
                <div class="">
                    <span class="text-[30px] w-[821px] h-[2000px]">
                    Reduce adalah mengurangi segala sesuatu yang menyebabkan sampah semakin 
                    menumpuk. Mengutip dari United States Environmental Protection Agency atau 
                    Badan Perlindungan Lingkungan Amerika Serikat (AS), cara terbaik untuk melakukan 
                    proses reduce adalah dengan tidak membuat sampah. Sebab, membuat produk baru akan
                     menimbulkan efek rumah kaca yang berkontribusi pada perubahan iklim dan memerlukan 
                     banyak energi dan juga bahan mentah yang diekstraksi dari bumi dan produknya akan 
                     dikirim untuk kemudian dijual.
                      Sebagai hasilnya, reduce dan reuse adalah salah satu langkah yang efektif untuk 
                      melindungi sumber daya alam, menjaga lingkungan, dan menghemat uang. Sedangkan menurut 
                      Missouri Department of Natural Resources atau Departemen Sumber Daya Alam Missouri, 
                      menyebutkan salah satu cara melakukan reduce adalah dengan mengingat produsen dalam 
                      mengontrol bahan apa saja yang akan dipakai dan mengemas produk. Sementara kamu yang 
                      memutuskan barang apa saja yang akan dibeli dan berapa banyak yang diperlukan. Dengan 
                      begitu, kamu bisa meminimalisir pemborosan sebelum melakukan pembelian sebuah produk. 
                      Jadi, reduce adalah mengurangi penggunaan barang. Kata reduce ini biasanya ditemukan dalam 
                      pengelolaan sampah dan juga gaya hidup yang ramah lingkungan atau go green.
            </span>
                </div>
            </div>
          <div class="flex-col mx-32">
          <div class="flex items-center gap-5">
             <img src="{{ asset('assets/detail-blog-lingkaran.svg') }}" alt="Detail Blog Lingkaran" class="w-16 h-16 mr-4">
              <div class="flex flex-col">
             <p class="font-bold">Amira K</p>
             <p>07 September 2022</p>
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
              <h1 class="w-[400px] h-[100px] font-popins text-[21px] font-semibold">TBN Alliance: Kolaborasi Penting?</h1>
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
                      <a href=""><button class="border py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white mt-5">Read More</button></a>
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
    A. Contoh Reduce
Contoh kegiatan reduce yaitu membeli produk kemasan yang bisa digunakan kembali, membeli barang yang bisa diisi ulang. Misalnya saja pewangi pakaian, pensil, dan pulpen yang sudah disediakan isi ulangnya. Apabila kamu mempunyai kertas yang sudah tidak terpakai, tapi juga memiliki banyak ruang bersih yang masih bisa ditulis atau digambar, maka jangan langsung membuangnya. Sebab, kertas tersebut bisa digunakan untuk menulis catatan kecil. Belilah barang-barang seperlunya saja karena barang yang sudah dibeli akan masuk ke rumah atau kamar. Apabila ruangan yang kamu memiliki cenderung luas, maka akan menjadi indah karena penyimpanannya ditata dengan rapi.

B. Prinsip Reduce:
Menjadi bagian dari gaya hidup, Karena menjadi bagian dari gaya hidup, maka artinya prinsip tersebut harus lebih versatile dalam penerapannya. Dengan mengurangi limbah merupakan langkah awal yang paling mudah. Selain itu, ada banyak lagi cara yang dapat digunakan untuk meminimalisir sampah yang dihasilkan. Menerapkan prinsip reduce sendiri juga dapat dilakukan dengan memilih barang atau produk yang dikemas dengan bahan organik atau mengurangi pemilihan produk dengan kemasan non-organik. Sederhananya, setidaknya saat produk akan digunakan, maka kemasan yang dimiliki produk tersebut tidak akan menambah limbah jangka panjang.
Teknologi baru ramah lingkungan, Saat produk dengan kemasan sekali pakai menurun penjualannya, maka secara otomatis industri akan membuat sebuah inovasi yang lebih ramah lingkungan. Perubahan kecil dapat mendorong terciptanya satu teknologi produk kemasan baru, yang mana nantinya akan berdampak dalam jangka panjang.
Masa depan berkelanjutan, Dengan orientasi produk yang semakin hari semakin bergeser, maka akan tercipta juga masa depan yang lebih berkelanjutan. Yaitu tidak hanya menekankan pada nilai fungsi saja, tapi juga mempertimbangkan keberlanjutan produk dan dampaknya pada lingkungan.
Pelestarian sumber daya alam, Secara sederhana, saat berbagai bahan berkurang penggunaannya, maka sumber daya tak terbarukan yang dipakai dalam proses produksi juga akan semakin menurun. Hal tersebut akan memberikan efek penghematan sumber daya alam tak terbarukan. Sehingga bisa bertahan sampai waktu yang lebih lama.
Mengurangi polusi, Berbagai jenis limbah yang tercipta dari proses produksi, konsumsi, dan distribusi juga dapat ditekankan ke titik terendah. Polusi udara, air, dan juga tanah akan terjadi dalam kadar yang lebih kecil. Sehingga alam dapat pulih secara perlahan dan memberikan manfaat yang maksimal untuk umat manusia.
Meminimalisir produksi karbodioksida, Ketika prinsip reduce dilakukan oleh banyak orang, maka pelepasan karbondioksida ke atmosfer juga akan semakin berkurang. Efeknya yaitu kondisi ozon akan bisa semakin membaik dari waktu ke waktu. Sehingga efek pemanasan global dapat dikurangi secara berkelanjutan.

C.  Tips Melakukan Reduce:
Berpikir go green sebelum belanja, Mengubah gaya hidup menjadi eco-friendly atau ramah lingkungan adalah satu cara untuk berkontribusi dalam mengurangi emisi gas rumah kaca ketika kamu berbelanja kebutuhan sehari-hari. Misalnya saja dengan mengurangi pembuangan sisa makanan, hal itu dapat dilakukan dengan cara membeli hanya yang diperlukan saja. Kemudian membuat kompos dari sampah makanan dan mendonasikan makanan yang tidak digunakan ke bank makanan atau penampungan. Selain itu, kamu juga bisa berhemat dengan cara menggunakan pakaian lama, tas belanja kain, dan tempat makan untuk membantu dalam mengurangi sampah plastik dan styrofoam.
Membeli barang bekas, Dengan membeli dan menggunakan barang bekas, maka kamu sudah turut berkontribusi dalam mengurangi emisi yang dihasilkan oleh produksi bahan baru dan mengurangi pembuangan ke tempat sampah. Mendonasikan pakaian bekas yang sudah tidak terpakai, elektronik, atau bahan bangaun supaya bisa dimanfaatkan oleh orang lain.
Membeli produk dengan label daur ulang, Cek terlebih dulu untuk melihat apakah produk atau kemasan tersebut terbuat dari bahan yang bisa didaur ulang. Ketahui dulu sebelum kamu membuangnya. Kemudian, kumpulkan sampah daur ulang di rumah dan setorkan ke bank sampah.
Usaha untuk memperbaiki produk daripada membuangnya, Memperbaiki dan merawat produk seperti pakaian, peralatan rumah tangga, ban, dan lainnya untuk mengurangi pembuangan ke tempat sampah. Ini merupakan salah satu upaya yang bisa kita lakukan untuk melindungi lingkungan dari sampah yang kian menumpuk.
Pinjam atau sewa barang yang jarang digunakan, Meminjam atau menyewa adalah salah satu langkah yang cukup efektif untuk mengurangi sampah. Misalnya saja dengan menyewa produk dekorasi pesta, perabotan rumah tangga, dan juga peralatan rumah lainnya. Selain cara-cara yang sudah disebutkan diatas, beberapa hal di bawah ini dapat kamu lakukan untuk menerapkan prinsip reduce. Pastinya, kamu dapat melakukan banyak hal lain selain yang sudah dituliskan di dalam artikel ini, sesuai kebutuhan dan keinginanmu.
a. Kurangi membeli barang yang   tidak dibutuhkan dan hanya kamu inginkan saja. Selain bisa menjadi dasar penerapan prinsip ini, kamu juga bisa lebih menghemat pengeluaran rutin.
b. Menggunakan dua sisi kertas secara maksimal dalam menulis ataupun fotokopi. Setidaknya, dengan cara yang satu ini, kamu lebih bisa menghemat setengah penggunaan kertas.
c. Mengurangi penggunaan bahan-bahan sekali pakai yang dapat menjadi limbah jangka panjang.
d. Memaksimalkan penggunaan alat penyimpanan elektronik yang dapat dengan mudah digantikan datanya.
e. Pastikan kamu sudah menggunakan produk yang bisa diisi ulang. Selain menerapkan prinsip reuse, hal tersebut juga akan secara signifikan mengurangi sampah non-organik yang dihasilkan.
f. Hindari produk yang dapat menghasilkan sampah dalam jumlah yang besar.
g. Pilihlah produk dengan kemasan yang dapat didaur ulang, baik itu dengan proses yang alami atau dengan proses buatan untuk pengolahan kembali.
h. Membawa bekal makan siang dengan menggunakan kotak makan yang dapat digunakan berulang kali.
i. Menggunakan botol air minum yang dapat diisi air kembali, bukan botol sekali pakai.

Di zaman sekarang ini, tidak sedikit masyarakat yang masih kurang memperhatikan keindahan dan keasrian lingkungan. Bahkan, banyak lahan hijau yang luas justru dijadikan sebagai pusat perbelanjaan, gedung-gedung tinggi, dan lain sebagainya. Oleh karena itu, metode 3R ini merupakan kegiatan yang banyak berperan dalam melestarikan lingkungan.
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