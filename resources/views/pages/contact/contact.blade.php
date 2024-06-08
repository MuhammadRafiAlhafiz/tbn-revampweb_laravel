@extends('layouts.app')

@section('content')
    <!-- BACKGROUND CONTACT -->
    <section
      id="home"
      class="bg-[url('/assets/bg-contact.svg')] bg-cover bg-center relative"
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
                src="/assets/email-contact.svg"
                alt=""
                class="mr-2"
              />hello@tbnalliance.org
            </span>
            <span
              class="flex items-center mb-2 text-white text-[14px] md:text-[17px] font-normal"
            >
              <img src="/assets/telp-contact.svg" alt="" class="mr-2" />+62
              2222 3333 4444
            </span>
            <span
              class="flex items-center mb-2 text-white text-[14px] md:text-[17px] font-normal py-7"
            >
              <img src="/assets/lokasi-contact.svg" alt="" class="mr-2" />Jl.
              M.H.Thamrin No.20, Menteng
            </span>
            <span
              class="flex items-center text-white text-[14px] md:text-[17px] font-normal"
            >
              <img src="/assets/jam-contact.svg" alt="" class="mr-2" />08.30 -
              17.00
            </span>
          </div>
        </div>
      </div>

      <div class="flex-col border p-14 md:p-[40px] rounded-xl">

      <input
          type="full_name"
          id="full_name"
          name="full_name"
          placeholder="Full Name"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[480px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
        />

        <input
          type="email"
          id="email"
          name="email"
          placeholder="Email*"
          class="mt-5 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[480px] p-3 shadow-sm sm:text-sm border-gray-400 border-2 rounded-md"
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
      class="bg-[url('/assets/peta-contact.svg')] bg-cover w-[1000px] h-[545px] mt-10 ml-72"
    >
        <div class="flex justify-center items-center gap-56">
          <h1 class="text-[32px] font-bold text-hijau mt-36 mr-36 ">
            <img src="/assets/map-contact.svg" alt="" />
            TBN American
          </h1>
          <h1 class="text-[32px] font-bold text-hijau mt-36">
            <img src="/assets/map-contact.svg" alt="" />
            TBN Asia
          </h1>
        </div>

        <div class="flex justify-center ml-[500px] gap-24">
          <h1 class="text-[32px] font-bold text-hijau mt-20">
            <img src="/assets/map-contact.svg" alt="" />
            TBN Afrika
          </h1>
          <h1 class="text-[32px] font-bold text-hijau ">
            <img src="/assets/map-contact.svg" alt="" />
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
    @endsection