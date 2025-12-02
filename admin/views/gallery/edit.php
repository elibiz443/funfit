<div id="edit-gallery-modal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Edit Gallery Item</h2>
    <form method="POST" action="../admin/scripts/gallery/edit.php" enctype="multipart/form-data" autocomplete="off" id="editGalleryForm">
      <input type="hidden" name="form_type" value="edit_gallery_form">
      <input type="hidden" name="gallery_id" id="edit_gallery_id">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" id="edit_gallery_title" name="title" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Item Title" required>
        </div>

        <div class="md:col-span-2">
          <input type="text" id="edit_gallery_location" name="location" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Location (e.g., Nairobi)" required>
        </div>

        <div class="md:col-span-2">
          <div class="w-full px-3 py-[0.4rem] flex items-center justify-between bg-transparent border-b border-white text-gray-300">
            <label for="edit_img_link" class="cursor-pointer">
              🖼️ - Upload New Image (Optional)
            </label>
            <span id="edit_img_linkName" class="ml-2 truncate text-yellow-500"></span>
            <input id="edit_img_link" name="img_link" type="file" accept="image/*" class="hidden">
          </div>
          <p class="text-xs text-gray-400 pt-1 text-right italic">Current image will be replaced if a new file is chosen.</p>
        </div>

        <div class="md:col-span-2">
          <textarea id="edit_gallery_detail" name="detail" rows="4" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Enter Item Detail/Description (Optional)"></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeEditGalleryModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">Cancel</button>
        <button type="submit" name="update_gallery_item" class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">Update Gallery Item</button>
      </div>
    </form>
  </div>
</div>