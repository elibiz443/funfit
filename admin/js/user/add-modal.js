const userFormModal = document.getElementById('form-modal');
const openUserModalButton = document.getElementById('openUserModal');

function openModal() {
  const form = userFormModal.querySelector('form');
  if (form) {
    form.reset();
  }

  userFormModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
}

function closeModal() {
  userFormModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
}

if (openUserModalButton) {
  openUserModalButton.addEventListener('click', openModal);
}