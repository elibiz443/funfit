<section class="relative w-full py-16 bg-gradient-to-br from-[#f3d477]/20 via-[#daaa4a]/50 to-[#1c1c1c]">
  <div class="absolute inset-0 bg-cover" style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/patterns/texture3.webp')"></div>
  <div class="max-w-6xl relative z-10 mx-auto px-4 sm:px-6 lg:px-8">
    <h3 class="font-['Bebas_Neue'] text-4xl text-[#1c1c1c]">Community Experience</h3>
    <p class="font-['Roboto'] text-base mt-4 leading-relaxed text-[#333333]">
      Functional Fitness is more than sessions — it’s a network. Members join training pods, participate in monthly challenges, and attend socials that turn colleagues into allies. Our approach blends physical progression with social rituals that keep people coming back and supporting one another.
    </p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
      <div class="space-y-4">
        <div class="p-6 rounded-2xl bg-stone-200 shadow-md shadow-stone-600 hover:shadow-xl transition-all duration-500 ease-in-out">
          <h4 class="font-['Bebas_Neue'] text-2xl text-[#1c1c1c]">Member Stories</h4>
          <p class="font-['Roboto'] text-sm mt-2">“Our sales team got fitter and closer — productivity improved and the office vibe changed for the better.”</p>
        </div>
        <div class="p-6 rounded-2xl bg-stone-200 shadow-md shadow-stone-600 hover:shadow-xl transition-all duration-500 ease-in-out">
          <h4 class="font-['Bebas_Neue'] text-2xl text-[#1c1c1c]">Community Events</h4>
          <p class="font-['Roboto'] text-sm mt-2">Monthly charity workouts, trail days and team competitions keep the community active beyond the gym.</p>
        </div>
      </div>

      <div class="p-6 rounded-2xl bg-stone-200 shadow-inner shadow-stone-400 hover:scale-[1.01] transition-all duration-500 ease-in-out">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#1c1c1c]">Get Involved</h4>
        <ul class="font-['Roboto'] text-sm mt-3 space-y-2">
          <li>Join a public bootcamp and meet teammates from other companies</li>
          <li>Book a bespoke team-building day for immersive group growth</li>
          <li>Sign your company up for a weekly corporate cohort</li>
          <li>Invite a teammate and receive a referral session</li>
        </ul>
        <a href="<?php echo ROOT_URL; ?>/abouts"
          class="mt-4 inline-block bg-[#c6a56a] text-[#1c1c1c] font-['Bebas_Neue'] px-4 py-3 rounded-2xl shadow-lg hover:scale-105 hover:shadow-xl shadow-stone-600 transition-all duration-500 ease-in-out">
          Learn About Us
        </a>
      </div>
    </div>
  </div>
</section>

<section class="relative w-full py-16 bg-[#1c1c1c] text-[#eff2f1]">
  <div class="max-w-6xl mx-auto px-6">
    <div class="text-center mb-10">
      <h3 class="font-['Bebas_Neue'] text-4xl tracking-wide text-[#daaa4a]">Community Events</h3>
      <p class="font-['Roboto'] text-sm mt-3 text-stone-300">Stay connected, past & future. Select a tab to explore.</p>
    </div>

    <div class="flex justify-center items-center gap-6 border-b border-stone-700 pb-4 mb-8">
      <button id="tabUpcoming"
        class="tab-btn font-['Bebas_Neue'] text-xl text-[#f3d477] border-b-2 border-[#f3d477] pb-2 transition-all">
        Upcoming Events
      </button>
      <button id="tabPast"
        class="tab-btn font-['Bebas_Neue'] text-xl text-stone-400 hover:text-stone-200 pb-2 transition-all">
        Past Events
      </button>
    </div>

    <div id="upcomingPanel" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-panel">
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#daaa4a]/20 shadow-lg hover:shadow-2xl transition-all duration-500">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#daaa4a]">December Charity WOD</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-400">Dec 10, 2025 · 5:30 PM</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-200 leading-relaxed">A high-energy partner workout supporting local shelters. Sweat for a cause.</p>
      </div>
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#daaa4a]/20 shadow-lg hover:shadow-2xl transition-all duration-500">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#daaa4a]">New Year Team Burn</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-400">Jan 05, 2026 · 6:00 AM</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-200 leading-relaxed">Start the year as a squad. 60 min of HIIT, cycling & grit. Breakfast hang after.</p>
      </div>
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#daaa4a]/20 shadow-lg hover:shadow-2xl transition-all duration-500">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#daaa4a]">Trail Day Mix-Up</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-400">Feb 22, 2026 · 7:00 AM</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-200 leading-relaxed">Outdoor adventure + mobility drills. Connect with nature & community.</p>
      </div>
    </div>

    <div id="pastPanel" class="hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 fade-panel">
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#c6a56a]/20 shadow-md opacity-90">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#c6a56a]">Summer Showdown</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-500">Aug 14, 2025</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-300">Teams competed in relay WODs, bike duels, and recovery challenges.</p>
      </div>
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#c6a56a]/20 shadow-md opacity-90">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#c6a56a]">Mountain Mobility Day</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-500">Jun 02, 2025</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-300">Guided stretches, cold plunge, breathwork, and a sunrise hike.</p>
      </div>
      <div class="p-6 rounded-2xl bg-stone-800/80 border border-[#c6a56a]/20 shadow-md opacity-90">
        <h4 class="font-['Bebas_Neue'] text-2xl text-[#c6a56a]">April Allies Social</h4>
        <p class="font-['Roboto'] text-xs mt-2 uppercase text-stone-500">Apr 28, 2025</p>
        <p class="font-['Roboto'] text-sm mt-4 text-stone-300">Recovery mocktails, networking, and community awards night.</p>
      </div>
    </div>
  </div>
</section>

<section class="relative py-20 bg-gradient-to-bl from-neutral-400/90 via-[#f3d477]/40 to-[#daaa4a]/70">
  <div class="absolute inset-0 bg-cover" style="background-image: url('<?php echo ROOT_URL; ?>/assets/images/patterns/texture3.webp')"></div>
  <div class="max-w-6xl relative z-10 mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h4 class="font-['Bebas_Neue'] text-3xl text-[#1c1c1c]">Ready to level up your team?</h4>
      <p class="font-['Roboto'] text-base mt-3 text-[#333333]">Contact us for a free consultation and tailored proposal — we’ll map the perfect plan so your team trains smarter, together.</p>
      <div class="mt-6 flex justify-center gap-4">
        <a href="<?php echo ROOT_URL; ?>/contacts"
          class="inline-block border-2 border-transparent bg-[#c6a56a] text-[#1c1c1c] font-['Bebas_Neue'] px-6 py-3 rounded-2xl shadow-lg shadow-stone-600 hover:scale-105 transition-all duration-500 ease-in-out">
          Request Consultation
        </a>
        <a href="<?php echo ROOT_URL; ?>/programs"
          class="inline-block border-2 border-[#1c1c1c] text-[#1c1c1c] font-['Bebas_Neue'] px-6 py-3 rounded-2xl shadow-lg shadow-stone-600 hover:scale-105 transition-all duration-500 ease-in-out">
          View Programs
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  .fade-panel {
    animation: fadeIn 0.6s ease-in-out;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(6px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<script>
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
</script>
