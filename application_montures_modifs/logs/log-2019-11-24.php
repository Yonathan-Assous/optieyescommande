<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-11-24 22:18:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-11-24 00:00:00" AND date_commande < "2019-11-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-11-24 00:00:00" AND date_commande < "2019-11-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-11-24 22:18:09 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT SUM(total_commande) AS total_commande
FROM (`commande`)
WHERE `montures_id` > 0
AND DATE_FORMAT(date_commande, "%Y-%m") = '2019-11'
ERROR - 2019-11-24 22:18:09 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT SUM(total_commande) AS total_commande
FROM (`commande`)
WHERE `montures_id` > 0
AND `date_commande` > '2019-11-24'
AND `date_commande` < '2019-11-24 23:59:59'
ERROR - 2019-11-24 22:18:09 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-11-24 22:18:09 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-11-24 22:18:09 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-11-24 22:18:55 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-24 22:18:55 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
LEFT JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `id_commande` desc
ERROR - 2019-11-24 22:51:04 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 22:53:35 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 22:54:51 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 22:56:13 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 22:57:19 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 22:58:45 --> Query error: Unknown column 'generation_id' in 'where clause' - SELECT *
FROM (`montures` AS l)
JOIN `montures_collection` AS b ON `b`.`id` = `l`.`id_collection`
WHERE `generation_id` =  '1'
ORDER BY `id` asc
ERROR - 2019-11-24 23:32:44 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:32:44 --> Severity: Notice  --> Undefined variable: args /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:32:44 --> Severity: Warning  --> array_merge(): Argument #2 is not an array /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:32:44 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 77
ERROR - 2019-11-24 23:34:28 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:34:28 --> Severity: Notice  --> Undefined variable: args /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:34:28 --> Severity: Warning  --> array_merge(): Argument #2 is not an array /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:34:28 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 77
ERROR - 2019-11-24 23:37:43 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:37:43 --> Severity: Notice  --> Undefined variable: args /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:37:43 --> Severity: Warning  --> array_merge(): Argument #2 is not an array /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:37:43 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 77
ERROR - 2019-11-24 23:38:13 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:38:13 --> Severity: Notice  --> Undefined variable: args /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:38:13 --> Severity: Warning  --> array_merge(): Argument #2 is not an array /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 72
ERROR - 2019-11-24 23:38:13 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 77
ERROR - 2019-11-24 23:40:45 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:41:50 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:44:29 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
ERROR - 2019-11-24 23:49:41 --> Severity: Warning  --> Missing argument 1 for m_montures::get_Collection(), called in /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php on line 4279 and defined /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_montures.php 66
