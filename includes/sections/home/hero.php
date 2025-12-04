<section class="relative h-screen w-full flex items-center justify-center overflow-hidden">
  <?php
  $images = [
    ROOT_URL . '/assets/images/hero/image-1.webp',
    ROOT_URL . '/assets/images/hero/image-2.webp',
    ROOT_URL . '/assets/images/hero/image-3.webp'
  ];
  $indicator_count = count($images);
  ?>
  <div id="hero-carousel" class="absolute inset-0 w-full h-full overflow-hidden">
    <div id="carousel-track" class="flex h-full w-full transition-transform duration-700 ease-in-out">
      <?php foreach ($images as $image_src): ?>
        <img src="<?php echo $image_src; ?>" alt="slide" class="w-full h-full object-cover object-center flex-shrink-0">
      <?php endforeach; ?>
    </div>
  </div>
  <div class="absolute inset-0 bg-black/60"></div>

  <div class="relative z-10 text-center text-white px-4 mt-[5rem] md:mt-[10rem]">
    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-wide mb-4">
      Train Together. <span class="text-amber-400">Grow Stronger.</span>
    </h1>
    <p class="max-w-2xl mx-auto text-base sm:text-lg text-gray-200 mb-8">
      At <span class="text-yellow-200 font-semibold">Functional Fitness</span>, we move, sweat, and grow as a team — blending performance, strength, and unity into every session.
    </p>
    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a id="openTeam" class="cursor-pointer bg-amber-400 text-black font-semibold px-6 py-3 rounded-full shadow-md hover:scale-105 transition-all duration-600 ease-in-out">
        Join Team Building
      </a>
      <a id="openTraining" class="cursor-pointer border border-yellow-200 text-white font-semibold px-6 py-3 rounded-full hover:bg-amber-400 hover:text-black transition-all duration-600 ease-in-out">
        Join Training Sessions
      </a>
    </div>
    <div class="mt-12 hidden md:flex flex-wrap items-center justify-center gap-8 text-gray-300 text-sm sm:text-base">
      <div class="text-center">
        <div class="text-3xl font-bold text-yellow-200">10+</div>
        <div class="uppercase tracking-wide">Years Experience</div>
      </div>
      <div class="text-center">
        <div class="text-3xl font-bold text-yellow-200">500+</div>
        <div class="uppercase tracking-wide">People Impacted</div>
      </div>
      <div class="text-center">
        <div class="text-3xl font-bold text-yellow-200">3</div>
        <div class="uppercase tracking-wide">Global Locations</div>
      </div>
    </div>
  </div>

  <div id="carousel-indicators" class="absolute bottom-12 left-1/2 -translate-x-1/2 flex items-center justify-center gap-3 z-10">
    <?php for ($i = 0; $i < $indicator_count; $i++): ?>
      <div data-i="<?php echo $i; ?>" class="cursor-pointer h-2.5 w-2.5 rounded-full bg-white/60 transition-colors duration-300"></div>
    <?php endfor; ?>
  </div>
</section>
