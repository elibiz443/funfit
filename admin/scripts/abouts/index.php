<?php
  $stmt = $pdo->query("SELECT * FROM abouts ORDER BY id ASC LIMIT 1");
  $about = $stmt->fetch(PDO::FETCH_ASSOC);
?>