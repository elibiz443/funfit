<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $galleryId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT id, img_link, location, title, detail FROM gallery WHERE id = ?");
      $stmt->execute([$galleryId]);
      $gallery = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($gallery) {
        echo json_encode(['success' => true, 'gallery' => $gallery]);
      } else {
        echo json_encode(['success' => false, 'message' => 'Gallery item not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_gallery_form') {
    $uploadsDir = __DIR__ . '/../../../images/gallery/pics/';
    $galleryId = intval($_POST['gallery_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $detail = trim($_POST['detail'] ?? '');

    if ($galleryId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid gallery ID.']);
      exit;
    }

    $imgLinkResult = handleImageUpload('img_link', $uploadsDir);
    $error = '';

    if (isset($imgLinkResult['error']) && !empty($_FILES['img_link']['name'])) {
      $error = "Image Upload Error: " . $imgLinkResult['error'];
    } elseif (empty($title)) {
      $error = "Title is required.";
    } elseif (empty($location)) {
      $error = "Location is required.";
    }

    if (empty($error)) {
      try {
        $query = "UPDATE gallery SET title = :title, location = :location, detail = :detail";
        $params = [
          ':title' => $title,
          ':location' => $location,
          ':detail' => $detail,
          ':id' => $galleryId
        ];

        if (!empty($imgLinkResult['path'])) {
          $query .= ", img_link = :img_link";
          $params[':img_link'] = $imgLinkResult['path'];
        }

        $query .= " WHERE id = :id";

        $stmt = $pdo->prepare($query);
        $stmt->execute($params);

        $_SESSION['message'] = [
          'type' => 'success',
          'text' => "Gallery Item '{$title}' updated successfully!"
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