<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-02-29 18:42:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-02-29 00:00:00" AND date_commande < "2020-02-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-02-29 18:42:13 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-02-29 18:42:13 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-02-29 18:42:13 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
