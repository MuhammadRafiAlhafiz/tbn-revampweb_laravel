<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event History</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
  </head>
  <body class="font-poppins bg-gray-50">
    <!-- NAVBAR -->
    <nav class="bg-biru py-3 flex items-center justify-between w-full">
      <a href="{{ route('home') }}">
        <img src="/assets/panah.svg" alt="" class="md:ml-20 w-[50px] h-[30px]" />
      </a>
      <a href="{{ route('home') }}">
        <img src="/assets/logo nav.svg" alt="" class="md:mr-20" />
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- EVENT HISTORY -->
    <section id="event-history"> 
      <h1 class="font-poppins text-[44px] font-bold text-biru flex justify-center mt-5">Event History</h1>
      <div class="mt-16 border rounded-[30px] shadow-2xl text-center mx-24 py-10 bg-background">
        <div class="flex justify-between mx-20">
          <div>
            <p class="font-poppins text-[27px] font-semibold">Status</p>
            <p class="border py-1 px-5 rounded-2xl gap-10px text-white bg-green-800 mt-10">Successful</p>
            <p class="border py-1 px-5 rounded-2xl gap-10px text-white bg-green-800 my-8">Successful</p>
            <p class="border py-1 px-5 rounded-2xl gap-10px text-white bg-red-700">Rejected</p>
            <p class="border py-1 px-5 rounded-2xl gap-10px text-white bg-green-800 mt-8">Successful</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">ID</p>
            <p class="font-poppins text-[17px] font-normal mt-10">123456789</p>
            <p class="font-poppins text-[17px] font-normal my-11">123456789</p>
            <p class="font-poppins text-[17px] font-normal">123456789</p>
            <p class="font-poppins text-[17px] font-normal my-11">123456789</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">Event</p>
            <p class="font-poppins text-[17px] font-normal mt-9">Transformational Sales Conference 2023</p>
            <p class="font-poppins text-[17px] font-normal my-11">TBN Asia Conference 2023</p>
            <p class="font-poppins text-[17px] font-normal">The Future for Social Enterprises</p>
            <p class="font-poppins text-[17px] font-normal my-11">The Future of Education</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">Time</p>
            <p class="font-poppins text-[17px] font-normal mt-9">20 Mei 2024</p>
            <p class="font-poppins text-[17px] font-normal my-11">20 Mei 2024</p>
            <p class="font-poppins text-[17px] font-normal">20 Mei 2024</p>
            <p class="font-poppins text-[17px] font-normal my-11">20 Mei 2024</p>
          </div>
          <div class="flex flex-col">
            <p class="font-poppins text-[27px] font-semibold">Action</p>
            <button type="button" onclick="showHistoryDetail(1)" class="border py-1 px-5 rounded-2xl gap-10px text-white bg-biru mt-8">View</button>
            <button type="button" onclick="showHistoryDetail(2)" class="border py-1 px-5 rounded-2xl gap-10px text-white bg-biru mt-8">View</button>
            <button type="button" onclick="showHistoryDetail(3)" class="border py-1 px-5 rounded-2xl gap-10px text-white bg-biru mt-8">View</button>
            <button type="button" onclick="showHistoryDetail(4)" class="border py-1 px-5 rounded-2xl gap-10px text-white bg-biru mt-8">View</button>
          </div>
        </div>
      </div>
    </section>
    <!-- END EVENT HISTORY -->

    <!-- VIEW EVENT 1 -->
    <section class="hidden mt-2" id="history-detail-event1">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail1.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event1.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Event:</h1>
            <p class="font-poppins text-[24px] font-normal">Transformational Sales Conference 2023</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">ID:</h1>
            <p class="font-poppins text-[24px] font-normal">123456789</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Name:</h1>
            <p class="font-poppins text-[24px] font-normal">Farsha Adhikari</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Email:</h1>
            <p class="font-poppins text-[24px] font-normal">Farshaadk@gmail.com</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Phone Number:</h1>
            <p class="font-poppins text-[24px] font-normal">087629873672</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-event1', 'history-detail-date1')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-2" id="history-detail-date1">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail2.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event1.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Date:</h1>
            <p class="font-poppins text-[24px] font-normal">20 Mei 2024</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Place:</h1>
            <p class="font-poppins text-[24px] font-normal">Menara Danareksa (Arya Nusa Ballroom)</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Ticket:</h1>
            <p class="font-poppins text-[24px] font-normal">Group Table/6 Person</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Amount:</h1>
            <p class="font-poppins text-[24px] font-normal">1x</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Price:</h1>
            <p class="font-poppins text-[24px] font-normal">Rp 6.030.000</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-date1', 'history-detail-thankyu1')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-10" id="history-detail-thankyu1">
  <div class="flex flex-col justify-center items-center text-center">
    <img src="/assets/slider-historydetail3.svg" alt="" />
    <div class="mt-20 flex flex-col items-center">
      <img src="/assets/ceklis-historyevent.svg" alt="" />
      <span class="flex flex-col justify-center items-center">
        <h1 class="font-poppins text-[27px] font-semibold mt-5 w-[349px] h-[94px]">Thank you! Farsha, We have received your order</h1>
        <p class="font-poppins text-[17px] font-normal w-[293px]">We might contact you for tracking and confirming your order</p>
      </span>
    </div>
    <a href="{{ route('home') }}" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-10 mb-10">Go to Home</a>
  </div>
