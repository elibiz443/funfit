<?php
  require_once __DIR__ . '/../../../config.php';
  session_start();

  if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Invalid contact ID.'
    ];
    header("Location: " . ROOT_URL . "/dashboard/contacts");
    exit;
  }

  $contactId = intval($_GET['id']);

  try {
    $stmt = $pdo->prepare("SELECT id FROM contacts WHERE id = ?");
    $stmt->execute([$contactId]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$contact) {
      $_SESSION['message'] = [
        'type' => 'error',
        'text' => 'Contact not found.'
      ];
      header("Location: " . ROOT_URL . "/dashboard/contacts");
      exit;
    }

    $deleteStmt = $pdo->prepare("DELETE FROM contacts WHERE id = ?");
    $deleteStmt->execute([$contactId]);

    $_SESSION['message'] = [
      'type' => 'success',
      'text' => 'Contact deleted successfully!'
    ];
    header("Location: " . ROOT_URL . "/dashboard/contacts");
    exit;
  } catch (PDOException $e) {
    $_SESSION['message'] = [
      'type' => 'error',
      'text' => 'Database error: ' . $e->getMessage()
    ];
    header("Location: " . ROOT_URL . "/dashboard/contacts");
    exit;
  }
?>