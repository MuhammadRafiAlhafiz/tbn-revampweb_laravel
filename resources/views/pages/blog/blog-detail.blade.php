
@extends('layouts.app')

@section('content')

    <!-- Background Blog -->
  
    <!-- Background Blog -->
    <section
  id="home"
  class="bg-cover bg-center relative md:w-full md:h-[600px]"
  style="background-image: url('{{ asset('assets/bg-blog1.svg') }}');"
>
  <div
    class="flex justify-center flex-col mx-auto px-4 text-white"
  >
    <h1
      class="text-[30px] md:text-[56px] mt-96 ml-20 font-bold w-[800px]"
    >
    Upaya Pemerintah Mengatasi Kemiskinan di Indonesia    </h1>
  </div>
</section>
  <!-- END Background Blog -->

    <!-- LatePost & PopularPost -->
    <section>
        <div class="flex justify-between mx-20 mt-10">
            <div class=""> 
                <div class="">   @foreach ($blogdetail as $blogdetails ) 
                    <span class="text-[27px] ">
             {{$blogdetail->content}}
            </span>@endforeach
                </div>
            </div>
          <div class="flex-col mx-32">
          <div class="flex items-center gap-5">
             <img src="{{ asset('assets/detail-blog-lingkaran.svg') }}" alt="Detail Blog Lingkaran" class="w-16 h-16 mr-4">
              <div class="flex flex-col">
             <p class="font-bold">William David p</p>
             <p>06 Februari 2020</p>
             </div>
          </div>

                <div>
                    <h1 class="font-popins text-[30px] font-semibold">Populer Post</h1>
                    <span class="flex">
              <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[162px] h-[4px]" />
              <img src="/assets/garis-blog-gray-popular.svg" alt="" class="w-[213px] h-[4px]" />
            </span>
                    <span class="flex mt-7 gap-5">
              <img src="/assets/blog-popular1.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[400px] h-[100px] font-popins text-[21px] font-semibold">TBN Alliance: Kolaborasi Penting?</h1>
            </span>
                    <span class="flex py-10 gap-5">
              <img src="/assets/blog-popular2.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">kemiskinan dan Kerusakan Lingkungan</h1>
            </span>
                    <span class="flex gap-5">
              <img src="/assets/blog-popular3.svg" alt="" class="w-[155px] h-[93px]" />
              <h1 class="w-[193px] h-[83px] font-popins text-[21px] font-semibold">Mengelola Sampah dengan Metode 3R</h1>
            </span>
                </div>
                <!-- Populer Post & Latest Post -->
                <div class="mt-10">
                    <h1 class="font-popins text-[34px] font-semibold">Latest Post</h1>
                    <span class="flex">
              <img src="/assets/garis-blog-latepost.svg" alt="" class="w-[242px] h-[4px]" />
              <img src="/assets/garis-blog-gray.svg" alt="" />
            </span>
                    <div class="">
                        <div class="mt-10 gap-10">
                            <span>
                  <div class="flex gap-10">
                    <img src="/assets/latepos1.svg" alt="" class="w-[220px] h-[260px]" />
                    <span class=" flex-col justify-end align-middle">
                      <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">TBN Alliance : Kolaborasi Penting?</h1>
                      <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal">Meningkatkan Dampak Sosial dengan TBN Alliance</p>
                      <p class="w-[220px] text-biru text-[13px] font-normal font-popins">Nanda Ardika • 14 Mei 2024</p>
                      <a href=""><button class="border py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white mt-5">Read More</button></a>
                    </span>
                        </div>
                        </span>
                        <span>
                  <div class="flex mt-10 gap-10">
                    <img src="/assets/latepos2.svg" alt="" class="w-[220px] h-[260px]" />
                    <span class="">
                      <h1 class="w-[220px] h-[72px] font-popins text-[18px] font-semibold">Menuntaskan Kemiskinan Melalui Pertanian</h1>
                      <p class="w-[220px] h-[72px] font-popins text-[16px] font-normal mt-4">Upaya pemberantasan kemiskinan di Indonesia berada pada jalur tepat.</p>
                      <p class="w-[220px] text-biru text-[13px] font-normal font-popins">KPPN BITUNG • 07 November 2023</p>
                      <a href=""><button class="border mt-5 py-2 px-8 justify-center items-center rounded-3xl bg-biru text-white">Read More</button></a>
                    </span>
                    </div>
                    </span>
                </div>
            </div>
        </div>
        <!-- END LatePost & PopularPost -->
        </div>
        </div>
    </section>
    <!-- Content Image -->
    <div class="flex justify-center my-10">
    <img src="{{ asset('assets/blog-detail1image.svg') }}" class="max-w-full h-auto" alt="Detail Image">
