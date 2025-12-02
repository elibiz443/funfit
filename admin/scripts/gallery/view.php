<?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: GET, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization");

  if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
  }

  require_once __DIR__ . '/../../../config.php';

  header("Content-Type: application/json; charset=UTF-8");

  $galleryId = $_GET['gallery_id'] ?? $_GET['id'] ?? null;
  if (!$galleryId || !is_numeric($galleryId)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
  }

  try {
    $stmt = $pdo->prepare("SELECT id, img_link, location, title, detail, updated_at FROM gallery WHERE id = ?");
    $stmt->execute([$galleryId]);
    $gallery = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($gallery) {
      echo json_encode(['success' => true, 'gallery' => $gallery]);
    } else {
      http_response_code(404);
      echo json_encode(['success' => false, 'message' => 'Gallery item not found.']);
    }
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
  }
  exit;
?>