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

  if (!isset($_GET['id'])) {
    echo json_encode(['success' => false, 'message' => 'Missing ID']);
    exit;
  }

  $id = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT * FROM portfolio WHERE id = ?");
    $stmt->execute([$id]);
    $portfolio = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($portfolio) {
      echo json_encode(['success' => true, 'portfolio' => $portfolio]);
    } else {
      echo json_encode(['success' => false, 'message' => 'Portfolio record not found']);
    }
  } catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Database error: '.$e->getMessage()]);
  }
?>