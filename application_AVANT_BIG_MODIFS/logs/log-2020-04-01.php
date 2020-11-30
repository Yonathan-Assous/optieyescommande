<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-04-01 00:00:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 00:00:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '482'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '482'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '482'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 00:19:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-08 00:00:00" AND date_commande < "2020-03-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-08 00:00:00" AND date_commande < "2020-03-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-09 00:00:00" AND date_commande < "2020-03-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-09 00:00:00" AND date_commande < "2020-03-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-13 00:00:00" AND date_commande < "2020-03-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-13 00:00:00" AND date_commande < "2020-03-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-14 00:00:00" AND date_commande < "2020-03-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-14 00:00:00" AND date_commande < "2020-03-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-15 00:00:00" AND date_commande < "2020-03-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-15 00:00:00" AND date_commande < "2020-03-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-16 00:00:00" AND date_commande < "2020-03-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-16 00:00:00" AND date_commande < "2020-03-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-17 00:00:00" AND date_commande < "2020-03-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-17 00:00:00" AND date_commande < "2020-03-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-18 00:00:00" AND date_commande < "2020-03-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-18 00:00:00" AND date_commande < "2020-03-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-19 00:00:00" AND date_commande < "2020-03-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-19 00:00:00" AND date_commande < "2020-03-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-20 00:00:00" AND date_commande < "2020-03-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-20 00:00:00" AND date_commande < "2020-03-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-21 00:00:00" AND date_commande < "2020-03-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-21 00:00:00" AND date_commande < "2020-03-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-22 00:00:00" AND date_commande < "2020-03-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-22 00:00:00" AND date_commande < "2020-03-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-23 00:00:00" AND date_commande < "2020-03-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-23 00:00:00" AND date_commande < "2020-03-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-24 00:00:00" AND date_commande < "2020-03-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-24 00:00:00" AND date_commande < "2020-03-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-25 00:00:00" AND date_commande < "2020-03-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-25 00:00:00" AND date_commande < "2020-03-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-26 00:00:00" AND date_commande < "2020-03-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-26 00:00:00" AND date_commande < "2020-03-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-27 00:00:00" AND date_commande < "2020-03-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-27 00:00:00" AND date_commande < "2020-03-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-28 00:00:00" AND date_commande < "2020-03-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-28 00:00:00" AND date_commande < "2020-03-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-30 00:00:00" AND date_commande < "2020-03-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-30 00:00:00" AND date_commande < "2020-03-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-31 00:00:00" AND date_commande < "2020-03-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-31 00:00:00" AND date_commande < "2020-03-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-08 00:00:00" AND date_commande < "2020-03-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-08 00:00:00" AND date_commande < "2020-03-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-09 00:00:00" AND date_commande < "2020-03-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-09 00:00:00" AND date_commande < "2020-03-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-13 00:00:00" AND date_commande < "2020-03-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-13 00:00:00" AND date_commande < "2020-03-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-14 00:00:00" AND date_commande < "2020-03-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-14 00:00:00" AND date_commande < "2020-03-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-15 00:00:00" AND date_commande < "2020-03-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-15 00:00:00" AND date_commande < "2020-03-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-16 00:00:00" AND date_commande < "2020-03-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-16 00:00:00" AND date_commande < "2020-03-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-17 00:00:00" AND date_commande < "2020-03-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-17 00:00:00" AND date_commande < "2020-03-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-18 00:00:00" AND date_commande < "2020-03-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-18 00:00:00" AND date_commande < "2020-03-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-19 00:00:00" AND date_commande < "2020-03-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-19 00:00:00" AND date_commande < "2020-03-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-20 00:00:00" AND date_commande < "2020-03-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-20 00:00:00" AND date_commande < "2020-03-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-21 00:00:00" AND date_commande < "2020-03-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-21 00:00:00" AND date_commande < "2020-03-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-22 00:00:00" AND date_commande < "2020-03-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-22 00:00:00" AND date_commande < "2020-03-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-23 00:00:00" AND date_commande < "2020-03-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-23 00:00:00" AND date_commande < "2020-03-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-24 00:00:00" AND date_commande < "2020-03-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-24 00:00:00" AND date_commande < "2020-03-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-25 00:00:00" AND date_commande < "2020-03-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-25 00:00:00" AND date_commande < "2020-03-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-26 00:00:00" AND date_commande < "2020-03-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-26 00:00:00" AND date_commande < "2020-03-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-27 00:00:00" AND date_commande < "2020-03-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-27 00:00:00" AND date_commande < "2020-03-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-28 00:00:00" AND date_commande < "2020-03-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-28 00:00:00" AND date_commande < "2020-03-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-30 00:00:00" AND date_commande < "2020-03-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-30 00:00:00" AND date_commande < "2020-03-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:19:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-03-31 00:00:00" AND date_commande < "2020-03-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-03-31 00:00:00" AND date_commande < "2020-03-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 00:45:22 --> Query error: Duplicate entry '0-2020-04-01' for key 'PRIMARY' - INSERT INTO `commande_pointage` (`id_commande`, `date_pointage`) VALUES ('Mr. Maxine Darmon', CURRENT_DATE());
ERROR - 2020-04-01 00:54:44 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2020-04-01 09:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 09:46:42 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-04-01 09:46:42 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-04-01 09:46:42 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 10:26:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 10:26:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 10:26:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 10:26:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 10:43:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-01 00:00:00" AND date_commande < "2020-04-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-02 00:00:00" AND date_commande < "2020-04-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-03 00:00:00" AND date_commande < "2020-04-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:43:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-04 00:00:00" AND date_commande < "2020-04-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-05 00:00:00" AND date_commande < "2020-04-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-06 00:00:00" AND date_commande < "2020-04-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-07 00:00:00" AND date_commande < "2020-04-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-08 00:00:00" AND date_commande < "2020-04-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-09 00:00:00" AND date_commande < "2020-04-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-10 00:00:00" AND date_commande < "2020-04-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-11 00:00:00" AND date_commande < "2020-04-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-12 00:00:00" AND date_commande < "2020-04-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-13 00:00:00" AND date_commande < "2020-04-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-14 00:00:00" AND date_commande < "2020-04-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-15 00:00:00" AND date_commande < "2020-04-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-16 00:00:00" AND date_commande < "2020-04-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-17 00:00:00" AND date_commande < "2020-04-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-18 00:00:00" AND date_commande < "2020-04-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-19 00:00:00" AND date_commande < "2020-04-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-20 00:00:00" AND date_commande < "2020-04-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-21 00:00:00" AND date_commande < "2020-04-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-22 00:00:00" AND date_commande < "2020-04-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-23 00:00:00" AND date_commande < "2020-04-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-24 00:00:00" AND date_commande < "2020-04-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-25 00:00:00" AND date_commande < "2020-04-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-26 00:00:00" AND date_commande < "2020-04-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-27 00:00:00" AND date_commande < "2020-04-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-28 00:00:00" AND date_commande < "2020-04-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-29 00:00:00" AND date_commande < "2020-04-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 10:44:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-04-30 00:00:00" AND date_commande < "2020-04-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:38:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:39:04 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:39:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:39:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:39:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:39:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:39:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:39:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:39:34 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:40:57 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:41:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:41:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:42:21 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:42:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:43:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:43:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:43:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:43:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:43:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:43:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:45:58 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:46:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:47:41 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:47:44 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:48:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:48:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:48:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:48:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:48:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:48:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:50:25 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:50:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:51:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 11:57:44 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:57:55 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 11:59:13 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:59:13 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:59:13 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:59:13 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:59:13 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 11:59:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:00:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 12:00:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 12:01:27 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:01:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:02:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:08:45 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:08:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:09:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:10:41 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:10:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:11:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:12:57 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:13:10 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:16:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:16:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:16:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:16:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:16:47 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:18:52 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:19:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:19:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:19:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:19:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:19:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:19:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:19:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:20:41 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:21:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:21:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:21:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:21:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:21:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:22:04 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:22:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:23:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:23:38 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 373
ERROR - 2020-04-01 12:24:38 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:24:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:28:06 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:28:53 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:28:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:29:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:30:18 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:30:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:32:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:32:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:32:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:32:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:32:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:32:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:33:14 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:33:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:33:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:33:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:34:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:34:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:35:15 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:37:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =417
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =417
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:38:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:38:25 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:38:25 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:38:25 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:38:25 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:38:25 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 12:38:28 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:38:31 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:38:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =383
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =383
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 12:41:45 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 12:41:50 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:05:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 13:05:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 13:06:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 13:06:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 13:06:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 13:06:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 13:06:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 13:06:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:19:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:20:09 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 13:20:09 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 13:20:09 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 13:20:09 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 13:20:09 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 13:20:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =400
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =400
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 13:21:04 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:21:07 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:50:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:50:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 13:51:21 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:51:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:51:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:51:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =222
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =222
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 13:51:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:13:58 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:13:58 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:14:44 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:14:44 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:15:45 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:16:33 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:16:33 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:19:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:19:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:21:23 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:21:23 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:21:38 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:21:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2867
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: data /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2896
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: order_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 4
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: order_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 5
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: client_ref /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 22
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 36
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 36
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 54
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 54
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 56
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 56
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 71
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 54
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 54
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 56
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 56
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 71
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 72
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: lens /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: build /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 75
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 86
ERROR - 2020-04-01 14:21:39 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/layout/commande-lentilles-detail.php 86
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 14:22:59 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:22:59 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 14:27:32 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:27:32 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/models/m_commande.php 2900
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:31:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =361
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =361
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 14:32:20 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:32:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:46:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =361
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =361
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 14:46:26 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 14:46:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 15:22:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 15:22:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '354'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:08:08 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:08:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =233
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =233
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 16:08:55 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:08:58 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:09:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =233
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =233
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 16:09:55 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:09:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:10:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =233
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =233
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 16:10:56 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:10:59 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 16:23:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =398
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =398
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 18:32:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 18:32:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 18:32:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 18:32:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 18:32:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 18:32:43 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-01 18:32:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =331
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =331
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 18:34:03 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 18:38:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 18:38:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 18:39:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 18:39:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 18:40:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-01 18:40:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 18:52:48 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 18:53:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =193
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =193
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 18:54:02 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 18:54:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 19:46:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 19:49:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 19:49:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique, v.gtin
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN (
                                            SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise v
                                            WHERE v.id_users = id_users
                                   ) as verres_generation_personnalise
                                   ON (
                                    c.id_users = idusers AND c.id_generation_verre= idgenerationverre
                                   )
                                   LEFT JOIN intitule_bl ib ON c.id_commande = ib.id_commande
                                   WHERE c.id_commande= AND c.id_users =147
                                   ORDER BY date_commande DESC
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-04-01 19:59:05 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 19:59:05 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-01 21:15:56 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
