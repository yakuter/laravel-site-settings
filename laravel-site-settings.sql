DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `settings` (`id`, `option`, `slug`, `value`, `created_at`, `updated_at`)
VALUES
	(1,'Site Name','site_name','Laravel Yakuter',NULL,NULL),
	(2,'Site Url','site_url','https://www.yakuter.com',NULL,NULL),
	(3,'Site Description','site_description','A programming blog',NULL,NULL),
	(4,'Contact Email','contact_email','yakuter@gmail.com',NULL,NULL);