<!DOCTYPE html>
<html data-theme="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBN Indonesia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

  <body class="font-popins">
    <!-- NAVBAR --> 
    <nav
      id="navbar"
      class="px-8 py-2 md:py-1 fixed w-full font-jakarta z-50 shadow-lg backdrop-blur-lg bg-biru"
    >
      <div class="flex items-center justify-between">
        <span class="flex items-center space-x-2 md:ml-10 py-1 z-10 md:py-0">
          <a href="{{ route('home') }}"
            ><img
              src="../assets/logo nav.svg"
              alt="logo navbar"
              class="w-[100px]"
          /></a>
        </span>

        <div class="lg:flex hidden gap-6 mt-2 mb-2 mr-5">
          <ul
            class="hidden mt-2 item-center space-x-10 lg:mr-20 text-white font-semibold tracking-wide md:flex"
          >
            <a href="{{ route('home') }}"><li>Home</li></a>
            <a href="{{ route('about') }}"><li>About Us</li></a>
            <a href="{{ route('event') }}"><li>Event</li></a>
            <a href="{{ route('blog') }}"><li>Blog</li></a>
            <a href="{{ route('contact') }}"><li>Contact Us</li></a>
          </ul>
          <a href="{{ route('login') }}" class="border-2 px-8 py-2 rounded-lg font-bold font-xs text-hijau border-hijau">JOIN US</a
          >
        </div>
        <button class="w-16 lg:hidden block buttonToogle">
          <img
            src="../assets/menu1.svg"
            alt="Menu"
            class="w-[100px] md:w-0 h-"
          />
        </button>
      </div>
      <!-- MOBILE MENU -->
      <div class="Mobilemenu hidden">
        <ul class="text-sm font-bold gap-6 bg-background z-10">
          <a href="{{ route('home') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300 z-10"
            >
              Home
            </li></a
          >
          <a href="{{ route('about') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              About Us
            </li></a
          >
          <a href="{{ route('event') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Event
            </li></a
          >
          <a href="{{ route('blog') }}"
            ><li
              class="py-4 px-6 ml-4 md:ml-0 lg:px-20 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Blog
            </li></a
          >
          <a href="{{ route('contact') }}"
            ><li
              class="py-4 px-10 cursor-pointer hover:bg-white ease-in duration-300"
            >
              Contact Us
            </li></a
          >
        </ul>

        <div class="gap-6 mt-2 mb-2">
          <a href="{{ route('login') }}">
            <button
              class="border px-1 py-3 rounded-md font-bold font-xs bg-hijau w-full"
            >
              LOGIN
            </button>
          </a>
        </div>
      </div>
    </nav>

    <script>
      window.addEventListener("scroll", function () {
        var navbar = document.getElementById("navbar");
        if (window.scrollY > 0) {
          navbar.classList.add("bg-blues");
        } else {
          navbar.classList.remove("bg-blues");
        }
      });
    </script>

    <!-- END NAVBAR -->

    <!-- LOGIN -->
    <section
      class="py-24 px-4 md:py-[65px] flex flex-col md:flex-row justify-center items-center md:mr10 gap-20"
    >
      <!-- Carousel -->
      <div class="w-full md:w-[500px] mb-8">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div
                class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded- shadow-md"
              >
                <img
                  src="../assets/caraousel-1.svg"
                  alt="Image 1"
                  class="object-cover w-full h-full"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/caraousel-2.svg"
                  alt="Image 2"
                  class="object-cover w-full h-full"
                />
              </div>
            </div>
            <div class="swiper-slide">
              <div
                class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-lg shadow-md"
              >
                <img
                  src="../assets/caraousel-3.svg"
                  alt="Image 3"
                  class="object-cover w-full h-full"
                />
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form login -->
      <div class="md:mr-20 md:mb-0 w-full md:w-auto">
        <div class="flex flex-col">
          <h1 class="text-[24px] md:text-[40px] font-semibold mb-2 font-popins ml-32 md:ml-0">
            Sign Up
          </h1>
          <p>
            Let’s get you all st up so you can access your personal account.
          </p>

          <div>
            <div class="flex">
                <label
                      for="First_Name"
                      class="block text-sm font-medium text-gray-700"
                      >Frist Name</label
                    >
                    <label
                          for="Last_Name"
                          class="block text-sm font-medium text-gray-700 ml-44"
                          >Last Name</label
                        >
                   </div>  
                    <div class="mb-4 flex gap-3">
                        
                        <input
                          type="text"
                          id="firs_name"
                          name="flast_name"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[220px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                        
                            >
                            <input
                              type="text"
                              id="last_name"
                              name="last_name"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                            />
                    </div>

                    <div class="flex">
                    <label
                          for="email"
                          class="block text-sm font-medium text-gray-700"
                          >Email</label
                        >
                        <label
                              for="phone_number"
                              class="block text-sm font-medium text-gray-700 ml-52"
                              >Phone Number</label
                            >
                       </div>     
                    <div class="mb-4 flex gap-4">
                        <input
                          type="text"
                          id="email"
                          name="email"
                          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[220px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                        />
                            
                            <input
                              type="text"
                              id="Phone_Number"
                              name="Phone_Number"
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[250px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                            />
                        </div>
            </div>
            

          <div class="mb-4 relative">
            <label
              for="password"
              class="block text-sm font-medium text-gray-700"
              >Password</label
            >
            <div class="relative">
              <input
                type="password"
                id="password"
                name="password"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[500px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
              />
          </div>
          <div class="mb-4 relative">
            <label
              for="Confirm password"
              class="block text-sm font-medium text-gray-700 py-3"
              >Confirm Password</label
            >
            <div class="relative">
              <input
                type="password"
                id="password"
                name="password"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[500px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
              />
              <!-- Password toggle button -->
              <button
                type="button"
                onclick="togglePassword()"
                class="absolute inset-y-0 right-0 flex items-center pr-2 focus:outline-none"
              >
                <svg
                  class="h-5 w-5 text-gray-400"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5z"
                  />
                </svg>
              </button>
            </div>
          </div>
          <div class="flex items-center mb-4">
            <input
              type="checkbox"
              id="remember_me"
              name="remember_me"
              class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
            />
            <label for="remember_me" class="ml-2 block text-sm text-gray-900 text-[14px] font-semibold"
              >I agree to all the <span class="text-hijau">Terms</span> and <span class="text-hijau">Privacy Policies</span></label
            >
          </div>
          <button
            class="border rounded-lg p-2 lg:px-52 px-32 mt-2 bg-hijau text-white font-popins"
          >
            <a href="{{ route('login') }}">Creat Account</a>
          </button>
          <p class="flex justify-center items-center mt-2">
            Already have an account? <a href="{{ route('login') }}" class="text-hijau">Login</a>
          <p class="flex justify-center items-center text-gray-400">
            or sign up with
          </p>
          <div class="flex mt-5 justify-center gap-10">
            <a href="{{ route('email-confirm') }}"
              ><img
                src="../assets/google.svg"
                class="border py-2 px-10 rounded-2xl border-hijau"
                alt=""
            /></a>

            <a href="{{ route('email-confirm') }}"
              ><img
                src="../assets/apple.svg"
                class="border py-2 px-10 rounded-2xl border-hijau"
                alt=""
            /></a>
          </div>
        </div>
      </div>
    </section>

    <!-- END LOGIN -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/caraousel.js"></script>
    <script src="../js/humberger.js"></script>
  </body>
</html>
