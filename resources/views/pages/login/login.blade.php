
@extends('layouts.nofooter')

@section('content')

    <!-- LOGIN -->
    <section class="py-28 px-4 md:py-[70px] flex flex-col-reverse md:flex-row justify-center items-center md:mr-10">
      <!-- Form login -->
      <div class="md:mr-20 mb-8 md:mb-0 w-full md:w-auto">
          <div class="flex flex-col">
              <h1 class="text-[24px] md:text-[40px] font-semibold mb-2 font-popins">
                  Login
              </h1>
              <p class="text-gray-500 mb-4">
                  Login to access your travelwise account
              </p>
              <form method="POST" action="{{ route('login') }}">
                @csrf
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukan Email anda"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[450px] p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md" />
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" placeholder="Masukan password anda"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                               required />
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <button type="button" onclick="togglePasswordVisibility()"
                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <svg id="password-visibility-icon" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path d="M2.458 12C3.732 7.943 7.512 5 12 5c4.489 0 8.268 2.943 9.542 7-.805 2.09-2.3 3.87-4.316 4.95M12 17c-2.588 0-4.856-.94-6.316-2.518" />
                            </svg>
                        </button>
                    </div>
                </div>
            
                <div class="flex items-center mb-4">
                    <input type="checkbox" id="remember_me" name="remember_me"
                           class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                    <label for="remember_me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    <a href="{{ route('forgot-password') }}" class="ml-auto text-hijau">Forget Password</a>
                </div>
            
                <button type="submit" class="border rounded-lg p-2 lg:px-52 px-32 mt-2 bg-hijau text-white font-popins">Login</button>
            </form>
            
              <p class="flex justify-center items-center mt-2">
                  Don’t have an account?
                  <a href="{{ route('sign') }}"><span class="text-hijau">Sign up</span></a>
              </p>
              <p class="flex justify-center items-center text-gray-400">
                  or login with
              </p>
              <a href="{{ route('login.google') }}" class="btn btn-primary">Login with Google</a>


              {{-- <a href="{{ route('email-confirm') }}"
            ><img
              src="/assets/apple.svg"
              class="border py-2 px-10 rounded-2xl border-hijau"
              alt=""
          /></a> --}}
          </div>
      </div>
      </div>

      <!-- Carousel -->
      <div class="w-full md:w-[500px] mb-8">
          <div class="swiper-container">
              <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <div class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-2xl shadow-md">
                          <img src="/assets/caraousel-1.svg" alt="Image 1" class="object-cover w-full h-full" />
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-lg shadow-md">
                          <img src="/assets/caraousel-2.svg" alt="Image 2" class="object-cover w-full h-full" />
                      </div>
                  </div>
                  <div class="swiper-slide">
                      <div class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-lg shadow-md">
                          <img src="/assets/caraousel-3.svg" alt="Image 3" class="object-cover w-full h-full" />
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- END LOGIN -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/caraousel.js"></script>
    <script>
      function togglePasswordVisibility() {
        const passwordInput = document.getElementById("password");
        const passwordVisibilityIcon = document.getElementById(
          "password-visibility-icon"
        );
        if (passwordInput.type === "password") {
          passwordInput.type = "text";
          passwordVisibilityIcon.setAttribute(
            "d",
            "M12 4.5C7.5 4.5 4 7.833 2.25 12c1.75 4.167 5.25 7.5 9.75 7.5s8-3.333 9.75-7.5C20 7.833 16.5 4.5 12 4.5zm0 9.5a2 2 0 110-4 2 2 0 010 4z"
          );
        } else {
          passwordInput.type = "password";
          passwordVisibilityIcon.setAttribute(
            "d",
            "M15 12a3 3 0 11-6 0 3 3 0 016 0z"
          );
        }
      }
    </script>
@endsection