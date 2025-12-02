<?php
  $contacts = [];
  $contactsPerPage = 12;

  $current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;

  $offset = ($current_page - 1) * $contactsPerPage;

  try {
    $countStmt = $pdo->query("SELECT COUNT(*) FROM contacts");
    $totalContacts = (int)$countStmt->fetchColumn();

    $totalPages = ceil($totalContacts / $contactsPerPage);

    $stmt = $pdo->prepare("SELECT * FROM contacts ORDER BY created_at DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $contactsPerPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

  } catch (PDOException $e) {
    echo "Error fetching contacts: " . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8');
  }
?>