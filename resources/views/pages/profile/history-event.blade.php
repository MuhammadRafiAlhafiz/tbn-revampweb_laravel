<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event History</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
  </head>
  <body class="font-poppins bg-gray-50">
    <!-- NAVBAR -->
    <nav class="bg-biru py-3 flex items-center justify-between w-full">
      <a href="{{ route('home') }}">
        <img src="/assets/panah.svg" alt="Back" class="md:ml-20 w-[50px] h-[30px]" />
      </a>
      <a href="{{ route('home') }}">
        <img src="/assets/logo nav.svg" alt="Logo" class="md:mr-20" />
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- EVENT HISTORY -->
    <section id="event-history"> 
      <h1 class="font-poppins text-[44px] font-bold text-biru flex justify-center mt-5">Event History</h1>
      <div class="mt-16 border rounded-[30px] shadow-2xl text-center mx-24 py-10 bg-background">
        @foreach ($programs as $program)
        <div class="flex justify-between mx-20 mb-10">
          <div>
            <p class="font-poppins text-[27px] font-semibold">Status</p>
            <p class="border py-1 px-5 rounded-2xl text-white bg-green-800 mt-10">s</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">ID</p>
            <p class="font-poppins text-[17px] font-normal mt-10">{{ $program->id }}</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">Event</p>
            <p class="font-poppins text-[17px] font-normal mt-9">{{ $program->name }}</p>
          </div>
          <div>
            <p class="font-poppins text-[27px] font-semibold">Time</p>
            <p class="font-poppins text-[17px] font-normal mt-9">{{ $program->time }}</p>
          </div>
          <div class="flex flex-col">
            <p class="font-poppins text-[27px] font-semibold">Action</p>
            <button type="button" onclick="showHistoryDetail({{ $program->id }})" class="border py-1 px-5 rounded-2xl text-white bg-biru mt-8">View</button>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- END EVENT HISTORY -->

    <script>
      function showHistoryDetail(id) {
        // Logika untuk menampilkan detail history
        alert('Show history detail for ID ' + id);
      }
    </script>
  </body>
</html>
