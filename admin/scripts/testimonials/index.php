<?php
  $stmt = $pdo->query("SELECT * FROM testimonials ORDER BY id DESC LIMIT 3");
  $testimonialItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>