document.addEventListener("DOMContentLoaded", function () {
  const scrollMap = {
    programsButton: "programs",
    contactsButton: "contacts",
    programsButton2: "programs",
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
