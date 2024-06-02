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

    <!-- Banner event 1 -->
    <section id="Payment-section">
      <div class="flex flex-col justify-center items-center mt-10">
        <img
          class="w-[500px] h-[750px]"
          src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $program->poster ?>" alt=""
   
        />
        <div class="w-[1000px] mt-10">
          <a href="{{ route('event') }}">
            <p class="text-hijau py-5 font-nunito text-[20px] font-normal">
              [ {{$program->place}} ]
            </p>
          </a>
          <h1 class="font-popins text-[34px] font-semibold">
            {{$program->name}}
          </h1>
          <div
            class="w-[967px] h-[250px] font-popins text-[21px] font-semibold"
          >
            <p class="py-1">
              {{$program->desc}}
            </p>
           
          </div>
        </div>
      </div>
    </section>
    <!-- END Banner Event 1 -->

    <!-- SHARING experiences -->
    <section>
      <h1 class="mt-24 mx-28 text-[34px] font-semibold font-popins">
        Sharing Experience by Participants
      </h1>
      <div class="mt-10 mx-28">
        <div class="flex gap-5">
          <img
            class="w-[43px] h-[43px]"
            src="/assets/event-feedbackcostumer1.svg"
            alt="Feedback Customer 1"
          />
          <div class="flex-col mt-2">
            <div class="flex w-[23px] h-[23px]">
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
            </div>
            <p class="w-[570px] h-[60px] text-[17px] font-normal py-2">
              This conference opened my eyes to the latest sales strategies and
              provided a lot of practical insights. The networking opportunities
              were invaluable. Truly inspiring!
            </p>
            <p class="text-[14px] mt-10 font-bold">Kristin Watson</p>
            <p class="text-[13px] font-normal text-gray-700">
              Desember 14, 2023
            </p>
          </div>
        </div>
        <hr class="w-[700px] border-t-3 border-gray-300 mt-2" />

        <div class="flex gap-5 mt-5">
          <img
            class="w-[43px] h-[43px]"
            src="/assets/event-feedbackcostumer2.svg"
            alt="Feedback Customer 2"
          />
          <div class="flex-col mt-2">
            <div class="flex w-[23px] h-[23px]">
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
            </div>
            <p class="w-[570px] h-[60px] text-[17px] font-normal py-2">
              The sessions were packed with valuable and relevant information. I
              learned a lot about using technology and building better customer
              relationships. The atmosphere was very supportive!
            </p>
            <p class="text-[14px] font-bold">Jenny Wilson</p>
            <p class="text-[13px] font-normal text-gray-700">
              January 28, 2024
            </p>
          </div>
        </div>
        <hr class="w-[700px] border-t-3 border-gray-300 mt-2" />

        <div class="flex gap-5 mt-5">
          <img
            class="w-[43px] h-[43px]"
            src="/assets/event-feedbackcostumer3.svg"
            alt="Feedback Customer 3"
          />
          <div class="flex-col mt-2">
            <div class="flex w-[23px] h-[23px]">
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackstar.svg" alt="Star" />
              <img src="/assets/event-feedbackgraystar.svg" alt="Gray Star" />
            </div>
            <p class="w-[570px] h-[60px] text-[17px] font-normal py-2">
              The Transformational Sales Conference 2023 provided practical
              tools and creative ideas to enhance my sales skills. It was
              incredibly helpful to see sales from a different perspective.
              Highly recommended!
            </p>
            <p class="text-[14px] mt-10 font-bold">Bessie Cooper</p>
            <p class="text-[13px] font-normal text-gray-700">
              January 11, 2024
            </p>
          </div>
        </div>
        <hr class="w-[700px] border-t-3 border-gray-300 mt-2" />
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
    <section id="" class="flex justify-center mt-20">
      <div class="bg-white p-8 rounded-lg w-full max-w-md">
        <div class="flex flex-col items-center">
          <div class="bg-hijau w-[130px] h-[14px] rounded-lg mb-4"></div>
          <h1
            class="font-popins text-[56px] font-bold text-blue-950 mb-2 w-[610px] h-[67px]"
          >
            Share Your Feedback
          </h1>
          <p class="font-popins text-[21px] font-semibold mb-6">
            how was your experience?
          </p>
          <div class="flex space-x-2 mb-6">
            <img src="/assets/event-starRating.svg" alt="Star Rating" />
          </div>
        </div>
        <form>
          <div class="mb-4">
            <input
              type="text"
              placeholder="Name"
              class="w-full p-3 border rounded-lg"
            />
          </div>
          <div class="mb-4">
            <textarea
              placeholder="Your message..."
              class="w-full p-3 border rounded-lg"
            ></textarea>
          </div>
          <div class="mb-6 flex items-center justify-center">
            <button
              type="button"
              class="flex items-center py-2 px-20 border-2 rounded-2xl text-gray-600 focus:outline-none"
            >
              <img src="/assets/event-cameraphoto.svg" alt="Add Photo" />
              Add Photo
            </button>
          </div>
          <div class="flex justify-center">
            <button
              id="submitButton"
              class="bg-hijau text-white rounded-full px-6 py-3 w-[610px] font-semibold hover:bg-gray-300"
            >
              Submit
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- END FEED BACK FORM -->
    <!-- THANK YOU SECTION (Initially Hidden) -->
    <section id="thankYouSection" class="hidden flex-col">
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
            THANK YOU for Feedback!
          </h1>
          <p class="mt-2 text-[34px] font-semibold">
            We hope you enjoyed this event and hope to see you at the next
            event.
          </p>
          <a href="{{ route('event') }}">
            <button class="mt-6 bg-hijau text-white px-20 py-2 rounded-full">
              Done
            </button>
          </a>
        </div>
      </div>
    </section>
    <!-- END THANK YOU SECTION -->
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
          Copyright © 2023 - Transformational Business Network (TBN) Alliance -
          All rights reserved.
        </h1>
      </div>
    </section>
    <!-- END FOOTR -->
    <!-- THANK YOU SECTION (Initially Hidden) -->

    <script>
      document
        .getElementById("submitButton")
        .addEventListener("click", function (event) {
          event.preventDefault(); // Prevent form submission

          // Hide all sections except the "Thank You" section
          var sections = document.getElementsByTagName("section");
          for (var i = 0; i < sections.length; i++) {
            if (sections[i].id !== "thankYouSection") {
              sections[i].style.display = "none";
            }
          }

          // Hide the footer
          document.getElementsByTagName("footer")[0].style.display = "none";

          // Show the "Thank You" section
          document.getElementById("thankYouSection").style.display = "flex";
        });

      // Function to show navbar
      function showNavbar() {
        document.getElementById("navbar").classList.remove("hidden");
      }
    </script>
  </body>
</html>
