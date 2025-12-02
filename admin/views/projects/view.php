<div id="projectModal" class="fixed inset-0 bg-black/70 z-[999] hidden flex items-center justify-center px-4">
  <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] overflow-y-auto transform transition-all duration-500 scale-100">
    <button onclick="closeProjectModal()" class="absolute cursor-pointer top-4 right-4 text-gray-500 hover:text-red-600 transition-colors duration-300 z-20">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <div class="p-6 md:p-10">
      <h2 id="projectModalTitle" class="text-xl md:text-2xl font-semibold text-gray-900 text-center mb-3 tracking-tight">Loading...</h2>

      <div class="relative group rounded-xl overflow-hidden shadow-lg mb-8">
        <img id="projectModalThumbnail" src="" alt="Project Thumbnail" class="w-full h-64 md:h-96 object-cover rounded-2xl transition-all duration-900 group-hover:scale-120 ease-in-out">
        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
          <button id="projectPlayButton" class="cursor-pointer bg-white/90 hover:bg-yellow-500 hover:text-white transition-all duration-300 p-5 rounded-full shadow-lg">
            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
              <path d="M8 5v14l11-7z"/>
            </svg>
          </button>
        </div>
      </div>

      <div id="projectModalVideoWrapper" class="hidden rounded-xl overflow-hidden shadow-lg mb-8">
        <video id="projectModalVideo" class="hidden w-full h-64 md:h-96 rounded-xl outline-none" controls playsinline></video>
        <iframe id="projectModalIframe" class="hidden w-full h-64 md:h-96 rounded-xl" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>

      <div class="pt-2 text-center space-y-3">
        <p id="projectModalDescription" class="text-gray-700 text-md leading-relaxed whitespace-pre-wrap break-words"></p>
      </div>

      <div id="projectModalLoading" class="text-center py-12">
        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-gray-900 mx-auto mb-4"></div>
        <p class="text-gray-500 text-sm">Fetching project details...</p>
      </div>
    </div>
  </div>
</div>