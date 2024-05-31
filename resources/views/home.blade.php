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

    <!-- HOME PAGE -->
    <section
      id="home"
      class="bg-[url('../assets/navbar.svg')] bg-cover bg-center relative w-full"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-white"
      >
        <h1
          class="text-[30px] md:text-[56px] font-bold text-center leading-tight md:leading-normal"
        >
          Transforming Businesses, Transforming the World With TBN Alliance!
        </h1>
        <h1
          class="font-semibold text-[15px] md:text-[27px] text-center leading-tight md:leading-normal mt-7 md:mt-8"
        >
          TBN Alliance invites you to be part of a vibrant community geared
          towards success! Together, we can create opportunities, expand
          networks, and achieve remarkable feats. Let's make dreams happen
          together!
        </h1>
      </div>
    </section>
    <!-- END HOME PAGE -->

    <!-- ABOUT TBN -->
    <section
      id="about"
      class="bg-[url('../assets/baner1.svg')] bg-cover bg-center relative">
      <div
        class="max-w-[1200px] min-h-[100vh] py-24 flex flex-col md:flex-row items-center justify-center mx-auto px-4">
        <a
          href="https://www.youtube.com/watch?v=Kgrumz_76RI&t=3s"
          class="w-full md:max-w-md mx-auto md:mr-12 md:w-[700px] md:h-[300px]"
          ><img src="../assets/content video.svg" alt="ini video"
        /></a>
        <div class="md:w-1/2 text-white md:mb-8">
          <h1
            class="text-2xl md:text-4xl font-bold mb-4 mt-5 text-center md:text-start"
          >
            About TBN Alliance
          </h1>
          <p class="text-sm md:text-base">
            The business world is currently experiencing a significant
            transformation. Consumers, investors and regulators are increasingly
            demanding that companies operate sustainably, taking into account
            their impact on the environment and society.
          </p>
          <p class="text-sm md:text-base mt-4">
            The Transformational Business Network (TBN) Alliance is a global
            community of visionary business leaders committed to building a more
            sustainable and profitable future. We pioneer innovative solutions
            that empower companies to thrive while minimizing their
            environmental impact.
          </p>
          <a href="{{ route('about') }}"
            ><button
              class="border-2 border-hijau text-hijau p-2 rounded-[16px] mt-4 hover:bg-slate-400 duration-300"
            >
              LEARN MORE
            </button></a
          >
        </div>
      </div>
    </section>
    <!-- END CONTENT ABOUT -->

    <!-- CONTENT OUR MISSION -->
    <section
      class="bg-[url('../assets/heatmap.svg')] bg-cover bg-center relative"
    >
      <div
        class="sm:h-[800px] flex flex-col md:flex-row items-center justify-center px-10 gap-28"
      >
        <div class="md:w-[520px] relative bottom-20">
          <h1 class="text-center font-bold text-[34px] mt-32 md:mt-0">
            Our Mission
          </h1>
          <p class="mt-10 md:mt-28 text-justify text-[21px] font-semibold">
            The TBN Alliance nurtures purpose-driven businesses to thrive,
            aiming to reduce poverty and promote environmental sustainability.
            We foster a global movement for social good, empowering
            entrepreneurs, and directly benefiting families and communities. Our
            ambitious aim is to ignite an impact movement, uniting people
            worldwide to leverage business for social transformation,
            particularly supporting SMEs in emerging markets.
          </p>
        </div>
        <div class="flexn flex-col">
          <div
            class="flex md:w-[550px] w-[350px] ml-10 md:ml-0 h-[200px] rounded-tl-[60px] rounded-tr-[98px] rounded-br-[98px] rounded-bl-[98px] bg-biru"
          >
            <span>
              <img
                src="../assets/icon_ourmission1.svg"
                alt=""
                class="relative right-[2px] bottom-[2px]"
              />
            </span>
            <p
              class="text-hijau font-semibold w-[250px] my-auto ml-10 text-[21px]"
            >
              Developing sociopreneurs through educational institutions to bring
              social impact
            </p>
          </div>
          <div
            class="flex my-8 md:w-[550px] w-[350px] ml-10 md:ml-0 h-[200px] rounded-tl-[60px] rounded-tr-[98px] rounded-br-[98px] rounded-bl-[98px] bg-biru"
          >
            <span>
              <img
                src="../assets/icon_ourmission2.svg"
                alt=""
                class="relative right-[2px] bottom-[2px]"
              />
            </span>
            <p
              class="text-hijau font-semibold w-[250px] my-auto ml-10 text-[21px]"
            >
              Fostering environments for sociopreneurs to flourish and expand
              their business.
            </p>
          </div>
          <div
            class="flex md:w-[550px] w-[350px] ml-10 md:ml-0 h-[200px] rounded-tl-[60px] rounded-tr-[98px] rounded-br-[98px] rounded-bl-[98px] bg-biru"
          >
            <span>
              <img
                src="../assets/icon_ourmission3.svg"
                alt=""
                class="relative right-[2px] bottom-[2px]"
              />
            </span>
            <p
              class="text-hijau font-semibold w-[250px] my-auto ml-10 text-[21px]"
            >
              Engaging diverse faith communities as partners and investors
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTENT OUR MISSION-->

    <!-- WHY CHOOSE US -->
    <section id="choose" class="bg-white">
      <div
        class="flex flex-col md:flex-row py-20 justify-center items-center max-w-[1200px] mx-auto px-4 md:gap-[150px]">
        <img src="../assets/image choose.svg" alt="" class="mt-8 md:mt-0" />

        <div class="md:mr-8">
          <h1
            class="text-2xl md:text-4xl lg:text-5xl font-extrabold mb-10 md:mb-0 md:py-10 text-black mt-5 md:mt-0 text-center"
          >
            Why choose us?
          </h1>
          <div class="mb-6">
            <div class="mb-4">
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black my-3 md:my-5"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Extensive Network Access
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Cutting-Edge & Practical Solutions
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black my-3 md:my-5"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">Competitive Advantage</p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Enhanced Brand Reputation.
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black my-3 md:my-5"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Adaptability and Innovation
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="../assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Extensive Network Access
                </p>
              </span>
            </div>
          </div>
          <a href="{{ route('event') }}">
            <button
              class="border-2 rounded-2xl py-3 px-16 bg-green-600 text-white"
            >
              JOIN NOW
            </button>
          </a>
        </div>
      </div>
    </section>
    <!-- END WHY CHOOSE US -->

    <!-- Event Now Page -->
    <section
      id="home"
      class="bg-[url('../assets/bg-eventNow.svg')] bg-cover bg-center relative py-10 w-full">
      <h1 class="text-[44px] font-popins font-bold text-center">Event Now</h1>
      <div
        class="max-w-[1200px] min-h-[600px] flex flex-col md:flex-row justify-center items-center mx-auto px-4 text-white gap-[110px]"
      >
        <img
          src="../assets/banner-event1.svg"
          alt=""
          class="w-[400px] h-[475px]"
        />
        <div>
          <h1
            class="text-[20px] md:text-[27px] font-semibold font-popins text-black text-center md:text-start"
          >
            Transformational Sales Conference 2023
          </h1>
          <p
            class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] lg:text-base md:w-[500px] mt-8 ml-2 md:ml-0">
            It's crucial to adapt to the changing sales landscape in the digital
            age, and Seth Godin's quote emphasizes the importance of
            customer-centricity. Digital transformation has indeed shifted the
            focus towards online sales, but it's essential to remember that
            serving the customer's needs remains paramount. The Transformational
            Sales Conference sounds like a great opportunity to explore the
            evolving world of sales and learn how to provide excellent service
            in both online and offline contexts.
          </p>
          <div
            class="flex flex-col md:flex-row gap-[31px] text-white mt-10 md:justify-start justify-center md:items-start items-center"
          >
            <a href="{{ route('event') }}">
              <p
                class="border bg-green-700 p-[15px] w-[232px] h-[59px] rounded-2xl text-center"
              >
                Read More
              </p>
            </a>
            <a href="/">
              <p
                class="border bg-biru p-[15px] w-[232px] h-[59px] rounded-2xl text-center"
              >
                Registration Now
              </p>
            </a>
          </div>
          <a href="{{ route('event') }}">
            <p
              class="text-white border bg-hijau w-[390px] md:w-[417px] h-[60px] p-[14px] justify-center items-center text-center rounded-2xl text-[17px] font-normal font-popins mt-20"
            >
              See All Event
            </p>
          </a>
        </div>
      </div>
    </section>

    <!-- Image Baner -->
    <div class="bg-white">
      <img src="../assets/baner4.svg" class="flex mx-auto py-24 w-50" alt="" />
    </div>
    <!-- end image baner -->

    <!-- OUR PARTNERS -->
    <h1 class="font-nunito text-[42px] font-extrabold text-center mt-10">
      Our Partners
    </h1>
    <div
      class="max-w-[1000px] min-h-[200px] flex flex-col justify-center mx-auto text-white items-center"
    >
      <div class="w-full md:w-[800px]">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-2xl shadow-md"
              >
                <img
                  src="../assets/partner1.svg"
                  alt="Image 1"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/partner2.svg"
                  alt="Image 2"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/partner3.svg"
                  alt="Image 3"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/partner4.svg"
                  alt="Image 4"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/partner5.svg"
                  alt="Image 5"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/partner6.svg"
                  alt="Image 6"
                  class="w-[1167px] h-[110px]"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END OUR PARTNERS -->

    <!-- CONTACT -->
    <section class="bg-white md:mx-56 md:my-40">
      <div class="flex flex-col md:flex-row justify-center items-center">
        <div id="contact" class="md:container mx-auto p-4">
          <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
          <h1 class="text-stone-700 text-[13px] font-normal w-[250px]">
            Feel free to contact us any time. we will get back to you as soon as
            we can!
          </h1>
          <form action="#" method="POST" class="space-y-4 mt-10">
            <div>
              <label
                for="full_name"
                class="block text-sm font-medium text-gray-700"
                >Full Name</label
              >
              <input
                type="text"
                id="full_name"
                name="full_name"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
              />
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700"
                >Email</label
              >
              <input
                type="email"
                id="email"
                name="email"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
              />
            </div>
            <div>
              <label
                for="message"
                class="block text-sm font-medium text-gray-700"
                >Message</label
              >
              <textarea
                id="message"
                name="message"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md resize-none"
              ></textarea>
            </div>
            <div>
              <button
                type="submit"
                class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-hijau hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
              >
                <a href="{{ route('thanks') }}">Send Message</a>
              </button>
            </div>
          </form>
        </div>
        <div
          class="flex md:w-[578px] h-[445px] p-[10px] items-center gap-[10px] bg-hijau md:absolute sm:mt-[80px] md:right-[130px]"
        >
          <div class="flex flex-col ml-14 gap-8 text-white">
            <p class="text-[27px] font-semibold">Info</p>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="../assets/email-contact.svg" alt="" />
              <p>hello@tbnalliance.org</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="../assets/telp-contact.svg" alt="" />
              <p>+62 2222 3333 4444</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="../assets/lokasi-contact.svg" alt="" />
              <p>Jl. M.H.Thamrin No.20, Menteng</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="../assets/jam-contact.svg" alt="" />
              <p>08.30 - 17.00</p>
            </span>
          </div>
        </div>
        <div
          class="w-[198px] h-[670px] bg-hijau md:block md:absolute right-[120px] hidden"
        ></div>
      </div>
    </section>
    <!-- END CONTACT -->

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
            <a href="https://wa.me/+6282310001908"><img src="../assets/nav-whatsapp.svg" alt="" /></a>
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/caraousel.js"></script>
    <script src="../js/scrollnavbar.js"></script>
    <script src="../js/humberger.js"></script>
  </body>

</html>