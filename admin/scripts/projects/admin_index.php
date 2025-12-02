<?php
  $projects = [];
  $projectsPerPage = 12;

  $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

  $offset = ($current_page - 1) * $projectsPerPage;

  try {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM projects");
    $totalProjects = (int)$countStmt->fetchColumn();

    $totalPages = ceil($totalProjects / $projectsPerPage);

    $stmt = $pdo->prepare("SELECT * FROM projects ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $projectsPerPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    echo "Error fetching projects: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  }
?>