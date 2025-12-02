<?php
  $gallery = [];

  try {
    $stmt = $pdo->query("SELECT * FROM gallery ORDER BY id DESC");
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    echo "Error fetching gallery: " . $e->getMessage();
  }
?>