function viewGallery(galleryId) {
  const modal = document.getElementById('galleryModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('galleryModalTitle')
  const modalImg = document.getElementById('galleryModalImg')
  const modalLocation = document.getElementById('galleryModalLocation')
  const modalDetail = document.getElementById('galleryModalDetail')
  const modalTimestamp = document.getElementById('galleryModalTimestamp')
  const modalLoading = document.getElementById('galleryModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalLocation.querySelector('span').textContent = ''
  modalDetail.textContent = ''
  modalTimestamp.textContent = 'Last Updated: '
  modalImg.src = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/gallery/view.php?id=${galleryId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success && data.gallery) {
        modalTitle.textContent = data.gallery.title
        modalDetail.textContent = data.gallery.detail || ''
        modalLocation.querySelector('span').textContent = data.gallery.location || 'N/A'

        const timestamp = data.gallery.updated_at ? new Date(data.gallery.updated_at).toLocaleString() : 'N/A'
        modalTimestamp.textContent = `Last Updated: ${timestamp}`

        const imgLink = data.gallery.img_link
          ? `${ROOT_URL}${data.gallery.img_link}`
          : `${ROOT_URL}/images/admin/default-img.webp`

        modalImg.src = imgLink
      } else {
        modalTitle.textContent = 'Error'
        modalDetail.textContent = data.message || 'Could not load gallery item details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDetail.textContent = 'Something went wrong fetching the gallery item.'
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