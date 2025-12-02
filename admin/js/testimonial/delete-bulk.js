function deleteSelectedTestimonials() {
  const selected = Array.from(document.querySelectorAll('input[name="testimonial-select[]"]:checked'))
    .map(checkbox => checkbox.value);

  if (selected.length === 0) {
    alert("Please select at least one testimonial to delete.");
    return;
  }

  const deleteModal = document.getElementById('delete-confirmation-modal');
  const deleteModalTitle = document.getElementById('delete-modal-title');
  const deleteModalMessage = document.getElementById('delete-modal-message');
  const confirmDeleteButton = document.getElementById('confirm-delete-button');

  deleteModalTitle.textContent = 'Confirm Bulk Deletion';
  deleteModalMessage.textContent = `Are you absolutely sure you want to delete ${selected.length} selected testimonia${selected.length > 1 ? 'ls' : 'l'}? This action cannot be undone.`;
  confirmDeleteButton.textContent = 'Delete Selected';

  const newButton = confirmDeleteButton.cloneNode(true);
  confirmDeleteButton.parentNode.replaceChild(newButton, confirmDeleteButton);

  newButton.addEventListener('click', () => {
    closeDeleteModal();
    
    const formData = new FormData();
    selected.forEach(id => formData.append('testimonial_ids[]', id));

    fetch(`${ROOT_URL}/admin/scripts/testimonials/delete_bulk.php`, {
      method: 'POST',
      body: formData
    })
      .then(response => {
        if (!response.ok) {
          throw new Error('Network response was not ok: ' + response.statusText);
        }
        return response.json();
      })
      .then(data => {
        if (data.status === 'success') {
          window.location.reload();
        } else {
          console.error('Delete error:', data.message);
          alert(`Deletion Failed: ${data.message}`);
        }
      })
      .catch(error => {
        console.error('Bulk delete failed:', error);
        alert("Something went wrong while deleting: " + error.message);
      });
  });

  deleteModal.classList.remove('hidden');
  document.body.classList.add('overflow-hidden');
}

function closeDeleteModal() {
  const deleteModal = document.getElementById('delete-confirmation-modal');
  deleteModal.classList.add('hidden');
  document.body.classList.remove('overflow-hidden');
}