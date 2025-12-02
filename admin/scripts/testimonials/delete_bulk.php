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

  if (empty($_POST['testimonial_ids']) || !is_array($_POST['testimonial_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No testimonial selected for deletion.'
    ]);
    exit;
  }

  $testimonialIds = array_map('intval', $_POST['testimonial_ids']);

  $testimonialIds = array_filter($testimonialIds, fn($id) => $id > 0);

  if (empty($testimonialIds)) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No valid testimonial IDs selected for deletion.'
    ]);
    exit;
  }

  $placeholders = implode(',', array_fill(0, count($testimonialIds), '?'));

  try {
    $deleteStmt = $pdo->prepare("DELETE FROM testimonials WHERE id IN ($placeholders)");
    $deleteStmt->execute($testimonialIds);
    
    $deletedCount = $deleteStmt->rowCount();

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => $deletedCount . ' selected testimonials deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected testimonials deleted successfully. Reloading page.'
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