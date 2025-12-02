function viewService(serviceId) {
  const modal = document.getElementById('serviceModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('serviceModalTitle')
  const modalSubTitle = document.getElementById('serviceModalSubtitle')
  const modalDescription = document.getElementById('serviceModalDescription')
  const modalHero = document.getElementById('serviceModalHero')
  const modalLoading = document.getElementById('serviceModalLoading')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalSubTitle.textContent = 'Loading...'
  modalDescription.textContent = ''
  modalHero.style.backgroundImage = ''
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/dashboard/view-services.php?id=${serviceId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        const service = data.service
        modalTitle.textContent = service.title || 'Untitled Service'
        modalSubTitle.textContent = service.subtitle || ''
        modalDescription.textContent = service.description || ''
        const heroImage = service.heroImage
          ? `${ROOT_URL}/${service.heroImage}`
          : `${ROOT_URL}/images/admin/default-img.webp`
        modalHero.style.backgroundImage = `url('${heroImage}')`
      } else {
        modalTitle.textContent = 'Error'
        modalSubTitle.textContent = 'Error'
        modalDescription.textContent = data.message || 'Could not load service details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalSubTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the service detail.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeServiceHero()
    }
  }, { once: true })
}

function closeServiceHero() {
  const modal = document.getElementById('serviceModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
}