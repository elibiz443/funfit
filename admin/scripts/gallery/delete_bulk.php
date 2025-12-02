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

  if (empty($_POST['gallery_ids']) || !is_array($_POST['gallery_ids'])) {
    http_response_code(400);
    echo json_encode([
      'status' => 'error',
      'message' => 'No gallery items selected for deletion.'
    ]);
    exit;
  }

  $galleryIds = array_map('intval', $_POST['gallery_ids']);
  $placeholders = implode(',', array_fill(0, count($galleryIds), '?'));

  try {
    $stmt = $pdo->prepare("SELECT img_link FROM gallery WHERE id IN ($placeholders)");
    $stmt->execute($galleryIds);
    $galleryItems = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $deleteStmt = $pdo->prepare("DELETE FROM gallery WHERE id IN ($placeholders)");
    $deleteStmt->execute($galleryIds);

    $uploadsBaseDir = __DIR__ . '/../../../uploads/';
    foreach ($galleryItems as $item) {
      if (!empty($item['img_link'])) {
        $filePath = $uploadsBaseDir . ltrim($item['img_link'], '/');
        
        if (is_file($filePath)) {
          @unlink($filePath);
        }
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => count($galleryIds) . ' selected gallery item(s) deleted successfully!'
    ];

    http_response_code(200);
    echo json_encode([
      'status' => 'success',
      'message' => 'Selected gallery items deleted successfully. Reloading page.'
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