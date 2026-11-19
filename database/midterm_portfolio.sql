SET NAMES utf8mb4;

CREATE TABLE IF NOT EXISTS `profile` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(500) NOT NULL,
  `display_name` VARCHAR(500) NOT NULL,
  `intro` TEXT NOT NULL,
  `bio` TEXT NOT NULL,
  `age_note` VARCHAR(500) NOT NULL,
  `location` VARCHAR(500) NOT NULL,
  `email` VARCHAR(500) NOT NULL,
  `phone` VARCHAR(500) NOT NULL,
  `goals` TEXT NOT NULL,
  `interests` TEXT NOT NULL,
  `study_note` VARCHAR(500) NOT NULL,
  `roles` VARCHAR(500) NOT NULL,
  `facebook` VARCHAR(500) NOT NULL,
  `instagram` VARCHAR(500) NOT NULL,
  `photo` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `settings` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `site_title` VARCHAR(500) NOT NULL,
  `logo_text` VARCHAR(500) NOT NULL,
  `logo_accent` VARCHAR(500) NOT NULL,
  `logo_image` VARCHAR(500) NOT NULL,
  `accent` VARCHAR(500) NOT NULL,
  `theme` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `skills` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(500) NOT NULL,
  `category` VARCHAR(500) NOT NULL,
  `level` TINYINT UNSIGNED NOT NULL,
  `icon` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `projects` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(500) NOT NULL,
  `category` VARCHAR(500) NOT NULL,
  `description` TEXT NOT NULL,
  `technologies` VARCHAR(500) NOT NULL,
  `image` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `education` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(500) NOT NULL,
  `organization` VARCHAR(500) NOT NULL,
  `period` VARCHAR(500) NOT NULL,
  `description` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `experience` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(500) NOT NULL,
  `organization` VARCHAR(500) NOT NULL,
  `period` VARCHAR(500) NOT NULL,
  `description` TEXT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `achievements` (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` VARCHAR(500) NOT NULL,
  `organization` VARCHAR(500) NOT NULL,
  `period` VARCHAR(500) NOT NULL,
  `description` VARCHAR(500) NOT NULL,
  `image` VARCHAR(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS admins (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(80) NOT NULL UNIQUE,
 password_hash VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS messages (
 id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 name VARCHAR(120) NOT NULL,
 email VARCHAR(254) NOT NULL,
 subject VARCHAR(200) NOT NULL,
 message TEXT NOT NULL,
 is_read TINYINT(1) NOT NULL DEFAULT 0,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS request_limits (
 bucket CHAR(64) PRIMARY KEY,
 hits INT UNSIGNED NOT NULL,
 expires_at BIGINT UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO profile (id,full_name,display_name,intro,bio,age_note,location,email,phone,goals,interests,study_note,roles,facebook,instagram,photo) VALUES (1,'Portfolio owner','Portfolio owner','Add your original introduction in the admin dashboard.','','','','','','','','','','','','');
INSERT IGNORE INTO settings (id,site_title,logo_text,logo_accent,logo_image,accent,theme) VALUES (1,'Personal Portfolio','My','Portfolio','','green','light');
