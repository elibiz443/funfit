<?php
  $query = $pdo->query("SELECT * FROM gallery_hero ORDER BY id ASC LIMIT 1");
  $galleryHero = $query->fetch(PDO::FETCH_ASSOC);
?>