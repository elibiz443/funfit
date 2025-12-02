<?php
  $galley = [];
  $galleyPerPage = 12;

  $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

  $offset = ($current_page - 1) * $galleyPerPage;

  try {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM gallery");
    $totalGallery = (int)$countStmt->fetchColumn();

    $totalPages = ceil($totalGallery / $galleyPerPage);

    $stmt = $pdo->prepare("SELECT * FROM gallery ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $galleyPerPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    echo "Error fetching gallery: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  }
?>