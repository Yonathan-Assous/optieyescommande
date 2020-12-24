<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-12-09 09:47:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-12-09 00:00:00" AND date_commande < "2020-12-09 2...' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-12-09 00:00:00" AND date_commande < "2020-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
