<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $serviceId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM services WHERE id = ?");
      $stmt->execute([$serviceId]);
      $service = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($service) {
        echo json_encode(['success' => true, 'service' => $service]);
      } else {
        echo json_encode(['success' => false, 'message' => 'Service not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_service_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $serviceId = intval($_POST['service_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $subtitle = trim($_POST['subtitle'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $videoUrl = trim($_POST['videoUrl'] ?? '');

    if ($serviceId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid service ID.']);
      exit;
    }

    $thumbnailResult = handleImageUpload('thumbnail', $uploadsDir);
    $error = '';

    if (isset($thumbnailResult['error'])) {
      $error = "Thumbnail Error: " . $thumbnailResult['error'];
    } elseif (empty($title)) {
      $error = "Title required.";
    }

    if (empty($error)) {
      try {
        $query = "UPDATE services SET title = :title, subtitle = :subtitle, description = :description, videoUrl = :videoUrl";
        $params = [
          ':title' => $title,
          ':subtitle' => $subtitle,
          ':description' => $description,
          ':videoUrl' => $videoUrl,
          ':id' => $serviceId
        ];

        if (!empty($thumbnailResult['path'])) {
          $query .= ", thumbnail = :thumbnail";
          $params[':thumbnail'] = $thumbnailResult['path'];
        }

        $query .= " WHERE id = :id";

        $stmt = $pdo->prepare($query);
        $stmt->execute($params);

        $_SESSION['message'] = [
          'type' => 'success',
          'text' => "Service '{$title}' updated successfully!"
        ];

        echo json_encode(['success' => true]);
      } catch (PDOException $e) {
        $_SESSION['message'] = [
          'type' => 'error',
          'text' => 'Database error: ' . $e->getMessage()
        ];
        echo json_encode(['success' => false]);
      }
    } else {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => $error
      ];
      echo json_encode(['success' => false]);
    }

    exit;
  }
?>
