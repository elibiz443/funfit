SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(255) DEFAULT NULL,
  `username` VARCHAR(50) DEFAULT NULL,
  `role` ENUM('admin', 'guest') DEFAULT 'guest',
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci AUTO_INCREMENT=1;

INSERT INTO `users` (`id`, `full_name`, `username`, `role`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'E37 Tech', 'supreme_admin', 'admin', 'info@e37tech.com', '$2y$10$elg5kNNryJh/YZxTjcxIy.m5HnLyEvtyAb1wv/g8MF5rOUVHHGFeC', NOW(), NOW());

-- Ensure uniqueness for username and email
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

COMMIT;