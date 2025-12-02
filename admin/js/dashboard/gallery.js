const editGalleryHeroImageInput = document.getElementById('edit_gallery_heroImage');
const editGalleryHeroImageName = document.getElementById('edit_gallery_heroImageName');
const editGalleryHeroForm = document.getElementById('editGalleryHeroForm');

editGalleryHeroImageInput.addEventListener('change', () => {
  editGalleryHeroImageName.textContent = editGalleryHeroImageInput.files.length
    ? editGalleryHeroImageInput.files[0].name
    : '';
});

function editGallery(galleryHeroId) {
  fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-gallery.php?id=${galleryHeroId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_gallery_hero_id').value = data.galleryHero.id;
        document.getElementById('edit_gallery_hero_title').value = data.galleryHero.title || '';
        document.getElementById('edit_gallery_hero_description').value = data.galleryHero.description || '';
        document.getElementById('edit_gallery_heroImageName').textContent = data.galleryHero.heroImage
          ? data.galleryHero.heroImage.split('/').pop()
          : '';
        document.getElementById('editGalleryHeroModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
        window.location.href = `${ROOT_URL}/dashboard`;
      }
    })
    .catch(() => {
      alert("Something went wrong fetching the gallery hero details.");
      window.location.href = `${ROOT_URL}/dashboard`;
    });
}

function closeEditGalleryHeroModal() {
  document.getElementById('editGalleryHeroModal').classList.add('hidden');
  document.body.style.overflow = '';
}

editGalleryHeroForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  const formData = new FormData(editGalleryHeroForm);
  try {
    const response = await fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-gallery.php`, {
      method: 'POST',
      body: formData
    });
    const result = await response.json();

    if (result.success) {
      closeEditGalleryHeroModal();
      window.location.reload(); 
    } else {
      alert('Error updating gallery hero details.');
      window.location.href = `${ROOT_URL}/dashboard`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
    window.location.href = `${ROOT_URL}/dashboard`;
  }
});