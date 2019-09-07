CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
  `timestamp` INT(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1000000 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `permissions` (
    `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
    `cms_id` INT(11) NOT NULL,
    `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `user_permission` (
    `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `user_id` bigint NOT NULL,
    `permission_id` INT(11) NOT NULL,
    `status` enum('active', 'blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `posts` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `cover_image` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `url_post` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `content` TEXT NOT NULL,
    `short_content` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
    `view` INT(20) NOT NULL,
    `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `categories` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `url_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `post_categories` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `post_id` INT(11)  NOT NULL,
    `categories_id` INT(11) COLLATE utf8mb4_unicode_ci NOT NULL,
    `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tags` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `post_tags` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `post_id` INT(11)  NOT NULL,
    `tag_id` INT(11)  NOT NULL,
    `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `likes` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `user_id` INT(11)  NOT NULL,
    `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `post_id` INT(11)  NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `comments` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `user_id` INT(11) COLLATE utf8mb4_unicode_ci NOT NULL,
    `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
    `post_id` INT(11)  NOT NULL,
    `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `feedbacks` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `user_id` INT(11)  NOT NULL,
    `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `content` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` enum('active','blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `folows` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `user_id` INT(11) NOT NULL,
    `folow_user_id` INT(11) COLLATE utf8mb4_unicode_ci NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `log_actions` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `user_id` INT(11)  NOT NULL,
    `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `action` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `folow_user_id` INT(11) NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `password_resets` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
    `token` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `tokens` (
    `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `user_id` bigint NOT NULL,
    `access_token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
    `refresh_token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
    `count_refresh` INT(11) NOT NULL,
    `permission_id` INT(11) NOT NULL,
    `expiry` INT(11) NOT NULL,
    `cms_id` INT(11) NOT NULL,
    `status` enum('active', 'blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tokens_scopes` (
    `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `scope_id` INT(11) NOT NULL,
    `token_id` INT(11) NOT NULL,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `scopes` (
    `id` INT(11) unsigned NOT NULL AUTO_INCREMENT,
    `scope_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `scope_mapping` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `table` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
    `status` enum('active', 'blocked') DEFAULT 'active' COLLATE utf8mb4_unicode_ci,
    `timestamp` INT(11) NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
