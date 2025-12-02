<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid user ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/users");
    exit;
  }

  $userId = intval($_GET['id']);

  try {
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $userId) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'You cannot delete your own account while logged in.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/users");
      exit;
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'User not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/users");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $deleteStmt->execute([$userId]);

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'User deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/users");
    exit;

  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/users");
    exit;
  }
?>