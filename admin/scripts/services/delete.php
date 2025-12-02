<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid service ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/services");
    exit;
  }

  $serviceId = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT thumbnail FROM services WHERE id = ?");
    $stmt->execute([$serviceId]);
    $service = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$service) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'Service not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/services");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM services WHERE id = ?");
    $deleteStmt->execute([$serviceId]);

    $uploadsDir = __DIR__ . '/../../../uploads/';
    if (!empty($service['thumbnail'])) {
      $filePath = $uploadsDir . basename($service['thumbnail']);
      if (is_file($filePath)) {
        @unlink($filePath);
      }
    }

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'Service deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/services");
    exit;

  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/services");
    exit;
  }
?>