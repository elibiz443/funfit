<?php
  require __DIR__ . '/../../helpers/online_connector.php';
  require __DIR__ . '/../../scripts/dashboard/index.php';
  
  function widgetImage($path, $fallback = '/images/admin/default-img.webp') {
    return file_exists(ROOT_PATH.'/'.$path) ? ROOT_URL.'/'.$path : ROOT_URL.$fallback;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - Dashboard</title>
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
</head>
<body class="bg-gray-100 max-w-full overflow-x-hidden text-neutral-900">
  <?php include '../includes/dashboard-sidebar.php'; ?>
  <?php require __DIR__ . '/../includes/message.php'; ?>

  <main id="mainContent" class="min-h-screen w-[calc(100%-5rem)] ml-auto flex-1 flex flex-col overflow-hidden transition-all duration-900 ease-in-out" style="background-image: url('<?php echo ROOT_URL; ?>/images/admin/dashboard.webp');">
    <?php include '../includes/header.php'; ?>

    <div class="h-[20rem] w-[96%] mx-auto bg-gradient-to-r from-[#385692] to-[#3c7cc4] rounded-xl mt-24 p-6 relative z-10 shadow-lg shadow-neutral-800">
      <div class="text-white flex justify-between items-center">
        <div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24" fill="currentColor">
            <path d="M0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zM288 96a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM256 416c35.3 0 64-28.7 64-64c0-17.4-6.9-33.1-18.1-44.6L366 161.7c5.3-12.1-.2-26.3-12.3-31.6s-26.3 .2-31.6 12.3L257.9 288c-.6 0-1.3 0-1.9 0c-35.3 0-64 28.7-64 64s28.7 64 64 64zM176 144a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM96 288a32 32 0 1 0 0-64 32 32 0 1 0 0 64zm352-32a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
          </svg>
          <p class="text-[1.2rem] mt-2">Wisehart Dashboard</p>
        </div>
      </div>
    </div>

    <div class="bg-white relative z-20 w-[90%] mx-auto rounded-lg -mt-[10rem] lg:-mt-[13rem] mb-[6rem] overflow-hidden shadow-lg shadow-neutral-800 border border-neutral-400 pb-32">
      <div class="w-full py-3 px-10 bg-gradient-to-r from-[#4584c7] to-[#374b86] text-white font-semibold">
        <p>Website Details</p>
      </div>

      <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-[#F5F5F5] rounded-lg shadow-lg shadow-neutral-800 relative hover:shadow-none transition-all duration-700 ease-in-out">
          <div class="text-center">
            <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-20 h-auto absolute left-2 top-5">
            <h1 class="text-xl text-[#333333]"><?php echo $homeDetail['title']; ?></h1>
            <p class="text-xs text-[#4A4A4A] mb-2"><?php echo $homeDetail['subtitle']; ?></p>
            <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">
          </div>
          <div class="w-full h-48 hero bg-cover bg-center bg-no-repeat text-center flex flex-col justify-center items-center" style="background-image: url(<?php echo widgetImage($homeDetail['heroImage']); ?>);">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-[#E0DED8]/10"></div>
            <div class="relative z-20 hero-color mx-2 px-4 py-6 rounded-md flex flex-col items-center shadow-md shadow-[#493821]">
              <h2 class="text-[#333333] text-sm md:text-md relative">
                <?= htmlspecialchars($homeDetail['description'] ?? '') ?>
              </h2>
              <button class="bg-[#D9CFC3] text-[#333333] px-2 py-1.5 text-xs cursor-pointer flex items-center mt-2 relative border border-gray-700 rounded shadow-md shadow-neutral-800 hover:bg-[#B0B2A9] hover:scale-105 transition-all duration-500 ease-in-out">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="currentColor" class="w-3 h-3 mr-1">
                  <path d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z"/>
                </svg>VIEW PORTFOLIO
              </button>
            </div>
          </div>

          <div class="flex justify-end gap-2 pt-6 pb-8 pr-10">
            <button onclick="editHome(<?= htmlspecialchars($homeDetail['id']) ?>)"
              class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-slate-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-neutral-600 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M535.6 85.7C513.7 63.8 478.3 63.8 456.4 85.7L432 110.1L529.9 208L554.3 183.6C576.2 161.7 576.2 126.3 554.3 104.4L535.6 85.7zM236.4 305.7C230.3 311.8 225.6 319.3 222.9 327.6L193.3 416.4C190.4 425 192.7 434.5 199.1 441C205.5 447.5 215 449.7 223.7 446.8L312.5 417.2C320.7 414.5 328.2 409.8 334.4 403.7L496 241.9L398.1 144L236.4 305.7zM160 128C107 128 64 171 64 224L64 480C64 533 107 576 160 576L416 576C469 576 512 533 512 480L512 384C512 366.3 497.7 352 480 352C462.3 352 448 366.3 448 384L448 480C448 497.7 433.7 512 416 512L160 512C142.3 512 128 497.7 128 480L128 224C128 206.3 142.3 192 160 192L256 192C273.7 192 288 177.7 288 160C288 142.3 273.7 128 256 128L160 128z"/>
              </svg>
              Edit Home
            </button>
            <button onclick="viewHome(<?= htmlspecialchars($homeDetail['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-teal-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-teal-700 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z"/>
              </svg>View Home
            </button>
          </div>
        </div>

        <div class="bg-[#F5F5F5] rounded-lg shadow-lg shadow-neutral-800 relative hover:shadow-none transition-all duration-700 ease-in-out">
          <div class="text-center">
            <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-20 h-auto absolute left-2 top-5">
            <h1 class="text-xl text-[#333333]"><?php echo $homeDetail['title']; ?></h1>
            <p class="text-xs text-[#4A4A4A] mb-2"><?php echo $homeDetail['subtitle']; ?></p>
            <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">
          </div>
          <div class="w-full h-48 hero bg-cover bg-center bg-no-repeat text-center flex flex-col justify-center items-center" style="background-image: url(<?php echo widgetImage($portfolio['portfolioImage']); ?>);">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-[#E0DED8]/10"></div>
            <div class="relative z-20 hero-color mx-2 px-2 py-4 rounded-md flex flex-col items-center shadow-md shadow-[#493821] text-[#333333]">
              <h2 class="text-sm md:text-md relative"><?= htmlspecialchars($portfolio['title'] ?? '') ?></h2>
              <p class="text-xs relative"><?= htmlspecialchars($portfolio['description'] ?? '') ?></p>
            </div>
          </div>

          <div class="flex justify-end gap-2 pt-6 pb-8 pr-10">
            <button onclick="editPortfolio(<?= htmlspecialchars($portfolio['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-slate-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-neutral-600 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M535.6 85.7C513.7 63.8 478.3 63.8 456.4 85.7L432 110.1L529.9 208L554.3 183.6C576.2 161.7 576.2 126.3 554.3 104.4L535.6 85.7zM236.4 305.7C230.3 311.8 225.6 319.3 222.9 327.6L193.3 416.4C190.4 425 192.7 434.5 199.1 441C205.5 447.5 215 449.7 223.7 446.8L312.5 417.2C320.7 414.5 328.2 409.8 334.4 403.7L496 241.9L398.1 144L236.4 305.7zM160 128C107 128 64 171 64 224L64 480C64 533 107 576 160 576L416 576C469 576 512 533 512 480L512 384C512 366.3 497.7 352 480 352C462.3 352 448 366.3 448 384L448 480C448 497.7 433.7 512 416 512L160 512C142.3 512 128 497.7 128 480L128 224C128 206.3 142.3 192 160 192L256 192C273.7 192 288 177.7 288 160C288 142.3 273.7 128 256 128L160 128z"/>
              </svg>Edit Portfolio
            </button>
            <button onclick="viewPortfolio(<?= htmlspecialchars($portfolio['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-teal-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-teal-700 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z"/>
              </svg>View Portfolio
            </button>
          </div>
        </div>
      </div>

      <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-[#F5F5F5] rounded-lg shadow-lg shadow-neutral-800 relative hover:shadow-none transition-all duration-700 ease-in-out">
          <div class="text-center">
            <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-20 h-auto absolute left-2 top-5">
            <h1 class="text-xl text-[#333333]"><?php echo $homeDetail['title']; ?></h1>
            <p class="text-xs text-[#4A4A4A] mb-2"><?php echo $homeDetail['subtitle']; ?></p>
            <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">
          </div>
          <div class="w-full h-48 hero bg-cover bg-center bg-no-repeat text-center flex flex-col justify-center items-center" style="background-image: url(<?php echo widgetImage($galleryHero['heroImage']); ?>);">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-[#E0DED8]/10"></div>
            <div class="relative z-20 hero-color mx-2 px-2 py-4 rounded-md flex flex-col items-center shadow-md shadow-[#493821] text-[#333333]">
              <h2 class="text-sm md:text-md relative"><?= htmlspecialchars($galleryHero['title'] ?? '') ?></h2>
              <p class="text-xs relative"><?= htmlspecialchars($galleryHero['description'] ?? '') ?></p>
            </div>
          </div>

          <div class="flex justify-end gap-2 pt-6 pb-8 pr-10">
            <button onclick="editGallery(<?= htmlspecialchars($galleryHero['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-slate-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-neutral-600 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M535.6 85.7C513.7 63.8 478.3 63.8 456.4 85.7L432 110.1L529.9 208L554.3 183.6C576.2 161.7 576.2 126.3 554.3 104.4L535.6 85.7zM236.4 305.7C230.3 311.8 225.6 319.3 222.9 327.6L193.3 416.4C190.4 425 192.7 434.5 199.1 441C205.5 447.5 215 449.7 223.7 446.8L312.5 417.2C320.7 414.5 328.2 409.8 334.4 403.7L496 241.9L398.1 144L236.4 305.7zM160 128C107 128 64 171 64 224L64 480C64 533 107 576 160 576L416 576C469 576 512 533 512 480L512 384C512 366.3 497.7 352 480 352C462.3 352 448 366.3 448 384L448 480C448 497.7 433.7 512 416 512L160 512C142.3 512 128 497.7 128 480L128 224C128 206.3 142.3 192 160 192L256 192C273.7 192 288 177.7 288 160C288 142.3 273.7 128 256 128L160 128z"/>
              </svg>Edit Gallery
            </button>
            <button onclick="viewGallery(<?= htmlspecialchars($galleryHero['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-teal-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-teal-700 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z"/>
              </svg>View Gallery
            </button>
          </div>
        </div>

        <div class="bg-[#F5F5F5] rounded-lg shadow-lg shadow-neutral-800 relative hover:shadow-none transition-all duration-700 ease-in-out">
          <div class="text-center">
            <img src="<?php echo ROOT_URL; ?>/admin/images/logo.webp" alt="header" class="w-20 h-auto absolute left-2 top-5">
            <h1 class="text-xl text-[#333333]"><?php echo $homeDetail['title']; ?></h1>
            <p class="text-xs text-[#4A4A4A] mb-2"><?php echo $homeDetail['subtitle']; ?></p>
            <img src="<?php echo ROOT_URL; ?>/admin/images/header.webp" alt="header" class="w-full h-auto">
          </div>
          <div class="w-full h-48 hero bg-cover bg-center bg-no-repeat text-center flex flex-col justify-center items-center" style="background-image: url(<?php echo widgetImage($servicesHero['heroImage']); ?>);">
            <div class="absolute top-0 bottom-0 left-0 right-0 bg-[#E0DED8]/10"></div>
            <div class="relative z-20 hero-color mx-2 px-2 py-4 rounded-md flex flex-col items-center shadow-md shadow-[#493821] text-[#333333]">
              <h2 class="text-sm md:text-md relative"><?= htmlspecialchars($servicesHero['title'] ?? '') ?></h2>
              <p class="text-xs relative"><?= htmlspecialchars($servicesHero['description'] ?? '') ?></p>
            </div>
          </div>

          <div class="flex justify-end gap-2 pt-6 pb-8 pr-10">
            <button onclick="editService(<?= htmlspecialchars($servicesHero['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-slate-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-neutral-600 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M535.6 85.7C513.7 63.8 478.3 63.8 456.4 85.7L432 110.1L529.9 208L554.3 183.6C576.2 161.7 576.2 126.3 554.3 104.4L535.6 85.7zM236.4 305.7C230.3 311.8 225.6 319.3 222.9 327.6L193.3 416.4C190.4 425 192.7 434.5 199.1 441C205.5 447.5 215 449.7 223.7 446.8L312.5 417.2C320.7 414.5 328.2 409.8 334.4 403.7L496 241.9L398.1 144L236.4 305.7zM160 128C107 128 64 171 64 224L64 480C64 533 107 576 160 576L416 576C469 576 512 533 512 480L512 384C512 366.3 497.7 352 480 352C462.3 352 448 366.3 448 384L448 480C448 497.7 433.7 512 416 512L160 512C142.3 512 128 497.7 128 480L128 224C128 206.3 142.3 192 160 192L256 192C273.7 192 288 177.7 288 160C288 142.3 273.7 128 256 128L160 128z"/>
              </svg>Edit Services
            </button>
            <button onclick="viewService(<?= htmlspecialchars($servicesHero['id']) ?>)" class="cursor-pointer text-white text-sm flex items-center px-4 py-1 bg-teal-500 rounded-full shadow-md shadow-neutral-800 hover:shadow hover:bg-teal-700 transition-all duration-500 ease-in-out">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" fill="currentColor" class="w-4 h-4 mr-1">
                <path d="M320 96C239.2 96 174.5 132.8 127.4 176.6C80.6 220.1 49.3 272 34.4 307.7C31.1 315.6 31.1 324.4 34.4 332.3C49.3 368 80.6 420 127.4 463.4C174.5 507.1 239.2 544 320 544C400.8 544 465.5 507.2 512.6 463.4C559.4 419.9 590.7 368 605.6 332.3C608.9 324.4 608.9 315.6 605.6 307.7C590.7 272 559.4 220 512.6 176.6C465.5 132.9 400.8 96 320 96zM176 320C176 240.5 240.5 176 320 176C399.5 176 464 240.5 464 320C464 399.5 399.5 464 320 464C240.5 464 176 399.5 176 320zM320 256C320 291.3 291.3 320 256 320C244.5 320 233.7 317 224.3 311.6C223.3 322.5 224.2 333.7 227.2 344.8C240.9 396 293.6 426.4 344.8 412.7C396 399 426.4 346.3 412.7 295.1C400.5 249.4 357.2 220.3 311.6 224.3C316.9 233.6 320 244.4 320 256z"/>
              </svg>View Services
            </button>
          </div>
        </div>
      </div>

    </div>
  </main>

  <?php include 'view_home.php'; ?>
  <?php include 'edit_home.php'; ?>

  <?php include 'view_portfolio.php'; ?>
  <?php include 'edit_portfolio.php'; ?>

  <?php include 'view_gallery_hero.php'; ?>
  <?php include 'edit_gallery_hero.php'; ?>

  <?php include 'view_service_hero.php'; ?>
  <?php include 'edit_service_hero.php'; ?>

  <?php include '../includes/footer.php'; ?>

  <script>const ROOT_URL = "<?php echo ROOT_URL; ?>";</script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/sidebar.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dropdown.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/message-modal.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/home.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/view-home.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/portfolio.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/view-portfolio.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/gallery.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/view-gallery-hero.js"></script>

  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/service.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/dashboard/view-service-hero.js"></script>
</body>
</html>