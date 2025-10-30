document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header")
  const socials = document.querySelector("#socialMedia")
  const wrapper = document.getElementById("wrapper")
  const closeMenu = document.getElementById("closeMenu")
  const mobileMenu = document.getElementById("mobileMenu")
  const sidebarBackdrop = document.getElementById("sidebar-backdrop")
  const sidebarLinks = mobileMenu.querySelectorAll("a, button")

  window.addEventListener("scroll", () => {
    if (window.scrollY > 80) {
      wrapper.classList.replace("h-16", "h-12")
      header.classList.add("sticky", "top-0", "shadow-md", "shadow-gray-900/50")
      socials.classList.add("hidden")
    } else {
      wrapper.classList.replace("h-12", "h-16")
      header.classList.remove("sticky", "top-0", "shadow-md", "shadow-gray-900/50")
      socials.classList.remove("hidden")
    }
  })

  function openSidebar() {
    mobileMenu.classList.remove("tranneutral-x-full")
    mobileMenu.classList.add("tranneutral-x-0")
    sidebarBackdrop.classList.remove("hidden")
    document.body.classList.add("overflow-hidden")
  }

  function closeSidebar() {
    mobileMenu.classList.remove("tranneutral-x-0")
    mobileMenu.classList.add("tranneutral-x-full")
    sidebarBackdrop.classList.add("hidden")
    document.body.classList.remove("overflow-hidden")
  }

  menuToggle.addEventListener("click", openSidebar)
  closeMenu.addEventListener("click", closeSidebar)
  sidebarBackdrop.addEventListener("click", closeSidebar)
  sidebarLinks.forEach(link => link.addEventListener("click", closeSidebar))
})
