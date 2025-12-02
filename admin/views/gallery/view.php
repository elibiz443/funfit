<div id="galleryModal" class="fixed inset-0 bg-black/70 z-[999] hidden flex items-center justify-center px-4">
  <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] overflow-y-auto transform transition-all duration-500 scale-100">
    <button onclick="closeGalleryModal()" class="absolute cursor-pointer top-4 right-4 text-gray-500 hover:text-red-600 transition-colors duration-300 z-20">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <div class="p-6 md:p-10">
      <h2 id="galleryModalTitle" class="text-xl md:text-2xl font-semibold text-gray-800 text-center mb-3 tracking-tight">Loading...</h2>

      <div class="relative group rounded-xl overflow-hidden shadow-lg shadow-neutral-800 mb-2 overflow-hidden">
        <img id="galleryModalImg" src="" alt="Gallery Image" class="w-full h-64 md:h-96 object-cover transition-all duration-700 group-hover:scale-120 ease-in-out">
      </div>

      <div class="pt-2 text-center space-y-3">
        <p id="galleryModalLocation" class="text-gray-600 text-md font-medium mb-2">Location: <span class="font-semibold text-gray-800"></span></p>
        <p id="galleryModalDetail" class="text-gray-600 text-sm leading-relaxed whitespace-pre-wrap break-words"></p>
        <p id="galleryModalTimestamp" class="text-gray-500 text-xs italic pt-2">Last Updated: </p>
      </div>

      <div id="galleryModalLoading" class="text-center py-12">
        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-gray-900 mx-auto mb-4"></div>
        <p class="text-gray-500 text-sm">Fetching gallery details...</p>
      </div>
    </div>
  </div>
</div>