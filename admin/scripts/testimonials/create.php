<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $full_name = trim($_POST['full_name'] ?? '');
    $description = trim($_POST['description'] ?? '');
    $location = trim($_POST['location'] ?? '');
    $position = trim($_POST['position'] ?? '');

    $error = '';
    $message = '';

    if (empty($full_name)) {
      $error = "Full name is required.";
    } elseif (empty($description)) {
      $error = "Description is required.";
    }

    if (empty($error)) {
      try {
        $stmt = $pdo->prepare("
          INSERT INTO testimonials (full_name, description, location, position)
          VALUES (:full_name, :description, :location, :position)
        ");

        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':position', $position);

        if ($stmt->execute()) {
          $_SESSION['message'] = [
            'type' => 'success',
            'text' => "Testimonial by '{$full_name}' created successfully!"
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

    header("Location: " . ROOT_URL . "/dashboard/testimonials");
    exit;
  }
?>