const edit_thumbnailInput = document.getElementById('edit_thumbnail');
const edit_thumbnailName = document.getElementById('edit_thumbnailName');
const editProjectForm = document.getElementById('editProjectForm');

edit_thumbnailInput.addEventListener('change', () => {
  edit_thumbnailName.textContent = edit_thumbnailInput.files.length ? edit_thumbnailInput.files[0].name : '';
});

function editProject(projectId) {
  fetch(`${ROOT_URL}/admin/scripts/projects/edit.php?id=${projectId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_project_id').value = data.project.id;
        document.getElementById('edit_title').value = data.project.title;
        document.getElementById('edit_description').value = data.project.description;
        document.getElementById('edit_videoUrl').value = data.project.videoUrl;
        document.getElementById('edit_thumbnailName').textContent = data.project.thumbnail ? data.project.thumbnail.split('/').pop() : '';
        document.getElementById('edit-form-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the project."));
}

function closeEditModal() {
  document.getElementById('edit-form-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editProjectForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editProjectForm);

  try {
    const response = await fetch(editProjectForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditModal();
      window.location.href = `${ROOT_URL}/dashboard/projects`;
    } else {
      alert('Error updating project. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/projects`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});