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

  if (empty($_POST['contact_ids']) || !is_array($_POST['contact_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No contact selected for deletion.'
    ]);
    exit;
  }

  $contactIds = array_map('intval', $_POST['contact_ids']);

  $contactIds = array_filter($contactIds, fn($id) => $id > 0);

  if (empty($contactIds)) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No valid contact IDs selected for deletion.'
    ]);
    exit;
  }

  $placeholders = implode(',', array_fill(0, count($contactIds), '?'));

  try {
    $deleteStmt = $pdo->prepare("DELETE FROM contacts WHERE id IN ($placeholders)");
    $deleteStmt->execute($contactIds);
    
    $deletedCount = $deleteStmt->rowCount();

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => $deletedCount . ' selected contacts deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected contacts deleted successfully. Reloading page.'
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