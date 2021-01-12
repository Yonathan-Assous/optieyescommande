<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2021-01-12 13:49:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs_new/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2021-01-12 13:49:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2021'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2021' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2021'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2021' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '01-2021'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '01-2021'
        AND id_etat_commande = 6
        AND id_users = '378'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
