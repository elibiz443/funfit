<?php
  require_once __DIR__ . '/../../helpers/connector.php';

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
      $_SESSION['logged_in'] = true;
      $_SESSION['user'] = $user;

      $_SESSION['message'] = ['type' => 'success', 'text' => "Welcome back, " . htmlspecialchars($user['full_name']) . "!"];

      header("Location: " . ROOT_URL . "/dashboard");
      exit;
    } else {
      $_SESSION['message'] = ['type' => 'error', 'text' => 'Invalid username or password.'];
      header("Location: " . ROOT_URL . "/joan");
      exit;
    }
  }
?>