</section>

    <!-- END VIEW EVENT 1 -->

    <!-- VIEW EVENT 2 -->
    <section class="hidden mt-2" id="history-detail-event2">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail1.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event2.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Event:</h1>
            <p class="font-poppins text-[24px] font-normal">Transformational Sales Conference 2023</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">ID:</h1>
            <p class="font-poppins text-[24px] font-normal">123456789</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Name:</h1>
            <p class="font-poppins text-[24px] font-normal">Farsha Adhikari</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Email:</h1>
            <p class="font-poppins text-[24px] font-normal">Farshaadk@gmail.com</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Phone Number:</h1>
            <p class="font-poppins text-[24px] font-normal">087629873672</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-event2', 'history-detail-date2')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-2" id="history-detail-date2">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail2.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event2.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Date:</h1>
            <p class="font-poppins text-[24px] font-normal">20 Mei 2024</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Place:</h1>
            <p class="font-poppins text-[24px] font-normal">Menara Danareksa (Arya Nusa Ballroom)</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Ticket:</h1>
            <p class="font-poppins text-[24px] font-normal">Group Table/6 Person</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Amount:</h1>
            <p class="font-poppins text-[24px] font-normal">1x</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Price:</h1>
            <p class="font-poppins text-[24px] font-normal">Rp 6.030.000</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-date2', 'history-detail-thankyu2')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-10" id="history-detail-thankyu2">
  <div class="flex flex-col justify-center items-center text-center">
    <img src="/assets/slider-historydetail3.svg" alt="" />
    <div class="mt-20 flex flex-col items-center">
      <img src="/assets/ceklis-historyevent.svg" alt="" />
      <span class="flex flex-col justify-center items-center">
        <h1 class="font-poppins text-[27px] font-semibold mt-5 w-[349px] h-[94px]">Thank you! Farsha, We have received your order</h1>
        <p class="font-poppins text-[17px] font-normal w-[293px]">We might contact you for tracking and confirming your order</p>
      </span>
    </div>
    <a href="{{ route('home') }}" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-10 mb-10">Go to Home</a>
  </div>
