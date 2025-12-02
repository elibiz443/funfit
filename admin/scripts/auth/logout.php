<?php
  session_start();
  require __DIR__ . '/../../../config.php';
  session_unset();
  session_destroy();
  header("Location: " . ROOT_URL . "/joan");
  exit;
?>