<?php
  $searchTerm = $_GET['search'] ?? '';
  $page = intval($_GET['page'] ?? 1);
  $perPage = 12;
  $offset = ($page - 1) * $perPage;

  $users = [];
  $totalUsers = 0;

  if ($searchTerm) {
    $searchParam = "%$searchTerm%";
    
    $countStmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE full_name LIKE :search OR username LIKE :search OR email LIKE :search");
    $countStmt->execute([':search' => $searchParam]);
    $totalUsers = (int)$countStmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT id, full_name, username, role, email, created_at FROM users WHERE full_name LIKE :search OR username LIKE :search OR email LIKE :search ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':search', $searchParam, PDO::PARAM_STR);
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM users");
    $totalUsers = (int)$countStmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT id, full_name, username, role, email, created_at FROM users ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $totalPages = ceil($totalUsers / $perPage);
?>