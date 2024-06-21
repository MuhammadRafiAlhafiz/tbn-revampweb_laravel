@extends('layouts.app')

@section('content')
    <!-- Background Blog -->
    <section id="home"
        class="bg-[url('/assets/bg-blog.svg')] bg-cover bg-center relative md:w-full h-[500px] md:h-[550px]">
        <div class="max-w-[1200px] min-h-[100vh] flex flex-col justify-center mx-auto text-white items-center">
            <div class="w-full md:w-[1000px] mt-[375px]">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-2xl shadow-md">
                                <img src="/assets/banner-blog1.svg" alt="Image 1"
                                    class="object-cover w-[1106px] h-[519px]" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-lg shadow-md">
                                <img src="/assets/banner-blog2.svg" alt="Image 2"
                                    class="object-cover w-[1106px] h-[519px]" />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div
                                class="w-[390px] md:w-full h-[200px] md:h-[350px] overflow-hidden bg-white rounded-lg shadow-md">
                                <img src="/assets/banner-blog3.svg" alt="Image 3"
                                    class="object-cover w-[1106px] h-[519px]" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END Background Blog -->

    <!-- TOP ARTICLES -->
    <section class="mt-[300px] mx-32">
        <h1 class="font-popins text-[56px] font-bold ">TOP ARTICLES</h1>
        <div class="flex justify-between items-center mt-10">
            <!-- Article 1 -->
            @php $counter = 0; @endphp
            @foreach ($blogs as $blog)
            <div class="col">
                <img src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $blog->thumbnail ?>" alt=""
                    class="w-[377px] h-[444px]" />
                <h1 class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3">
                    {{ $blog->title }}
                </h1>
                <p class="line-clamp-3 w-[375px] mt-4 h-[125px] font-popins text-[20px] font-normal">
                    {{ $blog->content }}
                </p>
                <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
                <p class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16">
                    Created By • {{ $blog->created_at }}
                </p>
                <a href="{{ route('blog-detail', ['id' => $blog->id]) }}"><button
                        class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white">
                        Read More
                    </button></a>
            </div>
                    @php $counter++; @endphp
                    @if ($counter % 3 == 0)
                        </div><div class="flex justify-center items-center gap-24 mt-16 mx-32"> <!-- Menutup row sebelum membuka yang baru -->
                    @endif
                @endforeach
            </div></section>
            <!-- END Article 1 -->

            <!-- END TOP ARTICLES -->

            <!-- LatePost & PopularPost -->
            <section>
                <div class="flex justify-between mx-32 mt-20">
                    <div>
                        <h1 class="font-popins text-[34px] font-semibold">Latest Post</h1>
                        <span class="flex">
                            <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[242px] h-[4px]" />
                            <img src="/assets/garis-blog-gray.svg" alt="" />
                        </span>
                        <div class="flex mt-10 gap-32">
                            <span>
                                <img src="/assets/latepos1.svg" alt="" class="w-[220px] h-[260px]" />
                                <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">
                                    TBN Indonesia: Kolaborasi Penting?
                                </h1>
                                <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal">
                                    Meningkatkan Dampak Sosial dengan TBN Indonesia
                                </p>
                                <p class="w-[220px] text-biru text-[13px] font-normal font-popins">
                                    Nanda Ardika • 14 Mei 2024
                                </p>
                            </span>
                            <span>
                                <img src="/assets/latepos2.svg" alt="" class="w-[220px] h-[260px]" />
                                <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">
                                    Menuntaskan Kemiskinan Melalui Pertanian
                                </h1>
                                <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal py-2">
                                    Upaya pemberantasan kemiskinan di Indonesia berada pada jalur
                                    tepat.
                                </p>
                                <p class="w-[220px] text-biru text-[13px] font-normal font-popins mt-2">
                                    KPPN BITUNG • 07 November 2023
                                </p>
                            </span>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-popins text-[34px] font-semibold">Populer Post</h1>
                        <span class="flex">
                            <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[162px] h-[4px]" />
                            <img src="/assets/garis-blog-gray-popular.svg" alt="" class="w-[213px] h-[4px]" />
                        </span>
                        <span class="flex mt-7 gap-5">
                            <img src="/assets/blog-popular1.svg" alt="" class="w-[155px] h-[93px]" />
                            <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">
                                TBN Indonesia: Kolaborasi Penting?
                            </h1>
                        </span>
                        <span class="flex py-10 gap-5">
                            <img src="/assets/blog-popular2.svg" alt="" class="w-[155px] h-[93px]" />
                            <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">
                                kemiskinan dan Kerusakan Lingkungan
                            </h1>
                        </span>
                        <span class="flex gap-5">
                            <img src="/assets/blog-popular3.svg" alt="" class="w-[155px] h-[93px]" />
                            <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">
                                Mengelola Sampah dengan Metode 3R
                            </h1>
                        </span>
                    </div>
                </div>
            </section>
            <!-- END LatePost & PopularPost -->
        @endsection
