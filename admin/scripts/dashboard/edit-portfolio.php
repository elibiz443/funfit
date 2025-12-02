<?php
  session_start();
  require_once __DIR__ . '/../../../config.php';
  require_once __DIR__ . '/../../helpers/handle_upload.php';
  header('Content-Type: application/json');

  if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $portfolioId = intval($_GET['id']);
    try {
      $stmt = $pdo->prepare("SELECT * FROM portfolio WHERE id = ?");
      $stmt->execute([$portfolioId]);
      $portfolio = $stmt->fetch(PDO::FETCH_ASSOC);
      echo json_encode($portfolio ? ['success' => true, 'portfolio' => $portfolio] : ['success' => false, 'message' => 'Portfolio record not found']);
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: '.$e->getMessage()]);
    }
    exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['form_type'] ?? '') === 'edit_portfolio_form') {
    $uploadsDir = __DIR__ . '/../../../uploads/';
    $portfolioId = intval($_POST['portfolio_id'] ?? 0);
    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');
    if ($portfolioId <= 0) {
      echo json_encode(['success' => false, 'message' => 'Invalid portfolio ID']);
      exit;
    }

    $portfolioImageResult = [];
    if (!empty($_FILES['portfolioImage']['name'])) {
      $portfolioImageResult = handleImageUpload('portfolioImage', $uploadsDir);
    }

    try {
      $query = "UPDATE portfolio SET title = :title, description = :description";
      $params = [':title' => $title, ':description' => $description, ':id' => $portfolioId];
      if (!empty($portfolioImageResult['path'])) {
        $query .= ", portfolioImage = :portfolioImage";
        $params[':portfolioImage'] = $portfolioImageResult['path'];
      }
      $query .= " WHERE id = :id";
      $stmt = $pdo->prepare($query);
      $stmt->execute($params);
      echo json_encode(['success' => true]);
    } catch (PDOException $e) {
      echo json_encode(['success' => false, 'message' => 'Database error: '.$e->getMessage()]);
    }
    exit;
  }

  echo json_encode(['success' => false, 'message' => 'Invalid request']);
  exit;
?>