<div id="form-modal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Add New Project</h2>
    <form method="POST" action="" enctype="multipart/form-data" autocomplete="off">
      <input type="hidden" name="form_type" value="create_project_form">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" name="title" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Project Title" required>
        </div>

        <div>
          <div class="w-full px-3 py-[0.4rem] flex items-center justify-between bg-transparent border-b border-white text-gray-300">
            <label for="thumbnail" class="cursor-pointer">
              🖼️ - Upload Project Thumbnail
            </label>
            <span id="thumbnailName" class="ml-2 truncate text-yellow-500"></span>
            <input id="thumbnail" name="thumbnail" type="file" class="hidden">
          </div>
        </div>

        <div>
          <input type="url" name="videoUrl" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Project Video URL (optional)">
        </div>

        <div class="md:col-span-2">
          <textarea name="description" rows="4" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Enter Project Description"></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">
          Cancel
        </button>
        <button type="submit" name="save_project" class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">
          Add Project
        </button>
      </div>
    </form>
  </div>
</div>

<script>
  const thumbnailInput = document.getElementById('thumbnail')
  const thumbnailName = document.getElementById('thumbnailName')

  thumbnailInput.addEventListener('change', () => {
    thumbnailName.textContent = thumbnailInput.files.length ? thumbnailInput.files[0].name : ''
  })
</script>
