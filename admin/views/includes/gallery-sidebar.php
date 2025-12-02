<!-- Sidebar -->
<aside id="slideDiv" class="translate-x-0 fixed top-0 start-0 bottom-0 z-[9999] w-[5rem] bg-gradient-to-r from-neutral-100 to-neutral-400 text-neutral-800 text-[0.7rem] font-semibold shadow-md shadow-neutral-800 transition-all duration-900 ease-in-out">
  <div class="p-4 shadow-lg shadow-neutral-900 flex justify-center">
    <button onclick="location.href='<?php echo ROOT_URL; ?>/dashboard'" class="w-[4rem]">
      <img class="w-full h-auto cursor-pointer hover:scale-[120%] transition-all duration-500 ease-in-out" src="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
    </button>
  </div>
  <nav class="mt-14 space-y-2">
    <a href="<?php echo ROOT_URL; ?>/dashboard" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[1.4rem] transition-all duration-900 ease-in-out">
        <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[15%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Dashboard</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/services" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[0.9rem] transition-all duration-900 ease-in-out">
        <path d="M27.5 162.2L9 187.1h90.5l6.9-130.7-78.9 105.8zM396.3 45.7L267.7 32l135.7 147.2-7.1-133.5zM112.2 218.3l-11.2-22H9.9L234.8 458zm2-31.2h284l-81.5-88.5L256.3 33zm297.3 9.1L277.6 458l224.8-261.7h-90.9zM415.4 69L406 56.4l.9 17.3 6.1 113.4h90.3zM113.5 93.5l-4.6 85.6L244.7 32 116.1 45.7zm287.7 102.7h-290l42.4 82.9L256.3 480l144.9-283.8z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[23%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Services</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/abouts" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[0.9rem] transition-all duration-900 ease-in-out">
        <path d="M249.6 471.5c10.8 3.8 22.4-4.1 22.4-15.5l0-377.4c0-4.2-1.6-8.4-5-11C247.4 52 202.4 32 144 32C93.5 32 46.3 45.3 18.1 56.1C6.8 60.5 0 71.7 0 83.8L0 454.1c0 11.9 12.8 20.2 24.1 16.5C55.6 460.1 105.5 448 144 448c33.9 0 79 14 105.6 23.5zm76.8 0C353 462 398.1 448 432 448c38.5 0 88.4 12.1 119.9 22.6c11.3 3.8 24.1-4.6 24.1-16.5l0-370.3c0-12.1-6.8-23.3-18.1-27.6C529.7 45.3 482.5 32 432 32c-58.4 0-103.4 20-123 35.6c-3.3 2.6-5 6.8-5 11L304 456c0 11.4 11.7 19.3 22.4 15.5z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[22%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Abouts</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/gallery" class="group flex items-center justify-center py-2.5 w-[7rem] text-neutral-200 bg-neutral-800 rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-500 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20" fill="currentColor" class="group-hover:translate-x-6 transition-all duration-700 ease-in-out">
        <path d="M160 32c-35.3 0-64 28.7-64 64l0 224c0 35.3 28.7 64 64 64l352 0c35.3 0 64-28.7 64-64l0-224c0-35.3-28.7-64-64-64L160 32zM396 138.7l96 144c4.9 7.4 5.4 16.8 1.2 24.6S480.9 320 472 320l-144 0-48 0-80 0c-9.2 0-17.6-5.3-21.6-13.6s-2.9-18.2 2.9-25.4l64-80c4.6-5.7 11.4-9 18.7-9s14.2 3.3 18.7 9l17.3 21.6 56-84C360.5 132 368 128 376 128s15.5 4 20 10.7zM192 128a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM48 120c0-13.3-10.7-24-24-24S0 106.7 0 120L0 344c0 75.1 60.9 136 136 136l320 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-320 0c-48.6 0-88-39.4-88-88l0-224z"/>
      </svg>
      <span class="ml-2 group-hover:-ml-12 transition-all duration-700 ease-in-out">Gallery</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/projects" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[0.9rem] transition-all duration-900 ease-in-out">
        <path d="M256 0L576 0c35.3 0 64 28.7 64 64l0 224c0 35.3-28.7 64-64 64l-320 0c-35.3 0-64-28.7-64-64l0-224c0-35.3 28.7-64 64-64zM476 106.7C471.5 100 464 96 456 96s-15.5 4-20 10.7l-56 84L362.7 169c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6l80 0 48 0 144 0c8.9 0 17-4.9 21.2-12.7s3.7-17.3-1.2-24.6l-96-144zM336 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM64 128l96 0 0 256 0 32c0 17.7 14.3 32 32 32l128 0c17.7 0 32-14.3 32-32l0-32 160 0 0 64c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 192c0-35.3 28.7-64 64-64zm8 64c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm0 104c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm0 104c-8.8 0-16 7.2-16 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0zm336 16l0 16c0 8.8 7.2 16 16 16l16 0c8.8 0 16-7.2 16-16l0-16c0-8.8-7.2-16-16-16l-16 0c-8.8 0-16 7.2-16 16z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[22%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Projects</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/testimonials" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[1.4rem] transition-all duration-900 ease-in-out">
        <path d="M0 216C0 149.7 53.7 96 120 96l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72zm256 0c0-66.3 53.7-120 120-120l8 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-8 0c-30.9 0-56 25.1-56 56l0 8 64 0c35.3 0 64 28.7 64 64l0 64c0 35.3-28.7 64-64 64l-64 0c-35.3 0-64-28.7-64-64l0-32 0-32 0-72z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[12%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Testimonials</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/users" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[0.9rem] transition-all duration-900 ease-in-out">
        <path d="M320 80C377.4 80 424 126.6 424 184C424 241.4 377.4 288 320 288C262.6 288 216 241.4 216 184C216 126.6 262.6 80 320 80zM96 152C135.8 152 168 184.2 168 224C168 263.8 135.8 296 96 296C56.2 296 24 263.8 24 224C24 184.2 56.2 152 96 152zM0 480C0 409.3 57.3 352 128 352C140.8 352 153.2 353.9 164.9 357.4C132 394.2 112 442.8 112 496L112 512C112 523.4 114.4 534.2 118.7 544L32 544C14.3 544 0 529.7 0 512L0 480zM521.3 544C525.6 534.2 528 523.4 528 512L528 496C528 442.8 508 394.2 475.1 357.4C486.8 353.9 499.2 352 512 352C582.7 352 640 409.3 640 480L640 512C640 529.7 625.7 544 608 544L521.3 544zM472 224C472 184.2 504.2 152 544 152C583.8 152 616 184.2 616 224C616 263.8 583.8 296 544 296C504.2 296 472 263.8 472 224zM160 496C160 407.6 231.6 336 320 336C408.4 336 480 407.6 480 496L480 512C480 529.7 465.7 544 448 544L192 544C174.3 544 160 529.7 160 512L160 496z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[28%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Users</span>
    </a>
    <a href="<?php echo ROOT_URL; ?>/dashboard/contacts" class="group overflow-hidden relative w-full hover:w-[7rem] flex items-center pl-[1.7rem] py-2.5 hover:bg-neutral-400 hover:rounded-r-full shadow-neutral-800 hover:shadow-lg transition-all duration-900 ease-in-out">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="20" height="20" fill="currentColor" class="group-hover:-translate-x-[0.9rem] transition-all duration-900 ease-in-out">
        <path d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"/>
      </svg>
      <span class="absolute -right-[6rem] group-hover:right-[17%] top-1/2 transform translate-y-[-50%] transition-all duration-900 ease-in-out">Contacts</span>
    </a>
  </nav>
</aside>
