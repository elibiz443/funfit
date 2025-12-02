const openBtn = document.getElementById('openGalleryModal')
const galleryFormModal = document.getElementById('gallery-form-modal')

const imgLinkInput = document.getElementById('img_link')
const imgLinkName = document.getElementById('img_linkName')

imgLinkInput.addEventListener('change', () => {
  imgLinkName.textContent = imgLinkInput.files.length ? imgLinkInput.files[0].name : ''
})

function openGalleryModalForm() {
  galleryFormModal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')
}

function closeGalleryModalForm() {
  galleryFormModal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}

openBtn.addEventListener('click', openGalleryModalForm)

galleryFormModal.addEventListener('click', e => {
  if (e.target === galleryFormModal) closeGalleryModalForm()
})