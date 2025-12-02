<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
      'status' => 'error',
      'message' => 'Invalid request method.'
    ]);
    exit;
  }

  if (empty($_POST['user_ids']) || !is_array($_POST['user_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No users selected for deletion.'
    ]);
    exit;
  }

  $userIds = array_map('intval', $_POST['user_ids']);
  $currentUser = $_SESSION['user_id'] ?? null;

  if ($currentUser !== null && in_array($currentUser, $userIds)) {
    http_response_code(403);
    echo json_encode([
      'status' => 'error',
      'message' => 'You cannot delete your own account via bulk deletion.'
    ]);
    exit;
  }

  $userIds = array_filter($userIds, fn($id) => $id > 0);

  if (empty($userIds)) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No valid user IDs selected for deletion.'
    ]);
    exit;
  }

  $placeholders = implode(',', array_fill(0, count($userIds), '?'));

  try {
    $deleteStmt = $pdo->prepare("DELETE FROM users WHERE id IN ($placeholders)");
    $deleteStmt->execute($userIds);
    
    $deletedCount = $deleteStmt->rowCount();

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => $deletedCount . ' selected users deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected users deleted successfully. Reloading page.'
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