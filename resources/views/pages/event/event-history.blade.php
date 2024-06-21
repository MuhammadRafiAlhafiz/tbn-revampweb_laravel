@extends('layouts.app')

@section('content')
    <!-- TOP ARTICLES -->
    <section class=" mx-32">
        <h1 class="font-popins text-[56px] text-center font-bold ">-</h1>
        <h1 class="font-popins text-[56px] text-center font-bold ">EVENT-HISTORY</h1>
        <div class="flex justify-between items-center mt-10">
            <!-- Article 1 -->
            @php $counter = 0; @endphp
            @foreach ($programs as $program)
            <div class="col">
                <img src="<?= $_ENV['APP_URL_BACKEND'] ?>/images/<?= $program->poster?>" alt=""
                    class="w-[377px] h-[444px]" />
                <h1 class="w-[379px] h-[103px] font-popins text-[27px] font-semibold mt-3">
                    {{ $program->name }}
                </h1>
                <p class="line-clamp-3 w-[375px] mt-4 h-[125px] font-popins text-[20px] font-normal">
                    {{ $program->desc }}
                </p>
                <img src="/assets/garis-blog.svg" alt="" class="mt-10" />
                <p class="w-[248px] font-popins text-[13px] font-normal text-center py-5 ml-16">
                    Created By • {{ $program->created_at }}
                </p>
                <a href="/"><button
                        class="border py-[14px] px-[98px] gap-[10px] justify-center items-center rounded-3xl ml-14 bg-biru text-white">
                        Read More
                    </button></a>
            </div>
                    @php $counter++; @endphp
                    @if ($counter % 3 == 0)
                        </div>
                        <div class="flex justify-center items-center gap-24 mt-16 mx-32"> <!-- Menutup row sebelum membuka yang baru -->
                    @endif
                @endforeach
            </div></section>
            <!-- END Article 1 -->

       
            <!-- END LatePost & PopularPost -->
        @endsection
