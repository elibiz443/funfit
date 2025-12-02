<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $galleryHeroId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM gallery_hero WHERE id = ?");
      $stmt->execute([$galleryHeroId]);
      $galleryHero = $stmt->fetch(PDO::FETCH_ASSOC);

      echo json_encode(
        $galleryHero
          ? ['success' => true, 'galleryHero' => $galleryHero]
          : ['success' => false, 'message' => 'Gallery Hero record not found']
      );
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_gallery_hero_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $galleryHeroId = intval($_POST['gallery_hero_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($galleryHeroId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid gallery hero ID']);
      exit;
    }

    $heroImageResult = [];
    if (!empty($_FILES['heroImage']['name'])) {
      $heroImageResult = handleImageUpload('heroImage', $uploadsDir);
    }

    try {
      $query = "UPDATE gallery_hero SET title = :title, description = :description";
      $params = [
        ':title' => $title,
        ':description' => $description,
        ':id' => $galleryHeroId
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