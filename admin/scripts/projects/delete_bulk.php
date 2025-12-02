<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
      'status' => 'error',
      'message' => 'Invalid request method.'
    ]);
    exit;
  }

  if (empty($_POST['project_ids']) || !is_array($_POST['project_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No projects selected for deletion.'
    ]);
    exit;
  }

  $projectIds = array_map('intval', $_POST['project_ids']);
  $placeholders = implode(',', array_fill(0, count($projectIds), '?'));

  try {
    $stmt = $pdo->prepare("SELECT thumbnail FROM projects WHERE id IN ($placeholders)");
    $stmt->execute($projectIds);
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $deleteStmt = $pdo->prepare("DELETE FROM projects WHERE id IN ($placeholders)");
    $deleteStmt->execute($projectIds);

    $uploadsDir = __DIR__ . '/../../../uploads/';
    foreach ($projects as $project) {
      if (!empty($project['thumbnail'])) {
        $filePath = $uploadsDir . basename($project['thumbnail']);
        if (is_file($filePath)) {
          @unlink($filePath);
        }
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => count($projectIds) . ' selected projects deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected projects deleted successfully. Reloading page.'
    ]);
    exit;

  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];

    http_response_code(500);
    echo json_encode([
      'status' => 'error',
      'message' => 'Database error: ' . $e->getMessage()
    ]);
    exit;
  }
?>