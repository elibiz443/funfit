<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  require __DIR__ . '/../config.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Functional Fitness - Contact Us</title>
  <meta name="description" content="Functional Fitness is a movement-first company dedicated to building resilient teams and thriving communities through purpose-built group training." />
  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/logo/favicon.webp" />
</head>
<body class="antialiased bg-neutral-200 text-[#1c1c1c] max-w-full overflow-x-hidden">
  <?php include '../includes/header2.php'; ?>

  <main id="home">
    <?php include '../includes/sections/contacts/hero.php'; ?>
    <?php include '../includes/sections/contacts/body.php'; ?>
  </main>

  <?php include '../includes/booking_modal.php'; ?>
  <?php include '../includes/footer.php'; ?>
  <?php include '../includes/roll-to-top-button.php'; ?>

  <script src="<?php echo ROOT_URL; ?>/assets/js/header.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/booking.js"></script>
</body>
</html>
