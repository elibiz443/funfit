function viewContact(contactId) {
  const modal = document.getElementById('contactModal')
  const modalInner = modal.querySelector('.relative')
  const modalName = document.getElementById('contactModalName')
  const modalEmail = document.getElementById('contactModalEmail')
  const modalPhone = document.getElementById('contactModalPhone')
  const modalMessage = document.getElementById('contactModalMessage')
  const modalLoading = document.getElementById('contactModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalName.textContent = 'Loading...'
  modalEmail.textContent = ''
  modalPhone.textContent = ''
  modalMessage.textContent = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/contacts/view.php?id=${contactId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        modalName.textContent = data.contact.full_name
        modalEmail.textContent = `Email: ${data.contact.email}`
        modalPhone.textContent = `Phone: ${data.contact.phone_number}`
        modalMessage.textContent = data.contact.message
      } else {
        modalName.textContent = 'Error'
        modalMessage.textContent = data.message || 'Could not load contact details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalName.textContent = 'Error'
      modalMessage.textContent = 'Something went wrong fetching the contact.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeContactModal()
    }
  }, { once: true })
}

function closeContactModal() {
  const modal = document.getElementById('contactModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}