</div>

<div class="mx-32 mt-10">
    <span class="text-[27px] ">
        Menurut data World Bank, Tercatat Indonesia berada menempati peringkat sembilan dalam daftar negara dengan jumlah orang miskin terbesar di dunia. Madagaskar menempati peringkat pertama sebagai negara dengan jumlah orang miskin
        terbanyak. Disusul oleh Kongo, Monzambik, Nigeria, Tanzania, Bangladesh, Etiopia, India, Indonesia dan China Berdasarkan hasil Persentase dari Badan Pusat Statistik (BPS) mengenai Penduduk Miskin di Indonesia per Maret 2019 Sebesar
        9,41 Persen. Persentase penduduk miskin pada Maret 2019 sebesar 9,41 persen, menurun 0,25 persen poin terhadap September 2018 dan menurun 0,41 persen poin terhadap Maret 2018. Jumlah penduduk miskin pada Maret 2019 sebesar 25,14
        juta orang, menurun 0,53 juta orang terhadap September 2018 dan menurun 0,80 juta orang terhadap Maret 2018. Persentase penduduk miskin di daerah perkotaan pada September 2018 sebesar 6,89 persen, turun menjadi 6,69 persen pada
        Maret 2019. Sementara persentase penduduk miskin di daerah perdesaan pada September 2018 sebesar 13,10 persen, turun menjadi 12,85 persen pada Maret 2019. Dibanding September 2018, jumlah penduduk miskin Maret 2019 di daerah
        perkotaan turun sebanyak 136,5 ribu orang (dari 10,13 juta orang pada September 2018 menjadi 9,99 juta orang pada Maret 2019). Sementara itu, daerah perdesaan turun sebanyak 393,4 ribu orang (dari 15,54 juta orang pada September
        2018 menjadi 15,15 juta orang pada Maret 2019). Garis Kemiskinan pada Maret 2019 tercatat sebesar Rp425.250,-/kapita/bulan dengan komposisi Garis Kemiskinan Makanan sebesar Rp313.232,- (73,66 persen) dan Garis Kemiskinan Bukan
        Makanan sebesar Rp112.018,- (26,34 persen). Pada Maret 2019, secara rata-rata rumah tangga miskin di Indonesia memiliki 4,68 orang anggota rumah tangga. Dengan demikian, besarnya Garis Kemiskinan per rumah tangga miskin secara
        rata-rata adalah sebesar Rp1.990.170,-/rumah tangga miskin/bulan. Ini membuktikan dari tahun ke tahun jumlah angka kemiskinan yang terjadi di Indonesia mengalami penurunan, semua tidak lepas dari peran penting dan campur tangan
        pemerintah dalam mengatasi permasalahan kemiskinan dan meningkatkan sumber daya manusianya di Indonesia. beras Sejahtera, Kartu Indonesia Sehat dan bantuan non-tunai yang diberikan pemerintah dapat berkontribusi dengan baik pada
        penurunan kemiskinan ini. Selain itu juga hal yang perlu diperhatikan untuk dapat mengurangi kemiskinan di negeri ini dengan memperluas lapangan pekerjaan bagi masyarakat, memberikan bantuan pendidikan gratis kepada masyarakat yang
        tinggal jauh dipelosok dan putus sekolah. saat ini pemerintah telah mengadakan program bantuan pendidikan berupa wajib belajar sembilan tahun bagi masyarakat yang tidak mampu. dan yang terakhir Memberikan fasilitas yang memadai dan
        subsidi gratis. peran pemerintah diharapkan membantu dalam memberi fasilitas yang merata di setiap wilayah. Pemberian fasilitas tersebut dapat diwujudkan dengan melengkapi sejumlah sarana dan prasarana yang dinilai kurang atau masih
        belum cukup keberadaannya. Setelah fasilitas terpenuhi, diharapkan masyarakat dapat hidup dengan layak dan sejahtera serta permasalahan mengenai kemiskinan itu dapat diatasi dengan baik.
    </span>
</div>
    <!-- End Content Image -->

    <!-- End Content Image -->
    @endsection