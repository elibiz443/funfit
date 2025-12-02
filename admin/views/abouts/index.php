<?php
  require __DIR__ . '/../../helpers/online_connector.php';
  require __DIR__ . '/../../scripts/abouts/admin_index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - About</title>
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
</head>
<body class="bg-gray-50 max-w-full overflow-x-hidden text-neutral-900">
  <?php include '../includes/abouts-sidebar.php'; ?>
  <?php require __DIR__ . '/../includes/message.php'; ?>

  <main id="mainContent" class="min-h-screen w-[calc(100%-5rem)] ml-auto flex-1 flex flex-col overflow-hidden transition-all duration-900 ease-in-out" style="background-image: url('<?php echo ROOT_URL; ?>/images/admin/dashboard.webp');">
    <?php include '../includes/header.php'; ?>

    <div class="h-[20rem] w-[96%] mx-auto bg-gradient-to-r from-cyan-600 to-teal-800 rounded-xl mt-24 p-6 relative z-10 shadow-lg shadow-neutral-800">
      <div class="text-white flex justify-between items-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24" fill="currentColor">
            <path d="M144 336C144 288.7 109.8 249.4 64.8 241.5C72 177.6 126.2 128 192 128L448 128C513.8 128 568 177.6 575.2 241.5C530.2 249.5 496 288.7 496 336L496 368L144 368L144 336zM0 448L0 336C0 309.5 21.5 288 48 288C74.5 288 96 309.5 96 336L96 416L544 416L544 336C544 309.5 565.5 288 592 288C618.5 288 640 309.5 640 336L640 448C640 483.3 611.3 512 576 512L64 512C28.7 512 0 483.3 0 448z"/>
          </svg>
          <p class="text-[1.2rem] mt-2">About Wisehart</p>
        </div>
      </div>
    </div>

    <div class="bg-white relative z-20 w-[90%] mx-auto rounded-lg -mt-[10rem] lg:-mt-[13rem] mb-[6rem] shadow-lg shadow-neutral-800 border border-neutral-400">
      <div class="w-full py-3 px-10 bg-gradient-to-r from-teal-700 to-cyan-700 text-white font-semibold rounded-t-lg">
        <p>About Information</p>
      </div>

      <div class="px-6 pt-6 pb-10 grid grid-cols-1 gap-6">
        <?php if (!empty($abouts)): ?>
          <?php foreach ($abouts as $about): ?>
            <div class="bg-white p-6 my-10 rounded-xl shadow-lg shadow-neutral-400 hover:shadow-neutral-400/50 border border-neutral-300 relative group min-h-[20rem] overflow-hidden transition-all duration-500 ease-in-out">
              <div class="flex items-start mb-2 md:mb-4 pr-32 md:mt-10">
                <h3 class="text-md md:text-lg md:text-xl font-extrabold text-neutral-800"><?= htmlspecialchars($about['title']) ?></h3>
              </div>

              <p class="text-xs md:text-sm font-normal text-gray-600 mb-20 md:mb-6 break-words pr-32 md:pr-52">
                <?= htmlspecialchars($about['description']) ?>
              </p>

              <div class="flex flex-col items-end absolute top-5 right-5 h-full">
                <div class="flex-shrink-0 size-30 mt-6 overflow-hidden shadow-xl shadow-neutral-800 hover:shadow-md border-4 border-white rounded-xl">
                  <img src="<?= htmlspecialchars(ROOT_URL . ($about['aboutImage'] ?? '/images/admin/default-img.webp')) ?>" class="cursor-pointer relative z-10 w-full h-full object-cover hover:scale-120 transition-all duration-700 ease-in-out" alt="Service Thumbnail" onclick="openImageModal('<?= htmlspecialchars(ROOT_URL . ($about['aboutImage'] ?? '/images/admin/default-img.webp')) ?>')">
                </div>

                <div class="mt-10">
                  <button onclick="editAbout(<?= htmlspecialchars($about['id']) ?>)" class="flex items-center text-gray-800 text-xs md:text-sm cursor-pointer px-2 md:px-4 py-1 md:py-2 rounded-md bg-yellow-600 hover:bg-gray-200 shadow-lg shadow-neutral-800 hover:shadow-md transition-all duration-600 ease-in-out">
                    Edit Detail
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-white text-center bg-teal-600 my-24 py-2 rounded-md shadow-md shadow-gray-900 w-[60%] mx-auto">No service found.</p>
        <?php endif; ?>
      </div>
    </div>
  </main>

  <?php include 'edit.php'; ?>
  <?php include '../includes/image.php'; ?>
  <?php include '../includes/footer.php'; ?>

  <script>const ROOT_URL = "<?php echo ROOT_URL; ?>";</script>

  <script src="<?php echo ROOT_URL; ?>/admin/js/sidebar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dropdown.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/message-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/image-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/about/edit-modal.js"></script>
</body>
</html>
