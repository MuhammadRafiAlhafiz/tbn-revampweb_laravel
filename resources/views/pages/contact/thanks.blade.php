
@extends('layouts.app')

@section('content')
    <!-- Content Thankyu -->
    <section
      id="home"
      class="bg-[url('/assets/bg-eventNow.svg')] bg-cover bg-center relative"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-black items-center"
      >
        <h1
          class="mt-20 md:mt-16 font-popins text-[56px] font-bold w-[333px] ml-8 md:ml-0"
        >
          Thank You!
        </h1>
        <img
          src="/assets/thankyu.logo.svg"
          alt=""
          class="w-[600px] h-[350px]"
        />
        <p
          class="md:w-[700px] h-[57px] font-popins text-[27px] font-semibold text-center mb-14 md:mb-0"
        >
          Your message has been sent. We’ll be in touch shortly to answer all
          your questions
        </p>
        <p class="font-popins text-[21px] font-semibold mt-20">
          Like and Share us on Sosial Media
        </p>
        <span class="flex gap-5 mt-2">
          <a href="https://www.instagram.com/tbn.indonesia/"
            ><img src="/assets/nav-instagram.svg" alt="instagram"
          /></a>
          <a href="https://www.youtube.com/@tbnindonesia902"
            ><img src="/assets/nav-youtube.svg" alt="youtube"
          /></a>
          <a href="https://wa.me/+6282310001908"
            ><img src="/assets/nav-whatsapp.svg" alt="nav-whatsapp"
          /></a>
          <a href="https://gmail.com"
            ><img src="/assets/nav-gmail.svg" alt="nav-gmail"
          /></a>
          <a href="https://www.linkedin.com/in/tbn-indonesia-210705251/"
            ><img src="/assets/nav-link.svg" alt="linkedin"
          /></a>
        </span>
      </div>
    </section>
    <!-- END Content Thankyu -->
    @endsection