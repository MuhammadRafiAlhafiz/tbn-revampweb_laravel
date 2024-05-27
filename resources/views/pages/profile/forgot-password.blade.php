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
    <style>
      .hidden {
        display: none;
      }
    </style>
  </head>
  <body class="font-poppins bg-gray-50">
    <!-- NAVBAR -->
    <nav class="bg-biru py-5 flex items-center justify-between w-full">
      <a href="{{ route('home') }}">
        <img
          src="../assets/panah.svg"
          alt=""
          class="md:ml-20 w-[50px] h-[30px]"
        />
      </a>
      <a href="{{ route('home') }}">
        <img src="../assets/logo nav.svg" alt="" class="md:mr-20" />
      </a>
    </nav>
    <!-- END NAVBAR -->

    <div class="min-h-screen flex flex-col items-center bg-white">
      <div
        class="max-w-6xl w-full bg-white gap-20 rounded-lg overflow-hidden flex flex-col md:flex-row"
      >
        <div class="w-full md:w-1/2 p-8">
          <!-- Forgot Password Form -->
          <div id="forgot-password-form">
            <a
              href="{{ route('login') }}"
              class="flex items-center text-gray-500 hover:text-gray-700 mb-4"
            >
              <img
                src="../assets/panah-forgotpassword.svg"
                alt="Back to login"
                class="w-5 h-5 mr-2"
              />
              <p>Back to login</p>
            </a>
            <h1
              class="text-[40px] w-[512px] h-[60px] font-semibold py-2 font-popins"
            >
              Forgot your password?
            </h1>
            <p class="text-gray-500 py-4 font-normal text-[16px]">
              Don’t worry, happens to all of us. Enter your email below to
              recover your password
            </p>
            <form id="forgot-password-form-content">
              <div class="mb-4">
                <label
                  for="email"
                  class="block text-sm font-medium text-gray-700"
                  >Email</label
                >
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Email"
                  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 py-3 block w-full p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                  required
                />
              </div>
              <button
                type="button"
                onclick="showVerifyCodeForm()"
                class="w-full bg-hijau text-white py-3 px-4 rounded-lg mt-2 font-semibold text-[14px]"
              >
                Submit
              </button>
            </form>
            <img src="../assets/or-login.svg" alt="" class="py-10" />
            <div class="flex justify-center space-x-4">
              <button
                class="w-1/2 flex items-center justify-center bg-white border border-hijau rounded-lg py-2 hover:bg-gray-100"
              >
                <img
                  src="../assets/google.svg"
                  alt="Google"
                  class="w-5 h-5 mr-2"
                />
                <a href="https://mail.google.com">Google</a>
              </button>
              <button
                class="w-1/2 flex items-center justify-center bg-white border border-hijau rounded-lg py-2 hover:bg-gray-100"
              >
                <img
                  src="../assets/apple.svg"
                  alt="Apple"
                  class="w-5 h-5 mr-2"
                />
                <a href="#">Apple</a>
              </button>
            </div>
          </div>
          <!-- Verify Code Form -->
          <div class="hidden" id="verify-code-form">
            <a href="{{ route('login') }}"
              class="flex items-center text-gray-500 hover:text-gray-700 mb-4"
            >
              <img
                src="../assets/panah-forgotpassword.svg"
                alt="Back to login"
                class="w-5 h-5 mr-2"
              />
              <p>Back to login</p>
            </a>
            <h1
              class="text-[40px] w-[512px] h-[60px] font-semibold py-2 font-popins"
            >
              Verify code
            </h1>
            <p class="text-gray-500 py-4 font-normal text-[16px]">
              An authentication code has been sent to your email.
            </p>
            <form id="verify-code-form-content">
              <div class="mb-4">
                <label
                  for="verify-code"
                  class="block text-sm font-medium text-gray-700"
                  >Enter Code</label
                >
                <div class="relative">
                  <input
                    type="password"
                    id="verify-code"
                    name="verify-code"
                    placeholder="Enter Code"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                    required
                  />
                  <button
                    type="button"
                    onclick="toggleVisibility('verify-code', 'verify-code-visibility-icon')"
                    class="absolute inset-y-0 right-0 flex items-center pr-3"
                  >
                    <svg
                      id="verify-code-visibility-icon"
                      class="h-5 w-5 text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path
                        d="M2.458 12C3.732 7.943 7.512 5 12 5c4.489 0 8.268 2.943 9.542 7-.805 2.09-2.3 3.87-4.316 4.95M12 17c-2.588 0-4.856-.94-6.316-2.518"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <p class="text-[14px] font-medium font-popins text-gray-600 mt-2">
                Didn’t receive a code?
                <a
                  href="#"
                  class="text-red-500 text-[14px] font-semibold font-popins"
                  >Resend</a
                >
              </p>
              <button
                type="button"
                onclick="showSetPasswordForm()"
                class="w-full bg-hijau text-white py-2 px-4 rounded-lg mt-8"
              >
                Verify
              </button>
            </form>
          </div>

          <!-- SET A PASSWORD -->
          <div class="hidden" id="set-password-form">
            <h1
              class="text-[40px] w-[512px] h-[60px] font-semibold py-2 font-popins"
            >
              Set a password
            </h1>
            <p class="text-gray-500 py-4 font-normal text-[16px]">
              Your previous password has been reseted. Please set a new password
              for your account.
            </p>
            <form id="set-password-form-content">
              <div class="mb-4">
                <label
                  for="new-password"
                  class="block text-sm font-medium text-gray-700"
                  >Create New Password</label
                >
                <div class="relative">
                  <input
                    type="password"
                    id="new-password"
                    name="new-password"
                    placeholder="Create Your New Password"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                    required
                  />
                  <button
                    type="button"
                    onclick="toggleVisibility('new-password', 'new-password-visibility-icon')"
                    class="absolute inset-y-0 right-0 flex items-center pr-3"
                  >
                    <svg
                      id="new-password-visibility-icon"
                      class="h-5 w-5 text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path
                        d="M2.458 12C3.732 7.943 7.512 5 12 5c4.489 0 8.268 2.943 9.542 7-.805 2.09-2.3 3.87-4.316 4.95M12 17c-2.588 0-4.856-.94-6.316-2.518"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="mb-4">
                <label
                  for="reenter-password"
                  class="block text-sm font-medium text-gray-700"
                  >Re-enter New Password</label
                >
                <div class="relative">
                  <input
                    type="password"
                    id="reenter-password"
                    name="reenter-password"
                    placeholder="Re-enter Your New Password"
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 shadow-sm sm:text-sm border-gray-600 border-2 rounded-md"
                    required
                  />
                  <button
                    type="button"
                    onclick="toggleVisibility('reenter-password', 'reenter-password-visibility-icon')"
                    class="absolute inset-y-0 right-0 flex items-center pr-3"
                  >
                    <svg
                      id="reenter-password-visibility-icon"
                      class="h-5 w-5 text-gray-400"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      <path
                        d="M2.458 12C3.732 7.943 7.512 5 12 5c4.489 0 8.268 2.943 9.542 7-.805 2.09-2.3 3.87-4.316 4.95M12 17c-2.588 0-4.856-.94-6.316-2.518"
                      />
                    </svg>
                  </button>
                </div>
              </div>
              <button
                type="button"
                class="w-full bg-hijau text-white py-2 px-4 rounded-lg mt-8"
                onclick="document.getElementById('my_modal_1').showModal()"
              >
                Set Password
              </button>
              <dialog id="my_modal_1" class="modal">
                <div
                  class="modal-box bg-white p-10 rounded-lg shadow-lg flex flex-col"
                >
                  <p class="text-[16px] font-medium text-gray-700 mb-14">
                    Forgot Password
                  </p>
                  <button
                    type="button"
                    class="w-full bg-red-500 text-white py-3 px-4 rounded-full text-lg font-semibold mb-4"
                    onclick="closeModal()"
                  >
                    New Password Success
                  </button>
                  <a
                    href="{{ route('login') }}"
                    class="text-blue-500 text-sm mt-10 flex justify-end"
                    >Back to login</a
                  >
                </div>
              </dialog>
            </form>
          </div>
        </div>

        <!-- Carousel -->
        <div
          class="md:block w-full md:w-[500px] bg-cover flex items-center justify-center"
          style="background-image: url('../assets/image-placeholder.jpg')"
        >
          <div>
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div
                    class="w-full h-[300px] md:h-[600px] overflow-hidden bg-white rounded-2xl shadow-md"
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
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/caraousel.js"></script>

    <script>
      function showVerifyCodeForm() {
        document.getElementById("forgot-password-form").classList.add("hidden");
        document.getElementById("verify-code-form").classList.remove("hidden");
      }

      function showSetPasswordForm() {
        document.getElementById("verify-code-form").classList.add("hidden");
        document.getElementById("set-password-form").classList.remove("hidden");
      }

      function toggleVisibility(inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon = document.getElementById(iconId);
        if (input.type === "password") {
          input.type = "text";
          icon.setAttribute(
            "d",
            "M12 4.5C7.5 4.5 4 7.833 2.25 12c1.75 4.167 5.25 7.5 9.75 7.5s8-3.333 9.75-7.5C20 7.833 16.5 4.5 12 4.5zm0 9.5a2 2 0 110-4 2 2 0 010 4z"
          );
        } else {
          input.type = "password";
          icon.setAttribute("d", "M15 12a3 3 0 11-6 0 3 3 0 016 0z");
        }
      }

      function closeModal() {
        document.getElementById("my_modal_1").close();
      }

      // Initialize Swiper
      var swiper = new Swiper(".swiper-container", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  </body>
</html>
