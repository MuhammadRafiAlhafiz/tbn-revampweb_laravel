<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Email Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
</head>

<body class="font-poppins">
    <!-- NAVBAR -->
    <nav class="bg-biru py-5 flex items-center justify-between w-full">
        <a href="{{ route('event') }}"><img src="/assets/panah.svg" alt="" class="ml-4 md:ml-20 w-10 h-6" /></a>
        <a href="{{ route('home') }}"><img src="/assets/logo nav.svg" alt="" class="mr-4 md:mr-20" /></a>
    </nav>
    <!-- END NAVBAR -->

    <!-- FORM REGIS -->
    <section class="md:flex justify-center items-center flex-col ml-16">
        <h1 class="md:w-[800px] h-[40px] font-nunito ml-10 text-[30px] md:text-[42px] font-extrabold md:ml-72 py-5">
            Form Registrasi Event
        </h1>
        <form method="POST" action="{{ route('register-event', ['id' => $program->id]) }}">
            @csrf
            <div class="mt-10">
                <label for="program_name" class="w-[400px] font-poppins text-[17px] font-normal">Program Name</label>
                <input type="text" id="program_name" name="program_name" placeholder="Program Name"
                    class="border flex w-full md:w-[1077px] h-[50px] bg-gray-200 rounded-xl px-3"
                    value="{{ $program->name }}" readonly>
                    <input type="hidden" id="ticket_id" name="ticket_id" value="{{ $program->id }}">


                <input type="hidden" id="program_price" name="program_price" value="{{ $program->price }}">

                <label for="name" class="w-[400px] font-poppins text-[17px] font-normal">Full Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Full Name"
                    class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3"
                    value="{{ auth()->user()->name }}">

                <div class="py-3">
                    <label for="email" class="w-[400px] font-poppins text-[17px] font-normal">Email</label>
                    <input type="email" id="email" name="email" placeholder="email"
                        class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3"
                        value="{{ auth()->user()->email }}">
                </div>

                <label for="telp" class="w-[400px] font-poppins text-[17px] font-normal">Phone Number</label>
                <input type="text" id="telp" name="telp" placeholder="Nomor Telephon"
                    class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3"
                    value="{{ auth()->user()->no_telp }}">

                <div class="py-3">
                    <label for="afiliate" class="w-[400px] font-poppins text-[17px] font-normal">Afiliasi</label>
                    <input type="text" id="afiliate" name="afiliate" placeholder="Afiliasi"
                        class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3">
                </div>

                <div class="w-full md:w-[1077px] mb-6 md:mb-0">
                    <label class=" w-[400px] font-poppins text-[17px] font-normal" for="ticket_type">
                        Jenis Tiket
                    </label>
                    <p
                        class="block w-full md:w-[1077px] bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded-xl leading-tight">
                        {{ $program->price > 0 ? 'Berbayar - Rp ' . $program->price : 'Gratis' }}
                    </p><input type="hidden" id="ticket_id" name="ticket_id" value="{{ $program->id }}">
   <input type="hidden" id="program_id" name="program_id" value="{{ $program->id }}">
                    <input type="hidden" id="ticket_type" name="ticket_type" value="{{ $program->price > 0 ? 'paid' : 'free' }}">

                    <input type="hidden" id="price" name="price" value="{{ $program->price }}">
                </div>

                <div class="mt-5">
                    <label for="notes" class="w-[400px] font-poppins text-[17px] font-normal">Catatan</label>
                    <input type="text" id="notes" name="notes" placeholder="Tambahkan Catatan"
                        class="border flex w-full md:w-[1080px] h-[50px] rounded-xl px-3">
                </div>

                <div class="flex ml-5 items-center md:ml-80 py-8 gap-4">
                    <input type="checkbox" id="remember_me" name="remember_me"
                        class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                    <p>Agree with all this, continue registration</p>
                </div>

                <button type="submit"
                    class="font-nunito text-white border rounded-2xl w-[204px] h-[60px] p-[10px] bg-hijau ml-20 md:ml-96">Submit</button>
            </div>
        </form>
    </section>
    <!-- END FORM REGIS -->
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    <!-- FOOTER -->
    <section class="bg-white mt-10">
        <div class="flex flex-col md:flex-row md:p-10 justify-between mx-10">
            <div class="w-full md:w-[400px] mb-5 md:mb-0">
                <img src="/assets/logo footer.svg" alt="" />
                <p class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-poppins">
                    TBN Indonesia adalah jaringan global wirausaha yang berorientasi pada
                    tujuan, investor dampak, dan pembangun kapasitas yang mengambil
                    pendekatan kewirausahaan untuk mengentaskan kemiskinan di masyarakat
                    berpenghasilan rendah dan kurang terlayani.
                </p>
            </div>

            <div class="flex flex-col mt-5">
                <h1 class="text-[21px] md:text-lg font-semibold font-poppins">
                    LOKASI
                </h1>
                <p class="text-[18px] md:text-base font-normal font-poppins mt-3 md:mt-5">
                    Jl. M.H.Thamrin No.20, Menteng
                </p>
                <p class="text-[18px] md:text-base font-normal font-poppins">
                    Jakarta Pusat 10350, Indonesia
                </p>
            </div>

            <div>
                <h1 class="font-poppins font font-semibold text-[21px] md:text-lg mt-2">
                    Perusahaan
                </h1>
                <div class="flex flex-col font-poppins font-normal text-[18px] md:text-base mt-3 md:mt-5">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}" class="py-2">About Us</a>
                    <a href="{{ route('event') }}">Event</a>
                    <a href="{{ route('blog') }}" class="py-2">Blog</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>

            <div>
                <h1 class="font-poppins font-semibold text-[21px] md:text-lg">
                    Ikuti Social Media Kami
                </h1>
                <div class="flex gap-3 md:gap-[20px] py-5">
                    <a href="https://www.instagram.com/tbn.indonesia/"><img src="/assets/nav-instagram.svg"
                            alt="" /></a>
                    <a href="https://www.youtube.com/@tbnindonesia902"><img src="/assets/nav-youtube.svg"
                            alt="" /></a>
                    <a href="https://www.linkedin.com/company/tbnindo/"><img src="/assets/link.svg"
                            alt="" /></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER -->
    
</body>

</html>
