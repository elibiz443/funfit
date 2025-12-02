function viewProject(projectId) {
  const modal = document.getElementById('projectModal')
  const modalInner = modal.querySelector('.relative')
  const modalTitle = document.getElementById('projectModalTitle')
  const modalDescription = document.getElementById('projectModalDescription')
  const modalThumbnail = document.getElementById('projectModalThumbnail')
  const modalVideoWrapper = document.getElementById('projectModalVideoWrapper')
  const modalVideo = document.getElementById('projectModalVideo')
  const modalIframe = document.getElementById('projectModalIframe')
  const modalLoading = document.getElementById('projectModalLoading')
  const playButton = document.getElementById('projectPlayButton')

  modal.classList.remove('hidden')
  document.body.classList.add('overflow-hidden')

  modalTitle.textContent = 'Loading...'
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

  fetch(`${ROOT_URL}/admin/scripts/projects/view.php?id=${projectId}`)
    .then(res => res.json())
    .then(data => {
      modalLoading.classList.add('hidden')
      if (data.success) {
        modalTitle.textContent = data.project.title
        modalDescription.textContent = data.project.description || ''

        const thumbnail = data.project.thumbnail
          ? `${ROOT_URL}/${data.project.thumbnail}`
          : `${ROOT_URL}/images/admin/default-img.webp`

        modalThumbnail.src = thumbnail

        if (data.project.videoUrl) {
          modalVideoWrapper.classList.remove('hidden')
          const videoUrl = data.project.videoUrl.trim()

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
        modalDescription.textContent = data.message || 'Could not load project details.'
      }
    })
    .catch(() => {
      modalLoading.classList.add('hidden')
      modalTitle.textContent = 'Error'
      modalDescription.textContent = 'Something went wrong fetching the project.'
    })

  modal.addEventListener('click', e => {
    if (!modalInner.contains(e.target)) {
      closeProjectModal()
    }
  }, { once: true })
}

function closeProjectModal() {
  const modal = document.getElementById('projectModal')
  modal.classList.add('hidden')
  document.body.classList.remove('overflow-hidden')
  const modalVideo = document.getElementById('projectModalVideo')
  const modalIframe = document.getElementById('projectModalIframe')
  modalVideo.pause()
  modalVideo.src = ''
  modalIframe.src = ''
}