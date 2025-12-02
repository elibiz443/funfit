<?php
  require_once __DIR__ . '/../../helpers/handle_upload.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'create_gallery_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $title = trim($_POST['title'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $detail = trim($_POST['detail'] ?? '');

    $imgLinkResult = handleImageUpload('img_link', $uploadsDir);

    $error = '';

    if (empty($error)) {
      $img_link = $imgLinkResult['path'];

      try {
        $stmt = $pdo->prepare("
          INSERT INTO gallery (img_link, location, title, detail)
          VALUES (:img_link, :location, :title, :detail)
        ");

        $stmt->bindParam(':img_link', $img_link);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':detail', $detail);

        if ($stmt->execute()) {
          $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Gallery Item '{$title}' created successfully!"
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

    header("Location: " . ROOT_URL . "/dashboard/gallery");
    exit;
  }
?>