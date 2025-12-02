const editUserForm = document.getElementById('editUserForm');

function editUser(userId) {
  fetch(`${ROOT_URL}/admin/scripts/users/edit.php?id=${userId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_user_id').value = data.user.id;
        document.getElementById('edit_full_name').value = data.user.full_name;
        document.getElementById('edit_username').value = data.user.username;
        document.getElementById('edit_email').value = data.user.email;
        document.getElementById('edit_role').value = data.user.role;
        
        document.getElementById('edit-form-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the user data."));
}

function closeEditModal() {
  document.getElementById('edit-form-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editUserForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editUserForm);

  try {
    const response = await fetch(editUserForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditModal();
      window.location.href = `${ROOT_URL}/dashboard/users`;
    } else {
      alert('Error updating user. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/users`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});