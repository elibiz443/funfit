<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $projectId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM projects WHERE id = ?");
      $stmt->execute([$projectId]);
      $project = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($project) {
        echo json_encode(['success' => true, 'project' => $project]);
      } else {
        echo json_encode(['success' => false, 'message' => 'Project not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_project_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $projectId = intval($_POST['project_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $videoUrl = trim($_POST['videoUrl'] ?? '');

    if ($projectId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid project ID.']);
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
        $query = "UPDATE projects SET title = :title, description = :description, videoUrl = :videoUrl";
        $params = [
          ':title' => $title,
          ':description' => $description,
          ':videoUrl' => $videoUrl,
          ':id' => $projectId
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
          'text' => "Project '{$title}' updated successfully!"
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