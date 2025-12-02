const openBtn = document.getElementById('openServiceModal')
const storyModal = document.getElementById('form-modal')

function closeModal() {
  storyModal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}

openBtn.addEventListener('click', () => {
  storyModal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')
})

storyModal.addEventListener('click', e => {
  if (e.target === storyModal) closeModal()
})
