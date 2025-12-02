const editServicesHeroImageInput = document.getElementById('edit_services_heroImage');
const editServicesHeroImageName = document.getElementById('edit_services_heroImageName');
const editServicesHeroForm = document.getElementById('editServicesHeroForm');

editServicesHeroImageInput.addEventListener('change', () => {
  editServicesHeroImageName.textContent = editServicesHeroImageInput.files.length
    ? editServicesHeroImageInput.files[0].name
    : '';
});

function editService(servicesHeroId) {
  fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-services.php?id=${servicesHeroId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_services_hero_id').value = data.servicesHero.id;
        document.getElementById('edit_services_hero_title').value = data.servicesHero.title || '';
        document.getElementById('edit_services_hero_subtitle').value = data.servicesHero.subtitle || '';
        document.getElementById('edit_services_hero_description').value = data.servicesHero.description || '';
        document.getElementById('edit_services_heroImageName').textContent = data.servicesHero.heroImage
          ? data.servicesHero.heroImage.split('/').pop()
          : '';
        document.getElementById('editServicesHeroModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
        window.location.href = `${ROOT_URL}/dashboard`;
      }
    })
    .catch(() => {
      alert("Something went wrong fetching the services hero details.");
      window.location.href = `${ROOT_URL}/dashboard`;
    });
}

function closeEditServicesHeroModal() {
  document.getElementById('editServicesHeroModal').classList.add('hidden');
  document.body.style.overflow = '';
}

editServicesHeroForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  const formData = new FormData(editServicesHeroForm);
  try {
    const response = await fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-services.php`, {
      method: 'POST',
      body: formData
    });
    const result = await response.json();

    if (result.success) {
      closeEditServicesHeroModal();
      window.location.reload();
    } else {
      alert('Error updating services hero details.');
      window.location.href = `${ROOT_URL}/dashboard`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
    window.location.href = `${ROOT_URL}/dashboard`;
  }
});
