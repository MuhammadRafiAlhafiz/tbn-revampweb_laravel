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

<body class="font-popins">
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
        <for mmethod="POST" action="{{ route('register-event') }}">
          <div class="mt-10">
            @csrf
            <label for="program_name" class="w-[400px] font-popins text-[17px] font-normal">Program Name</label>
            <input type="text" id="program_name" name="program_name" placeholder="Program Name"
                class="border flex w-full md:w-[1077px] h-[50px] bg-gray-200 rounded-xl px-3" value="{{ $program->name }}" readonly>
            <label for="name" class="w-[400px]  font-popins text-[17px] font-normal">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Full Name"
                class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3" value="{{ auth()->user()->name }}">

            <div class="py-3">
                <label for="email" class="w-[400px] font-popins text-[17px] font-normal">Email</label>
                <input type="email" id="email" name="email" placeholder="email"
                    class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3" value="{{ auth()->user()->email }}">
            </div>
            <label for="telp" class="w-[400px] font-popins text-[17px] font-normal">Phone Number</label>
            <input type="text" id="telp" name="telp" placeholder="Nomor Telephon"
                class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3" value="{{ auth()->user()->no_telp }}">
            <div class="py-3">
                <label for="afiliate" class="w-[400px] font-popins text-[17px] font-normal">Afiliasi</label>
                <input type="text" id="afiliate" name="afiliate" placeholder="Afiliasi"
                    class="border flex w-full md:w-[1077px] h-[50px] rounded-xl px-3">
            </div>
            <div class="w-full md:w-[1077px] mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                    Jenis Tiket
                </label>
                <select id="ticket_id" class="form-control block appearance-none w-full md:w-[1077px] bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 rounded-xl leading-tight focus:outline-none focus:bg-white focus:border-gray-500 @error('ticket_id') is-invalid @enderror" name="ticket_id" required>
                  <option value="">Select Ticket</option>
                  @foreach($ticketOptions as $id => $ticket)
                      <option value="{{ $id }}">{{ $ticket }}</option>
                  @endforeach
              </select>
      
            </div>
            <div class="mt-5">
                <label for="notes" class="w-[400px] font-popins text-[17px] font-normal">Catatan</label>
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
        </form>
      </div>
    </section>
    <!-- END FORM REGIS -->

    <!-- FOOTER -->
    <section class="bg-white mt-10">
        <div class="flex flex-col md:flex-row md:p-10 justify-between mx-10">
            <div class="w-full md:w-[400px] mb-5 md:mb-0">
                <img src="/assets/logo footer.svg" alt="" />
                <p class="text-[14px] md:text-base font-semibold leading-normal text-justify my-3 font-popins">
                    TBN Alliance adalah jaringan global wirausaha yang berorientasi pada
                    tujuan, investor dampak, dan pembangun kapasitas yang mengambil
                    pendekatan kewirausahaan untuk mengentaskan kemiskinan di masyarakat
                    berpenghasilan rendah dan kurang terlayani.
                </p>
            </div>

            <div class="flex flex-col mt-5">
                <h1 class="text-[21px] md:text-lg font-semibold font-popins">
                    LOKASI
                </h1>
                <p class="text-[18px] md:text-base font-normal font-popins mt-3 md:mt-5">
                    Jl. M.H.Thamrin No.20, Menteng
                </p>
                <p class="text-[18px] md:text-base font-normal font-popins">
                    Jakarta Pusat 10350, Indonesia
                </p>
            </div>

            <div>
                <h1 class="font-popins font font-semibold text-[21px] md:text-lg mt-2">
                    Perusahaan
                </h1>
                <div class="flex flex-col font-popins font-normal text-[18px] md:text-base mt-3 md:mt-5">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about') }}"class="py-2">About Us</a>
                    <a href="{{ route('event') }}">Event</a>
                    <a href="{{ route('blog') }}"class="py-2">Blog</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                </div>
            </div>

            <div>
                <h1 class="font-popins font-semibold text-[21px] md:text-lg">
                    Ikuti Social Media Kami
                </h1>
                <div class="flex gap-3 md:gap-[20px] py-5">
                    <a href="https://www.instagram.com/tbn.indonesia/"><img src="/assets/nav-instagram.svg"
                            alt="" /></a>
                    <a href="https://www.youtube.com/@tbnindonesia902"><img src="/assets/nav-youtube.svg"
                            alt="" /></a>
                    <a href="https://wa.me/+6282310001908"><img src="/assets/nav-whatsapp.svg" alt="" /></a>
                    <a href=""><img src="/assets/nav-gmail.svg" alt="" /></a>
                    <a href=""><img src="/assets/nav-link.svg" alt="" /></a>
                </div>
                <h1 class="font-popins font-semibold text-[21px] md:text-lg">
                    Hubungi Kami
                </h1>
                <div class="flex gap-1 mt-2">
                    <img src="/assets/icon email.svg" class="font-popins font-normal text-[17px]" alt="" />
                    <a href="https://www.tbnalliance.org/">hello@tbnalliance.org</a>
                </div>
            </div>
        </div>
        <div class="bg-biru">
            <h1
                class="justify-center items-center text-center p-5 text-white w-[380px] md:w-full text-[16px] font-bold">
                Copyright © 2023 - Transformational Business Network (TBN) Indonesia -
                All rights reserved.
            </h1>
        </div>
    </section>
    <!-- END FOOTR -->
    <script>
        // Ambil elemen select dan input nama program
        var select = document.getElementById('grid-state');
        var programNameInput = document.getElementById('program_name');

        // Tambahkan event listener untuk memperbarui nilai input nama program saat opsi dipilih
        select.addEventListener('change', function() {
            var selectedOption = select.options[select.selectedIndex];
            programNameInput.value = selectedOption.text;
        });
    </script>
</body>

</html>
