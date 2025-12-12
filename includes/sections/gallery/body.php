<section id="media-section" class="relative py-16 bg-gradient-to-br from-[#f3d477]/30 via-[#daaa4a]/60 to-[#1c1c1c]">
  <div class="absolute inset-0 bg-cover" style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/patterns/texture3.webp')"></div>

  <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Tabs -->
    <div class="flex justify-center mb-10 space-x-4">
      <button id="tabImages" class="cursor-pointer px-6 py-2 rounded-full font-semibold bg-black/40 text-white border border-white/20 hover:bg-black/60 transition">Images</button>
      <button id="tabVideos" class="cursor-pointer px-6 py-2 rounded-full font-semibold bg-black/20 text-white border border-white/10 hover:bg-black/40 transition">Videos</button>
    </div>

    <!-- IMAGES SECTION -->
    <div id="imagesSection" class="block transition-all duration-500">
      <div id="galleryGrid" class="columns-2 sm:columns-3 lg:columns-4 xl:columns-5 gap-2 [column-fill:_balance] space-y-2 transition-all duration-500">
        <?php if (!empty($gallery) && count($gallery) > 0): ?>
          <?php $index = 0; ?>
          <?php foreach ($gallery as $pic): ?>
            <div class="group relative cursor-pointer inline-block w-full overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out break-inside-avoid" data-index="<?= $index ?>" role="img" aria-label="<?= htmlspecialchars($pic['title']) ?> - <?= htmlspecialchars($pic['location']) ?>">
              <img class="gallery-image w-full h-auto object-cover transform group-hover:scale-110 transition duration-700 ease-in-out" src="<?= ROOT_URL . $pic['img_link'] ?>" alt="<?= htmlspecialchars($pic['title']) ?>" loading="lazy">

              <div class="absolute inset-0 pointer-events-none bg-gradient-to-t from-black/70 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out"></div>

              <div class="absolute pointer-events-none bottom-6 left-6 text-left opacity-0 group-hover:opacity-100 transform translate-y-6 group-hover:translate-y-0 transition duration-500 ease-in-out">
                <p class="text-white text-sm mb-1 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20" fill="currentColor" class="mr-2">
                    <path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                  </svg><?= htmlspecialchars($pic['location']) ?>
                </p>
                <h3 class="text-lg font-semibold text-white hover:text-yellow-500 transition">
                  <?= htmlspecialchars($pic['title']) ?>
                </h3>
              </div>
            </div>
          <?php $index++; ?>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-white text-center bg-indigo-600 py-2 shadow-md shadow-gray-900 w-[60%] mx-auto col-span-full">
            No pics found in the gallery.
          </p>
        <?php endif; ?>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center items-center mt-10 space-x-3">
        <button id="prevPage" class="cursor-pointer px-4 py-2 bg-[#333333] text-white rounded-lg hover:bg-[#555] disabled:opacity-40 disabled:cursor-not-allowed">Prev</button>
        <span id="pageIndicator" class="text-[#333333] font-semibold"></span>
        <button id="nextPage" class="cursor-pointer px-4 py-2 bg-[#333333] text-white rounded-lg hover:bg-[#555] disabled:opacity-40 disabled:cursor-not-allowed">Next</button>
      </div>
    </div>

    <!-- VIDEOS SECTION -->
    <div id="videosSection" class="hidden transition-all duration-500">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="rounded-xl overflow-hidden cursor-pointer group shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out" data-video-id="Tn0n2XuS4i8">
          <div class="relative">
            <img src="<?php echo ROOT_URL; ?>/assets/images/gallery/14.webp" class="w-full h-56 object-cover group-hover:scale-110 transition-all duration-700 ease-in-out">
            <div class="absolute inset-0 bg-black/40 group-hover:bg-black/60 flex items-center justify-center transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="text-white w-14 h-14" fill="currentColor" viewBox="0 0 24 24">
                <path d="M8 5v14l11-7z"/>
              </svg>
            </div>
          </div>
          <div class="p-4 text-white bg-black/30">
            <h3 class="font-semibold">Fun Zone BootCamp</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VIDEO MODAL -->
<div id="videoModal" class="hidden fixed inset-0 bg-black/80 z-[999] flex items-center justify-center p-4">
  <div class="relative w-full max-w-3xl">
    <button id="closeVideoModal" class="absolute -top-10 right-0 text-white text-3xl">&times;</button>
    <iframe id="videoPlayer" class="w-full h-[60vh] rounded-xl" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</div>

<!-- Images Modal -->
<div id="galleryModal" class="hidden fixed inset-0 bg-black/80 z-[999] flex items-center justify-center transition-all duration-700 ease-in-out" role="dialog" aria-modal="true" aria-labelledby="modalImage">
  <div class="relative max-w-5xl w-full mx-4 rounded-lg shadow-lg shadow-slate-900">
    <button id="closeModal" class="absolute cursor-pointer top-2 right-2 text-white text-3xl hover:text-yellow-400 bg-black/30 size-[2rem] rounded-full flex items-center justify-center z-10">&times;</button>
    <img id="modalImage" src="" alt="Enlarged Gallery Image" class="max-h-[90vh] mx-auto w-full rounded-lg object-contain bg-[#D9CFC3]">
    <button id="prevImage" class="absolute cursor-pointer left-4 top-1/2 -translate-y-1/2 text-white bg-black/30 hover:bg-black/70 size-[2.5rem] rounded-full flex items-center justify-center hover:text-yellow-400 z-10">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="22" height="22" fill="currentColor"><path d="M9.4 278.6c-12.5-12.5-12.5-32.8 0-45.3l128-128c9.2-9.2 22.9-11.9 34.9-6.9s19.8 16.6 19.8 29.6v256c0 12.9-7.8 24.6-19.8 29.6s-25.7 2.2-34.9-6.9z"/></svg>
    </button>
    <button id="nextImage" class="absolute cursor-pointer right-4 top-1/2 -translate-y-1/2 text-white bg-black/30 hover:bg-black/70 size-[2.5rem] rounded-full flex items-center justify-center hover:text-yellow-400 z-10">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" width="22" height="22" fill="currentColor"><path d="M246.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-9.2-9.2-22.9-11.9-34.9-6.9s-19.8 16.6-19.8 29.6v256c0 12.9 7.8 24.6 19.8 29.6s25.7 2.2 34.9-6.9z"/></svg>
    </button>
  </div>
</div>
