<!-- ✅ HERO SECTION -->
<section class="relative h-screen w-full flex items-center justify-center overflow-hidden">
  <!-- Hero Image and Overlay -->
  <img src="<?php echo ROOT_URL; ?>/assets/images/hero/home.webp" alt="Functional Fitness training" class="absolute inset-0 w-full h-full object-cover object-center">
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Hero Content -->
  <div class="relative z-10 text-center text-white px-4 mt-[5rem] md:mt-[10rem]">
    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-wide mb-4">
      Train Together. <span class="text-[#daaa4a]">Grow Stronger.</span>
    </h1>
    <p class="max-w-2xl mx-auto text-base sm:text-lg text-gray-200 mb-8">
      At <span class="text-[#f3d477] font-semibold">Functional Fitness</span>, we move, sweat, and grow as a team — blending performance, strength, and unity into every session.
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="#" class="bg-[#daaa4a] text-black font-semibold px-6 py-3 rounded-full shadow-md hover:scale-105 hover:shadow-yellow-400/30 transition-all duration-500 ease-in-out">
        Join Team Building
      </a>
      <a href="#" class="border border-[#f3d477] text-white font-semibold px-6 py-3 rounded-full hover:bg-[#daaa4a] hover:text-black transition-all duration-500 ease-in-out">
        Join Training Sessions
      </a>
    </div>

    <div class="mt-12 hidden md:flex flex-wrap items-center justify-center gap-8 text-gray-300 text-sm sm:text-base">
      <div class="text-center">
        <div class="text-3xl font-bold text-[#f3d477]">10+</div>
        <div class="uppercase tracking-wide">Years Experience</div>
      </div>
      <div class="text-center">
        <div class="text-3xl font-bold text-[#f3d477]">500+</div>
        <div class="uppercase tracking-wide">People Impacted</div>
      </div>
      <div class="text-center">
        <div class="text-3xl font-bold text-[#f3d477]">3</div>
        <div class="uppercase tracking-wide">Global Locations</div>
      </div>
    </div>
  </div>

  <!-- Indicator Dots -->
  <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 flex items-center justify-center gap-3 z-10">
    <div class="h-2 w-2 bg-white/60 rounded-full"></div>
    <div class="h-2 w-2 bg-[#f3d477] rounded-full"></div>
    <div class="h-2 w-2 bg-white/60 rounded-full"></div>
  </div>
</section>