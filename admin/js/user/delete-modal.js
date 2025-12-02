function openDeleteModal(userId, deleteUrlBase) {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  const deleteModalTitle = document.getElementById('delete-modal-title');
  const deleteModalMessage = document.getElementById('delete-modal-message');
  const confirmDeleteButton = document.getElementById('confirm-delete-button');

  deleteModalTitle.textContent = 'Confirm User Deletion';
  deleteModalMessage.textContent = 'Are you absolutely sure you want to delete this user? This action cannot be undone.';
  confirmDeleteButton.textContent = 'Delete User';

  confirmDeleteButton.href = `${deleteUrlBase}?id=${encodeURIComponent(userId)}`;

  deleteModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
}

function closeDeleteModal() {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  deleteModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
}
