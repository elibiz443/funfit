const editImgLinkInput = document.getElementById('edit_img_link');
const editImgLinkName = document.getElementById('edit_img_linkName');
const editGalleryForm = document.getElementById('editGalleryForm');

editImgLinkInput.addEventListener('change', () => {
  editImgLinkName.textContent = editImgLinkInput.files.length ? editImgLinkInput.files[0].name : '';
});

function editGallery(galleryId) {
  fetch(`${ROOT_URL}/admin/scripts/gallery/view.php?id=${galleryId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success && data.gallery) {
        document.getElementById('edit_gallery_id').value = data.gallery.id;
        document.getElementById('edit_gallery_title').value = data.gallery.title;
        document.getElementById('edit_gallery_location').value = data.gallery.location;
        document.getElementById('edit_gallery_detail').value = data.gallery.detail;
        
        const imgPath = data.gallery.img_link;
        const fileName = imgPath ? imgPath.split('/').pop() : '';
        document.getElementById('edit_img_linkName').textContent = fileName;
        
        document.getElementById('edit-gallery-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the gallery item."));
}

function closeEditGalleryModal() {
  document.getElementById('edit-gallery-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editGalleryForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editGalleryForm);

  try {
    const response = await fetch(editGalleryForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditGalleryModal();
      window.location.href = `${ROOT_URL}/dashboard/gallery`;
    } else {
      alert('Error updating gallery item. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/gallery`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});