<?php
  $query = $pdo->query("SELECT * FROM services_hero ORDER BY id ASC LIMIT 1");
  $hero = $query->fetch(PDO::FETCH_ASSOC);
?>