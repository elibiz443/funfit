<?php
  $searchTerm = $_GET['search'] ?? '';
  $page = intval($_GET['page'] ?? 1);
  $perPage = 12;
  $offset = ($page - 1) * $perPage;

  if ($searchTerm) {
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM testimonials WHERE full_name LIKE :search OR description LIKE :search");
    $stmt->execute([':search' => "%$searchTerm%"]);
    $totalTestimonials = (int)$stmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM testimonials WHERE full_name LIKE :search OR description LIKE :search ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':search', "%$searchTerm%", PDO::PARAM_STR);
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $stmt = $pdo->query("SELECT COUNT(*) FROM testimonials");
    $totalTestimonials = (int)$stmt->fetchColumn();

    $stmt = $pdo->prepare("SELECT * FROM testimonials ORDER BY id DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $perPage, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $testimonials = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  $totalPages = ceil($totalTestimonials / $perPage);
?>