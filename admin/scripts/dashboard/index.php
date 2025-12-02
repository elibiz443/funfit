<?php
  $homeDetail = $pdo->query("SELECT * FROM home_detail ORDER BY id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
  $portfolio = $pdo->query("SELECT * FROM portfolio ORDER BY id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
  $galleryHero = $pdo->query("SELECT * FROM gallery_hero ORDER BY id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
  $servicesHero = $pdo->query("SELECT * FROM services_hero ORDER BY id DESC LIMIT 1")->fetch(PDO::FETCH_ASSOC);
?>
