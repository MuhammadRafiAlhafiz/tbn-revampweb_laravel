@extends('layouts.app')

@section('content')
    <!-- content banner -->
    <section id="home" class="bg-[url('/assets/bg-event.svg')] bg-cover bg-center relative w-full h-[600px]">
        <div class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center items-end mx-auto px-4 text-white">
            <h1 class="w-[443px] font-popins text-[34px] font-semibold mt-36">
                TRANSFORMATIONAL SALES CONFERENCE
            </h1>
            <h1 class="w-[443px] font-popins text-[17px] font-normal">
                "Don't find customers for your products, find products for your
                customers." ~ Seth Godin
            </h1>
            <span class="flex mr-24 gap-10 mt-10">
                <a href="/">
                    <p
                        class="w-[139px] p-[10px] border rounded-2xl flex items-center justify-center bg-hijau text-[17px] font-popins font-normal">
                        Get a Ticket
                    </p>
                </a>
                <a href="{{ route('event') }}">
                    <p
                        class="w-[139px] p-[10px] border rounded-2xl flex items-center justify-center text-[17px] font-popins font-normal">
                        Learn More
                    </p>
                </a>
            </span>
            <!-- END content banner -->

            <!-- SEARCH BAR -->
            <div
                class="border py-5 px-20 bg-biru rounded-3xl w-[1086px] h-[140px] flex justify-center items-center mt-28 mr-12">
                <div class="flex flex-col md:flex-row md:mb-4 md:gap-3">
                    <span>
                        <h1 class="font-popins text-[17px] font-normal">Search Event</h1>
                        <input type="text" id="Business" name="Business" placeholder="Business"
                            class="mt-1 block w-full md:w-[280px] p-3 shadow-sm sm:text-sm  rounded-md bg-transparent font-popins text-[21px] font-semibold" />
                        <img src="/assets/garis-event.svg" alt="">
                    </span>
                    <span>
                        <h1 class="font-popins text-[17px] font-normal">Place</h1>
                        <input type="text" id="Place" name="Place" placeholder="Place"
                            class="mt-1 block w-full md:w-[280px] p-3 shadow-sm sm:text-sm  rounded-md bg-transparent font-popins text-[21px] font-semibold" />
                        <img src="/assets/garis-event.svg" alt="">
                    </span>

                    <span>
                        <h1 class="font-popins text-[17px] font-normal">Time</h1>
                        <select
                            class=" mt-1 block w-full md:w-[280px] p-3 shadow-sm sm:text-sm  rounded-md bg-transparent text-gray-400 font-popins text-[21px] font-semibold">
                            <option>Any Date</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                        </select>
                        <img src="/assets/garis-event.svg" alt="">
                    </span>
                </div>
            </div>
    </section>
    <!-- END SEARCH BAR -->
    <!-- END Page Banner -->
    @foreach ($programs as $program)
        <!-- LIST EVENT -->
        <!-- EVENT 1 -->
        <div id="event" class="min-h-[600px] flex flex-col md:flex-row justify-center items-center gap-14 text-white">
            <img src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $program->poster ?>" alt=""
                class="w-[300px] h-[375px]" />
            <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <p class="text-hijau">[About Conference]</p>
                <h1 class="text-[20px] md:text-[24px] font-semibold font-popins text-black">
                    {{ $program->name }}
                </h1>

                <p
                    class="text-[12px] md:text-[17px] font-normal font-popins text-black w-[370px] md:w-[800px] mt-8 ml-2 md:ml-0">
                    {{ $program->desc }}
                </p>
                <div
                    class="flex flex-col md:flex-row gap-[20px] md:gap-[31px] text-white mt-10 justify-center md:justify-start items-center">
                    <a href="{{ route('event-detail', ['id' => $program->id]) }}">
                        <p class="border bg-hijau py-[10px] px-[20px] rounded-xl text-center">
                            Read More
                        </p>
                    </a>
                    <a href="{{ route('event-feedback', ['id' => $program->id]) }}">
                        <p class="border bg-biru py-[10px] px-[20px] rounded-2xl text-center">
                            Add Your Feedback
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <hr class="w-full border-t-4 border-gray-300">
        <!-- END EVENT 1 -->
    @endforeach
    <!-- END LIST EVENT -->

    <!-- LETS GROW Together -->
    <section class="bg-biru py-20">
        <span class="">
            <h1 class="font-popins text-[44px] font-bold text-white text-center">Let’s <span class="text-hijau">GROW</span>
                Together</h1>
            <p class="font-popins text-[17px] font-normal w-[680px] h-[80px] text-white text-center mx-auto">Let's cultivate
                our dreams and aspirations, supporting one another every step of the way. By pooling our resources,
                knowledge, and experiences, we turn our individual visions into a collective reality. Each milestone we
                reach is a testament to our shared dedication and hard work.
            </p>
        </span>
        <div class="flex justify-center items-center mb-20 gap-[120px]">
            <img src="/assets/Event-Grow.svg" alt="" class="w-[500px] h-[598px]">
            <div class="text-white w-[470px] h-[440px]">
                <h1 class="font-popins text-[27px] font-semibold ">Get yourself Inspired</h1>
                <p class="font-popins text-[17px] font-normal py-5">In a world full of possibilities, "Get Yourself
                    Inspired" is a call to embrace life's beauty and your own potential. Imagine waking up each day with
                    purpose, ready to tackle new challenges and explore uncharted territories. Whether pursuing personal
                    goals, creating innovative solutions, or finding joy in everyday moments, inspiration unlocks the door
                    to greatness. By seeking experiences that move you and surrounding yourself with uplifting people, you
                    can transform your life and those around you.</p>
                <p class="font-popins text-[17px] font-normal">At its core, getting inspired means opening your heart and
                    mind to the world's wonders and continuously learning. It's about harnessing inner strength, cultivating
                    passions, and daring to dream big. When inspired, your story becomes a beacon of hope and resilience.
                    Take that first step—dive into a new book, start a creative project, travel somewhere new, or simply
                    appreciate life's small wonders. Embrace the journey, celebrate victories, learn from setbacks, and keep
                    moving forward. Your inspired life is waiting—are you ready to begin?</p>
            </div>
        </div>
    </section>
    <!-- END LETS GROW Together -->

    <!-- Sponsor -->
    <h1 class="font-nunito text-[42px] font-extrabold text-center mt-20">Our Partners</h1>
    <div class="max-w-[100px] min-h-[200px] flex flex-col justify-center mx-auto text-white items-center">
        <div class="w-full md:w-[1000px]">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-2xl shadow-md">
                            <img src="/assets/partner1.svg" alt="Image 1" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md">
                            <img src="/assets/partner2.svg" alt="Image 2" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md">
                            <img src="/assets/partner3.svg" alt="Image 3" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md">
                            <img src="/assets/partner4.svg" alt="Image 4" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md">
                            <img src="/assets/partner5.svg" alt="Image 5" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="w-[390px] md:w-full h-[200px] md:h-[100px] overflow-hidden bg-white rounded-lg shadow-md">
                            <img src="/assets/partner6.svg" alt="Image 6" class="w-[1167px] h-[110px]" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END SPONSOR -->

    <!-- TESTIMONI EVENT -->
    <div class="flex flex-col justify-center items-center">
        <img src="/assets/event-Rectangle.svg" alt="" class="w-[119px] h-[14px] mt-20">
        <h1 class="font-popins text-[56px] font-bold text-biru py-5">Testimoni Event</h1>

        <div class="relative w-full max-w-3xl mb-4 flex items-center">
            <!-- Navigation buttons -->
            <button id="prevBtn" class="bg-gray-200 px-4 py-2 rounded-full mr-2">
                <img src="/assets/button-prev.svg" alt="">
            </button>

            <!-- Slider main container -->
            <div class="relative flex-1">
                <div class="slide">
                    <img src="/assets/event-testimoni1.svg" alt="Image 1" class="w-full h-auto">
                </div>
                <div class="slide hidden">
                    <img src="/assets/event-testimoni2.svg" alt="Image 2" class="w-full h-auto">
                </div>
                <div class="slide hidden">
                    <img src="/assets/event-testimoni3.svg" alt="Image 3" class="w-full h-auto">
                </div>
            </div>

            <button id="nextBtn" class="bg-hijau px-4 py-2 rounded-full ml-2">
                <img src="/assets/button-next.svg" alt="">
            </button>
        </div>
    </div>
@endsection
