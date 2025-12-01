const openModal = document.getElementById('openBooking')
const closeModal = document.getElementById('closeBooking')
const modal = document.getElementById('bookingModal')
const modalBox = document.getElementById('bookingBox')

openModal.addEventListener('click', () => {
  modal.classList.remove('opacity-0', 'pointer-events-none')
  modal.classList.add('opacity-100')
  modalBox.classList.remove('scale-95')
  modalBox.classList.add('scale-100')
})

closeModal.addEventListener('click', () => {
  modal.classList.add('opacity-0', 'pointer-events-none')
  modal.classList.remove('opacity-100')
  modalBox.classList.add('scale-95')
  modalBox.classList.remove('scale-100')
})

modal.addEventListener('click', (e) => {
  if(e.target === modal){
    modal.classList.add('opacity-0','pointer-events-none')
    modal.classList.remove('opacity-100')
    modalBox.classList.add('scale-95')
    modalBox.classList.remove('scale-100')
  }
})
