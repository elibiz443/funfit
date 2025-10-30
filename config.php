<?php
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT_URL', 'http://localhost/funfit');
    $host = 'localhost';
    $dbname = 'funfit_db';
    $username = 'root';
    $password = '';
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/bibleville-web');
  } else {
    define('ROOT_URL', 'https://f2.riverbarncafe.com/');
    $host = 'localhost';
    $dbname = 'riverba1_funfit';
    $username = 'riverba1_funfit';
    $password = 'mKVteKFkzjHxrUxMZEU3';
    define('ROOT_PATH', dirname(__FILE__));
  }

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname: " . $e->getMessage());
  }
?>