
@extends('layouts.app')

@section('content')
    <!-- Background About -->
    <section
      id="home"
      class="bg-[url('/assets/bg-about.svg')] bg-cover bg-center relative md:w-full md:h-[750px]"
    >
      <div
        class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto px-4 text-white"
      >
        <h1
          class="text-[30px] md:text-[56px] font-bold leading-tight md:leading-normal flex gap-5"
        >
          <img src="/assets/Garis.svg" alt="" />

          WHO WE ARE
        </h1>
        <div class="flex gap-14 mt-10">
          <h1
            class="font-semibold text-[15px] md:text-[21px] leading-tight md:leading-normal mt-7 md:mt-8"
          >
            TBN Indonesia is a global network of purpose-driven entrepreneurs,
            impact investors and capacity builders who take an enterprise
            approach to alleviate poverty in low-income and underserved
            communities
          </h1>
          <h1
            class="font-semibold text-[15px] md:text-[21px] leading-tight md:leading-normal mt-7 md:mt-8"
          >
            Founded by one of the pioneers of impact investing, Dr. Dato Kim
            Tan, TBN Indonesia was then launched in 2003 through the creation of
            a strategic partnership with Belmont University and Templeton
            Religion Trust.
          </h1>
        </div>
      </div>
    </section>
    <!-- End Background About -->

    <!-- WE ARE -->
    <img
      src="/assets/we are about.svg"
      alt=""
      class="flex justify-center items-center w-full h-[500px] md:h-[800px]"
    />
    <!-- END WE ARE -->

    <!-- OUR HISTORY -->
    <section class="bg-hijau">
      <div class="md:w-[1200px] w-[300px] mx-auto p-16">
        <div class="flex text-[57px] font-extrabold text-biru gap-5">
          <img src="/assets/GarisBiru.svg" alt="" />
          <h1>Our History</h1>
        </div>
        <div class="flex md:flex-col gap-5 w-full">
          <h1 class="mt-5 text-[17px] font-normal">
            While founded in 2003, TBN began to accelerate its impact with the
            formalization of social entrepreneur training programs in Africa and
            Asia in 2017 and 2019 respectively. TBN has supported more than 800
            entrepreneurs, helped launch/scale almost 400 enterprises, and
            contribute to growing regional ecosystems in Asia, Africa and,
            effective 2022, the Americas, with multiple events, collaborations,
            impact visits, speaking engagements and introductions every year.
          </h1>
          <h1 class="mt-5 text-[17px] font-normal">
            Over this time, TBN has been quietly pioneering a distinctive and
            effective model of enterprise solutions to poverty, one which
            embraces diversity and encourages long-term relationships with
            partners and collaborators, one that is open, generative, and
            supportive of the greater social impact ecosystem. This model has a
            demonstrated track record of working in frontier and emerging
            markets and in culturally and religiously diverse regions. The
            results are success stories of transformational business with a
            poverty alleviation focus that have achieved scale in Africa and
            Asia. The Indonesia was launched in September 2023 in a strategic
            partnership with Belmont University Innovation Labs with the support
            of the Templeton Religion Trust, a global charitable trust chartered
            by Sir John Templeton. We launched with four founding chapters -
            Africa, Asia, Indonesia and Americas.
          </h1>
        </div>
      </div>
    </section>
    <!-- END OUR HISTORY -->

    <!-- WE BELIEVE IN -->
    <img
      src="/assets/we believe in.svg"
      alt=""
      class="w-full h-[500px] md:h-[800px]"
    />
    <!-- END WE BELIEVE IN -->

    <!-- Our Unique Approach -->
    <section class="bg-biru p-6 md:p-24">
      <span class="flex gap-2 mx-20">
        <img src="/assets/GarisHijau.svg" alt="" />
        <h1
          class="text-hijau text-[36px] md:text-[57px] font-popins font-extrabold"
        >
          Our Unique Approach
        </h1>
      </span>
    <div class="flex justify-between">
      <div class="mt-28">
        <span class="flex items-center gap-5">
          <img src="/assets/about3.svg" alt="" class="w-[200px] h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
          <p class="w-[339px] h-[71px] font-popins text-[21px] font-semibold text-white"><span class="text-hijau">Faith-based but not faith-biased</span> commitment to religious and cultural pluralism</p>
        </span>
        <span class="flex items-center mt-24 gap-5">
          <img src="/assets/about4.svg" alt="" class="w-[200px] h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
          <p class="w-[339px] h-[71px] font-popins text-[21px] font-semibold text-white"><span class="text-hijau">Independent local chapters</span> with autonomous volunteer boards but a member of the larger TBN family</p>
        </span>     
        </div>
        <div class=" mb-20">
          <span class="flex items-center">
            <p class="w-[339px] h-[71px] font-popins text-[21px] font-semibold text-white"><span class="text-hijau">Character-based</span> entrepreneurship training & support</p>
            <img src="/assets/about1.svg" alt="" class="w-[200px] h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
          </span>
          <span class="flex items-center mt-20">
            <p class="w-[339px] h-[71px] font-popins text-[21px] font-semibold text-white"><span class="text-hijau">Sector agnostic</span> with key focus on poverty alleviation</p>
            <img src="/assets/about2.svg" alt="" class="w-[200px] h-[200px] border p-3 md:p-5 rounded-full bg-hijau">
          </span>     
          </div>
      </div>
    </section>
    <!-- END Our Unique Approach -->

    <!-- The Challenge -->
    <section
    id="home"
    class="bg-[url('/assets/bg-challange.svg')] bg-cover bg-center relative py-36 h-[1200px]"
  >
  <div
        class="max-w-full min-h-[700px] flex flex-col justify-center mx-auto px-4 text-white "
      >
      <div class="flex justify-between items-center mx-20">
        <span>
          <img src="/assets/3 bola.svg" alt="" class="items-center h-[700px]">
        </span>
        <span>
          <h1 class="font-popins text-[50px] font-extrabold">The Challenge We Face</h1>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4 mt-10 bullet"><span class="text-hijau">700M people</span> live in extreme poverty, subsisting on <span class="text-hijau">less than $2.15 USD a day globally.</span></p>
          <p class="font-popins text-[27px] font-semibold w-[666px]  bullet">COVID-19 pandemic pushed 97 million more people back below the poverty line since 2020 - <span class="text-hijau">humanity has lost three to four years</span> of hard-won progress in the ongoing campaign to end extreme poverty.</p>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4  bullet">Small and medium enterprises <span class="text-hijau">(SMES)</span> are a key pathway out of poverty, representing <span class="text-hijau">more than 90%</span> of the business population, <span class="text-hijau">50% of employment</span> and <span class="text-hijau">40% of national GDP</span> in emerging economies.</p>
          <p class="font-popins text-[27px] font-semibold w-[666px]  bullet">In lower income countries, SMEs struggle to get the support and investment they need to grow, creating what development economists call <span class="text-hijau">“the missing middle.”</span></p>
          <p class="font-popins text-[27px] font-semibold w-[666px] py-4  bullet">65 million firms, or 40% of formal micro, small and medium enterprises (MSMEs) in developing countries, have an <span class="text-hijau">unmet financing need of $5.2 trillion every year.</span></p>
        </span>
      </div>
    </div>
    <!-- END The Challenge -->
@endsection