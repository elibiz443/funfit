<div id="edit-form-modal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Edit Project</h2>
    <form method="POST" action="../admin/scripts/projects/edit.php" enctype="multipart/form-data" autocomplete="off" id="editProjectForm">
      <input type="hidden" name="form_type" value="edit_project_form">
      <input type="hidden" name="project_id" id="edit_project_id">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" id="edit_title" name="title" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300" placeholder="Project Title" required>
        </div>

        <div>
          <div class="w-full px-3 py-[0.4rem] flex items-center justify-between bg-transparent border-b border-white text-gray-300">
            <label for="edit_thumbnail" class="cursor-pointer">
              🖼️ - Upload Project Thumbnail
            </label>
            <span id="edit_thumbnailName" class="ml-2 truncate text-yellow-500"></span>
            <input id="edit_thumbnail" name="thumbnail" type="file" class="hidden">
          </div>
        </div>

        <div>
          <input type="url" id="edit_videoUrl" name="videoUrl" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Project Video URL (optional)">
        </div>

        <div class="md:col-span-2">
          <textarea id="edit_description" name="description" rows="4" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300" placeholder="Enter Project Description"></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeEditModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">Cancel</button>
        <button type="submit" name="update_project" class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">Update Project</button>
      </div>
    </form>
  </div>
</div>

<script>
  const editThumbnailInput = document.getElementById('edit_thumbnail')
  const editThumbnailName = document.getElementById('edit_thumbnailName')
  editThumbnailInput.addEventListener('change', () => {
    editThumbnailName.textContent = editThumbnailInput.files.length ? editThumbnailInput.files[0].name : ''
  })
</script>