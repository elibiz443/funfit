<?php
  $users = [];
  $usersPerPage = 12;

  $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

  $offset = ($current_page - 1) * $usersPerPage;

  try {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM users");
    $totalUsers = (int)$countStmt->fetchColumn();

    $totalPages = ceil($totalUsers / $usersPerPage);

    $stmt = $pdo->prepare("SELECT id, full_name, username, role, email, created_at, updated_at FROM users ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $usersPerPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
  } catch (PDOException $e) {
    echo "Error fetching users: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  }
?>