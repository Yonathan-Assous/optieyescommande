<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-11-17 08:09:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-11-17 00:00:00" AND date_commande < "2019-11-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-11-17 00:00:00" AND date_commande < "2019-11-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-11-17 08:09:41 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-11-17 08:09:41 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-11-17 08:09:41 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-11-17 08:10:57 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 08:36:49 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 08:36:49 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined property: admin::$montures_config /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7304
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:36:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined property: admin::$montures_config /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7304
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 08:39:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:17:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:17:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined property: admin::$montures_config /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7304
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:17:43 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:39 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7191
ERROR - 2019-11-17 09:18:40 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:18:40 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7209
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined property: admin::$montures_config /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7304
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 74
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 76
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 98
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:18:42 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/ajax_show_lens_order.php 101
ERROR - 2019-11-17 09:53:48 --> Severity: Notice  --> Undefined property: admin::$montures_config /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7370
ERROR - 2019-11-17 09:53:48 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7383
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7437
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7437
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7419
ERROR - 2019-11-17 10:00:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7437
ERROR - 2019-11-17 10:00:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7437
ERROR - 2019-11-17 10:01:24 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `check_date` asc
ERROR - 2019-11-17 10:01:24 --> Query error: Unknown column 'montures_id' in 'where clause' - SELECT `c`.*, `cc`.`id_commande` as cid, `cc`.`commentaire`, `montures`.*, `montures_check`.*
FROM (`commande` c)
JOIN `montures` ON `montures`.`id` = `c`.`montures_id`
LEFT JOIN `montures_check` ON `c`.`id_commande` = `montures_check`.`order_id`
LEFT JOIN `commande_commentaire` cc ON `cc`.`id_commande` = `c`.`id_commande`
WHERE `id_etat_commande` < 6
AND `montures_id` > 0
AND `id_verre` IS NULL
ORDER BY `id_commande` desc
