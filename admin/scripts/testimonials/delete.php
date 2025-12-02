<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid testimonial ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/testimonials");
    exit;
  }

  $testimonialId = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT id FROM testimonials WHERE id = ?");
    $stmt->execute([$testimonialId]);
    $testimonial = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$testimonial) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'Testimonial not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/testimonials");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM testimonials WHERE id = ?");
    $deleteStmt->execute([$testimonialId]);

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'Testimonial deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/testimonials");
    exit;
  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/testimonials");
    exit;
  }
?>