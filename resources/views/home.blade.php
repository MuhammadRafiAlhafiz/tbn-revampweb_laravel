@extends('layouts.app')

@section('content')
@foreach ($page as $page)
    <!-- HOME PAGE -->
    <section
      id="home"
      class="bg-[url('/assets/navbar.svg')] bg-cover bg-center relative w-full"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-white"
      >
        <h1
          class="text-[30px] md:text-[56px] font-bold text-center leading-tight md:leading-normal"
        >
        {{ $page->title }}
        </h1>
        <h1
          class="font-semibold text-[15px] md:text-[27px] text-center leading-tight md:leading-normal mt-7 md:mt-8"
        >
        {{ $page->desc }}
        </h1>
      </div>
    </section>
    <!-- END HOME PAGE -->

    <!-- ABOUT TBN -->
    <section
      id="about"
      class="bg-[url('/assets/baner1.svg')] bg-cover bg-center relative">
      <div
        class="max-w-[1200px] min-h-[100vh] py-24 flex flex-col md:flex-row items-center justify-center mx-auto px-4">
        <a
          href="https://www.youtube.com/watch?v=Kgrumz_76RI&t=3s"
          class="w-full md:max-w-md mx-auto md:mr-12 md:w-[700px] md:h-[300px]"
          ><img src="/assets/content video.svg" alt="ini video"
        /></a>
        <div class="md:w-1/2 text-white md:mb-8">
          <h1
            class="text-2xl md:text-4xl font-bold mb-4 mt-5 text-center md:text-start"
          >
            About TBN Indonesia
          </h1>
          <p class="text-sm md:text-base">
            {{ $page->about }}
          </p>
          <a href="{{ route('about') }}"
            ><button
              class="border-2 border-hijau text-hijau p-2 rounded-[16px] mt-4 hover:bg-slate-400 duration-300"
            >
              LEARN MORE
            </button></a
          > @endforeach
        </div>
      </div>
    </section>
    
    <!-- END CONTENT ABOUT -->

    <!-- CONTENT OUR MISSION -->
    <section
      class="bg-[url('/assets/heatmap.svg')] bg-cover bg-center relative"
    >
      <div
        class="sm:h-[800px] flex flex-col md:flex-row items-center justify-center px-10 gap-28"
      >
        <div class="md:w-[520px] relative bottom-20">
          <h1 class="text-center font-bold text-[34px] mt-32 md:mt-0">
            Our Mission
          </h1>
          <p class="mt-10 md:mt-28 text-justify text-[21px] font-semibold">
            {{ $page->mission }}
          </p>
        </div>
        <div class="flexn flex-col">
          <div
            class="flex md:w-[550px] w-[350px] ml-10 md:ml-0 h-[200px] rounded-tl-[60px] rounded-tr-[98px] rounded-br-[98px] rounded-bl-[98px] bg-biru"
          >
            <span>
              <img
                src="/assets/icon_ourmission1.svg"
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
                src="/assets/icon_ourmission2.svg"
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
                src="/assets/icon_ourmission3.svg"
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
    <section id="choose" class="">
      <div
        class="flex flex-col md:flex-row py-20 justify-center items-center max-w-[1200px] mx-auto px-4 md:gap-[150px]">
        <img src="/assets/image choose.svg" alt="" class="mt-8 md:mt-0" />

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
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Extensive Network Access
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Cutting-Edge & Practical Solutions
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black my-3 md:my-5"
              >
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">Competitive Advantage</p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Enhanced Brand Reputation.
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black my-3 md:my-5"
              >
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
                <p class="text-sm md:text-base py-2">
                  Adaptability and Innovation
                </p>
              </span>
              <span
                class="flex flex-row items-center text-[21px] font-semibold text-black"
              >
                <img src="/assets/cek.svg" alt="" class="w-6 h-6 mr-2" />
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
      class="bg-[url('/assets/bg-eventNow.svg')] bg-cover bg-center relative py-10 w-full ">
      <h1 class="text-[44px] font-popins font-bold text-center">Event Now</h1>
      <div
        class="max-w-[1200px] min-h-[600px] flex flex-col md:flex-row justify-center items-center mx-auto px-4 text-white gap-[110px]"
      >
        <img
          src="/assets/banner-event1.svg"
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
      <img src="/assets/baner4.svg" class="flex mx-auto py-24 w-50" alt="" />
    </div>
    <!-- end image baner -->
{{-- 
    <!-- OUR PARTNERS -->
    <h1 class="font-nunito text-[42px] font-extrabold text-center mt-10">
      Our Partners
    </h1>
    <div
      class="max-w-[1000px] min-h-[200px] flex flex-col justify-center mx-auto text-white items-center"
    >
      <div class="w-full md:w-[800px]">
        <div class="swiper-container">
          <div class="swiper-wrapper">   @foreach ($programs as $program)
         
            <div class="swiper-slide">
              <div
                class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-2xl shadow-md"
              >
              <img src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/{{ $program->poster }}" alt="Image 1"
              class="w-[97px] h-[110px]" />
              </div>
            </div> @endforeach
        </div> 
      </div>
      </div>
      </div>
  
    <!-- END OUR PARTNERS --> --}}

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
              <label for="phone_number" class="block text-sm font-medium text-gray-700"
                >Phone Number</label
              >
              <input
                type="phone_number"
                id="phone_number"
                name="phone_number"
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
          class="flex md:w-[578px] h-[400px] p-[10px] items-center gap-[10px] bg-hijau md:absolute sm:mt-[80px] md:right-[130px]"
        >
          <div class="flex flex-col ml-14 gap-8 text-white">
            <p class="text-[27px] font-semibold">Info</p>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="/assets/email-contact.svg" alt="" />
              <p>hello@tbnIndonesia.org</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="/assets/telp-contact.svg" alt="" />
              <p>+62 2222 3333 4444</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="/assets/lokasi-contact.svg" alt="" />
              <p>Jl. M.H.Thamrin No.20, Menteng</p>
            </span>
            <span class="flex flex-row items-center gap-5 text-[17px]">
              <img src="/assets/jam-contact.svg" alt="" />
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
@endsection