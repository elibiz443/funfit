<!-- Pagination -->
<div class="w-full flex justify-center items-center my-10">
  <div class="bg-gray-300 inline-flex px-4 rounded-lg">
    <?php if ($current_page > 1): ?>
      <a href="?page=<?php echo $current_page - 1; ?>" class="bg-gray-300 hover:bg-slate-700 text-[#36454F] hover:text-white font-bold py-3 px-6">Previous</a>
    <?php endif; ?>
    <?php for ($page = 1; $page <= $totalPages; $page++): ?>
      <a href="?page=<?php echo $page; ?>" class="bg-gray-300 hover:bg-slate-700 text-[#36454F] font-bold py-3 px-6 <?php echo ($page == $current_page) ? 'bg-slate-600 text-white' : 'hover:bg-slate-700 hover:text-white'; ?>">
        <?php echo $page; ?>
      </a>
    <?php endfor; ?>
    <?php if ($current_page < $totalPages): ?>
      <a href="?page=<?php echo $current_page + 1; ?>" class="bg-gray-300 hover:bg-slate-700 text-[#36454F] hover:text-white font-bold py-3 px-6">Next</a>
    <?php endif; ?>
  </div>
</div>
