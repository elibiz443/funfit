<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $homeId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM home_detail WHERE id = ?");
      $stmt->execute([$homeId]);
      $home = $stmt->fetch(PDO::FETCH_ASSOC);
      echo json_encode($home ? ['success' => true, 'home' => $home] : ['success' => false, 'message' => 'Home record not found']);
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: '.$e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_home_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $homeId = intval($_POST['home_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $subtitle = trim($_POST['subtitle'] ?? '');
    $description = trim($_POST['description'] ?? '');
    if ($homeId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid home ID']);
      exit;
    }

    $heroImageResult = [];
    if (!empty($_FILES['heroImage']['name'])) {
      $heroImageResult = handleImageUpload('heroImage', $uploadsDir);
    }

    try {
      $query = "UPDATE home_detail SET title = :title, subtitle = :subtitle, description = :description";
      $params = [':title' => $title, ':subtitle' => $subtitle, ':description' => $description, ':id' => $homeId];
      if (!empty($heroImageResult['path'])) {
        $query .= ", heroImage = :heroImage";
        $params[':heroImage'] = $heroImageResult['path'];
      }
      $query .= " WHERE id = :id";
      $stmt = $pdo->prepare($query);
      $stmt->execute($params);
      echo json_encode(['success' => true]);
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: '.$e->getMessage()]);
    }
    exit;
  }

  echo json_encode(['success' => false, 'message' => 'Invalid request']);
  exit;
?>
