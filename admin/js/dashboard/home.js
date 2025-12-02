const editHeroImageInput = document.getElementById('edit_heroImage');
const editHeroImageName = document.getElementById('edit_heroImageName');
const editHomeForm = document.getElementById('editHomeForm');

editHeroImageInput.addEventListener('change', () => {
  editHeroImageName.textContent = editHeroImageInput.files.length
    ? editHeroImageInput.files[0].name
    : '';
});

function editHome(homeId) {
  fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-home.php?id=${homeId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_home_id').value = data.home.id;
        document.getElementById('edit_title').value = data.home.title || '';
        document.getElementById('edit_subtitle').value = data.home.subtitle || '';
        document.getElementById('edit_description').value = data.home.description || '';
        document.getElementById('edit_heroImageName').textContent = data.home.heroImage
          ? data.home.heroImage.split('/').pop()
          : '';
        document.getElementById('editHomeModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
        window.location.href = `${ROOT_URL}/dashboard`;
      }
    })
    .catch(() => {
      alert("Something went wrong fetching the home details.");
      window.location.href = `${ROOT_URL}/dashboard`;
    });
}

function closeEditHomeModal() {
  document.getElementById('editHomeModal').classList.add('hidden');
  document.body.style.overflow = '';
}

editHomeForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  const formData = new FormData(editHomeForm);
  try {
    const response = await fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-home.php`, {
      method: 'POST',
      body: formData
    });
    const result = await response.json();
    if (result.success) {
      closeEditHomeModal();
      window.location.href = `${ROOT_URL}/dashboard`;
    } else {
      alert('Error updating home details.');
      window.location.href = `${ROOT_URL}/dashboard`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
    window.location.href = `${ROOT_URL}/dashboard`;
  }
});