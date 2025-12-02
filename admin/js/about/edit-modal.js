const edit_aboutImageInput = document.getElementById('edit_aboutImage');
const edit_aboutImageName = document.getElementById('edit_aboutImageName');
const editAboutForm = document.getElementById('editAboutForm');

edit_aboutImageInput.addEventListener('change', () => {
  edit_aboutImageName.textContent = edit_aboutImageInput.files.length ? edit_aboutImageInput.files[0].name : '';
});

function editAbout(aboutId) {
  fetch(`${ROOT_URL}/admin/scripts/abouts/edit.php?id=${aboutId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_about_id').value = data.about.id;
        document.getElementById('edit_title').value = data.about.title;
        document.getElementById('edit_description').value = data.about.description;
        document.getElementById('edit_aboutImageName').textContent = data.about.aboutImage ? data.about.aboutImage.split('/').pop() : '';
        document.getElementById('edit-form-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the about info."));
}

function closeEditModal() {
  document.getElementById('edit-form-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editAboutForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editAboutForm);

  try {
    const response = await fetch(editAboutForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditModal();
      window.location.href = `${ROOT_URL}/dashboard/abouts`;
    } else {
      alert('Error updating about section. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/abouts`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});
