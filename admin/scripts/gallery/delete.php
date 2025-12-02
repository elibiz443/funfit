<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid gallery item ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/gallery");
    exit;
  }

  $galleryId = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT img_link FROM gallery WHERE id = ?");
    $stmt->execute([$galleryId]);
    $galleryItem = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$galleryItem) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'Gallery item not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/gallery");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM gallery WHERE id = ?");
    $deleteStmt->execute([$galleryId]);

    $uploadsDir = __DIR__ . '/../../../';
    if (!empty($galleryItem['img_link'])) {
      $filePath = $uploadsDir . ltrim($galleryItem['img_link'], '/');
      
      if (is_file($filePath)) {
        @unlink($filePath);
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'Gallery item deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/gallery");
    exit;

  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/gallery");
    exit;
  }
?>