<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid project ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/projects");
    exit;
  }

  $projectId = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT thumbnail FROM projects WHERE id = ?");
    $stmt->execute([$projectId]);
    $project = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$project) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'Project not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/projects");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM projects WHERE id = ?");
    $deleteStmt->execute([$projectId]);

    $uploadsDir = __DIR__ . '/../../../uploads/';
    if (!empty($project['thumbnail'])) {
      $filePath = $uploadsDir . basename($project['thumbnail']);
      if (is_file($filePath)) {
        @unlink($filePath);
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'Project deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/projects");
    exit;

  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/projects");
    exit;
  }
?>