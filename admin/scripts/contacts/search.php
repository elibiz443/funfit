<?php
  $searchTerm = $_GET['search'] ?? '';
  $page = intval($_GET['page'] ?? 1);
  $perPage = 12;
  $offset = ($page - 1) * $perPage;

  if ($searchTerm) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM contacts WHERE full_name LIKE :search OR message LIKE :search");
    $stmt->execute([':search' => "%$searchTerm%"]);
    $totalContacts = (int)$stmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM contacts WHERE full_name LIKE :search OR message LIKE :search ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':search', "%$searchTerm%", PDO::PARAM_STR);
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $stmt = $pdo->query("SELECT COUNT(*) FROM contacts");
    $totalContacts = (int)$stmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM contacts ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $totalPages = ceil($totalContacts / $perPage);
?>