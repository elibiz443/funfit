<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $servicesHeroId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM services_hero WHERE id = ?");
      $stmt->execute([$servicesHeroId]);
      $servicesHero = $stmt->fetch(PDO::FETCH_ASSOC);

      echo json_encode(
        $servicesHero
          ? ['success' => true, 'servicesHero' => $servicesHero]
          : ['success' => false, 'message' => 'Services Hero record not found']
      );
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_services_hero_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $servicesHeroId = intval($_POST['services_hero_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $subtitle = trim($_POST['subtitle'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($servicesHeroId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid services hero ID']);
      exit;
    }

    $heroImageResult = [];
    if (!empty($_FILES['heroImage']['name'])) {
      $heroImageResult = handleImageUpload('heroImage', $uploadsDir);
    }

    try {
      $query = "UPDATE services_hero SET title = :title, subtitle = :subtitle, description = :description";
      $params = [
        ':title' => $title,
        ':subtitle' => $subtitle,
        ':description' => $description,
        ':id' => $servicesHeroId
      ];

      if (!empty($heroImageResult['path'])) {
        $query .= ", heroImage = :heroImage";
        $params[':heroImage'] = $heroImageResult['path'];
      }

      $query .= " WHERE id = :id";
      $stmt = $pdo->prepare($query);
      $stmt->execute($params);

      echo json_encode(['success' => true]);
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  echo json_encode(['success' => false, 'message' => 'Invalid request']);
  exit;
?>
