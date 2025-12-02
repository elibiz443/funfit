<?php
  require __DIR__ . '/../../helpers/online_connector.php';
  require __DIR__ . '/../../scripts/gallery/admin_index.php';
  require __DIR__ . '/../../scripts/gallery/create.php';
  require __DIR__ . '/../../scripts/gallery/search.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - Gallery</title>
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
</head>
<body class="bg-gray-100 max-w-full overflow-x-hidden text-neutral-900">
  <?php include '../includes/gallery-sidebar.php'; ?>
  <?php require __DIR__ . '/../includes/message.php'; ?>

  <main id="mainContent" class="min-h-screen w-[calc(100%-5rem)] ml-auto flex-1 flex flex-col overflow-hidden transition-all duration-900 ease-in-out" style="background-image: url('<?php echo ROOT_URL; ?>/images/admin/dashboard.webp');">
    <?php include '../includes/header.php'; ?>

    <div class="h-[20rem] w-[96%] mx-auto bg-gradient-to-r from-neutral-500 to-sky-800 rounded-xl mt-24 p-6 relative z-10 shadow-lg shadow-neutral-800">
      <div class="text-white flex justify-between items-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24" fill="currentColor">
            <path d="M64 480L64 272L200.2 272C213.7 251.8 232.2 235.2 253.9 224L64 224L64 189.7C64 154.4 92.7 125.7 128 125.7L128.1 125.7C129.3 109.1 143.1 96 160 96L192 96C208.9 96 222.7 109.1 223.9 125.7L256 125.7L307.2 101.9C315.6 98 324.8 95.9 334.1 95.9L512 96C547.3 96 576 124.7 576 160L576 224L386 224C407.7 235.2 426.2 251.8 439.7 272L575.9 272L575.9 480C575.9 515.3 547.2 544 511.9 544L128 544C92.7 544 64 515.3 64 480zM320 256C284.9 254.9 252.1 272.9 234.2 303.1C216.3 333.3 216.3 370.8 234.2 401C252.1 431.2 284.9 449.2 320 448.1C355.1 449.2 387.9 431.2 405.8 401C423.7 370.8 423.7 333.3 405.8 303.1C387.9 272.9 355.1 254.9 320 256z"/>
          </svg>
          <p class="text-[1.2rem] mt-2">Wisehart Gallery</p>
        </div>
        <div>
          <form method="GET" action="" class="relative w-full max-w-md">
            <input type="text" name="search" value="<?= htmlspecialchars($searchTerm) ?>" placeholder="Search..." class="w-full px-4 pr-10 py-2 rounded-full focus:outline-none border border-sky-400 shadow-sm focus:shadow-lg shadow-neutral-800 placeholder-neutral-300" />
            <button type="submit" class="absolute inset-y-0 right-3 flex items-center text-neutral-300">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M15 10a5 5 0 1 0-10 0 5 5 0 0 0 10 0z"></path>
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>

    <div class="bg-white relative z-20 w-[90%] mx-auto rounded-lg -mt-[10rem] lg:-mt-[13rem] mb-[6rem] shadow-lg shadow-neutral-800 border border-neutral-400">
      <div class="w-full py-3 px-10 bg-gradient-to-r from-neutral-700 to-sky-700 text-white font-semibold rounded-t-lg">
        <p>All Gallery Items</p>
      </div>

      <div class="flex space-x-4 absolute z-[90] right-12 top-[1.6rem] rounded-xl">
        <button id="openGalleryModal" class="group relative cursor-pointer flex items-center justify-center bg-green-600 text-green-200 w-10 h-10 rounded-lg shadow-md shadow-green-800 hover:shadow-lg transition-all duration-700 ease-in-out">
          <div class="hidden absolute left-1/2 transform -translate-x-1/2 w-[6rem] -top-[2.6rem] py-1.5 bg-yellow-500 text-center text-sm text-yellow-900 rounded-md shadow-md shadow-yellow-900 group-hover:block transition-all duration-900 ease-in-out">
            <div class="bg-yellow-500 w-full relative z-10">Add Image</div>
            <div class="bg-yellow-500 size-3 absolute left-1/2 transform -translate-x-1/2 -bottom-[0.3rem] rotate-[45deg] z-0"></div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  width="16" height="16" fill="currentColor">
            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
          </svg>
        </button>
        <button onclick="deleteSelectedGallery()" class="group relative cursor-pointer flex items-center justify-center bg-red-600 text-red-200 w-10 h-10 rounded-lg shadow-md shadow-red-800 hover:shadow-lg transition-all duration-700 ease-in-out">
          <div class="hidden absolute left-1/2 transform -translate-x-1/2 w-[8rem] -top-[2.6rem] py-1.5 bg-yellow-500 text-center text-sm text-yellow-900 rounded-md shadow-md shadow-yellow-900 group-hover:block transition-all duration-900 ease-in-out">
            <div class="bg-yellow-500 w-full relative z-10">Delete Selected</div>
            <div class="bg-yellow-500 size-3 absolute left-1/2 transform -translate-x-1/2 -bottom-[0.3rem] rotate-[45deg] z-0"></div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" fill="currentColor">
            <path d="M170.5 51.6L151.5 80l145 0-19-28.4c-1.5-2.2-4-3.6-6.7-3.6l-93.7 0c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80 368 80l48 0 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-8 0 0 304c0 44.2-35.8 80-80 80l-224 0c-44.2 0-80-35.8-80-80l0-304-8 0c-13.3 0-24-10.7-24-24S10.7 80 24 80l8 0 48 0 13.8 0 36.7-55.1C140.9 9.4 158.4 0 177.1 0l93.7 0c18.7 0 36.2 9.4 46.6 24.9zM80 128l0 304c0 17.7 14.3 32 32 32l224 0c17.7 0 32-14.3 32-32l0-304L80 128z"/>
          </svg>
        </button>
      </div>

      <div class="px-6 pt-6 pb-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (!empty($gallery)): ?>
          <?php foreach ($gallery as $item): ?>
            <div class="bg-white p-4 rounded-xl shadow-lg shadow-neutral-400 hover:shadow-neutral-400/50 border border-neutral-300 relative group h-[18rem] transition-all duration-500 ease-in-out overflow-hidden">
              <label class="cursor-pointer select-none opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out absolute top-3 left-3 z-20">
                <input type="checkbox" id="gallery-select-<?= htmlspecialchars($item['id']) ?>" name="gallery-select[]" value="<?= htmlspecialchars($item['id']) ?>" class="hidden peer/selected">
                <span class="w-5 h-5 text-white inline-block border-2 border-gray-400 rounded-md peer-checked/selected:border-orange-500 peer-checked/selected:bg-orange-500 flex items-center justify-center transition-all duration-300 ease-in-out">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4">
                    <path d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z"/>
                  </svg>
                </span>
              </label>
              <img src="<?= htmlspecialchars(ROOT_URL . ($item['img_link'] ?? '/images/admin/default-img.webp')) ?>" class="w-full h-full object-cover rounded-xl cursor-pointer hover:scale-110 transition-all duration-700 ease-in-out" alt="Gallery Image" onclick="openImageModal('<?= htmlspecialchars(ROOT_URL . ($item['img_link'] ?? '/images/admin/default-img.webp')) ?>')">
              <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out flex flex-col items-center justify-center text-white z-10">
                <h3 class="text-md font-semibold px-2"><?= htmlspecialchars($item['title']) ?></h3>
                <h4 class="text-md mb-4 flex items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="20" height="20" fill="currentColor" class="mr-2">
                    <path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152l0 270.8c0 9.8-6 18.6-15.1 22.3L416 503l0-302.6zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6l0 251.4L32.9 502.7C17.1 509 0 497.4 0 480.4L0 209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77l0 249.3L192 449.4 192 255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                  </svg>
                  <?= htmlspecialchars($item['location']) ?>
                </h4>
                <div class="flex space-x-3">
                  <button onclick="viewGallery(<?= htmlspecialchars($item['id']) ?>)" class="cursor-pointer bg-green-100 text-green-800 rounded-full p-2 hover:bg-green-200 transition-all duration-300 ease-in-out" title="View Image">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-5 w-5" fill="currentColor">
                      <path d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z"/>
                    </svg>
                  </button>
                  <button onclick="editGallery(<?= htmlspecialchars($item['id']) ?>)" class="cursor-pointer bg-indigo-100 text-indigo-800 rounded-full p-2 hover:bg-indigo-200 transition-all duration-300 ease-in-out" title="Edit Image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"/><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"/></svg>
                  </button>
                  <button onclick="openDeleteModal(<?= htmlspecialchars($item['id']) ?>, '<?php echo ROOT_URL; ?>/admin/scripts/gallery/delete.php')" class="cursor-pointer bg-red-100 text-red-700 rounded-full p-2 hover:bg-red-200 transition-all duration-300 ease-in-out" title="Delete Image">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 7a1 1 0 011 1v8a1 1 0 11-2 0V8a1 1 0 011-1zm6 0a1 1 0 011 1v8a1 1 0 11-2 0V8a1 1 0 011-1z" clip-rule="evenodd"/></svg>
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-white text-center bg-indigo-600 py-2 shadow-md shadow-gray-900 w-[60%] mx-auto">No image found.</p>
        <?php endif; ?>
      </div>

      <?php include '../includes/pagination.php'; ?>
    </div>
  </main>

  <?php include 'create.php'; ?>
  <?php include 'edit.php'; ?>
  <?php include 'view.php'; ?>
  <?php include '../includes/delete.php'; ?>
  <?php include '../includes/footer.php'; ?>

  <script>const ROOT_URL = "<?php echo ROOT_URL; ?>";</script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/sidebar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dropdown.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/message-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/gallery/add-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/gallery/edit-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/gallery/view-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/gallery/delete-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/gallery/delete-bulk.js"></script>
</body>
</html>
