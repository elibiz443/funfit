<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $aboutId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM abouts WHERE id = ?");
      $stmt->execute([$aboutId]);
      $about = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($about) {
        echo json_encode(['success' => true, 'about' => $about]);
      } else {
        echo json_encode(['success' => false, 'message' => 'About not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_about_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $aboutId = intval($_POST['about_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if ($aboutId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid about ID.']);
      exit;
    }

    if (empty($title)) {
      echo json_encode(['success' => false, 'message' => 'Title required.']);
      exit;
    }

    $aboutImageResult = handleImageUpload('aboutImage', $uploadsDir);
    $error = '';

    if (isset($aboutImageResult['error']) && $aboutImageResult['error'] !== 'No file uploaded.') {
      $error = "Image Error: " . $aboutImageResult['error'];
    }

    if (empty($error)) {
      try {
        $query = "UPDATE abouts SET title = :title, description = :description";
        $params = [
          ':title' => $title,
          ':description' => $description,
          ':id' => $aboutId
        ];

        if (!empty($aboutImageResult['path'])) {
          $query .= ", aboutImage = :aboutImage";
          $params[':aboutImage'] = $aboutImageResult['path'];
        }

        $query .= " WHERE id = :id";
        $stmt = $pdo->prepare($query);
        $stmt->execute($params);

        $_SESSION['message'] = [
          'type' => 'success',
          'text' => "About '{$title}' updated successfully!"
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
