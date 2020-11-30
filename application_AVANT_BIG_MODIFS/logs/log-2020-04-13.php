<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-04-13 09:26:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:26:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2020'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:26:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:26:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '02-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '02-2020'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2020'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '01-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '01-2020'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '12-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '12-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '12-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '12-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '11-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '11-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '11-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '11-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '10-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '10-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '10-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '10-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '10-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '10-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:27:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:27:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '06-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '06-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '05-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '05-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '03-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '03-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '03-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '03-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '02-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '02-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 09:28:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 09:28:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '01-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '01-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 12:15:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 12:15:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-04-13 12:16:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 12:16:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2020'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2020' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '02-2020'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '02-2020' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '02-2020'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '02-2020'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:29:23 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:29:24 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:29:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:29:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:29:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:29:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:29:45 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:46:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:46:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =449
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
                                   WHERE c.id_commande= AND c.id_users =449
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:46:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =449
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
                                   WHERE c.id_commande= AND c.id_users =449
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:50:42 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:50:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:51:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:51:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
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
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:51:38 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:51:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:51:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:51:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:51:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:51:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:51:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:51:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =449
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
                                   WHERE c.id_commande= AND c.id_users =449
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:58:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:58:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:58:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:58:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:58:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:58:19 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-04-13 12:58:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =137
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
                                   WHERE c.id_commande= AND c.id_users =137
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:58:45 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:59:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:59:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
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
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 12:59:40 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 12:59:43 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:14:38 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:22:30 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:22:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
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
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 13:23:00 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:23:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:54:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:54:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =448
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
                                   WHERE c.id_commande= AND c.id_users =448
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 13:55:22 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 13:55:25 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:26:17 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:26:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =378
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
                                   WHERE c.id_commande= AND c.id_users =378
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 14:27:02 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:27:06 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:27:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =378
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
                                   WHERE c.id_commande= AND c.id_users =378
                                   ORDER BY date_commande DESC
ERROR - 2020-04-13 14:27:38 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:27:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 14:42:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 14:42:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-04-13 14:43:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-04-13 14:43:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
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
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-04-13 15:32:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
