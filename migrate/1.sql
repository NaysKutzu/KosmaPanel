CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL DEFAULT 'KosmaPanel',
  `logo` text NOT NULL DEFAULT 'https://avatars.githubusercontent.com/u/117385445',
  `enable_turnstile` enum('false','true') NOT NULL DEFAULT 'false',
  `turnstile_sitekey` text DEFAULT NULL,
  `turnstile_secretkey` text DEFAULT NULL,
  `enable_smtp` enum('false','true') NOT NULL DEFAULT 'false',
  `smtpHost` text DEFAULT NULL,
  `smtpPort` text DEFAULT NULL,
  `smtpSecure` enum('ssl','tls') DEFAULT 'ssl',
  `smtpUsername` text DEFAULT NULL,
  `smtpPassword` text DEFAULT NULL,
  `fromEmail` text DEFAULT NULL,
  `version` text DEFAULT '1.0.0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `settings` (`name`, `logo`) VALUES ('KosmaPanel', 'https://avatars.githubusercontent.com/u/117385445');