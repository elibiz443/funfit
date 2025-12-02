<?php
  try {
    $stmt = $pdo->query("SELECT * FROM services ORDER BY id DESC LIMIT 3");
    $serviceItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } catch (PDOException $e) {
    $serviceItems = [];
  }
?>