function viewGallery(galleryId) {
  const modal = document.getElementById('galleryModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('galleryModalTitle')
  const modalDescription = document.getElementById('galleryModalDescription')
  const modalHero = document.getElementById('galleryModalHero')
  const modalLoading = document.getElementById('galleryModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalDescription.textContent = ''
  modalHero.style.backgroundImage = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/dashboard/view-gallery.php?id=${galleryId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        const gallery = data.gallery
        modalTitle.textContent = gallery.title || 'Untitled Gallery'
        modalDescription.textContent = gallery.description || ''
        const heroImage = gallery.heroImage
          ? `${ROOT_URL}/${gallery.heroImage}`
          : `${ROOT_URL}/images/admin/default-img.webp`
        modalHero.style.backgroundImage = `url('${heroImage}')`
      } else {
        modalTitle.textContent = 'Error'
        modalDescription.textContent = data.message || 'Could not load gallery details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the gallery detail.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeGalleryModal()
    }
  }, { once: true })
}

function closeGalleryModal() {
  const modal = document.getElementById('galleryModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}