</section>
    <!-- END VIEW EVENT 2 -->

    <!-- VIEW EVENT 3 -->
    <section class="hidden mt-2" id="history-detail-event3">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail1.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event3.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Event:</h1>
            <p class="font-poppins text-[24px] font-normal">Transformational Sales Conference 2023</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">ID:</h1>
            <p class="font-poppins text-[24px] font-normal">123456789</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Name:</h1>
            <p class="font-poppins text-[24px] font-normal">Farsha Adhikari</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Email:</h1>
            <p class="font-poppins text-[24px] font-normal">Farshaadk@gmail.com</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Phone Number:</h1>
            <p class="font-poppins text-[24px] font-normal">087629873672</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-event3', 'history-detail-date3')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-2" id="history-detail-date3">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail2.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event3.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Date:</h1>
            <p class="font-poppins text-[24px] font-normal">20 Mei 2024</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Place:</h1>
            <p class="font-poppins text-[24px] font-normal">Menara Danareksa (Arya Nusa Ballroom)</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Ticket:</h1>
            <p class="font-poppins text-[24px] font-normal">Group Table/6 Person</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Amount:</h1>
            <p class="font-poppins text-[24px] font-normal">1x</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Price:</h1>
            <p class="font-poppins text-[24px] font-normal">Rp 6.030.000</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-date3', 'history-detail-thankyu3')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-10" id="history-detail-thankyu3">
  <div class="flex flex-col justify-center items-center text-center">
    <img src="/assets/slider-historydetail3.svg" alt="" />
    <div class="mt-20 flex flex-col items-center">
      <img src="/assets/ceklis-historyevent.svg" alt="" />
      <span class="flex flex-col justify-center items-center">
        <h1 class="font-poppins text-[27px] font-semibold mt-5 w-[349px] h-[94px]">Thank you! Farsha, We have received your order</h1>
        <p class="font-poppins text-[17px] font-normal w-[293px]">We might contact you for tracking and confirming your order</p>
      </span>
    </div>
    <a href="{{ route('home') }}" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-10 mb-10">Go to Home</a>
  </div>
</section>
    <!-- END VIEW EVENT 3 -->

    <!-- VIEW EVENT 4 -->
    <section class="hidden mt-2" id="history-detail-event4">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail1.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event4.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Event:</h1>
            <p class="font-poppins text-[24px] font-normal">Transformational Sales Conference 2023</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">ID:</h1>
            <p class="font-poppins text-[24px] font-normal">123456789</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Name:</h1>
            <p class="font-poppins text-[24px] font-normal">Farsha Adhikari</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Email:</h1>
            <p class="font-poppins text-[24px] font-normal">Farshaadk@gmail.com</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Phone Number:</h1>
            <p class="font-poppins text-[24px] font-normal">087629873672</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-event4', 'history-detail-date4')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-2" id="history-detail-date4">
      <div class="flex flex-col justify-center items-center">
        <img src="/assets/slider-historydetail2.svg" alt="" />
        <div class="flex gap-8 mt-8">
          <img src="/assets/banner-event4.svg" alt="" class="w-[396px] h-[495px]">
          <span>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Date:</h1>
            <p class="font-poppins text-[24px] font-normal">20 Mei 2024</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Place:</h1>
            <p class="font-poppins text-[24px] font-normal">Menara Danareksa (Arya Nusa Ballroom)</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Ticket:</h1>
            <p class="font-poppins text-[24px] font-normal">Group Table/6 Person</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Amount:</h1>
            <p class="font-poppins text-[24px] font-normal">1x</p>
            <h1 class="font-poppins text-[27px] font-semibold mt-5">Price:</h1>
            <p class="font-poppins text-[24px] font-normal">Rp 6.030.000</p>
          </span>
        </div>
        <button onclick="showNextSection('history-detail-date4', 'history-detail-thankyu4')" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-5">Next</button>
      </div>
    </section>

    <section class="hidden mt-10" id="history-detail-thankyu4">
  <div class="flex flex-col justify-center items-center text-center">
    <img src="/assets/slider-historydetail3.svg" alt="" />
    <div class="mt-20 flex flex-col items-center">
      <img src="/assets/ceklis-historyevent.svg" alt="" />
      <span class="flex flex-col justify-center items-center">
        <h1 class="font-poppins text-[27px] font-semibold mt-5 w-[349px] h-[94px]">Thank you! Farsha, We have received your order</h1>
        <p class="font-poppins text-[17px] font-normal w-[293px]">We might contact you for tracking and confirming your order</p>
      </span>
    </div>
    <a href="{{ route('home') }}" class="border py-3 px-20 bg-hijau text-white rounded-2xl mt-10 mb-10">Go to Home</a>
  </div>
</section>
    <!-- END VIEW EVENT 4 -->

    <!-- Repeat similar sections for events 2, 3, and 4 -->

    <script>
      function showHistoryDetail(eventNumber) {
        document.getElementById('event-history').style.display = 'none';
        document.getElementById('history-detail-event' + eventNumber).style.display = 'block';
      }

      function showNextSection(currentSection, nextSection) {
        document.getElementById(currentSection).style.display = 'none';
        document.getElementById(nextSection).style.display = 'block';
      }
    </script>
  </body>
</html>
