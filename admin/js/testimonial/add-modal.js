const openBtn = document.getElementById('openTestimonialModal')
const testimonialModal = document.getElementById('form-modal')

function closeModal() {
  testimonialModal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}

openBtn.addEventListener('click', () => {
  testimonialModal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')
})

testimonialModal.addEventListener('click', e => {
  if (e.target === testimonialModal) closeModal()
})