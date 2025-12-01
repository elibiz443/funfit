<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // Include the database configuration file
  require __DIR__ . '/config.php';
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Functional Fitness</title>
  <meta name="description" content="Coach Frank — Professional football & rugby background. Calisthenics, plyometrics, kettlebell training and quality programs." />

  <!-- CSS -->
  <link href="<?php echo ROOT_URL; ?>/assets/css/output.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <!-- FAV and Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo ROOT_URL; ?>/assets/images/logo/favicon.webp" />
</head>
<body class="antialiased bg-neutral-200 text-[#1c1c1c] max-w-full overflow-x-hidden">
  <?php include './includes/header.php'; ?>

  <main id="home">
    <?php include './includes/sections/home/hero.php'; ?>
    <?php include './includes/sections/home/programs.php'; ?>
    <?php include './includes/sections/home/health.php'; ?>
    <?php include './includes/sections/home/team.php'; ?>
    <?php include './includes/sections/home/philosophy.php'; ?>
    <?php include './includes/sections/home/community.php'; ?>
    <?php include './includes/sections/home/bookings.php'; ?>
    <?php include './includes/sections/home/membership.php'; ?>
    <?php include './includes/sections/home/testimonials.php'; ?>
    <?php include './includes/sections/home/faqs.php'; ?>
    <?php include './includes/sections/home/contacts.php'; ?>
  </main>

  <?php include './includes/booking_modal.php'; ?>
  <?php include './includes/footer.php'; ?>
  <?php include './includes/roll-to-top-button.php'; ?>

  <script src="<?php echo ROOT_URL; ?>/assets/js/header.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-top.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/scroll-to-view.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/carousel.js"></script>
  <script src="<?php echo ROOT_URL; ?>/assets/js/booking.js"></script>
</body>
</html>
