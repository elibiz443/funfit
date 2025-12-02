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

  if (empty($_POST['service_ids']) || !is_array($_POST['service_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No services selected for deletion.'
    ]);
    exit;
  }

  $serviceIds = array_map('intval', $_POST['service_ids']);
  $placeholders = implode(',', array_fill(0, count($serviceIds), '?'));

  try {
    $stmt = $pdo->prepare("SELECT thumbnail FROM services WHERE id IN ($placeholders)");
    $stmt->execute($serviceIds);
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $deleteStmt = $pdo->prepare("DELETE FROM services WHERE id IN ($placeholders)");
    $deleteStmt->execute($serviceIds);

    $uploadsDir = __DIR__ . '/../../../uploads/';
    foreach ($services as $service) {
      foreach (['thumbnail', 'detailImageUrl'] as $key) {
        if (!empty($service[$key])) {
          $filePath = $uploadsDir . basename($service[$key]);
          if (is_file($filePath)) {
            @unlink($filePath);
          }
        }
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => count($serviceIds) . ' selected services deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected services deleted successfully. Reloading page.'
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