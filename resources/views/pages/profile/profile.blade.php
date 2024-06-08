<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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
          src="/assets/panah.svg"
          alt=""
          class="md:ml-20 w-[50px] h-[30px]"
      /></a>
      <a href="{{ route('home') }}"
        >
        @auth
        <form action="{{ route('logout') }}" method="POST" class="md:mr-20">
          @csrf
          <button type="submit" class="border-2 px-4 py-2 rounded-lg font-bold text-white bg-red-600 hover:bg-red-700">Logout</button>
        </form>
      @endauth
      
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- DATA PROFILE -->
    <section class="border shadow-xl rounded-xl mt-10 mx-80">
      <div class="flex justify-center items-center  gap-20">
        <span>
          <img
            src="/assets/foto-profile.svg"
            alt=""
            class="w-[350px] h-[509px]"
          />
        </span>
        <span>
          <p class="font-popins text-[23px] font-semibold">Name:</p>
          <p class="font-popins text-[18px] font-normal">{{ $user->name}}</p>
          <p class="font-popins text-[23px] font-semibold mt-5">Email:</p>
          <p class="font-popins text-[18px] font-normal">{{ $user->email }}</p>
          <p class="font-popins text-[23px] font-semibold mt-5">
            Phone Number:
          </p>
          <p class="font-popins text-[18px] font-normal">{{ $user->no_telp }}</p>


        <span class="flex gap-3">
          <a href="{{ route('profile-edit') }}"
            ><span
              class="flex mt-10 border p-2 bg-hijau rounded-xl gap-5 items-center justify-center"
            >
              <p><img src="/assets/icon-editprofile.svg" alt="" /></p>
              <p class="text-white font-popins text-[21px] font-semibold">
                Edit Profile
              </p>
            </span>
          </a>
          <a href="{{ route('history-event') }}"
            ><span
              class="flex mt-10 border p-2 bg-hijau rounded-xl gap-5 items-center justify-center"
            >
              <p class="text-white font-popins text-[21px] font-semibold">
                History Event
              </p>
            </span>
          </a>
          </span> 
        </span> 
      </div>
    </section>
    <!-- END DATA PROFILE -->
  </body>
</html>
