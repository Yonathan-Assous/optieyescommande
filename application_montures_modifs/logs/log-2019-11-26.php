<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-11-26 10:07:25 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-26 10:07:25 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
LEFT JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `id_commande` desc
ERROR - 2019-11-26 10:07:46 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-26 10:07:46 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
LEFT JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `id_commande` desc
ERROR - 2019-11-26 10:15:12 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-26 10:15:12 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
LEFT JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `id_commande` desc
ERROR - 2019-11-26 10:28:18 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4243
ERROR - 2019-11-26 10:31:02 --> Severity: Notice  --> Undefined index: name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4243
ERROR - 2019-11-26 10:51:09 --> Severity: Notice  --> Undefined index: name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4258
ERROR - 2019-11-26 10:51:09 --> Query error: Column 'modele' cannot be null - INSERT INTO `montures` (`modele`, `image`, `id_collection`, `type`, `size`, `couleur`, `prix_achat`, `prix_vente`, `stock`) VALUES (NULL, '25ans1.jpg', '6', 'Homme', 'M', 'bleu', '10', '20', '10')
ERROR - 2019-11-26 11:22:48 --> Severity: Warning  --> Missing argument 1 for admin::liste_montures_ajax() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4297
ERROR - 2019-11-26 11:22:48 --> Severity: Notice  --> Undefined variable: id_collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4303
ERROR - 2019-11-26 11:23:17 --> Severity: Warning  --> Missing argument 1 for admin::liste_montures_ajax() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4297
ERROR - 2019-11-26 11:23:17 --> Severity: Notice  --> Undefined variable: id_collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4303
ERROR - 2019-11-26 11:36:14 --> You did not select a file to upload.
ERROR - 2019-11-26 11:36:14 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 11:36:14 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 11:36:14 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 11:37:15 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 11:37:15 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 11:37:15 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 11:37:17 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 11:37:17 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 11:37:17 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 11:38:51 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 11:38:51 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 11:38:51 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 11:41:02 --> You did not select a file to upload.
ERROR - 2019-11-26 11:45:47 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 11:45:47 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 11:45:47 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 11:53:09 --> You did not select a file to upload.
ERROR - 2019-11-26 11:54:30 --> You did not select a file to upload.
ERROR - 2019-11-26 15:57:01 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 11
ERROR - 2019-11-26 15:57:01 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 21
ERROR - 2019-11-26 15:57:01 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 127
ERROR - 2019-11-26 16:03:52 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 11
ERROR - 2019-11-26 16:03:52 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 21
ERROR - 2019-11-26 16:03:52 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 127
ERROR - 2019-11-26 16:17:01 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 126
ERROR - 2019-11-26 16:20:00 --> Severity: Notice  --> Undefined variable: id_collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: modele /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 20
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: couleur /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 24
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: size /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 37
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: stock /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 41
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 49
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 53
ERROR - 2019-11-26 16:20:46 --> Severity: Notice  --> Undefined variable: collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: modele /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 20
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: couleur /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 24
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: size /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 37
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: stock /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 41
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 49
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 53
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:22:31 --> Severity: Notice  --> Undefined variable: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: modele /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 20
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: couleur /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 24
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: size /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 37
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: stock /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 41
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 49
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 53
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:22:56 --> Severity: Notice  --> Undefined variable: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: modele /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 20
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: couleur /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 24
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: size /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 37
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: stock /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 41
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 49
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: prix_achat /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 53
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: collection /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:23:10 --> Severity: Notice  --> Undefined variable: id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/modifier_montures.php 61
ERROR - 2019-11-26 16:30:31 --> You did not select a file to upload.
ERROR - 2019-11-26 16:30:31 --> Severity: Notice  --> Undefined index: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4259
ERROR - 2019-11-26 16:30:31 --> Query error: Column 'id_collection' cannot be null - INSERT INTO `montures` (`modele`, `image`, `id_collection`, `type`, `size`, `couleur`, `prix_achat`, `prix_vente`, `stock`) VALUES ('tqqqq', '', NULL, 'Femme', 'XL', 'rouge', '8.00', '12.00', '5')
ERROR - 2019-11-26 16:40:33 --> You did not select a file to upload.
ERROR - 2019-11-26 16:40:33 --> You did not select a file to upload.
ERROR - 2019-11-26 16:40:33 --> Severity: Notice  --> Undefined variable: lens_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4263
ERROR - 2019-11-26 16:40:33 --> Severity: Notice  --> Undefined index: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 4294
ERROR - 2019-11-26 16:40:33 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:44:18 --> You did not select a file to upload.
ERROR - 2019-11-26 16:44:18 --> You did not select a file to upload.
ERROR - 2019-11-26 16:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `id` =  '3'' at line 2 - SELECT `image`
WHERE `id` =  '3'
ERROR - 2019-11-26 16:44:59 --> You did not select a file to upload.
ERROR - 2019-11-26 16:44:59 --> You did not select a file to upload.
ERROR - 2019-11-26 16:44:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `id` =  '3'' at line 2 - SELECT `image`
WHERE `id` =  '3'
ERROR - 2019-11-26 16:45:52 --> You did not select a file to upload.
ERROR - 2019-11-26 16:45:52 --> You did not select a file to upload.
ERROR - 2019-11-26 16:45:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'WHERE `id` =  '3'' at line 2 - SELECT `image`
WHERE `id` =  '3'
ERROR - 2019-11-26 16:46:46 --> You did not select a file to upload.
ERROR - 2019-11-26 16:46:46 --> You did not select a file to upload.
ERROR - 2019-11-26 16:46:46 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:48:11 --> You did not select a file to upload.
ERROR - 2019-11-26 16:48:11 --> You did not select a file to upload.
ERROR - 2019-11-26 16:48:11 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:49:24 --> You did not select a file to upload.
ERROR - 2019-11-26 16:49:24 --> You did not select a file to upload.
ERROR - 2019-11-26 16:49:24 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:49:34 --> You did not select a file to upload.
ERROR - 2019-11-26 16:49:34 --> You did not select a file to upload.
ERROR - 2019-11-26 16:49:34 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:50:36 --> You did not select a file to upload.
ERROR - 2019-11-26 16:50:36 --> You did not select a file to upload.
ERROR - 2019-11-26 16:50:36 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:52:02 --> You did not select a file to upload.
ERROR - 2019-11-26 16:52:02 --> You did not select a file to upload.
ERROR - 2019-11-26 16:52:02 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:53:01 --> You did not select a file to upload.
ERROR - 2019-11-26 16:53:01 --> You did not select a file to upload.
ERROR - 2019-11-26 16:53:01 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:53:02 --> You did not select a file to upload.
ERROR - 2019-11-26 16:53:02 --> You did not select a file to upload.
ERROR - 2019-11-26 16:53:02 --> Query error: Unknown column 'montures' in 'where clause' - SELECT *
FROM (`montures`)
WHERE `montures` =  '3'
AND `id` =  '3'
ORDER BY `id` asc
ERROR - 2019-11-26 16:57:28 --> You did not select a file to upload.
ERROR - 2019-11-26 16:57:28 --> You did not select a file to upload.
ERROR - 2019-11-26 16:57:52 --> Severity: Notice  --> Undefined variable: collection_name /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 11
ERROR - 2019-11-26 16:57:52 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 21
ERROR - 2019-11-26 16:57:52 --> Severity: Notice  --> Undefined variable: collection_id /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/liste_montures.php 127
ERROR - 2019-11-26 17:00:50 --> You did not select a file to upload.
ERROR - 2019-11-26 17:00:50 --> You did not select a file to upload.
ERROR - 2019-11-26 17:01:09 --> You did not select a file to upload.
ERROR - 2019-11-26 17:01:09 --> You did not select a file to upload.
ERROR - 2019-11-26 17:59:04 --> You did not select a file to upload.
ERROR - 2019-11-26 17:59:04 --> You did not select a file to upload.
ERROR - 2019-11-26 17:59:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "B", type = "Homme", size = "L", couleur = "bleu", ' at line 1 - UPDATE * FROM montures SET modele = "B", type = "Homme", size = "L", couleur = "bleu", prix_achat = "8.00", prix_vente = "15.00",stock = "5" WHERE id = "2"
ERROR - 2019-11-26 18:01:00 --> You did not select a file to upload.
ERROR - 2019-11-26 18:01:00 --> You did not select a file to upload.
ERROR - 2019-11-26 18:01:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", ' at line 1 - UPDATE * FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", prix_achat = "8.00", prix_vente = "15.00",stock = "5" WHERE id = "2"
ERROR - 2019-11-26 18:01:40 --> You did not select a file to upload.
ERROR - 2019-11-26 18:01:40 --> You did not select a file to upload.
ERROR - 2019-11-26 18:01:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", ' at line 1 - UPDATE * FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", prix_achat = "8.00", prix_vente = "15.00",stock = "5" WHERE id = "2"
ERROR - 2019-11-26 18:02:01 --> You did not select a file to upload.
ERROR - 2019-11-26 18:02:01 --> You did not select a file to upload.
ERROR - 2019-11-26 18:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", ' at line 1 - UPDATE * FROM montures SET modele = "A", type = "Enfant", size = "XL", couleur = "bl", prix_achat = "8.00", prix_vente = "15.00",stock = "5" WHERE id = "2"
ERROR - 2019-11-26 18:02:10 --> You did not select a file to upload.
ERROR - 2019-11-26 18:02:10 --> You did not select a file to upload.
ERROR - 2019-11-26 18:02:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "dsd", type = "Femme", size = "XL", couleur = "rosa' at line 1 - UPDATE * FROM montures SET modele = "dsd", type = "Femme", size = "XL", couleur = "rosasuge", prix_achat = "8.00", prix_vente = "15.00",stock = "5" WHERE id = "2"
ERROR - 2019-11-26 18:10:01 --> You did not select a file to upload.
ERROR - 2019-11-26 18:10:01 --> You did not select a file to upload.
ERROR - 2019-11-26 18:10:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "ss", type = "Homme", size = "XL", couleur = "bl", ' at line 1 - UPDATE * FROM montures SET modele = "ss", type = "Homme", size = "XL", couleur = "bl", prix_achat = 8.00, prix_vente = 10.00,stock = "5" WHERE id = "3"
ERROR - 2019-11-26 18:11:08 --> You did not select a file to upload.
ERROR - 2019-11-26 18:11:08 --> You did not select a file to upload.
ERROR - 2019-11-26 18:11:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "ss", type = "Homme", size = "XL", couleur = "bl", ' at line 1 - UPDATE * FROM montures SET modele = "ss", type = "Homme", size = "XL", couleur = "bl", prix_achat = 8.00, prix_vente = 10.00,stock = "5" WHERE id = "3"
ERROR - 2019-11-26 18:11:19 --> You did not select a file to upload.
ERROR - 2019-11-26 18:11:19 --> You did not select a file to upload.
ERROR - 2019-11-26 18:11:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '* FROM montures SET modele = "dddd", type = "Femme", size = "XL", couleur = "rou' at line 1 - UPDATE * FROM montures SET modele = "dddd", type = "Femme", size = "XL", couleur = "rouge", prix_achat = 8.00, prix_vente = 15.00,stock = "5" WHERE id = "3"
ERROR - 2019-11-26 18:16:13 --> You did not select a file to upload.
ERROR - 2019-11-26 18:16:13 --> You did not select a file to upload.
ERROR - 2019-11-26 18:16:23 --> You did not select a file to upload.
ERROR - 2019-11-26 18:16:23 --> You did not select a file to upload.
ERROR - 2019-11-26 18:20:38 --> You did not select a file to upload.
ERROR - 2019-11-26 18:20:59 --> You did not select a file to upload.
ERROR - 2019-11-26 21:09:30 --> You did not select a file to upload.
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 17
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/header.php 74
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 7
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 9
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 10
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 12
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 13
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 19
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 19
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 21
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 22
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 24
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 25
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 30
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 31
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 34
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 35
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 38
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 39
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 50
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/menu.php 51
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 23
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-11-26 21:23:03 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/dashboard.php 2430
