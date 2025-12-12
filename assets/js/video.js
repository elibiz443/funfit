const tabImages = document.getElementById("tabImages");
const tabVideos = document.getElementById("tabVideos");
const imagesSection = document.getElementById("imagesSection");
const videosSection = document.getElementById("videosSection");

tabImages.onclick = () => {
  imagesSection.classList.remove("hidden");
  videosSection.classList.add("hidden");
  tabImages.classList.add("bg-black/40");
  tabImages.classList.remove("bg-black/20");
  tabVideos.classList.add("bg-black/20");
  tabVideos.classList.remove("bg-black/40");
};

tabVideos.onclick = () => {
  videosSection.classList.remove("hidden");
  imagesSection.classList.add("hidden");
  tabVideos.classList.add("bg-black/40");
  tabVideos.classList.remove("bg-black/20");
  tabImages.classList.add("bg-black/20");
  tabImages.classList.remove("bg-black/40");
};

const videoModal = document.getElementById("videoModal");
const videoPlayer = document.getElementById("videoPlayer");
const closeVideoModal = document.getElementById("closeVideoModal");

document.querySelectorAll("[data-video-id]").forEach(card => {
  card.addEventListener("click", () => {
    const vid = card.getAttribute("data-video-id");
    videoPlayer.src = "https://www.youtube.com/embed/" + vid + "?autoplay=1";
    videoModal.classList.remove("hidden");
  });
});

closeVideoModal.onclick = () => {
  videoModal.classList.add("hidden");
  videoPlayer.src = "";
};

videoModal.onclick = (e) => {
  if (e.target === videoModal) {
    videoModal.classList.add("hidden");
    videoPlayer.src = "";
  }
};
