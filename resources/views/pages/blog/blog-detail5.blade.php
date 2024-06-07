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
  style="background-image: url('{{ asset('assets/bg-blog-detail5.svg') }}');"
>
  <div
    class="flex justify-center flex-col mx-auto px-4 text-white"
  >
    <h1
      class="text-[30px] md:text-[56px] mt-96 ml-20 font-bold w-[800px]"
    >
    Kemiskinan dan Kerusakan Lingkungan</h1>
  </div>
</section>
  <!-- END Background Blog -->

    <!-- LatePost & PopularPost -->
    <section>
        <div class="flex justify-between mx-20 mt-10">
            <div class="">
                <div class="">
                    <span class="text-[30px] w-[821px] h-[2000px]">
                    Kemiskinan merupakan masalah multidimensi karena berkaitan dengan ketidakmampuan 
                    akses secara ekonomi, sosial budaya, politik dan partisipasi dalam masyarakat. 
                    Kemiskinan secara harfiah dapat dikatakan sebagai keadaan tidak memiliki apa-apa 
                    secara cukup. Kemiskinan juga didefinisikan sebagai suatu kondisi ketidakmampuan 
                    secara ekonomi untuk memenuhi standar hidup rata-rata masyarakat di suatu daerah. 
                    Kondisi ketidakmampuan ini ditandai dengan rendahnya kemampuan pendapatan untuk 
                    memenuhi kebutuhan pokok baik berupa pangan, sandang, maupun papan. Kemampuan pendapatan 
                    yang rendah ini juga akan berdampak berkurangnya kemampuan untuk memenuhi standar hidup 
                    rata – rata seperti standar kesehatan masyarakat dan standar pendidikan.

                    Dalam berbagai pandangan ada tiga jenis kemiskinan yang sering di kemukakan yaitu 
                    kemiskinan struktural, kemiskinan relatif dan kemiskinan absolut. Kemiskinan struktural 
                    adalah kemiskinan yang diderita oleh satu golongan masyarakat karena struktur sosial 
                    masyarakat tersebut tidak mampu memanfaatkan sumber-sumber pendapatan yang sebenarnya 
                    tersedia bagi mereka. Kemiskinan relatif merupakan kondisi kemiskinan karena pengaruh 
                    kebijakan pembangunan yang belum mampu menjangkau seluruh lapisan masyarakat sehingga 
                    menyebabkan ketimpangan distribusi pendapatan. 
            </span>
                </div>
            </div>
          <div class="flex-col mx-32">
          <div class="flex items-center gap-5">
             <img src="{{ asset('assets/detail-blog-lingkaran.svg') }}" alt="Detail Blog Lingkaran" class="w-16 h-16 mr-4">
              <div class="flex flex-col">
             <p class="font-bold">Aditya Sudarmadi </p>
             <p>22 Januari 2020</p>
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
    Sementara Kemiskinan absolut adalah apabila tingkat pendapatan seseorang dibawah garis kemiskinan 
    atau sejumlah pendapatannya tidak cukup untuk memenuhi kebutuhan hidup minimum (basic needs), 
    antara lain kebutuhan pangan, sandang, kesehatan, perumahan, dan pendidikan yang diperlukan untuk 
    hidup dan bekerja. Bentuk-bentuk kemiskinan yang ada serta berbagai ragam faktor penyebabnya, tentunya 
    sangat mempengaruhi rumusan kebijakan yang dibuat.

    Kemiskinan dan lingkungan hidup merupakan dua hal krusial yang sulit untuk dipisahkan karena keduanya 
    saling mempengaruhi sehingga membahas keduanya menjadi topik yang seolah tak ada habisnya, ibarat bicara
     duluan mana telur atau ayam?. Secara teori, lingkungan hidup adalah kesatuan ruang dengan semua benda, 
     daya, keadaan dan makhluk hidup, termasuk di dalamnya manusia dan perilakunya, yang mempengaruhi kelangsungan 
     peri kehidupan dan kesejahteraan manusia serta makhluk hidup lainnya (UU. No. 23/1997). Suparmoko (1997), 
     menyebutkan bahwa lingkungan hidup Indonesia sebagai suatu sistem terdiri dari lingkungan sosial (sociosystem), 
     lingkungan buatan (echnosystem) dan lingkungan alam (ecosystem). Lingkungan hidup meliputi sumberdaya alam yang 
     punya kemampuan untuk pulih kembali (recovery), namun akibat tekanan aktifitas manusia yang semakin ekstrim 
     dibandingkan dengan laju pemulihan sumberdaya alam yang lambat, maka akan terjadi degradasi bahkan kerusakan 
     sumberdaya alam yang semakin cepat, karena pergerakan upaya perusakan yang dilakukan oleh manusia lebih cepat 
     daripada kemampuan alam untuk melakukan pemulihan kembali (recovery). Tekanan penduduk apabila tidak sebanding 
     dengan ketersediaan sumberdaya alam tentu saja akan memperlambat pemulihan sumberdaya alam. Kerusakan terhadap 
     lingkungan sangat sulit untuk dihindari apabila intensitas tekanan terhadap lingkungan terus menerus terjadi 
     sehingga upaya pembangunan yang memperhatikan kaidah-kaidah lingkungan menjadi salah satu cara yang diperlukan 
     agar lingkungan tetap terjaga keberadaannya. Pengelolaan lingkungan yang salah akan berdampak fatal pada 
     kerusakan lingkungan yang berkepanjangan hingga tidak dapat diperbaiki lagi dalam jangka panjang.

    Kemiskinan dan kerusakan lingkungan berkorelasi negatif dan saling mempengaruhi. Kemiskinan terjadi karena
    kerusakan lingkungan atau sebaliknya lingkungan rusak karena adanya kemiskinan pada wilayah sekitar. Hubungan 
    sebab akibat tersebut dapat terus menerus berlanjut membentuk suatu siklus yang tidak berujung. Pada kondisi
    seperti itu, kemiskinan akan semakin parah dan lingkungan semakin rusak. Semakin lama kondisi itu berlangsung, 
    semakin kronis keadaanya. Sehingga status kemiskinan berubah secara tidak linier. Dari miskin, ke lebih miskin,
    dan akhirnya miskin sekali atau sangat miskin, demikian pula kecenderungan yang sama juga terjadi juga pada 
    kerusakan lingkungan. Hal ini ditandai dengan aktivitas dan kehidupan manusia yang melebihi kapasitas alam. 
    Manusia yang miskin untuk bertahan hidup karena tidak memiliki pilihan lain melakukan pemanfaatan SDA yang 
    berlebihan melampaui daya dukung (carrying capacity) dari sumber daya alam yang ada.

    Lalu bagaimana situasi yang terjadi di Provinsi NTB?, Pada Tahun 2018 Penduduk NTB lebih dari 700 ribu masih 
    hidup dibawah garis kemiskinan dengan penghasilan kurang dari US$ 2 per hari, bahkan angka kemiskinan Provinsi
     NTB masih lebih tinggi dari rata-rata angka kemiskinan Nasional. Kemiskinan menjadi salah satu pemicu terjadinya
      tekanan terhadap lingkungan yang luar biasa. Degradasi dan kerusakan lingkungan sulit dihindarkan ketika penduduk
       masih dililit kemiskinan. Intensitas pemanfaatan sumber daya alam semakin tinggi karena hanya inilah sebagai 
       satu-satunya tempat bergantung bagi kelangsungan hidup dalam kondisi miskin. Sebagai contoh apabila satu 
       keluarga saat ini memiliki lahan 1 Ha. nantinya bila memiliki 4 anak maka akan dibagi masing-masing 25 are. 
       Luas ini tentunya tidak akan mampu memenuhi kebutuhan hidup si anak dan keluarganya apalagi kalau lahan yang 
       dimiliki tersebut adalah lahan kering yang hanya di tanami 1 tahun sekali. Karena lahan tersebut tidak cukup 
       untuk membiayai hidup keluarga tersebut maka alternatif yang akan dilakukan adalah mencari sumber daya lahan 
       lain yang ada disekitarnya dan umumnya pilihan lahan tersebut adalah kawasan hutan. Lebih parahnya lagi apabila 
       lahan tersebut kemiringannya lebih dari 450 yang secara teknis sangat berbahaya untuk di garap menjadi lahan 
       pertanian karena dapat memicu longsor dan erosi. Dan kondisi lahan seperti ini tidak akan mampu bertahan lama 
       sebagai fungsi lahan pertanian karena karakteristik kemiringan yang tinggi bila dilakukan pengolahan secara 
       terus menerus maka lapisan top soil yang ada di permukaan lambat laun akan habis tergerus erosi sehingga pada 
       akhirnya akan menyisakan batuan saja yang tidak memungkinkan untuk ditumbuhi tanaman. Apabila lahan tersebut 
       sudah tidak produktif lagi karena lagi-lagi tidak ada pilihan lain maka pemanfaatan kawasan hutan untuk lahan 
       pertanian berpindah lagi ke tempat lain sehingga hutan akan semakin terdesak dan habis dimanfaatkan untuk lahan 
       pertanian baik secara legal melalui berbagai program pemanfaatan hutan maupun secara illegal melalui main 
       kucing-kucingan dengan aparat yang berwenang. Kondisi ini terus berjalan dan dilakukan secara massive dan 
       berjamaah dalam kawasan yang luas sehingga menyebabkan kerusakan sumber daya lahan yang parah dan berdampak 
       pada terjadinya bencana longsor dan banjir bandang. Kejadian longsor dan banjir bandang yang terjadi biasanya 
       tidak hanya membawa air dari lahan yang lebih atas tetapi juga membawa tanah, dan nutrisi serta tanaman yang 
       ada di atasnya sehingga paripurnalah kerusakan yang terjadi pada sumber daya lahan tersebut.

      Kondisi di atas merupakan gambaran umum yang terjadi di Provinsi NTB, dimana akibat perkembangan pertumbuhan 
      penduduk yang terus meningkat menjadi 5.013.687 jiwa tahun 2018 dengan kepadatan 248,78 jiwa/km2, menyebabkan 
      tekanan terhadap lingkungan semakin berat yang ditunjukkan oleh semakin luasnya lahan kritis di NTB yaitu seluas
       870.211 hektar lebih yang terdiri dari dalam kawasan hutan seluas 432.941 hektar dan diluar kawasan hutan seluas 
       437.270 hektar. Terjadi peningkatan seluas 291.565 hektar jika dibandingkan dengan tahun 2016 seluas 578.646 
       hektar. Kondisi ini akan terus terjadi kedepannya jika seluruh komponen yang ada di NTB ini tidak segera 
       berbenah memperbaiki keadaan dengan peningkatan kesadaran secara menyeluruh bahwa seluruh aktifitas kita di 
       alam ini dalam rangka memanfaatkan potensi SDA harus dilakukan secara bertanggung jawab dengan mengutamakan 
       kelestariannya. Apabila kaidah-kaidah kelestarian alam ini kita abaikan maka akan tiba saatnya alam ini 
       membalasnya dengan bencana dan apabila hal tersebut terjadi maka akan semakin banyak kerugian yang diperoleh 
       manusia, baik sebagai akibat dari bencana tersebut, maupun akibat dari kerusakan SDA yang secara langsung 
       berkontribusi pada menurunnya produktifitas lahan yang diindikasikan oleh hilangnya unsur hara dari tanah 
       maupun semakin menipisnya ketersediaan air tanah. Dan jika berbagai dampak tersebut telah semakin paripurna 
       maka manusia akan menuai buah dari hasil kerjanya berupa menurunnya tingkat kesejahteraan akibat tidak ada lagi 
       sumber mata pencaharian yang biasanya mendapatkan kemurahan dari berkah sumber daya alam. Semoga kita semua 
       diberikan kesadaran bahwa jika kita bersahabat dengan alam maka alam akan membalasnya dengan meningkatkan 
       kesejahteraan kita, tapi jika kita bermusuhan dengan alam maka alam akan membalasnya dengan bencana dan 
       kemiskinan.

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