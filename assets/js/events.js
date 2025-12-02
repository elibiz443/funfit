const upcomingTab = document.getElementById('tabUpcoming');
const pastTab = document.getElementById('tabPast');
const upcomingPanel = document.getElementById('upcomingPanel');
const pastPanel = document.getElementById('pastPanel');

function switchTab(active) {
  if (active === 'upcoming') {
    upcomingPanel.classList.remove('hidden');
    pastPanel.classList.add('hidden');
    upcomingTab.classList.add('text-[#f3d477]', 'border-[#f3d477]');
    upcomingTab.classList.remove('text-stone-400');
    pastTab.classList.add('text-stone-400');
    pastTab.classList.remove('text-[#f3d477]', 'border-[#f3d477]');
  } else {
    pastPanel.classList.remove('hidden');
    upcomingPanel.classList.add('hidden');
    pastTab.classList.add('text-[#f3d477]', 'border-[#f3d477]');
    pastTab.classList.remove('text-stone-400');
    upcomingTab.classList.add('text-stone-400');
    upcomingTab.classList.remove('text-[#f3d477]', 'border-[#f3d477]');
  }
}

upcomingTab.addEventListener('click', () => switchTab('upcoming'));
pastTab.addEventListener('click', () => switchTab('past'));
