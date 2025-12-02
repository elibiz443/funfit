document.addEventListener("DOMContentLoaded", function () {
  const images = [...document.querySelectorAll(".gallery-image")];
  const perPage = 25;
  let currentPage = 1;
  const totalPages = Math.ceil(images.length / perPage);

  const prevBtn = document.getElementById("prevPage");
  const nextBtn = document.getElementById("nextPage");
  const indicator = document.getElementById("pageIndicator");

  function showPage(page) {
    images.forEach((img, i) => {
      const parent = img.closest(".group");
      parent.style.display = (i >= (page - 1) * perPage && i < page * perPage) ? "inline-block" : "none";
    });
    indicator.textContent = `Page ${page} of ${totalPages}`;
    prevBtn.disabled = page === 1;
    nextBtn.disabled = page === totalPages;
  }

  prevBtn.addEventListener("click", () => { if (currentPage > 1) showPage(--currentPage); });
  nextBtn.addEventListener("click", () => { if (currentPage < totalPages) showPage(++currentPage); });
  showPage(currentPage);

  // Modal functionality
  const modal = document.getElementById("galleryModal");
  const modalImg = document.getElementById("modalImage");
  const closeModal = document.getElementById("closeModal");
  const prevImage = document.getElementById("prevImage");
  const nextImage = document.getElementById("nextImage");
  let currentImageIndex = 0;

  function openModal(index) {
    modal.classList.remove("hidden");
    modalImg.src = images[index].src;
    currentImageIndex = index;
    document.body.style.overflow = "hidden";
  }

  function closeModalFn() {
    modal.classList.add("hidden");
    document.body.style.overflow = "";
  }

  images.forEach((img, index) => {
    img.addEventListener("click", () => openModal(index));
  });

  closeModal.addEventListener("click", closeModalFn);
  modal.addEventListener("click", (e) => { if (e.target === modal) closeModalFn(); });
  prevImage.addEventListener("click", () => {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    modalImg.src = images[currentImageIndex].src;
  });
  nextImage.addEventListener("click", () => {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    modalImg.src = images[currentImageIndex].src;
  });
});
