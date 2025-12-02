<?php
  require_once __DIR__ . '/../../helpers/handle_upload.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $videoUrl = trim($_POST['videoUrl'] ?? '');

    $thumbnailResult = handleImageUpload('thumbnail', $uploadsDir);

    $error = '';
    $message = '';

    if (isset($thumbnailResult['error'])) {
      $error = "Thumbnail Error: " . $thumbnailResult['error'];
    } elseif (empty($title)) {
      $error = "Title required.";
    }

    if (empty($error)) {
      $thumbnail = $thumbnailResult['path'];

      try {
        $stmt = $pdo->prepare("
          INSERT INTO projects (title, description, thumbnail, videoUrl)
          VALUES (:title, :description, :thumbnail, :videoUrl)
        ");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':thumbnail', $thumbnail);
        $stmt->bindParam(':videoUrl', $videoUrl);

        if ($stmt->execute()) {
          $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Project '{$title}' created successfully!"
          ];
        } else {
          $_SESSION['message'] = [
            'type' => 'error',
            'text' => 'Database insertion failed.'
          ];
        }
      } catch (PDOException $e) {
        $_SESSION['message'] = [
          'type' => 'error',
          'text' => 'Database error: ' . $e->getMessage()
        ];
      }
    } else {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => $error
      ];
    }

    header("Location: " . ROOT_URL . "/dashboard/projects");
    exit;
  }
?>