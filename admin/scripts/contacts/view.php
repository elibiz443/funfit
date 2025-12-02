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

  $contactId = $_GET['contact_id'] ?? $_GET['id'] ?? null;
  if (!$contactId || !is_numeric($contactId)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
  }

  try {
    $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
    $stmt->execute([$contactId]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($contact) {
      echo json_encode(['success' => true, 'contact' => $contact]);
    } else {
      http_response_code(404);
      echo json_encode(['success' => false, 'message' => 'contact not found.']);
    }
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server error: ' . $e->getMessage()]);
  }
  exit;
?>