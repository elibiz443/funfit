document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const nav = document.querySelector("nav");
  const wrapper = document.getElementById("wrapper");
  const logo = document.getElementById("logo");
  const ctaTop = document.getElementById("ctaTop");
  const headerHeight = header.offsetHeight || 100;

  // --- Sticky header on scroll ---
  window.addEventListener("scroll", () => {
    if (window.scrollY > headerHeight) {
      nav.classList.replace("text-md", "text-sm");
      wrapper.classList.replace("h-16", "h-12");
      logo.classList.replace("scale-90", "scale-70");
      ctaTop.classList.replace("scale-90", "scale-70");
      header.classList.add("sticky", "top-0", "left-0", "shadow-md", "shadow-gray-900");
    } else {
      nav.classList.replace("text-sm", "text-md");
      wrapper.classList.replace("h-12", "h-16");
      logo.classList.replace("scale-70", "scale-90");
      ctaTop.classList.replace("scale-70", "scale-90");
      header.classList.remove("sticky", "top-0", "left-0", "shadow-md", "shadow-gray-900");
    }
  });

  // Mobile Sidebar Menu
  const menuToggle = document.getElementById("menuToggle");
  const closeMenu = document.getElementById("closeMenu");
  const mobileMenu = document.getElementById("mobileMenu");
  const sidebarBackdrop = document.getElementById("sidebar-backdrop");
  const sidebarLinks = mobileMenu ? mobileMenu.querySelectorAll("a") : [];

  function openSidebar() {
    mobileMenu.classList.remove("translate-x-full");
    mobileMenu.classList.add("translate-x-0");
    sidebarBackdrop.classList.remove("hidden");
    document.body.classList.add("overflow-hidden");
  }

  function closeSidebar() {
    mobileMenu.classList.remove("translate-x-0");
    mobileMenu.classList.add("translate-x-full");
    sidebarBackdrop.classList.add("hidden");
    document.body.classList.remove("overflow-hidden");
  }

  if (menuToggle) {
    menuToggle.addEventListener("click", openSidebar);
  }
  if (closeMenu) {
    closeMenu.addEventListener("click", closeSidebar);
  }
  if (sidebarBackdrop) {
    sidebarBackdrop.addEventListener("click", closeSidebar);
  }

  // Close sidebar on link click
  sidebarLinks.forEach(link => {
    link.addEventListener("click", closeSidebar);
  });
});
