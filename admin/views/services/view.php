<div id="serviceModal" class="fixed inset-0 bg-black/70 z-[999] hidden flex items-center justify-center px-4">
  <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] overflow-y-auto transform transition-all duration-500 scale-100">
    <button onclick="closeServiceModal()" class="absolute cursor-pointer top-4 right-4 text-gray-500 hover:text-red-600 transition-colors duration-300 z-20">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <div class="p-6 md:p-10">
      <h2 id="serviceModalTitle" class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-6 tracking-tight">Loading...</h2>

      <div class="relative group rounded-xl overflow-hidden shadow-lg mb-8">
        <img id="serviceModalThumbnail" src="" alt="Service Thumbnail" class="w-full h-64 md:h-96 object-cover rounded-2xl transition-all duration-900 group-hover:scale-120 ease-in-out">
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
          <button id="playButton" class="cursor-pointer bg-white/90 hover:bg-yellow-500 hover:text-white transition-all duration-300 p-5 rounded-full shadow-lg">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z"/>
            </svg>
          </button>
        </div>
      </div>

      <div id="serviceModalVideoWrapper" class="hidden rounded-xl overflow-hidden shadow-lg mb-8">
        <video id="serviceModalVideo" class="hidden w-full h-64 md:h-96 rounded-xl outline-none" controls playsinline></video>
        <iframe id="serviceModalIframe" class="hidden w-full h-64 md:h-96 rounded-xl" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

      <div class="pt-2 text-center space-y-6">
        <p id="serviceModalDescription" class="text-gray-700 text-lg leading-relaxed whitespace-pre-wrap break-words"></p>
        <h3 id="serviceModalSubtitle" class="text-gray-600 text-lg font-light"></h3>
      </div>

      <div id="serviceModalLoading" class="text-center py-12">
        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-gray-900 mx-auto mb-4"></div>
        <p class="text-gray-500 text-sm">Fetching service details...</p>
      </div>
    </div>
  </div>
</div>