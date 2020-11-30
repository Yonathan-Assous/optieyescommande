<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-12-01 00:03:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-12-01 00:03:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '11-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '11-2019'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-12-01 00:03:12 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/optieyescommande.com/httpdocs/application/core/MY_Controller.php 60
ERROR - 2019-12-01 00:39:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:39:51 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-01 00:39:51 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-01 00:39:51 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-01 00:39:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 00:40:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 03:33:54 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 08:39:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-01 00:00:00" AND date_commande < "2019-12-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 08:39:26 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-01 08:39:26 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-01 08:39:26 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-01 10:01:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =324
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:10:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:12:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:23:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 10:33:06 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 10:37:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:39:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:41:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:42:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:43:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =430
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =430
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:44:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:45:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:46:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:49:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:51:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 10:52:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =239
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =239
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 11:03:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 11:22:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =191
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =191
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 11:35:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =153
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =153
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 11:38:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =430
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =430
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 11:59:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =173
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =173
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:03:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =364
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =364
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:03:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =153
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =153
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 12:18:27 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 12:18:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =138
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =138
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:20:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =138
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =138
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:25:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =46
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:27:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =438
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =438
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:27:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =145
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =145
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:32:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =145
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =145
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =234
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =234
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:34:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =324
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:35:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =324
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =324
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:38:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =438
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =438
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:43:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =46
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:45:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =46
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:45:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:45:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:47:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:48:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =78
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =78
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:56:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:57:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 12:58:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =314
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =314
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:09:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =27
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =27
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:15:02 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:15:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =446
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =446
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:20:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =152
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =152
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:20:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =18
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =18
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:20:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =18
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =18
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:27:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =154
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =154
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:31:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =237
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =237
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 13:39:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 14:00:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =373
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =373
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 14:01:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 14:02:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =154
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =154
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 14:02:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =373
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =373
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 14:54:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =370
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 15:01:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =237
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =237
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 15:46:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =311
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 15:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 15:56:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 15:58:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =370
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =370
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:03:29 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2209
ERROR - 2019-12-01 16:17:00 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-01 16:17:00 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2227
ERROR - 2019-12-01 16:27:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =348
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =348
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 16:28:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =249
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =249
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 16:28:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =348
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =348
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 16:41:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =308
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =308
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 17:00:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =345
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =345
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 17:15:10 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 17:36:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =339
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =339
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 17:37:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =339
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =339
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 17:37:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =339
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =339
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 17:37:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =339
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =339
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 19:32:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =320
                                   ORDER BY date_commande DE' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
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
                                   WHERE c.id_commande= AND c.id_users =320
                                   ORDER BY date_commande DESC
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 19
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 21
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 34
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 35
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 38
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 39
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 50
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 51
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 65
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 23
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 36
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 79
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 95
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 103
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1871
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 20:04:12 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2430
ERROR - 2019-12-01 20:39:19 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-01 20:39:19 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-01 20:39:19 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-01 20:39:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-09 00:00:00" AND date_commande < "2019-12-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-01 20:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
