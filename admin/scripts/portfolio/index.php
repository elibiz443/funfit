<?php
  $query = $pdo->query("SELECT * FROM portfolio ORDER BY id ASC LIMIT 1");
  $portfolioHero = $query->fetch(PDO::FETCH_ASSOC);
?>