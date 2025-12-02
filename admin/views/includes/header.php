<!-- Header -->
<header id="headerContent" class="fixed z-[999] w-[calc(100%-5rem)] right-0 glass-bg-color border-b border-slate-600 p-4 flex justify-between items-center text-white transition-all duration-900 ease-in-out">
  <div class="flex text-center items-center gap-x-4">
    <button id="toggleSidebar" class="hover:scale-[115%] hover:text-yellow-200 cursor-pointer transition-all duration-500 ease-in-out"></button>
    <div class="text-sm md:text-md leading-tight">
      Welcome, <span class="font-semibold text-yellow-200"><?php echo htmlspecialchars($currentUser['full_name'] ?? 'Guest'); ?></span>
    </div>
  </div>
  
  <div class="flex text-center items-center gap-x-4">
    <div class="relative">
      <!-- Avatar Button -->
      <div id="avatarButton" class="cursor-pointer relative bg-neutral-300 size-[2.5rem] shadow-lg shadow-neutral-900 border-2 border-white rounded-full hover:scale-[115%] transition-all duration-500 ease-in-out">
        <img src="<?php echo !empty($currentUser['profile_picture']) ? htmlspecialchars($currentUser['profile_picture']) : ROOT_URL . '/images/admin/user.svg'; ?>" alt="Profile Picture" class="size-full rounded-full object-cover border-2 border-cyan-500">
        <span class="absolute -bottom-1 -right-1 inline-flex size-[0.8rem] animate-ping rounded-full bg-green-400 opacity-75"></span>
        <span class="absolute -bottom-1 -right-1 inline-flex size-3 rounded-full bg-green-500"></span>
      </div>

      <!-- Dropdown Menu -->
      <div id="dropdownMenu" class="absolute -right-2 -mt-1 w-40 bg-white rounded-md opacity-0 scale-95 transform origin-top-right shadow-lg shadow-neutral-900 overflow-hidden border-t-4 border-x border-[#c78853] transition-all duration-700 ease-in-out hidden">
        <ul class="text-neutral-700 text-sm divide-y divide-neutral-300">
          <li><p class="py-2 text-white font-semibold bg-gradient-to-r from-sky-600 via-sky-800 to-slate-900"><?php echo htmlspecialchars($currentUser['full_name']); ?></p></li>
          <li>
            <button onclick="location.href='<?php echo ROOT_URL; ?>/admin/scripts/auth/logout.php'" class="group w-full cursor-pointer block py-2 flex items-center justify-center hover:bg-neutral-300 transition-all duration-300 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="14" height="14" fill="currentColor" class="group-hover:translate-x-[4.2rem] transition-all duration-500 ease-in-out">
                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/>
              </svg>
              <span class="group-hover:-translate-x-8 transition-all duration-500 ease-in-out">&emsp;Logout</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
