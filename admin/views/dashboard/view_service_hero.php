<div id="serviceModal" class="hidden fixed inset-0 z-[99999] bg-black/70 flex justify-center items-center text-sm">
  <div class="relative bg-[#F5F5F5] w-[96%] md:w-[90%] rounded-lg shadow-lg shadow-neutral-800 overflow-hidden">
    <div id="serviceModalLoading" class="absolute inset-0 flex justify-center items-center bg-white/70 z-50 hidden">
      <div class="animate-spin border-4 border-gray-400 border-t-transparent rounded-full w-10 h-10"></div>
    </div>

    <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-[6rem] md:w-[10rem] h-auto hover:hue-rotate-30 hover:scale-110 transition-all duration-500 ease-in-out absolute left-10 top-10">

    <div class="text-center my-6">
      <?php
        $homeQuery = $pdo->query("SELECT * FROM home_detail ORDER BY id ASC LIMIT 1");
        $home = $homeQuery->fetch(PDO::FETCH_ASSOC);
      ?>
      <h1 id="homeModalTitle" class="text-xl md:text-2xl lg:text-4xl text-[#333333]">
        <?= htmlspecialchars($home['title'] ?? 'Welcome') ?>
      </h1>
      <p id="homeModalSubtitle" class="text-sm lg:text-lg text-[#4A4A4A]">
        <?= htmlspecialchars($home['subtitle'] ?? '') ?>
      </p>
    </div>

    <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">

    <div id="serviceModalHero" class="w-full h-[25rem] bg-cover bg-center flex flex-col justify-center items-center relative mb-4">
      <div class="absolute inset-0 bg-[#E0DED8]/10"></div>
      <div class="relative z-20 hero-color mx-10 px-6 py-8 rounded-md flex flex-col items-center shadow-md shadow-[#493821]">
        <h2 id="serviceModalTitle" class="text-[#333333] text-3xl md:text-4xl relative font-bold"></h2>
        <p id="serviceModalDescription" class="text-[#333333] text-lg md:text-xl relative mt-4"></p>
      </div>
    </div>

    <div class="mx-10 mb-10">
      <h4 id="serviceModalSubtitle" class="text-[#333333] text-lg md:text-xl relative font-thin"></h4>
    </div>

    <div class="absolute top-3 right-3">
      <button onclick="closeServiceHero()" class="cursor-pointer bg-[#333333]/60 text-white px-3 py-1 rounded-full text-xs hover:bg-[#333333] transition-all duration-500 ease-in-out">Close</button>
    </div>
  </div>
</div>