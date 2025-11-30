document.addEventListener('DOMContentLoaded', () => {
  const track = document.getElementById('carousel-track')
  const slides = Array.from(track.children)
  const dots = Array.from(document.querySelectorAll('#carousel-indicators div'))
  const count = slides.length

  slides.forEach(s => s.classList.add('w-full'))

  const first = track.firstElementChild.cloneNode(true)
  const last = track.lastElementChild.cloneNode(true)
  track.appendChild(first)
  track.insertBefore(last, track.firstElementChild)

  let i = 1
  const realStart = 1
  const realEnd = count
  const slideW = () => track.firstElementChild.getBoundingClientRect().width

  const go = (n) => {
    track.style.transform = `translateX(-${n * slideW()}px)`
  }

  const setDots = (n) => {
    const d = (n - 1 + count) % count
    dots.forEach((dot, x) => {
      dot.classList.toggle('bg-yellow-200', x === d)
      dot.classList.toggle('bg-white/60', x !== d)
    })
  }

  go(i)
  setDots(i)

  setInterval(() => {
    i++
    go(i)
    track.style.transition = 'transform 700ms ease-in-out'
    setDots(i)

    setTimeout(() => {
      if (i > realEnd) {
        i = realStart
        track.style.transition = 'none'
        go(i)
      }
    }, 720)
  }, 10000)

  track.addEventListener('transitionend', () => {
    if (i === 0) {
      i = realEnd
      track.style.transition = 'none'
      go(i)
      setDots(i)
    }
  })

  dots.forEach((dot, x) => {
    dot.addEventListener('click', () => {
      i = x + 1
      track.style.transition = 'transform 700ms ease-in-out'
      go(i)
      setDots(i)
    })
  })

  window.addEventListener('resize', () => go(i))
})
