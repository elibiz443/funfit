const edit_thumbnailInput = document.getElementById('edit_thumbnail');
const edit_thumbnailName = document.getElementById('edit_thumbnailName');
const editServiceForm = document.getElementById('editServiceForm');

edit_thumbnailInput.addEventListener('change', () => {
  edit_thumbnailName.textContent = edit_thumbnailInput.files.length ? edit_thumbnailInput.files[0].name : '';
});

function editService(serviceId) {
  fetch(`${ROOT_URL}/admin/scripts/services/edit.php?id=${serviceId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_service_id').value = data.service.id;
        document.getElementById('edit_title').value = data.service.title;
        document.getElementById('edit_subtitle').value = data.service.subtitle;
        document.getElementById('edit_description').value = data.service.description;
        document.getElementById('edit_videoUrl').value = data.service.videoUrl;
        document.getElementById('edit_thumbnailName').textContent = data.service.thumbnail ? data.service.thumbnail.split('/').pop() : '';
        document.getElementById('edit-form-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the service."));
}

function closeEditModal() {
  document.getElementById('edit-form-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editServiceForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editServiceForm);

  try {
    const response = await fetch(editServiceForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditModal();
      window.location.href = `${ROOT_URL}/dashboard/services`;
    } else {
      alert('Error updating service. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/services`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});
