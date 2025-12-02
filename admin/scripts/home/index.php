<?php
  $stmt = $pdo->query("SELECT title, subtitle, description, heroImage FROM home_detail ORDER BY id ASC LIMIT 1");
  $home_detail = $stmt->fetch(PDO::FETCH_ASSOC);
?>
