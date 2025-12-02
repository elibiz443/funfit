// Open Modal
function openModal(id) {
  const modal = document.getElementById(id);
  modal.classList.remove('hidden');
  document.body.style.overflow = 'hidden';
}

// Close Modal
function closeModal(id) {
  const modal = document.getElementById(id);
  modal.classList.add('hidden');
  document.body.style.overflow = '';
}

// Close modal when clicking outside the content
window.addEventListener("click", function(event) {
  document.querySelectorAll(".info-modal").forEach((modal) => {
    if (event.target === modal) {
      modal.classList.add("hidden");
      document.body.style.overflow = '';
    }
  });
});