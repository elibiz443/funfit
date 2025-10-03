<?php
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT_URL', 'http://localhost/funfit');
  } else {
    define('ROOT_URL', 'https://funtwo.fit');
  }

  $host = 'localhost';
  $dbname = 'funfit_db';
  $username = 'root';
  $password = '';

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
  }
?>
