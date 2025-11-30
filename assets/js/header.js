document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header");
  const socials = document.querySelector("#socialMedia");
  const wrapper = document.getElementById("wrapper");
  const logo = document.getElementById("logo");
  const menuToggle = document.getElementById("menuToggle");
  const closeMenu = document.getElementById("closeMenu");
  const mobileMenu = document.getElementById("mobileMenu");
  const sidebarBackdrop = document.getElementById("sidebar-backdrop");
  const sidebarLinks = mobileMenu.querySelectorAll("a, button");

  // ✅ Smooth sticky transition behavior
  window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;
    const scrolledPastHero = scrollY > window.innerHeight * 0.75;

    if (scrollY > 80) {
      wrapper.classList.replace("h-16", "h-12");
      logo.classList.add("scale-75", "hover:scale-80", "border-white");
      logo.classList.remove("hover:scale-105", "border-white/20");
      header.classList.add("backdrop-blur-md", "bg-black/60", "shadow-lg", "shadow-black/40", "fixed", "top-0", "left-0");
      header.classList.remove("bg-gradient-to-r", "from-[#1c1c1c]", "via-[#1c1c1c]/70", "to-[#1c1c1c]/50");
      socials.classList.add("hidden");
    } else {
      wrapper.classList.replace("h-12", "h-16");
      logo.classList.add("hover:scale-105", "border-white/20");
      logo.classList.remove("scale-75", "hover:scale-80", "border-white");
      header.classList.add("bg-gradient-to-r", "from-[#1c1c1c]", "via-[#1c1c1c]/70", "to-[#1c1c1c]/50");
      header.classList.remove("fixed", "shadow-lg", "shadow-black/40");
      socials.classList.remove("hidden");

      // when at top, restore transparency
      if (!scrolledPastHero) {
        header.classList.remove("bg-black/60", "backdrop-blur-md");
      }
    }
  });

  // ✅ Mobile Sidebar Logic
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

  menuToggle.addEventListener("click", openSidebar);
  closeMenu.addEventListener("click", closeSidebar);
  sidebarBackdrop.addEventListener("click", closeSidebar);
  sidebarLinks.forEach(link => link.addEventListener("click", closeSidebar));
});
