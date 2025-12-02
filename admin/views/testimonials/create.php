<div id="form-modal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Add New Testimonial</h2>
    <form method="POST" action="" autocomplete="off">
      <input type="hidden" name="form_type" value="create_testimonial_form">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" name="full_name" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Full Name" required>
        </div>

        <div class="md:col-span-2">
          <input type="text" name="position" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Position (Optional)">
        </div>

        <div class="md:col-span-2">
          <input type="text" name="location" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Location (Optional)">
        </div>

        <div class="md:col-span-2">
          <textarea name="description" rows="4" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Enter Testimonial Description" required></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">
          Cancel
        </button>
        <button type="submit" name="save_testimonial" class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">
          Add Testimonial
        </button>
      </div>
    </form>
  </div>
</div>