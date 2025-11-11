<header class="absolute top-0 left-0 z-[999] w-full glass-bg-color border-b border-neutral-200 transition-all duration-500 ease-in-out">
  <div class="w-[94%] lg:w-[90%] mx-auto">
    <div id="wrapper" class="flex items-center justify-between h-16 transition-all duration-500 ease-in-out">
      <a id="logo" href="<?php echo ROOT_URL; ?>" class="text-white hover:scale-110 transition-transform duration-500 ease-in-out">
        <h4 class="text-2xl font-extrabold tracking-widest">Functional Fitness</h4>
        <p class="text-sm font-thin -mt-2 tracking-tighter">The Hardest Day Was Yesterday</p>
      </a>

      <nav class="hidden lg:flex items-center gap-8 text-md text-white tracking-tight font-medium">
        <a href="<?php echo ROOT_URL; ?>" class="group">
          Home
          <div class="h-0.5 w-0 mx-auto bg-white -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#abouts" class="group">
          About Us
          <div class="h-0.5 w-0 mx-auto bg-white -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#programs" class="group">
          Our Programs
          <div class="h-0.5 w-0 mx-auto bg-white -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#gallery" class="group">
          Our Gallery
          <div class="h-0.5 w-0 mx-auto bg-white -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
        <a href="#book" class="group">
          Book Now
          <div class="h-0.5 w-0 mx-auto bg-white -mt-0.5 group-hover:w-full transition-all duration-500 ease-in-out"></div>
        </a>
      </nav>

      <div class="flex items-center gap-3">
        <button class="hidden cursor-pointer lg:inline-flex items-center gap-2 bg-white text-neutral-600 text-sm font-semibold px-4 py-2 rounded shadow-md shadow-neutral-700 hover:scale-110 hover:shadow-none transition-all duration-700 ease-in-out">
          Contact For More
        </button>

        <button id="menuToggle" aria-label="Open menu" class="lg:hidden text-white p-1 rounded-md hover:bg-white/20 cursor-pointer focus:outline-none transition-all duration-500 ease-in-out">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div id="socialMedia" class="border-t border-white/20 mt-2 transition-all duration-700 ease-in-out">
    <div class="flex items-center justify-end gap-8 py-2 text-white mr-[4%] md:mr-[5%]">
      <a href="#" class="hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-5 w-5">
          <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"/>
        </svg>
      </a>
      <a href="#" class="hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="h-5 w-5">
          <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
        </svg>
      </a>
      <a href="#" class="flex items-center hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="h-5 w-5">
          <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
        </svg>
      </a>
      <a href="#" class="flex items-center hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="h-5 w-5">
          <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
        </svg>
      </a>
      <a href="#" class="flex items-center hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" class="h-5 w-5">
          <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
        </svg>
      </a>
      <a href="#" class="flex items-center hover:scale-120 transition-all duration-500 ease-in-out">
        <svg xmlns="http://www.w3.0000/svg" viewBox="0 0 448 512" fill="currentColor" class="h-5 w-5">
          <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
        </svg>
      </a>
    </div>
  </div>

  <div id="mobileMenu" class="fixed z-[9999] top-0 right-0 h-screen w-64 glass-bg-color2 border-l border-white/20 transform translate-x-full transition-transform duration-500 ease-in-out lg:hidden">
    <button id="closeMenu" class="cursor-pointer absolute top-5 right-5 text-white hover:scale-110 hover:text-yellow-400 transition-all duration-500 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>
    <ul class="mt-20 space-y-6 text-center text-lg text-white font-medium">
      <li><a href="<?php echo ROOT_URL; ?>" class="block hover:text-yellow-400">Home</a></li>
      <li><a href="#abouts" class="block hover:text-yellow-400">About Us</a></li>
      <li><a href="#programs" class="block hover:text-yellow-400">Our Programs</a></li>
      <li><a href="#gallery" class="block hover:text-yellow-400">Our Gallery</a></li>
      <li><a href="#book" class="block hover:text-yellow-400">Book Now</a></li>
      <li><button class="cursor-pointer bg-white text-neutral-600 text-sm px-3 py-2 rounded mt-4 hover:scale-110 transition-all duration-500 ease-in-out">Contact For More</button></li>
    </ul> 
  </div>
</header>

<div id="sidebar-backdrop" class="fixed inset-0 bg-black/50 z-[90] hidden lg:hidden"></div>
