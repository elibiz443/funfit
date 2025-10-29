<!-- Header -->
<header class="relative z-[999] w-full bg-white/60 backdrop-blur-md border-b border-slate-200">
  <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
    <div id="wrapper" class="flex items-center justify-between h-16">
      <a id="logo" href="<?php echo ROOT_URL; ?>" class="scale-90 flex items-center gap-2 hover:hue-rotate-30 hover:scale-100 transition-all duration-500 ease-in-out">
        <img src="<?php echo ROOT_URL; ?>/assets/images/logo/logo.webp" title="F2 logo" class="w-[3.8rem] h-auto">
        <div>
          <div class="text-xl font-semibold">Functional Fitness</div>
          <div class="text-xs text-slate-700 -mt-2">The Hardest Day Was Yesterday</div>
        </div>
      </a>

      <nav class="hidden lg:flex items-center gap-6 text-md">
        <a href="<?php echo ROOT_URL; ?>" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          Home
          <div class="h-0.5 w-2 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#abouts" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          About
          <div class="h-0.5 w-0 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#programs" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          Programs
          <div class="h-0.5 w-0 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#gallery" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          Gallery
          <div class="h-0.5 w-0 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#book" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          Book
          <div class="h-0.5 w-0 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#contacts" class="group hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          Contact
          <div class="h-0.5 w-0 mx-auto bg-[#b16e13] -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
      </nav>

      <div class="flex items-center gap-3">
        <button id="ctaTop" class="cursor-pointer scale-90 hidden lg:inline-flex items-center gap-2 bg-[#b16e13] text-white text-md font-semibold px-6 py-2 rounded-full shadow-md shadow-gray-900 hover:scale-100 transition-all duration-700 ease-in-out">Start Training</button>

        <button id="menuToggle" aria-label="Open menu" class="lg:hidden p-2 rounded-md hover:bg-slate-100 cursor-pointer focus:outline-none hover:text-[#b16e13] transition-all duration-500 ease-in-out">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Slide-in Menu -->
  <div id="mobileMenu" class="fixed z-[9999] top-0 right-0 h-screen w-64 bg-[#ece5db] shadow-2xl shadow-gray-900 transform translate-x-full transition-transform duration-500 ease-in-out lg:hidden">
    <button id="closeMenu" class="absolute top-5 right-5 text-[#333] cursor-pointer hover:text-[#b16e13]">
      <!-- X Icon -->
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    <ul class="mt-16 space-y-4 text-end text-lg text-[#333]">
      <li>
        <a href="<?php echo ROOT_URL; ?>" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M543.8 287.6c17 0 32-14 32-32.1c1-9-3-17-11-24L512 185l0-121c0-17.7-14.3-32-32-32l-32 0c-17.7 0-32 14.3-32 32l0 36.7L309.5 7c-6-5-14-7-21-7s-15 1-22 8L10 231.5c-7 7-10 15-10 24c0 18 14 32.1 32 32.1l32 0 0 69.7c-.1 .9-.1 1.8-.1 2.8l0 112c0 22.1 17.9 40 40 40l16 0c1.2 0 2.4-.1 3.6-.2c1.5 .1 3 .2 4.5 .2l31.9 0 24 0c22.1 0 40-17.9 40-40l0-24 0-64c0-17.7 14.3-32 32-32l64 0c17.7 0 32 14.3 32 32l0 64 0 24c0 22.1 17.9 40 40 40l24 0 32.5 0c1.4 0 2.8 0 4.2-.1c1.1 .1 2.2 .1 3.3 .1l16 0c22.1 0 40-17.9 40-40l0-16.2c.3-2.6 .5-5.3 .5-8.1l-.7-160.2 32 0z"/>
          </svg>Home
        </a>
      </li>
      <li>
        <a id="aboutsButton2" href="#" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
          </svg>About
        </a>
      </li>
      <li>
        <a id="programsButton2" href="#" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M192 0c-41.8 0-77.4 26.7-90.5 64L64 64C28.7 64 0 92.7 0 128L0 448c0 35.3 28.7 64 64 64l256 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64l-37.5 0C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM72 272a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm104-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16s7.2-16 16-16zM72 368a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm88 0c0-8.8 7.2-16 16-16l128 0c8.8 0 16 7.2 16 16s-7.2 16-16 16l-128 0c-8.8 0-16-7.2-16-16z"/>
          </svg>Programs
        </a>
      </li>
      <li>
        <a id="teamButton2" href="#" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M96 64c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 160 0 64 0 160c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-64-32 0c-17.7 0-32-14.3-32-32l0-64c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c0-17.7 14.3-32 32-32l32 0 0-64zm448 0l0 64 32 0c17.7 0 32 14.3 32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 64c0 17.7-14.3 32-32 32l-32 0 0 64c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-160 0-64 0-160c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32zM416 224l0 64-192 0 0-64 192 0z"/>
          </svg>Trainers
        </a>
      </li>
      <li>
        <a id="bookingsButton2" href="#" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160L0 416c0 53 43 96 96 96l256 0c53 0 96-43 96-96l0-96c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 96c0 17.7-14.3 32-32 32L96 448c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32l96 0c17.7 0 32-14.3 32-32s-14.3-32-32-32L96 64z"/>
          </svg>Book
        </a>
      </li>
      <li>
        <a id="contactsButton2" href="#" class="hover:text-[#b16e13] flex items-center justify-end pr-[4rem]">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="16" height="16" fill="currentColor" class="mr-2">
            <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
          </svg>Contact
        </a>
      </li>
      <li class="text-center">
        <button id="ctaMobile" class="mt-2 cursor-pointer items-center gap-2 bg-[#b16e13] text-white text-md font-semibold px-6 py-2 rounded-full shadow-md shadow-gray-900 hover:scale-110 transition-all duration-700 ease-in-out">Start Training</button>
      </li>
    </ul>
  </div>
</header>

<!-- Backdrop -->
<div id="sidebar-backdrop" class="fixed inset-0 bg-black/50 z-[90] hidden lg:hidden"></div>
