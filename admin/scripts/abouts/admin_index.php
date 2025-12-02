<?php
  try {
    $stmt = $pdo->query("SELECT * FROM abouts ORDER BY id ASC");
    $abouts = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    $abouts = [];
  }
?>