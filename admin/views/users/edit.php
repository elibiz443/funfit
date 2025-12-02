<div id="edit-form-modal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[50%]">
    <h2 class="text-xl text-white font-semibold mb-4">Edit User</h2>
    <form method="POST" action="../admin/scripts/users/edit.php" autocomplete="off" id="editUserForm">
      <input type="hidden" name="form_type" value="edit_user_form">
      <input type="hidden" name="user_id" id="edit_user_id">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        
        <div class="md:col-span-2">
          <input type="text" id="edit_full_name" name="full_name" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 text-white placeholder-gray-300" placeholder="Full Name" required>
        </div>
        
        <div>
          <input type="text" id="edit_username" name="username" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 text-white placeholder-gray-300" placeholder="Username" required>
        </div>

        <div>
          <input type="email" id="edit_email" name="email" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 text-white placeholder-gray-300" placeholder="Email Address" required>
        </div>

        <div>
          <input type="password" name="password" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 text-white placeholder-gray-300" placeholder="New Password (optional, min 8 chars)" minlength="8">
        </div>

        <div>
          <input type="password" name="confirm_password" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 text-white placeholder-gray-300" placeholder="Confirm New Password">
        </div>

        <div class="md:col-span-2">
          <select id="edit_role" name="role" class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-sky-600 bg-transparent text-white placeholder-gray-300">
            <option value="guest" class="bg-gray-700 text-white">Guest</option>
            <option value="admin" class="bg-gray-700 text-white">Admin</option>
          </select>
        </div>

      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeEditModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">Cancel</button>
        <button type="submit" name="update_user" class="px-4 py-2 cursor-pointer bg-sky-600 hover:bg-sky-800 text-white rounded transition-all">Update User</button>
      </div>
    </form>
  </div>
</div>