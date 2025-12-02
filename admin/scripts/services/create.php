<?php
  require_once __DIR__ . '/../../helpers/handle_upload.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $title = trim($_POST['title'] ?? '');
    $subtitle = trim($_POST['subtitle'] ?? '');
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
          INSERT INTO services (title, subtitle, description, thumbnail, videoUrl)
          VALUES (:title, :subtitle, :description, :thumbnail, :videoUrl)
        ");

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':subtitle', $subtitle);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':thumbnail', $thumbnail);
        $stmt->bindParam(':videoUrl', $videoUrl);

        if ($stmt->execute()) {
          $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Service '{$title}' created successfully!"
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

    header("Location: " . ROOT_URL . "/dashboard/services");
    exit;
  }
?>
