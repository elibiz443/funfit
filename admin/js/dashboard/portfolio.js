const editPortfolioImageInput = document.getElementById('edit_portfolioImage');
const editPortfolioImageName = document.getElementById('edit_portfolioImageName');
const editPortfolioForm = document.getElementById('editPortfolioForm');

editPortfolioImageInput.addEventListener('change', () => {
  editPortfolioImageName.textContent = editPortfolioImageInput.files.length
    ? editPortfolioImageInput.files[0].name
    : '';
});

function editPortfolio(portfolioId) {
  fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-portfolio.php?id=${portfolioId}`)
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        document.getElementById('edit_portfolio_id').value = data.portfolio.id;
        document.getElementById('edit_title').value = data.portfolio.title || '';
        document.getElementById('edit_description').value = data.portfolio.description || '';
        document.getElementById('edit_portfolioImageName').textContent = data.portfolio.portfolioImage
          ? data.portfolio.portfolioImage.split('/').pop()
          : '';
        document.getElementById('editPortfolioModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
      } else {
        alert("Error: " + data.message);
        window.location.href = `${ROOT_URL}/dashboard`;
      }
    })
    .catch(() => {
      alert("Something went wrong fetching the portfolio details.");
      window.location.href = `${ROOT_URL}/dashboard`;
    });
}

function closeEditPortfolioModal() {
  document.getElementById('editPortfolioModal').classList.add('hidden');
  document.body.style.overflow = '';
}

editPortfolioForm.addEventListener('submit', async (event) => {
  event.preventDefault();
  const formData = new FormData(editPortfolioForm);
  formData.append('form_type', 'edit_portfolio_form');
  try {
    const response = await fetch(`${ROOT_URL}/admin/scripts/dashboard/edit-portfolio.php`, {
      method: 'POST',
      body: formData
    });
    const result = await response.json();
    if (result.success) {
      closeEditPortfolioModal();
      window.location.href = `${ROOT_URL}/dashboard`;
    } else {
      alert('Error updating portfolio details.');
      window.location.href = `${ROOT_URL}/dashboard`;
    }
  } catch (error) {
    alert('An unexpected error occurred during submission.');
    console.error('Submission error:', error);
    window.location.href = `${ROOT_URL}/dashboard`;
  }
});
