<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = trim($_POST['full_name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';
    $role = trim($_POST['role'] ?? 'guest');

    $error = '';

    if (empty($fullName) || empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
      $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = "Invalid email format.";
    } elseif ($password !== $confirmPassword) {
      $error = "Passwords do not match.";
    } elseif (mb_strlen($password) < 8) {
      $error = "Password must be at least 8 characters long.";
    } elseif (!in_array($role, ['admin', 'guest'])) {
      $error = "Invalid user role specified.";
    }

    if (empty($error)) {
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      try {
        // Check if username or email already exists
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = :username OR email = :email");
        $checkStmt->execute([':username' => $username, ':email' => $email]);
        if ($checkStmt->fetchColumn() > 0) {
          $error = "Username or Email already exists.";
        }
      } catch (PDOException $e) {
        $error = "Database check error: " . $e->getMessage();
      }
    }

    if (empty($error)) {
      try {
        $stmt = $pdo->prepare("
          INSERT INTO users (full_name, username, role, email, password)
          VALUES (:full_name, :username, :role, :email, :password)
        ");

        $stmt->bindParam(':full_name', $fullName);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashedPassword);

        if ($stmt->execute()) {
          $_SESSION['message'] = [
            'type' => 'success',
            'text' => "User '{$username}' created successfully!"
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

    header("Location: " . ROOT_URL . "/dashboard/users");
    exit;
  }
?>