<div id="editPortfolioModal" class="hidden fixed z-[999] text-sm inset-0 bg-black/70 flex items-center justify-center">
  <div class="glass-bg-color2 p-6 lg:p-10 rounded-xl border border-gray-400 shadow-2xl shadow-gray-900 w-[96%] md:w-[88%] lg:w-[74%]">
    <h2 class="text-xl text-white font-semibold mb-4">Edit Portfolio</h2>
    <form method="POST" action="<?= ROOT_URL ?>/admin/scripts/dashboard/edit-portfolio.php" enctype="multipart/form-data" id="editPortfolioForm">
      <input type="hidden" name="form_type" value="edit_portfolio_form">
      <input type="hidden" name="portfolio_id" id="edit_portfolio_id" value="<?= $portfolio['id'] ?>">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
        <div class="md:col-span-2">
          <input type="text" id="edit_portfolio_title" name="title"
            class="w-full px-3 py-2 border-b border-white focus:outline-none focus:border-yellow-600 text-white placeholder-gray-300"
            placeholder="Portfolio Title" value="<?= htmlspecialchars($portfolio['title']) ?>">
        </div>

        <div>
          <div class="w-full px-3 py-[0.4rem] flex items-center justify-between bg-transparent border-b border-white text-gray-300">
            <label for="edit_portfolioImage" class="cursor-pointer">🖼️ - Upload Portfolio Image</label>
            <span id="edit_portfolioImageName" class="ml-2 truncate text-yellow-500"><?= basename($portfolio['portfolioImage']) ?></span>
            <input id="edit_portfolioImage" name="portfolioImage" type="file" class="hidden">
          </div>
        </div>

        <div class="md:col-span-2">
          <textarea id="edit_portfolio_description" name="description" rows="4"
            class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 placeholder-gray-300"
            placeholder="Enter Portfolio Description"><?= htmlspecialchars($portfolio['description']) ?></textarea>
        </div>
      </div>

      <div class="flex justify-end mt-5">
        <button type="button" onclick="closeEditPortfolioModal()" class="px-4 py-2 cursor-pointer mr-2 bg-gray-300 hover:bg-gray-700 hover:text-white rounded transition-all">
          Cancel
        </button>
        <button type="submit" name="update_portfolio"
          class="px-4 py-2 cursor-pointer bg-yellow-600 hover:bg-yellow-800 text-white rounded transition-all">
          Update Portfolio
        </button>
      </div>
    </form>
  </div>
</div>
