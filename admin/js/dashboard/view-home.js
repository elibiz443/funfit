function viewHome(homeId) {
  const modal = document.getElementById('homeModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('homeModalTitle')
  const modalSubtitle = document.getElementById('homeModalSubtitle')
  const modalDescription = document.getElementById('homeModalDescription')
  const modalHero = document.getElementById('homeModalHero')
  const modalLoading = document.getElementById('homeModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalSubtitle.textContent = ''
  modalDescription.textContent = ''
  modalHero.style.backgroundImage = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/dashboard/view-home.php?id=${homeId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        const home = data.home_detail
        modalTitle.textContent = home.title || 'Untitled'
        modalSubtitle.textContent = home.subtitle || ''
        modalDescription.textContent = home.description || ''

        const heroImage = home.heroImage
          ? `${ROOT_URL}/${home.heroImage}`
          : `${ROOT_URL}/images/admin/default-img.webp`

        modalHero.style.backgroundImage = `url('${heroImage}')`
      } else {
        modalTitle.textContent = 'Error'
        modalDescription.textContent = data.message || 'Could not load home detail.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the home detail.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeHomeModal()
    }
  }, { once: true })
}

function closeHomeModal() {
  const modal = document.getElementById('homeModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}