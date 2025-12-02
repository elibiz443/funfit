<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $testimonialId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM testimonials WHERE id = ?");
      $stmt->execute([$testimonialId]);
      $testimonial = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($testimonial) {
        echo json_encode(['success' => true, 'testimonial' => $testimonial]);
      } else {
        echo json_encode(['success' => false, 'message' => 'Testimonial not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_testimonial_form') {
    $testimonialId = intval($_POST['testimonial_id'] ?? 0);
    $full_name = trim($_POST['full_name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $position = trim($_POST['position'] ?? '');

    if ($testimonialId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid testimonial ID.']);
      exit;
    }

    $error = '';

    if (empty($full_name)) {
      $error = "Full name is required.";
    } elseif (empty($description)) {
      $error = "Description is required.";
    }

    if (empty($error)) {
      try {
        $query = "
          UPDATE testimonials
          SET full_name = :full_name,
              description = :description,
              location = :location,
              position = :position
          WHERE id = :id
        ";

        $stmt = $pdo->prepare($query);
        $stmt->execute([
          ':full_name' => $full_name,
          ':description' => $description,
          ':location' => $location,
          ':position' => $position,
          ':id' => $testimonialId
        ]);

        $_SESSION['message'] = [
          'type' => 'success',
          'text' => "Testimonial by '{$full_name}' updated successfully!"
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