<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2021-08-29 02:03:56 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('389', 1630188000, 1630195436, 1) ON DUPLICATE KEY UPDATE login_time = 1630195436, login_count = login_count +1 
ERROR - 2021-08-29 02:04:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs_new/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2021-08-29 02:04:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '05-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '05-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 09:07:07 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 09:59:53 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('115', 1630188000, 1630223993, 1) ON DUPLICATE KEY UPDATE login_time = 1630223993, login_count = login_count +1 
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 10:14:08 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:27:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:28:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:29:23 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('153', 1630188000, 1630225763, 1) ON DUPLICATE KEY UPDATE login_time = 1630225763, login_count = login_count +1 
ERROR - 2021-08-29 10:42:58 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('431', 1630188000, 1630226578, 1) ON DUPLICATE KEY UPDATE login_time = 1630226578, login_count = login_count +1 
ERROR - 2021-08-29 10:46:02 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('173', 1630188000, 1630226762, 1) ON DUPLICATE KEY UPDATE login_time = 1630226762, login_count = login_count +1 
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 10:46:14 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 10:46:14 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 10:49:41 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('446', 1630188000, 1630226981, 1) ON DUPLICATE KEY UPDATE login_time = 1630226981, login_count = login_count +1 
ERROR - 2021-08-29 10:52:00 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('430', 1630188000, 1630227120, 1) ON DUPLICATE KEY UPDATE login_time = 1630227120, login_count = login_count +1 
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:52:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:53:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:53:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:53:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:55:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:55:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 10:55:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:02:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:05:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:06:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:07:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:08:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:10:55 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('431', 1630188000, 1630228255, 1) ON DUPLICATE KEY UPDATE login_time = 1630228255, login_count = login_count +1 
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5226
ERROR - 2021-08-29 11:11:19 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 11:11:19 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 5244
ERROR - 2021-08-29 11:13:25 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('115', 1630188000, 1630228405, 1) ON DUPLICATE KEY UPDATE login_time = 1630228405, login_count = login_count +1 
ERROR - 2021-08-29 11:13:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:13:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:13:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:14:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:14:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:14:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:25:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:27:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:33:37 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('115', 1630188000, 1630229617, 1) ON DUPLICATE KEY UPDATE login_time = 1630229617, login_count = login_count +1 
ERROR - 2021-08-29 11:34:39 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('153', 1630188000, 1630229679, 1) ON DUPLICATE KEY UPDATE login_time = 1630229679, login_count = login_count +1 
ERROR - 2021-08-29 11:34:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:51 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:34:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:34:55 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:18 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:19 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:22 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:27 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:45 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:46 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:51 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:35:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:35:55 --> Severity: Warning  --> Invalid argument supplied for foreach() /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 792
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:36:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:38:39 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('474', 1630188000, 1630229919, 1) ON DUPLICATE KEY UPDATE login_time = 1630229919, login_count = login_count +1 
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:39:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:00 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('78', 1630188000, 1630230240, 1) ON DUPLICATE KEY UPDATE login_time = 1630230240, login_count = login_count +1 
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('145', 1630188000, 1630230270, 1) ON DUPLICATE KEY UPDATE login_time = 1630230270, login_count = login_count +1 
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:44:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:45:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:18 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:46:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 11:56:20 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 12:05:47 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('177', 1630188000, 1630231547, 1) ON DUPLICATE KEY UPDATE login_time = 1630231547, login_count = login_count +1 
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:06:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:14:44 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('431', 1630188000, 1630232084, 1) ON DUPLICATE KEY UPDATE login_time = 1630232084, login_count = login_count +1 
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:15:58 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('151', 1630188000, 1630232158, 1) ON DUPLICATE KEY UPDATE login_time = 1630232158, login_count = login_count +1 
ERROR - 2021-08-29 12:20:47 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('78', 1630188000, 1630232447, 1) ON DUPLICATE KEY UPDATE login_time = 1630232447, login_count = login_count +1 
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:22:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:24:55 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('430', 1630188000, 1630232695, 1) ON DUPLICATE KEY UPDATE login_time = 1630232695, login_count = login_count +1 
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:26:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:29:45 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('27', 1630188000, 1630232985, 1) ON DUPLICATE KEY UPDATE login_time = 1630232985, login_count = login_count +1 
ERROR - 2021-08-29 12:30:09 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('151', 1630188000, 1630233009, 1) ON DUPLICATE KEY UPDATE login_time = 1630233009, login_count = login_count +1 
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:31:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:21 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:32:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:13 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('331', 1630188000, 1630233373, 1) ON DUPLICATE KEY UPDATE login_time = 1630233373, login_count = login_count +1 
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:36:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:38:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:39:35 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('191', 1630188000, 1630233575, 1) ON DUPLICATE KEY UPDATE login_time = 1630233575, login_count = login_count +1 
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:42 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:40:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:13 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:42:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:43:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs_new/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2021-08-29 12:43:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2021'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2021'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 12:48:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs_new/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2021-08-29 12:48:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2021'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2021'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2021-08-29 12:48:37 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('466', 1630188000, 1630234117, 1) ON DUPLICATE KEY UPDATE login_time = 1630234117, login_count = login_count +1 
ERROR - 2021-08-29 13:19:56 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('580', 1630188000, 1630235996, 1) ON DUPLICATE KEY UPDATE login_time = 1630235996, login_count = login_count +1 
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 13:34:07 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 13:39:08 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('177', 1630188000, 1630237148, 1) ON DUPLICATE KEY UPDATE login_time = 1630237148, login_count = login_count +1 
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:39:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 13:44:47 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 13:50:24 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('115', 1630188000, 1630237824, 1) ON DUPLICATE KEY UPDATE login_time = 1630237824, login_count = login_count +1 
ERROR - 2021-08-29 13:58:53 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('474', 1630188000, 1630238333, 1) ON DUPLICATE KEY UPDATE login_time = 1630238333, login_count = login_count +1 
ERROR - 2021-08-29 13:58:57 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('78', 1630188000, 1630238337, 1) ON DUPLICATE KEY UPDATE login_time = 1630238337, login_count = login_count +1 
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:14 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:15 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 13:59:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 14:15:45 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:17:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:25 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:27 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:18:29 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:22:41 --> Severity: Notice  --> Undefined variable: teinte_D /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/reorder.php 126
ERROR - 2021-08-29 14:22:41 --> Severity: Notice  --> Undefined variable: teinte_G /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/reorder.php 144
ERROR - 2021-08-29 14:25:56 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('331', 1630188000, 1630239956, 1) ON DUPLICATE KEY UPDATE login_time = 1630239956, login_count = login_count +1 
ERROR - 2021-08-29 14:37:47 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('491', 1630188000, 1630240667, 1) ON DUPLICATE KEY UPDATE login_time = 1630240667, login_count = login_count +1 
ERROR - 2021-08-29 14:38:22 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('442', 1630188000, 1630240702, 1) ON DUPLICATE KEY UPDATE login_time = 1630240702, login_count = login_count +1 
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:10 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:40:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:05 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 14:51:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:27:21 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('491', 1630188000, 1630243641, 1) ON DUPLICATE KEY UPDATE login_time = 1630243641, login_count = login_count +1 
ERROR - 2021-08-29 15:29:01 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('504', 1630188000, 1630243741, 1) ON DUPLICATE KEY UPDATE login_time = 1630243741, login_count = login_count +1 
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:30:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:49:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs_new/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2021-08-29 15:49:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '442'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2021'
            AND id_etat_commande = 6
            AND id_users = '442'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2021' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2021'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2021'
        AND id_etat_commande = 6
        AND id_users = '442'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 15:50:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:03:58 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('269', 1630188000, 1630245838, 1) ON DUPLICATE KEY UPDATE login_time = 1630245838, login_count = login_count +1 
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:32 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:37 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:40 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:41 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:06:45 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:38:26 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('580', 1630188000, 1630247906, 1) ON DUPLICATE KEY UPDATE login_time = 1630247906, login_count = login_count +1 
ERROR - 2021-08-29 16:38:39 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('344', 1630188000, 1630247919, 1) ON DUPLICATE KEY UPDATE login_time = 1630247919, login_count = login_count +1 
ERROR - 2021-08-29 16:39:12 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('237', 1630188000, 1630247952, 1) ON DUPLICATE KEY UPDATE login_time = 1630247952, login_count = login_count +1 
ERROR - 2021-08-29 16:58:22 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('580', 1630188000, 1630249102, 1) ON DUPLICATE KEY UPDATE login_time = 1630249102, login_count = login_count +1 
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:03 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 16:59:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:00:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:01 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:01:55 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:01:55 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:02:08 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:02:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:02:08 --> Severity: Notice  --> Undefined offset: 0 /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:02:08 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_teinte.php 151
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:02:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:04:49 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('269', 1630188000, 1630249489, 1) ON DUPLICATE KEY UPDATE login_time = 1630249489, login_count = login_count +1 
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:22 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:07:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 17:31:11 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 17:37:52 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('370', 1630188000, 1630251472, 1) ON DUPLICATE KEY UPDATE login_time = 1630251472, login_count = login_count +1 
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:30 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:31 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:33 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:38:35 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:39:31 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('491', 1630188000, 1630251571, 1) ON DUPLICATE KEY UPDATE login_time = 1630251571, login_count = login_count +1 
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:02 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:04 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:06 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:40:07 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:09 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:11 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:41:12 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/controllers/index.php 4082
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 19
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/header.php 78
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 7
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 9
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 10
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 12
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 13
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 15
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 16
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 22
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 24
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 25
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 27
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 28
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 30
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 31
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 36
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 37
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 40
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 41
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 52
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 53
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/menu.php 67
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 56
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 63
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 80
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 132
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 151
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 161
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4819
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: type_commande /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 4879
ERROR - 2021-08-29 17:51:11 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs_new/application/views/dashboard.php 5124
ERROR - 2021-08-29 17:54:31 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('474', 1630188000, 1630252471, 1) ON DUPLICATE KEY UPDATE login_time = 1630252471, login_count = login_count +1 
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:50 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 17:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:11 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('491', 1630188000, 1630252871, 1) ON DUPLICATE KEY UPDATE login_time = 1630252871, login_count = login_count +1 
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:53 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:54 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:01:57 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:16 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:17 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:19 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:11:20 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:28:54 --> Query error: Field 'has_order' doesn't have a default value - INSERT INTO user_sessions (user_id, day, login_time, login_count) VALUES ('491', 1630188000, 1630254534, 1) ON DUPLICATE KEY UPDATE login_time = 1630254534, login_count = login_count +1 
ERROR - 2021-08-29 18:28:57 --> You did not select a file to upload.
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:23 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:24 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:26 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:50:28 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:48 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:49 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:54:52 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:55:59 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:55 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:56 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:56:58 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:00 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:43 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:44 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:46 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 18:57:47 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:02:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:02:08 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:02:51 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:34 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:36 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:38 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
ERROR - 2021-08-29 19:53:39 --> Severity: Notice  --> Undefined index: diametre /var/www/vhosts/optieyescommande.com/httpdocs_new/application/models/m_passer_commande_verre.php 525
