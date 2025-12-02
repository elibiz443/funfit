function openDeleteModal(projectId, deleteUrlBase) {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  const deleteModalTitle = document.getElementById('delete-modal-title');
  const deleteModalMessage = document.getElementById('delete-modal-message');
  const confirmDeleteButton = document.getElementById('confirm-delete-button');

  deleteModalTitle.textContent = 'Confirm Project Deletion';
  deleteModalMessage.textContent = 'Are you absolutely sure you want to delete this project? This action cannot be undone.';
  confirmDeleteButton.textContent = 'Delete Project';

  confirmDeleteButton.href = `${deleteUrlBase}?id=${encodeURIComponent(projectId)}`;

  deleteModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
}

function closeDeleteModal() {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  deleteModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
}