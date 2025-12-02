document.addEventListener("DOMContentLoaded", () => {
  const messageModal = document.getElementById("messageModal");

  if (messageModal) {
    messageModal.classList.remove("hidden");

    setTimeout(() => {
      messageModal.classList.add("opacity-0");
      setTimeout(() => messageModal.classList.add("hidden"), 500);
    }, 4000);
  }
});
