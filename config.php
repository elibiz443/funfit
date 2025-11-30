<?php
  if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('ROOT_URL', 'http://localhost/funfit');
    $host = 'localhost';
    $dbname = 'funfit_db';
    $username = 'root';
    $password = '';
    define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'] . '/funfit');
  } else {
    define('ROOT_URL', 'https://functionalfitness.co.ke/');
    $host = 'localhost';
    $dbname = 'function_maindb';
    $username = 'function_maindb';
    $password = 'xZgAcsAtGtupwSQwQekx';
    define('ROOT_PATH', dirname(__FILE__));
  }

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Could not connect to the database $dbname: " . $e->getMessage());
  }
?>