<?php
  $searchTerm = $_GET['search'] ?? '';
  $page = intval($_GET['page'] ?? 1);
  $perPage = 12;
  $offset = ($page - 1) * $perPage;

  if ($searchTerm) {
    $searchWildcard = "%$searchTerm%";
    
    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM gallery WHERE title LIKE :search OR location LIKE :search OR detail LIKE :search");
    $countStmt->execute([':search' => $searchWildcard]);
    $totalGalleryItems = (int)$countStmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM gallery WHERE title LIKE :search OR location LIKE :search OR detail LIKE :search ORDER BY id DESC LIMIT :limit OFFSET :offset");
    
    $stmt->bindValue(':search', $searchWildcard, PDO::PARAM_STR);
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    
    $stmt->execute();
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM gallery");
    $totalGalleryItems = (int)$countStmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM gallery ORDER BY id DESC LIMIT :limit OFFSET :offset");
    
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    
    $stmt->execute();
    $gallery = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $totalPages = ceil($totalGalleryItems / $perPage);
?>