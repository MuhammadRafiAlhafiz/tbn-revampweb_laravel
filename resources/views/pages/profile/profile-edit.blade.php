<!DOCTYPE html>
<html data-theme="light" lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Edit</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/logo-1.svg') }}" type="image/svg+xml" />
  </head>
  <body class="font-popins">
    <!-- NAVBAR -->
    <div class="py-5 flex items-center justify-between w-full px-20 bg-white">
      <a href="{{ route('profile') }}" class="flex items-center">
        <img src="/assets/panah-hitam.svg" alt="Back" class="w-[30px] h-[30px]">
      </a>
      <p class="font-poppins text-[27px] font-semibold mr-10">Edit Profile</p>
      <div></div>
    </div>
    <!-- END NAVBAR -->

    <!-- Edit Profile -->
    <section class="flex flex-col justify-center items-center mt-3">
      <img src="/assets/logo-profile.svg" alt="Profile" class="w-[200px] h-[200px]" />
      <button class="font-popins text-[17px] font-normal border mt-5 p-2 rounded-xl">Change Profile Photo</button>

      <div class="w-full md:w-[700px]">
        <label for="full_name" class="block text-sm font-medium text-gray-700 mt-3">Full Name</label>
        <input type="text" id="full_name" name="full_name" placeholder="Full Name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 sm:text-sm border-2 rounded-xl" />

        <label for="email" class="block text-sm font-medium text-gray-700 mt-3">Email</label>
        <input type="text" id="email" name="email" placeholder="Email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 sm:text-sm border-2 rounded-xl" />

        <label for="phone_number" class="block text-sm font-medium text-gray-700 mt-3">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 sm:text-sm border-2 rounded-xl" />

        <label for="address" class="block text-sm font-medium text-gray-700 mt-3">Address</label>
        <input type="text" id="address" name="address" placeholder="Address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 sm:text-sm border-2 rounded-xl" />
      </div>

      <div class="py-5">
        <button class="btn border bg-hijau w-[208px] h-[52px] p-[10px] rounded-xl text-white font-popins text-[21px] font-semibold" onclick="document.getElementById('my_modal_1').showModal()">Update Profile</button>
      </div>

      <!-- Modal -->
      <dialog id="my_modal_1" class="modal">
        <div class="modal-box bg-graybg flex flex-col justify-center items-center p-6 rounded-md">
          <img src="/assets/icon-alert.svg" alt="Alert Icon" class="w-12 h-12 mb-4">
          <p class="py-4 font-poppins text-[22px] font-normal text-center">Are You Sure Want to Change Your Profile?</p>
          <div class="modal-action">
            <form method="dialog" class="flex justify-center items-center gap-4">
              <button class="btn border bg-red-600 w-[108px] rounded-[36px] text-white py-2" value="cancel">NO</button>
              <button type="button" class="btn bg-green-600 w-[108px] rounded-[36px] text-white py-2" onclick="showConfirmation()">YES</button>
            </form>
          </div>
        </div>
      </dialog>

      <!-- Confirmation Modal -->
      <dialog id="confirmation_modal" class="modal">
        <div class="modal-box bg-graybg flex flex-col justify-center items-center p-6 rounded-md">
          <img src="/assets/ceklis-editprofile.svg" alt="Checkmark Icon" class="w-12 h-12 mb-4">
          <p class="py-4 font-poppins text-[22px] font-normal text-center">Profile successfully changed</p>
          <a href="{{ route('profile') }}"><button class="btn bg-green-600 w-[108px] rounded-[36px] text-white py-2" onclick="document.getElementById('confirmation_modal').close()">Done</button></a>
        </div>
      </dialog>
    </section>

    <script>
      function showConfirmation() {
        document.getElementById('my_modal_1').close();
        document.getElementById('confirmation_modal').showModal();
      }
    </script>
  </body>
</html>
