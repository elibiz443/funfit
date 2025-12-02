<div id="homeModal" class="hidden fixed inset-0 z-[99999] bg-black/70 flex justify-center items-center text-sm">
  <div class="relative bg-[#F5F5F5] w-[96%] md:w-[90%] rounded-lg shadow-lg shadow-neutral-800 overflow-hidden">
    <div id="homeModalLoading" class="absolute inset-0 flex justify-center items-center bg-white/70 z-50 hidden">
      <div class="animate-spin border-4 border-gray-400 border-t-transparent rounded-full w-10 h-10"></div>
    </div>

    <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-[6rem] md:w-[10rem] h-auto hover:hue-rotate-30 hover:scale-110 transition-all duration-500 ease-in-out absolute left-10 top-10">
    <div class="text-center my-6">
      <h1 id="homeModalTitle" class="text-xl md:text-2xl lg:text-4xl text-[#333333]"></h1>
      <p id="homeModalSubtitle" class="text-sm lg:text-lg text-[#4A4A4A]"></p>
    </div>
    <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">

    <div id="homeModalHero" class="w-full h-[28rem] bg-cover bg-center flex flex-col justify-center items-center relative mb-14">
      <div class="absolute inset-0 bg-[#E0DED8]/10"></div>
      <div class="relative z-20 hero-color mx-4 lg:mx-0 px-6 py-8 lg:py-12 rounded-md flex flex-col items-center shadow-md shadow-[#493821]">
        <h2 id="homeModalDescription" class="text-[#333333] text-[1.8rem] md:text-[2rem] lg:text-[2.4rem] relative"></h2>
        <button class="btn cursor-pointer flex items-center mt-8 relative border-2 border-gray-700">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z"/>
          </svg>View Portfolio
        </button>
      </div>
    </div>

    <div class="absolute top-3 right-3">
      <button onclick="closeHomeModal()" class="cursor-pointer bg-[#333333]/60 text-white px-3 py-1 rounded-full text-xs hover:bg-[#333333] transition-all duration-500 ease-in-out">Close</button>
    </div>
  </div>
</div>
