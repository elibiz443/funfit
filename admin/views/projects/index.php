<?php
  require __DIR__ . '/../../helpers/online_connector.php';
  require __DIR__ . '/../../scripts/projects/admin_index.php';
  require __DIR__ . '/../../scripts/projects/create.php';
  require __DIR__ . '/../../scripts/projects/search.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - Projects</title>
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
</head>
<body class="bg-gray-100 max-w-full overflow-x-hidden text-neutral-900">
  <?php include '../includes/projects-sidebar.php'; ?>
  <?php require __DIR__ . '/../includes/message.php'; ?>

  <main id="mainContent" class="min-h-screen w-[calc(100%-5rem)] ml-auto flex-1 flex flex-col overflow-hidden transition-all duration-900 ease-in-out" style="background-image: url('<?php echo ROOT_URL; ?>/images/admin/dashboard.webp');">
    <?php include '../includes/header.php'; ?>

    <div class="h-[20rem] w-[96%] mx-auto bg-gradient-to-r from-teal-800 to-cyan-900 rounded-xl mt-24 p-6 relative z-10 shadow-lg shadow-neutral-800">
      <div class="text-white flex justify-between items-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="24" height="24" fill="currentColor">
            <path d="M264 112L376 112C380.4 112 384 115.6 384 120L384 160L256 160L256 120C256 115.6 259.6 112 264 112zM208 120L208 160L128 160C92.7 160 64 188.7 64 224L64 320L576 320L576 224C576 188.7 547.3 160 512 160L432 160L432 120C432 89.1 406.9 64 376 64L264 64C233.1 64 208 89.1 208 120zM576 368L384 368L384 384C384 401.7 369.7 416 352 416L288 416C270.3 416 256 401.7 256 384L256 368L64 368L64 480C64 515.3 92.7 544 128 544L512 544C547.3 544 576 515.3 576 480L576 368z"/>
          </svg>
          <p class="text-[1.2rem] mt-2">Wisehart Projects</p>
        </div>
        <div>
          <form method="GET" action="" class="relative w-full max-w-md">
            <input type="text" name="search" value="<?= htmlspecialchars($searchTerm) ?>" placeholder="Search projects..." class="w-full px-4 pr-10 py-2 rounded-full focus:outline-none border border-cyan-300 shadow-sm focus:shadow-lg shadow-neutral-800 placeholder-neutral-300" />
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
      <div class="w-full py-3 px-10 bg-gradient-to-r from-cyan-900 to-teal-800 text-white font-semibold rounded-t-lg">
        <p>All Projects</p>
      </div>

      <div class="flex space-x-4 absolute z-[90] right-12 top-[1.6rem] rounded-xl">
        <button id="openProjectModal" class="group relative cursor-pointer flex items-center justify-center bg-green-600 text-green-200 w-10 h-10 rounded-lg shadow-md shadow-green-800 hover:shadow-lg transition-all duration-700 ease-in-out">
          <div class="hidden absolute left-1/2 transform -translate-x-1/2 w-[6rem] -top-[2.6rem] py-1.5 bg-yellow-500 text-center text-sm text-yellow-900 rounded-md shadow-md shadow-yellow-900 group-hover:block transition-all duration-900 ease-in-out">
            <div class="bg-yellow-500 w-full relative z-10">Add Project</div>
            <div class="bg-yellow-500 size-3 absolute left-1/2 transform -translate-x-1/2 -bottom-[0.3rem] rotate-[45deg] z-0"></div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" fill="currentColor">
            <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 144L48 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l144 0 0 144c0 17.7 14.3 32 32 32s32-14.3 32-32l0-144 144 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-144 0 0-144z"/>
          </svg>
        </button>
        <button onclick="deleteSelectedProjects()" class="group relative cursor-pointer flex items-center justify-center bg-red-600 text-red-200 w-10 h-10 rounded-lg shadow-md shadow-red-800 hover:shadow-lg transition-all duration-700 ease-in-out">
          <div class="hidden absolute left-1/2 transform -translate-x-1/2 w-[8rem] -top-[2.6rem] py-1.5 bg-yellow-500 text-center text-sm text-yellow-900 rounded-md shadow-md shadow-yellow-900 group-hover:block transition-all duration-900 ease-in-out">
            <div class="bg-yellow-500 w-full relative z-10">Delete Selected</div>
            <div class="bg-yellow-500 size-3 absolute left-1/2 transform -translate-x-1/2 -bottom-[0.3rem] rotate-[45deg] z-0"></div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16" fill="currentColor">
            <path d="M170.5 51.6L151.5 80l145 0-19-28.4c-1.5-2.2-4-3.6-6.7-3.6l-93.7 0c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80 368 80l48 0 8 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-8 0 0 304c0 44.2-35.8 80-80 80l-224 0c-44.2 0-80-35.8-80-80l0-304-8 0c-13.3 0-24-10.7-24-24S10.7 80 24 80l8 0 48 0 13.8 0 36.7-55.1C140.9 9.4 158.4 0 177.1 0l93.7 0c18.7 0 36.2 9.4 46.6 24.9zM80 128l0 304c0 17.7 14.3 32 32 32l224 0c17.7 0 32-14.3 32-32l0-304L80 128zm80 64l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0l0 208c0 8.8-7.2 16-16 16s-16-7.2-16-16l0-208c0-8.8 7.2-16 16-16s16 7.2 16 16z"/>
          </svg>
        </button>
      </div>

      <div class="px-6 pt-6 pb-10 grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php if (!empty($projects)): ?>
          <?php foreach ($projects as $project): ?>
            <div class="bg-white p-6 rounded-xl shadow-lg shadow-neutral-400 hover:shadow-neutral-400/50 border border-neutral-300 relative group h-[15rem] transition-all duration-500 ease-in-out">
              <label class="cursor-pointer select-none opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                <input type="checkbox" id="project-select-<?= htmlspecialchars($project['id']) ?>" name="project-select[]" value="<?= htmlspecialchars($project['id']) ?>" class="hidden peer/selected">
                <span class="w-5 h-5 text-white inline-block border-2 border-gray-400 rounded-md peer-checked/selected:border-orange-500 peer-checked/selected:bg-orange-500 flex items-center justify-center transition-all duration-300 ease-in-out">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4">
                    <path d="M320 576C178.6 576 64 461.4 64 320C64 178.6 178.6 64 320 64C461.4 64 576 178.6 576 320C576 461.4 461.4 576 320 576zM438 209.7C427.3 201.9 412.3 204.3 404.5 215L285.1 379.2L233 327.1C223.6 317.7 208.4 317.7 199.1 327.1C189.8 336.5 189.7 351.7 199.1 361L271.1 433C276.1 438 282.9 440.5 289.9 440C296.9 439.5 303.3 435.9 307.4 430.2L443.3 243.2C451.1 232.5 448.7 217.5 438 209.7z"/>
                  </svg>
                </span>
              </label>

              <div class="flex items-start mb-4 pr-32 mt-1">
                <h3 class="text-lg md:text-xl font-extrabold text-neutral-800"><?= htmlspecialchars($project['title']) ?></h3>
              </div>

              <p class="text-sm font-normal text-gray-600 mb-6 break-words pr-32">
                <?php
                  $desc = $project['description'] ?? '';
                  echo htmlspecialchars(mb_strlen($desc) > 100 ? mb_substr($desc, 0, 100) . '...' : $desc);
                ?>
              </p>

              <div class="flex flex-col items-end absolute top-5 right-5 h-full">
                <div class="flex space-x-2 opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out -mt-2 mb-2">
                  <button onclick="editProject(<?= htmlspecialchars($project['id']) ?>)" class="cursor-pointer size-8 bg-cyan-100 text-cyan-700 rounded-full shadow-sm shadow-cyan-900 flex items-center justify-center hover:bg-cyan-200 transition-all duration-150 ease-in-out" title="Edit Project">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                    </svg>
                  </button>
                  <button onclick="openDeleteModal(<?= htmlspecialchars($project['id']) ?>, '<?php echo ROOT_URL; ?>/admin/scripts/projects/delete.php')" class="cursor-pointer size-8 bg-red-100 text-red-600 rounded-full shadow-sm shadow-cyan-900 flex items-center justify-center hover:bg-red-200 transition-all duration-150 ease-in-out" title="Delete Project">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 7a1 1 0 011 1v8a1 1 0 11-2 0V8a1 1 0 011-1zm6 0a1 1 0 011 1v8a1 1 0 11-2 0V8a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>

                <div class="flex-shrink-0">
                  <img src="<?= htmlspecialchars(ROOT_URL . ($project['thumbnail'] ?? '/images/admin/default-img.webp')) ?>" class="cursor-pointer relative z-10 size-20 object-cover shadow-xl border-4 border-white rounded-xl hover:scale-110 transition-all duration-500 ease-in-out" alt="Project Thumbnail" onclick="openImageModal('<?= htmlspecialchars(ROOT_URL . ($project['thumbnail'] ?? '/images/admin/default-img.webp')) ?>')">
                </div>

                <div class="mt-8">
                  <button onclick="viewProject(<?= htmlspecialchars($project['id']) ?>)" class="flex items-center text-gray-800 text-xs cursor-pointer px-3 py-1.5 rounded-md hover:bg-gray-200 transition-all duration-500 ease-in-out">
                    View Project
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="h-5 w-5 ml-2">
                      <path d="M598.6 342.6C611.1 330.1 611.1 309.8 598.6 297.3L470.6 169.3C458.1 156.8 437.8 156.8 425.3 169.3C412.8 181.8 412.8 202.1 425.3 214.6L498.7 288L64 288C46.3 288 32 302.3 32 320C32 337.7 46.3 352 64 352L498.7 352L425.3 425.4C412.8 437.9 412.8 458.2 425.3 470.7C437.8 483.2 458.1 483.2 470.6 470.7L598.6 342.7z"/>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <p class="text-white text-center bg-cyan-600 py-2 shadow-md shadow-gray-900 w-[60%] mx-auto">No project found.</p>
        <?php endif; ?>
      </div>

      <?php include '../includes/pagination.php'; ?>
    </div>
  </main>

  <?php include 'create.php'; ?>
  <?php include 'edit.php'; ?>
  <?php include 'view.php'; ?>
  <?php include '../includes/delete.php'; ?>
  <?php include '../includes/image.php'; ?>
  <?php include '../includes/footer.php'; ?>

  <script>const ROOT_URL = "<?php echo ROOT_URL; ?>";</script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/sidebar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dropdown.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/message-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/image-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/project/add-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/project/edit-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/project/view-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/project/delete-modal.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/project/delete-bulk.js"></script>
</body>
</html>
