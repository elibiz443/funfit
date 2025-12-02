<?php
  require __DIR__ . '/../../helpers/connector.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Joan Wisehart - Error</title>
  <link href="<?php echo ROOT_URL; ?>/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" />
<body class="antialiased min-h-screen flex flex-col items-center justify-center relative overflow-hidden bg-gradient-to-br from-sky-100 via-pink-50 to-indigo-100">
  <div class="absolute inset-0 flex items-center justify-center">
    <div class="w-96 h-96 bg-gradient-to-r from-indigo-400 to-sky-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="w-96 h-96 bg-gradient-to-r from-pink-400 to-sky-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-ping delay-200"></div>
  </div>

  <div class="relative z-10 text-center px-6">
    <img src="<?php echo ROOT_URL; ?>/images/logo/favicon.webp" alt="Wisehart Logo" class="w-20 h-auto mx-auto mb-8">
    <h1 class="text-7xl font-extrabold text-gray-900 mb-4 tracking-tight">Error</h1>
    <p class="text-2xl text-gray-700 mb-2">Something went wrong.</p>
    <p class="text-lg text-gray-500">You may have tried to access a restricted or unavailable page.</p>
  </div>

  <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-xs text-gray-400 tracking-wider">
    © <?php echo date('Y'); ?> Wisehart Designs
  </div>
</body>
</html>