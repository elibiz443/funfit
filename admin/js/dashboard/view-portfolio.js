function viewPortfolio(portfolioId) {
  const modal = document.getElementById('portfolioModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('portfolioModalTitle')
  const modalDescription = document.getElementById('portfolioModalDescription')
  const modalHero = document.getElementById('portfolioModalHero')
  const modalLoading = document.getElementById('portfolioModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalDescription.textContent = ''
  modalHero.style.backgroundImage = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/dashboard/view-portfolio.php?id=${portfolioId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        const portfolio = data.portfolio
        modalTitle.textContent = portfolio.title || 'Untitled Portfolio'
        modalDescription.textContent = portfolio.description || ''
        const heroImage = portfolio.portfolioImage
          ? `${ROOT_URL}/${portfolio.portfolioImage}`
          : `${ROOT_URL}/images/admin/default-img.webp`
        modalHero.style.backgroundImage = `url('${heroImage}')`
      } else {
        modalTitle.textContent = 'Error'
        modalDescription.textContent = data.message || 'Could not load portfolio details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the portfolio detail.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closePortfolioModal()
    }
  }, { once: true })
}

function closePortfolioModal() {
  const modal = document.getElementById('portfolioModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}