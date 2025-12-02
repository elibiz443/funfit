<?php
  $stmt = $pdo->query("SELECT * FROM services ORDER BY id ASC LIMIT 1");
  $service = $stmt->fetch(PDO::FETCH_ASSOC);
?>