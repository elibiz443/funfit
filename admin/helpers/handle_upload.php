<?php
  function handleImageUpload($fileInputName, $uploadsDir, $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp']) {
    if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
      $image = $_FILES[$fileInputName];
      $fileInfo = pathinfo($image['name']);
      $fileExtension = strtolower($fileInfo['extension']);

      if (!in_array($fileExtension, $allowedExtensions)) {
        return ['error' => 'Invalid file type for ' . $fileInputName . '.'];
      }

      if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0755, true);
      }

      $fileName = uniqid($fileInputName . '-') . '.webp';
      $targetPath = rtrim($uploadsDir, '/') . '/' . $fileName;

      $mimeType = mime_content_type($image['tmp_name']);
      $imageResource = null;
      $conversionSuccess = false;

      switch ($mimeType) {
        case 'image/webp':
          if (function_exists('imagecreatefromwebp')) {
            $imageResource = @imagecreatefromwebp($image['tmp_name']);
          }
          break;
        case 'image/jpeg':
        case 'image/jpg':
          $imageResource = @imagecreatefromjpeg($image['tmp_name']);
          break;
        case 'image/png':
          $imageResource = @imagecreatefrompng($image['tmp_name']);
          break;
        case 'image/gif':
          $imageResource = @imagecreatefromgif($image['tmp_name']);
          break;
      }

      if ($imageResource && function_exists('imagewebp')) {
        $conversionSuccess = imagewebp($imageResource, $targetPath, 85);
        imagedestroy($imageResource);
      }

      if (!$conversionSuccess) {
        if (!move_uploaded_file($image['tmp_name'], $targetPath)) {
          return ['error' => 'Failed to save image.'];
        }
      }

      return ['path' => '/uploads/' . $fileName];
    } elseif (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] !== UPLOAD_ERR_NO_FILE) {
      return ['error' => 'File upload error: code ' . $_FILES[$fileInputName]['error']];
    }

    return ['path' => null];
  }
?>