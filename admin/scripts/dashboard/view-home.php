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

  $homeId = $_GET['home_id'] ?? $_GET['id'] ?? null;
  if (!$homeId || !is_numeric($homeId)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
  }

  try {
    $stmt = $pdo->prepare("SELECT * FROM home_detail WHERE id = ?");
    $stmt->execute([$homeId]);
    $home_detail = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($home_detail) {
      echo json_encode(['success' => true, 'home_detail' => $home_detail]);
    } else {
      http_response_code(404);
      echo json_encode(['success' => false, 'message' => 'Home detail not found.']);
    }
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
  }
  exit;
?>
