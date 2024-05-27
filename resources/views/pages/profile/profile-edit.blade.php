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
  <body class="font-popins ">
    <!-- NAVBAR -->
    <div class="py-5 flex items-center justify-between w-full px-20 bg-white">
      <a href="{{ route('profile') }}" class="flex items-center">
        <img src="../assets/panah-hitam.svg" alt="Back" class="w-[30px] h-[30px]">
      </a>
      <p class="font-poppins text-[27px] font-semibold mr-10">Edit Profile</p>
      <div></div>
    </div>
    <!-- END NAVBAR -->

    <!-- Edit Profile -->
    <section class="flex flex-col justify-center items-center mt-3">
      <img src="../assets/logo-profile.svg" alt="" class="w-[200px] h-[200px]"/>
      <a href=""
        ><button
          class="font-popins text-[17px] font-normal border  mt-5 p-2 rounded-xl"
        >
          Change Profile Photo
        </button></a
      >
      <span>
        <label for="full_name" class="block text-sm font-medium text-gray-700"
          >Full Name</label
        >
        <input
          type="text"
          id="full_name"
          name="full_name"
          placeholder="Full Name"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[700px] p-2 sm:text-sm  border-2 rounded-xl"
        />
        <label
          for="full_name"
          class="block text-sm font-medium text-gray-700 mt-3"
          >Email</label
        >
        <input
          type="text"
          id="Email"
          name="Email"
          placeholder="Email"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[700px] p-2 sm:text-sm border-2 rounded-xl"
        />
        <label for="Email" class="block text-sm font-medium text-gray-700 mt-3"
          >Phone Number</label
        >
        <input
          type="text"
          id="phone_number"
          name="phone_number"
          placeholder="Phone Number"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[700px] p-2 sm:text-sm  border-2 rounded-xl"
        />
        <label
          for="full_name"
          class="block text-sm font-medium text-gray-700 mt-3"
          >Address</label
        >
        <input
          type="text"
          id="Addtess"
          name="Address"
          placeholder="Address"
          class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full md:w-[7-0px] p-2 sm:text-sm  border-2 rounded-xl"
        />
      </span>
      <div class="py-5">
        <button
            class="btn border bg-hijau items-center w-[208px] h-[52px] p-[10px] rounded-xl text-white font-popins text-[21px] font-semibold"
            onclick="document.getElementById('my_modal_1').showModal()"
        >
            Update Profile
        </button>

        <dialog id="my_modal_1" class="modal">
            <div class="modal-box bg-background flex flex-col justify-center items-center">
                <img src="../assets/icon-alert.svg" alt="Alert Icon">
                <p class="py-10 font-popins text-[22px] font-normal">Are You Sure Want to Change Your Profile?</p>
                <div class="modal-action">
                    <form method="dialog" class="flex justify-center items-center gap-10">
                        <button class="btn border bg-red-600 w-[108px] rounded-[36px] text-white" value="cancel">NO</button>
                        <button type="button" class="btn bg-green-600 w-[108px] rounded-[36px] text-white" onclick="showConfirmation()">YES</button>
                    </form>
                </div>
            </div>
        </dialog>
    </div>

    <dialog id="confirmation_modal" class="modal">
        <div class="modal-box bg-background flex flex-col justify-center items-center">
            <img src="../assets/ceklis-editprofile.svg" alt="Checkmark Icon" class="w-12 h-12">
            <p class="py-10 font-popins text-[22px] font-normal">Profile successfully changed</p>
            <a href="{{ route('profile') }}"><button class="btn bg-green-600 w-[108px] rounded-[36px] text-white" onclick="document.getElementById('confirmation_modal').close()">Done</button></a>
        </div>
    </dialog>

    <script>
        function showConfirmation() {
            document.getElementById('my_modal_1').close();
            document.getElementById('confirmation_modal').showModal();
        }
    </script>
    <!-- END Edit Profile -->
  </body>
</html>
