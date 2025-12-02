<?php
  require_once __DIR__ . '/../../../config.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $phone_number = trim($_POST['phone_number'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($full_name && $phone_number && $email && $message) {
      try {
        $stmt = $pdo->prepare("INSERT INTO contacts (full_name, phone_number, email, message) VALUES (?, ?, ?, ?)");
        $stmt->execute([$full_name, $phone_number, $email, $message]);

        echo json_encode(['success' => true]);
      } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
      }
    } else {
      echo json_encode(['success' => false, 'error' => 'Missing fields']);
    }
  } else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
  }
?>