<div id="editHomeModal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Edit Home</h2>
    <form method="POST" action="<?= ROOT_URL ?>/admin/scripts/dashboard/edit-home.php" enctype="multipart/form-data" id="editHomeForm">
      <input type="hidden" name="form_type" value="edit_home_form">
      <input type="hidden" name="home_id" id="edit_home_id" value="<?= $homeDetail['id'] ?>">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" id="edit_title" name="title"
            class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300"
            placeholder="Home Title" value="<?= htmlspecialchars($homeDetail['title']) ?>">
        </div>

        <div class="md:col-span-2">
          <input type="text" id="edit_subtitle" name="subtitle"
            class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300"
            placeholder="Home Subtitle" value="<?= htmlspecialchars($homeDetail['subtitle']) ?>">
        </div>

        <div>
          <div class="w-full px-3 py-[0.4rem] flex items-center justify-between bg-transparent border-b border-white text-gray-300">
            <label for="edit_heroImage" class="cursor-pointer">🖼️ - Upload Hero Image</label>
            <span id="edit_heroImageName" class="ml-2 truncate text-yellow-500"><?= basename($homeDetail['heroImage']) ?></span>
            <input id="edit_heroImage" name="heroImage" type="file" class="hidden">
          </div>
        </div>

        <div class="md:col-span-2">
          <textarea id="edit_description" name="description" rows="4"
            class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300"
            placeholder="Enter Home Description"><?= htmlspecialchars($homeDetail['description']) ?></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeEditHomeModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">
          Cancel
        </button>
        <button type="submit" name="update_home"
          class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">
          Update Home
        </button>
      </div>
    </form>
  </div>
</div>