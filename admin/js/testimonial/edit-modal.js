const editTestimonialForm = document.getElementById('editTestimonialForm');

function editTestimonial(testimonialId) {
  fetch(`${ROOT_URL}/admin/scripts/testimonials/edit.php?id=${testimonialId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_testimonial_id').value = data.testimonial.id;
        document.getElementById('edit_full_name').value = data.testimonial.full_name;
        document.getElementById('edit_description').value = data.testimonial.description;
        document.getElementById('edit_location').value = data.testimonial.location;
        document.getElementById('edit_position').value = data.testimonial.position;
        document.getElementById('edit-form-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
      }
    })
    .catch(() => alert("Something went wrong fetching the testimonial."));
}

function closeEditModal() {
  document.getElementById('edit-form-modal').classList.add('hidden');
  document.body.style.overflow = '';
}

editTestimonialForm.addEventListener('submit', async (event) => {
  event.preventDefault();

  const formData = new FormData(editTestimonialForm);

  try {
    const response = await fetch(editTestimonialForm.action, {
      method: 'POST',
      body: formData
    });

    const result = await response.json();

    if (result.success) {
      closeEditModal();
      window.location.href = `${ROOT_URL}/dashboard/testimonials`;
    } else {
      alert('Error updating testimonial. Please check your input.');
      window.location.href = `${ROOT_URL}/dashboard/testimonials`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
  }
});