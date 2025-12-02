<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $userId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT id, full_name, username, role, email, created_at FROM users WHERE id = ?");
      $stmt->execute([$userId]);
      $user = $stmt->fetch(PDO::FETCH_ASSOC);

      if ($user) {
        echo json_encode(['success' => true, 'user' => $user]);
      } else {
        echo json_encode(['success' => false, 'message' => 'User not found.']);
      }
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: ' . $e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_user_form') {
    $userId = intval($_POST['user_id'] ?? 0);
    $fullName = trim($_POST['full_name'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $role = trim($_POST['role'] ?? 'guest');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirm_password'] ?? '';

    $error = '';

    if ($userId <= 0) {
      $error = 'Invalid user ID.';
    } elseif (empty($fullName) || empty($username) || empty($email)) {
      $error = "Full Name, Username, and Email are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $error = "Invalid email format.";
    } elseif (!empty($password) && $password !== $confirmPassword) {
      $error = "New passwords do not match.";
    } elseif (!empty($password) && mb_strlen($password) < 8) {
      $error = "New password must be at least 8 characters long.";
    } elseif (!in_array($role, ['admin', 'guest'])) {
      $error = "Invalid user role specified.";
    }

    if (empty($error)) {
      try {
        $checkStmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE (username = :username OR email = :email) AND id != :id");
        $checkStmt->execute([':username' => $username, ':email' => $email, ':id' => $userId]);
        if ($checkStmt->fetchColumn() > 0) {
          $error = "Username or Email already exists for another user.";
        }
      } catch (PDOException $e) {
        $error = "Database check error: " . $e->getMessage();
      }
    }

    if (empty($error)) {
      try {
        $query = "UPDATE users SET full_name = :full_name, username = :username, email = :email, role = :role";
        $params = [
          ':full_name' => $fullName,
          ':username' => $username,
          ':email' => $email,
          ':role' => $role,
          ':id' => $userId
        ];

        if (!empty($password)) {
          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
          $query .= ", password = :password";
          $params[':password'] = $hashedPassword;
        }

        $query .= " WHERE id = :id";

        $stmt = $pdo->prepare($query);
        $stmt->execute($params);

        $_SESSION['message'] = [
          'type' => 'success',
          'text' => "User '{$username}' updated successfully!"
        ];

        echo json_encode(['success' => true]);
      } catch (PDOException $e) {
        $_SESSION['message'] = [
          'type' => 'error',
          'text' => 'Database error: ' . $e->getMessage()
        ];
        echo json_encode(['success' => false, 'message' => 'Database update failed.']);
      }
    } else {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => $error
      ];
      echo json_encode(['success' => false, 'message' => $error]);
    }

    exit;
  }
?>