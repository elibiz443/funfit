<?php
  $services = [];
  $servicesPerPage = 12;

  $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

  $offset = ($current_page - 1) * $servicesPerPage;

  try {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM services");
    $totalServices = (int)$countStmt->fetchColumn();

    $totalPages = ceil($totalServices / $servicesPerPage);

    $stmt = $pdo->prepare("SELECT * FROM services ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $servicesPerPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    echo "Error fetching services: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  }
?>