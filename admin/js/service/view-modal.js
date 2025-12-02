function viewService(serviceId) {
  const modal = document.getElementById('serviceModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('serviceModalTitle')
  const modalSubtitle = document.getElementById('serviceModalSubtitle')
  const modalDescription = document.getElementById('serviceModalDescription')
  const modalThumbnail = document.getElementById('serviceModalThumbnail')
  const modalVideoWrapper = document.getElementById('serviceModalVideoWrapper')
  const modalVideo = document.getElementById('serviceModalVideo')
  const modalIframe = document.getElementById('serviceModalIframe')
  const modalLoading = document.getElementById('serviceModalLoading')
  const playButton = document.getElementById('playButton')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
  modalSubtitle.textContent = ''
  modalDescription.textContent = ''
  modalThumbnail.src = ''
  modalVideo.src = ''
  modalIframe.src = ''
  modalVideoWrapper.classList.add('hidden')
  modalVideo.classList.add('hidden')
  modalIframe.classList.add('hidden')
  playButton.classList.remove('hidden')
  modalThumbnail.classList.remove('hidden')
  modalLoading.classList.remove('hidden')

  fetch(`${ROOT_URL}/admin/scripts/services/view.php?id=${serviceId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        modalTitle.textContent = data.service.title
        modalSubtitle.textContent = data.service.subtitle || ''
        modalDescription.textContent = data.service.description || ''

        const thumbnail = data.service.thumbnail
          ? `${ROOT_URL}/${data.service.thumbnail}`
          : `${ROOT_URL}/images/admin/default-img.webp`

        modalThumbnail.src = thumbnail

        if (data.service.videoUrl) {
          modalVideoWrapper.classList.remove('hidden')
          const videoUrl = data.service.videoUrl.trim()

          if (videoUrl.includes('youtube.com') || videoUrl.includes('youtu.be')) {
            const embedUrl = videoUrl.replace('watch?v=', 'embed/').replace('youtu.be/', 'www.youtube.com/embed/')
            playButton.onclick = () => {
              playButton.classList.add('hidden')
              modalThumbnail.classList.add('hidden')
              modalIframe.classList.remove('hidden')
              modalIframe.src = `${embedUrl}?autoplay=1`
            }
          } else {
            const fullVideoUrl = videoUrl.startsWith('http') ? videoUrl : `${ROOT_URL}/${videoUrl}`
            playButton.onclick = () => {
              playButton.classList.add('hidden')
              modalThumbnail.classList.add('hidden')
              modalVideo.classList.remove('hidden')
              modalVideo.src = fullVideoUrl
              modalVideo.play().catch(() => {})
            }
          }
        } else {
          playButton.classList.add('hidden')
        }
      } else {
        modalTitle.textContent = 'Error'
        modalDescription.textContent = data.message || 'Could not load service details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the service.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeServiceModal()
    }
  }, { once: true })
}

function closeServiceModal() {
  const modal = document.getElementById('serviceModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
  const modalVideo = document.getElementById('serviceModalVideo')
  const modalIframe = document.getElementById('serviceModalIframe')
  modalVideo.pause()
  modalVideo.src = ''
  modalIframe.src = ''
}