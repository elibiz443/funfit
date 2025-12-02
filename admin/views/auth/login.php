<?php require __DIR__ . '/../../helpers/connector.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - Login</title>
  <!-- CSS -->
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- FAV and Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 max-w-full overflow-x-hidden">
  <div class="relative w-full h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('<?php echo ROOT_URL; ?>/images/admin/interior-designer.webp');">

    <?php if (!empty($message)): ?>
      <div id="messageModal" class="p-4 text-sm <?php echo $message['type'] === 'success' ? 'text-green-800 bg-green-100 border-l border-y border-green-800' : 'text-red-800 border-l border-y border-red-800 bg-red-100'; ?> rounded-l-xl fixed top-20 right-0 z-[99999] transition-all duration-500 ease-in-out" role="alert">
        <?php echo htmlspecialchars($message['text'], ENT_QUOTES, 'UTF-8'); ?>
      </div>
    <?php endif; ?>

    <div class="absolute inset-0 bg-black/60"></div>
    <div class="relative w-96 px-8 pt-10 pb-20 rounded-lg shadow-lg glass-bg-color2">
      <h2 class="text-3xl font-semibold text-white text-center mb-6">Sign In</h2>
      <form action="<?php echo ROOT_URL; ?>/admin/scripts/auth/login.php" method="POST" autocomplete="off">
        <div class="mb-4">
          <label class="block text-white mb-1">Username</label>
          <input type="text" name="username" autofocus="autofocus" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600" placeholder="johndoe123" autocomplete="new-username" required>
        </div>
        <div class="mb-6 relative">
          <label class="block text-white mb-1">Password</label>
          <input type="password" name="password" id="password" class="w-full px-3 py-2 bg-transparent border-b border-white text-white focus:outline-none focus:border-yellow-600 pr-10" placeholder="********" autocomplete="new-password" required>
          <button type="button" id="togglePassword" class="absolute right-2 top-9 text-white cursor-pointer text-2xl">
            👁️
          </button>
        </div>
        <button type="submit" class="w-full cursor-pointer bg-yellow-600 text-white py-3 rounded-md hover:bg-yellow-800">
          Sign In
        </button>
      </form>
    </div>
  </div>

  <script src="<?php echo ROOT_URL; ?>/admin/js/view-password.js"></script>
  <script src="<?php echo ROOT_URL; ?>/admin/js/message-modal.js"></script>
</body>
</html>
