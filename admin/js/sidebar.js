const slideDiv = document.getElementById('slideDiv');
const toggleSidebar = document.getElementById('toggleSidebar');
const mainContent = document.getElementById('mainContent');
const headerContent = document.getElementById('headerContent');

const iconExpanded = `
  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
  </svg>
`;

const iconMinimized = `
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="22" height="22" fill="currentColor">
    <path d="M0 96C0 78.3 14.3 64 32 64l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 128C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32l384 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 288c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32L32 448c-17.7 0-32-14.3-32-32s14.3-32 32-32l384 0c17.7 0 32 14.3 32 32z"/>
  </svg>
`;

const setSidebarState = () => {
  const isSmallScreen = window.matchMedia('(max-width: 1024px)').matches; // lg breakpoint in Tailwind

  if (isSmallScreen) {
    slideDiv.classList.add('-translate-x-[150%]');
    slideDiv.classList.remove('translate-x-0');

    mainContent.classList.remove('w-[calc(100%-5rem)]');
    headerContent.classList.remove('w-[calc(100%-5rem)]');

    mainContent.classList.add('w-full');
    headerContent.classList.add('w-full');

    toggleSidebar.innerHTML = iconMinimized;
  } else {
    slideDiv.classList.remove('-translate-x-[150%]');
    slideDiv.classList.add('translate-x-0');

    mainContent.classList.add('w-[calc(100%-5rem)]');
    headerContent.classList.add('w-[calc(100%-5rem)]');

    mainContent.classList.remove('w-full');
    headerContent.classList.remove('w-full');
    
    toggleSidebar.innerHTML = iconExpanded;
  }
};

// Set the initial state based on screen size
setSidebarState();

// Update state when resizing
window.addEventListener('resize', setSidebarState);

toggleSidebar.addEventListener('click', function () {
  const isHidden = slideDiv.classList.contains('-translate-x-[150%]');

  if (isHidden) {
    // Show Sidebar
    slideDiv.classList.add('translate-x-0');
    slideDiv.classList.remove('-translate-x-[150%]');

    mainContent.classList.add('w-[calc(100%-5rem)]');
    headerContent.classList.add('w-[calc(100%-5rem)]');

    mainContent.classList.remove('w-full');
    headerContent.classList.remove('w-full');

    toggleSidebar.innerHTML = iconExpanded;
  } else {
    // Hide Sidebar
    slideDiv.classList.remove('translate-x-0');
    slideDiv.classList.add('-translate-x-[150%]');

    mainContent.classList.remove('w-[calc(100%-5rem)]');
    headerContent.classList.remove('w-[calc(100%-5rem)]');

    mainContent.classList.add('w-full');
    headerContent.classList.add('w-full');

    toggleSidebar.innerHTML = iconMinimized;
  }
});
