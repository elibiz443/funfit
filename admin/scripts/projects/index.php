<?php
  try {
    $stmt = $pdo->query("SELECT * FROM projects ORDER BY id DESC LIMIT 3");
    $projectItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    $projectItems = [];
  }
?>