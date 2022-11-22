CREATE TABLE `editor` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `content` text COLLATE utf8_unicode_ci NOT NULL,
 `created` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
