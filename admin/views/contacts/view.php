<div id="contactModal" class="fixed inset-0 bg-black/70 z-[999] hidden flex items-center justify-center px-4">
  <div class="relative bg-white rounded-2xl shadow-2xl overflow-hidden w-full max-w-4xl max-h-[90vh] overflow-y-auto transform transition-all duration-500 scale-100">
    <button onclick="closeContactModal()" class="absolute cursor-pointer top-4 right-4 text-gray-500 hover:text-red-600 transition-colors duration-300 z-20">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
      </svg>
    </button>

    <div class="p-6 md:p-10">
      <h2 id="contactModalName" class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-6 tracking-tight">Loading...</h2>

      <div class="pt-2 text-center space-y-4">
        <p id="contactModalEmail" class="text-gray-700 text-lg break-words"></p>
        <p id="contactModalPhone" class="text-gray-700 text-lg break-words"></p>
        <h3 id="contactModalMessage" class="text-gray-600 text-lg font-light whitespace-pre-wrap break-words"></h3>
      </div>

      <div id="contactModalLoading" class="text-center py-12">
        <div class="animate-spin rounded-full h-10 w-10 border-b-2 border-gray-900 mx-auto mb-4"></div>
        <p class="text-gray-500 text-sm">Fetching contact details...</p>
      </div>
    </div>
  </div>
</div>