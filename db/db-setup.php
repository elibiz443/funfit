<?php
  require __DIR__ . '/../config.php';

  try {
    $pdo->exec("DROP DATABASE IF EXISTS $dbname");
    $pdo->exec("CREATE DATABASE $dbname");
    $pdo->exec("USE $dbname");

    function importSQLFile($pdo, $filePath) {
      $sql = file_get_contents($filePath);
      if ($sql === false) {
        die("Error reading file: $filePath");
      }

      try {
        $pdo->exec($sql);
      } catch (PDOException $e) {
        die("Error in file: $filePath\nSQLSTATE: " . $e->getCode() . "\nMessage: " . $e->getMessage());
      }
    }

    $sqlFiles = [
      'users.sql', 'gallery.sql'
    ];

    foreach ($sqlFiles as $file) {
      importSQLFile($pdo, __DIR__ . "/../db/$file");
    }

    echo "Database reset and seeded successfully.";

  } catch (PDOException $e) {
    die("Database operation failed: " . $e->getMessage());
  }
?>
