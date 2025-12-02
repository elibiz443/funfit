function openDeleteModal(testimonialId, deleteUrlBase) {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  const deleteModalTitle = document.getElementById('delete-modal-title');
  const deleteModalMessage = document.getElementById('delete-modal-message');
  const confirmDeleteButton = document.getElementById('confirm-delete-button');

  deleteModalTitle.textContent = 'Confirm Testimonial Deletion';
  deleteModalMessage.textContent = 'Are you absolutely sure you want to delete this testimonial? This action cannot be undone.';
  confirmDeleteButton.textContent = 'Delete Testimonial';

  confirmDeleteButton.href = `${deleteUrlBase}?id=${encodeURIComponent(testimonialId)}`;

  deleteModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
}

function closeDeleteModal() {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  deleteModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
}