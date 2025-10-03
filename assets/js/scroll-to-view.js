document.addEventListener("DOMContentLoaded", function () {
  const scrollMap = {
    aboutsButton: "abouts",
    galleryButton: "gallery",
    servicesButton: "services",
    contactsButton: "contacts",

    aboutsButton2: "abouts",
    galleryButton2: "gallery",
    servicesButton2: "services",
    contactsButton2: "contacts",
  };

  Object.entries(scrollMap).forEach(([btnId, targetId]) => {
    const btn = document.getElementById(btnId);
    if (btn) {
      btn.addEventListener("click", function (e) {
        e.preventDefault();
        const section = document.getElementById(targetId);
        section?.scrollIntoView({ behavior: "smooth" });
        history.pushState(null, null, " ");
      });
    }
  });
});
