<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
  </head>
  <body class="font-popins">
    <!-- NAVBAR -->
    <nav class="bg-biru py-5 flex items-center justify-between w-full">
      <a href="{{ route('home') }}"
        ><img
          src="../assets/panah.svg"
          alt=""
          class="md:ml-20 w-[50px] h-[30px]"
      /></a>
      <a href="{{ route('home') }}"
        ><img src="../assets/logo nav.svg" alt="" class="md:mr-20"
      /></a>
    </nav>
    <!-- END NAVBAR -->

    <!-- DATA PROFILE -->
    <section>
      <div class="flex justify-center items-center mt-20 gap-20">
        <span>
          <img
            src="../assets/foto-profile.svg"
            alt=""
            class="w-[350px] h-[509px]"
          />
        </span>
        <span>
          <p class="font-popins text-[23px] font-semibold">Name:</p>
          <p class="font-popins text-[18px] font-normal">Farsha Adhikari</p>
          <p class="font-popins text-[23px] font-semibold mt-5">Email:</p>
          <p class="font-popins text-[18px] font-normal">Farshaadk@gmail.com</p>
          <p class="font-popins text-[23px] font-semibold mt-5">
            Phone Number:
          </p>
          <p class="font-popins text-[18px] font-normal">087629873672</p>
          <p class="font-popins text-[23px] font-semibold mt-5">Address</p>
          <p class="font-popins text-[18px] font-normal">
            Jl.Gajah Selatan No.2b
          </p>
          <a href="{{ route('profile-edit') }}"
            ><span
              class="flex mt-10 border p-2 border-hijau rounded-xl gap-5 items-center justify-center"
            >
              <p><img src="../assets/icon-editprofile.svg" alt="" /></p>
              <p class="text-hijau font-popins text-[21px] font-semibold">
                Edit Profile
              </p>
            </span>
          </a>
        </span>
      </div>
    </section>
    <!-- END DATA PROFILE -->
  </body>
</html>
