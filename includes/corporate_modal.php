<div id="corporateModal" class="fixed z-[999] inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center opacity-0 pointer-events-none transition-all duration-700 ease-in-out">
  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden transform scale-95 transition-all duration-700 ease-in-out" id="corporateBox">
    <div class="bg-[#1c1c1c] px-6 py-4 flex justify-between items-center">
      <h3 class="font-['Bebas_Neue'] text-3xl text-[#c6a56a] tracking-wide">Corporate & Group Plans</h3>
      <button id="closeCorporate" class="cursor-pointer text-neutral-200 text-3xl hover:text-yellow-500 transition-all duration-500 ease-in-out">&times;</button>
    </div>
    <div class="p-6 space-y-5 font-['Roboto']">
      <div class="grid grid-cols-2 gap-2">
        <div>
          <label class="block text-sm font-bold mb-1">Company / Group Name</label>
          <input type="text" class="w-full border border-neutral-400 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#c6a56a]">
        </div>
        <div>
          <label class="block text-sm font-bold mb-1">Contact Email</label>
          <input type="email" class="w-full border border-neutral-400 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#c6a56a]">
        </div>
      </div>

      <div class="grid grid-cols-3 gap-2">
        <div>
          <label class="block text-sm font-bold mb-1">Select Service</label>
          <select class="w-full border border-neutral-400 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#c6a56a]">
            <option>Team Building</option>
            <option>Training Sessions</option>
            <option>Corporate Bootcamp</option>
            <option>Community Bootcamp</option>
            <option>Private Team Cohort</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-bold mb-1">Participants</label>
          <select class="w-full border border-neutral-400 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#c6a56a]">
            <option>5 - 10</option>
            <option>10 - 20</option>
            <option>20 - 40</option>
            <option>40+</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-bold mb-1">Preferred Date</label>
          <input type="date" class="w-full border border-neutral-400 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-[#c6a56a]">
        </div>
      </div>

      <div>
        <label class="block text-sm font-bold mb-1">Extra Details</label>
        <textarea class="w-full border border-neutral-400 rounded-xl px-4 py-2 h-28 resize-none focus:outline-none focus:ring-2 focus:ring-[#c6a56a]"></textarea>
      </div>
      <button class="cursor-pointer w-full bg-[#c6a56a] text-[#1c1c1c] py-3 rounded-2xl font-['Bebas_Neue'] text-2xl shadow-md shadow-neutral-700 hover:scale-[1.02] transition-all duration-500 ease-in-out">
        Select
      </button>
    </div>
  </div>
</div>
