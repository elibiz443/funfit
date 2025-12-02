<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  session_start();

  require_once __DIR__ . '/../../config.php';

  if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
    header("Location: " . ROOT_URL . "/error-page");
    exit;
  }

  $currentUser = isset($_SESSION['user']) ? $_SESSION['user'] : [];

  $message = null;
  if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
  }
?>