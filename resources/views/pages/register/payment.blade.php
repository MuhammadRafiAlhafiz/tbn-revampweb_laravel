<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Halaman pemilihan metode pembayaran untuk acara TBN"
    />
    <meta
      name="keywords"
      content="TBN, pembayaran, event, pendidikan, Jakarta"
    />
    <title>REVAMP TBN</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />
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
      <a href="{{ route('event') }}">
        <img
          src="/assets/panah.svg"
          alt="Panah Kembali"
          class="md:ml-20 w-[50px] h-[30px]"
        />
      </a>
      <a href="{{ route('home') }}">
        <img src="/assets/logo nav.svg" alt="Logo TBN" class="md:mr-20" />
      </a>
    </nav>
    <!-- END NAVBAR -->

    <!-- SELECT PAYMENT -->
    <section id="payment-section" class="flex justify-center gap-36">
      <div>
        <h1 class="text-center font-nunito text-[42px] font-extrabold">
          Select Payment
        </h1>
        <div
          class="mt-5 border border-transparent bg-bgpayment w-[600px] h-[230px] rounded-3xl"
        >
          <h2 class="ml-8 font-popins text-[27px] font-semibold py-5">
            Payment
          </h2>
          <div
            class="flex gap-10 mr-20 ml-8 border border-transparent bg-bgpayment2 py-2 rounded-2xl"
          >
            <span
              class="font-popins text-[21px] ml-5 font-semibold text-gray-400"
            >
              <p>Nama</p>
              <p>Email</p>
              <p>Phone</p>
            </span>
            <span class="text-blue-950 font-popins text-[21px] font-semibold">
              <p>jerome</p>
              <p>jerome@gmail.com</p>
              <p>087654367823</p>
            </span>
          </div>
        </div>

        <div
          class="border border-transparent bg-bgpayment w-[600px] h-[150px] rounded-3xl"
        >
          <div
            class="flex gap-10 mt-8 mr-20 ml-8 border border-transparent bg-bgpayment2 py-2 rounded-2xl"
          >
            <span
              class="ml-5 font-popins text-[21px] font-semibold text-gray-400"
            >
              <p>payment_id</p>
              <p>Paid on</p>
            </span>
            <span class="text-blue-950 font-popins text-[21px] font-semibold">
              <p>pay_011eZtj</p>
              <p>2nd May, 2024</p>
            </span>
          </div>
        </div>

        <div
          class="mt-5 border border-transparent bg-bgpayment w-[600px] h-[120px] rounded-3xl"
        >
          <div class="mt-5 ml-8">
            <h2 class="font-popins text-[27px] font-semibold ml-5">Method</h2>
            <span class="flex items-center gap-3 ml-4">
              <img
                class="w-[57px] h-[45px]"
                src="/assets/event-payment-whatsapp.svg"
                alt="Pembayaran melalui WhatsApp"
              />
              <a href="https://wa.me/+6282310001908">
                <p class="font-popins text-[27px] font-semibold">
                  tbn Indonesia +6282310001908
                </p>
              </a>
            </span>
          </div>
        </div>
      </div>

      <!-- PAYMENT -->
      <div class="mt-10 border rounded-[20px]">
        <img
          class="mt-5 mx-auto w-[200px] h-[250px] rounded-xl"
          src="/assets/banner-event4.svg"
          alt="Banner Acara The Future Of Education"
        />
        <div class="mt-5 mx-10">
          <h2 class="font-popins text-[27px] font-semibold">
            The Future Of Education
          </h2>
          <div class="flex items-center gap-2 mt-2">
            <span class="w-[30px]">
              <img src="/assets/event-payment-date.svg" alt="Tanggal" />
              <img
                class="py-2"
                src="/assets/event-payment-location.svg"
                alt="Lokasi"
              />
            </span>
            <span class="font-popins text-[17px] font-normal">
              <p>10 NOVEMBER 2023</p>
              <p class="py-2">MENARA DANAREKSA (ARYA NUSA BALLROOM) JAKARTA</p>
            </span>
          </div>
          <hr class="w-full border-t-4 border-gray-300 mt-2" />

          <span
            class="flex gap-2 justify-between mt-2 font-popins text-[17px] font-normal"
          >
            <p>Group Table/ <span class="text-gray-400">6 person</span></p>
            <p class="text-[21px] font-semibold font-popins">1X</p>
          </span>
          <p class="font-popins text-[17px] font-normal">Rp 6.000.000</p>
          <hr class="w-full border-t-4 border-gray-300 mt-2" />

          <span
            class="flex gap-2 justify-between font-popins text-[17px] font-normal mt-2"
          >
            <p>Sub Total</p>
            <p>Rp 6.000.000</p>
          </span>

          <span
            class="flex gap-2 justify-between font-popins text-[17px] font-normal"
          >
            <p>Tax (5%)</p>
            <p>Rp 300.000</p>
          </span>
          <hr class="w-full border-t-4 border-gray-300 mt-2" />

          <span
            class="flex gap-2 justify-between mt-2 font-popins text-[21px] font-semibold"
          >
            <p>Total</p>
            <p>Rp 6.300.000</p>
          </span>
        </div>
        <span class="flex justify-center mt-5 py-5">
          <button
            id="donePaymentButton"
            class="border border-transparent py-2 bg-hijau px-36 text-white rounded-3xl"
          >
            Done Payment
          </button>
        </span>
      </div>
    </section>
    <!-- END SELECT PAYMENT -->

    <!-- THANK YOU SECTION (Initially Hidden) -->
    <section id="thankYouSection" class="hidden flex-col">
      <div class="text-center flex justify-center items-center mt-20">
        <div>
          <img
            src="/assets/event-payment-sucsses payment.svg"
            alt="Check Mark"
            class="w-[300px] h-[350px]"
          />
        </div>
        <div>
          <h1 class="text-[34px] font-semibold font-popins text-hijau">
            THANK YOU for RSVP!
          </h1>
          <p class="mt-2 text-[34px] font-semibold">
            Please check your email for future event updates
          </p>
          <a href="{{ route('event') }}">
            <button class="mt-6 bg-hijau text-white px-20 py-2 rounded-full">
              Done
            </button>
          </a>
        </div>
      </div>
    </section>

    <script>
      document
        .getElementById("donePaymentButton")
        .addEventListener("click", function () {
          document.getElementById("payment-section").classList.add("hidden");
          document.getElementById("thankYouSection").classList.remove("hidden");
          document.getElementById("thankYouSection").classList.add("flex");

          // Hide navbar
          document.getElementById("navbar").classList.add("hidden");
        });

      // Function to show navbar
      function showNavbar() {
        document.getElementById("navbar").classList.remove("hidden");
      }
    </script>
  </body>
</html>
