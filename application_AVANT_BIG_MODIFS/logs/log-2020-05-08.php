<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2020-05-08 09:57:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-05-08 09:57:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2014' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2014' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2014'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2014'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-05-08 09:59:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-05-08 09:59:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2014' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2014' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2014'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2014'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-05-08 09:59:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-05-08 09:59:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2014' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2014' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '05-2014'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '05-2014'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-05-08 10:00:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-05-08 10:00:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2014' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '01-2014'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '01-2014' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '01-2014'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '01-2014'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 10:34:15 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 10:34:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =451
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
                                   WHERE c.id_commande= AND c.id_users =451
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 10:34:48 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 10:34:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:01:26 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:17:16 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:17:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =451
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
                                   WHERE c.id_commande= AND c.id_users =451
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 11:17:41 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:17:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:40:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:40:27 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-05-08 11:40:27 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-05-08 11:40:27 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-05-08 11:40:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:40:34 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2020-05-08 11:40:34 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2020-05-08 11:40:34 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/optieyescommande.com/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2020-05-08 11:40:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-08 00:00:00" AND date_commande < "2020-05-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:41:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:48:03 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:48:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =46
                                   ORDER BY date_commande DES' at line 20 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= AND c.id_users =46
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 11:52:23 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 382
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 11:52:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:12:40 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:13:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
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
                                   WHERE c.id_commande= AND c.id_users =311
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 12:15:05 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:15:28 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:17:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:17:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =311
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
                                   WHERE c.id_commande= AND c.id_users =311
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 12:18:14 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:18:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:27:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:27:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2524
ERROR - 2020-05-08 12:28:46 --> Severity: Notice  --> Undefined property: stdClass::$excl /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 12:28:46 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 2542
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 13:40:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 13:45:51 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 13:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =320
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
                                   WHERE c.id_commande= AND c.id_users =320
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 13:46:32 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 13:46:36 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:05:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:05:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:05:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:05:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:05:08 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =296
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
                                   WHERE c.id_commande= AND c.id_users =296
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 14:05:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =296
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
                                   WHERE c.id_commande= AND c.id_users =296
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:05:42 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:06:05 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:06:22 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:06:22 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:06:22 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:06:22 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:06:22 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:08:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =296
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
                                   WHERE c.id_commande= AND c.id_users =296
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined offset: 97 /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1386
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:10:20 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:12:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =389
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
                                   WHERE c.id_commande= AND c.id_users =389
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 14:12:50 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 382
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:22:57 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:23:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:23:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:23:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:23:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:23:18 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 14:23:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =305
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
                                   WHERE c.id_commande= AND c.id_users =305
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 14:25:40 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:25:52 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 14:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-09 00:00:00" AND date_commande < "2020-05-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-10 00:00:00" AND date_commande < "2020-05-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-11 00:00:00" AND date_commande < "2020-05-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-12 00:00:00" AND date_commande < "2020-05-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-13 00:00:00" AND date_commande < "2020-05-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-14 00:00:00" AND date_commande < "2020-05-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-15 00:00:00" AND date_commande < "2020-05-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-16 00:00:00" AND date_commande < "2020-05-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-17 00:00:00" AND date_commande < "2020-05-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-18 00:00:00" AND date_commande < "2020-05-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-19 00:00:00" AND date_commande < "2020-05-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-20 00:00:00" AND date_commande < "2020-05-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-21 00:00:00" AND date_commande < "2020-05-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-22 00:00:00" AND date_commande < "2020-05-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-23 00:00:00" AND date_commande < "2020-05-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:31:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-24 00:00:00" AND date_commande < "2020-05-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-25 00:00:00" AND date_commande < "2020-05-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-26 00:00:00" AND date_commande < "2020-05-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-27 00:00:00" AND date_commande < "2020-05-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-28 00:00:00" AND date_commande < "2020-05-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-29 00:00:00" AND date_commande < "2020-05-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-30 00:00:00" AND date_commande < "2020-05-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 14:32:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2020-05-31 00:00:00" AND date_commande < "2020-05-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:32:46 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:34:16 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:34:16 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:34:16 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:34:16 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:34:16 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:34:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =383
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
ERROR - 2020-05-08 15:35:55 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:36:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:40:11 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:50:47 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 15:51:39 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:51:39 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:51:39 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:51:39 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:51:39 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 15:51:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =383
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
ERROR - 2020-05-08 16:45:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /var/www/vhosts/optieyescommande.com/httpdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2020-05-08 16:45:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '04-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '04-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '04-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined offset: 97 /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1386
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 16:47:27 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 16:51:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 16:51:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 16:51:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 16:51:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 16:51:20 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 16:51:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =389
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
                                   WHERE c.id_commande= AND c.id_users =389
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 16:54:49 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined offset: 97 /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1386
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 16:55:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:07:41 --> Query error: Duplicate entry '0-2020-05-08' for key 'PRIMARY' - INSERT INTO `commande_pointage` (`id_commande`, `date_pointage`) VALUES ('Mr. Maxine Darmon', CURRENT_DATE());
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: title /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 17
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/header.php 74
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 7
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 9
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 10
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 12
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 13
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 15
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 16
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 22
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 24
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 25
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 27
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 28
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 30
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 31
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 36
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 37
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 40
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 41
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 44
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 45
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 56
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: page /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 57
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/menu.php 71
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 33
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 46
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 89
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 105
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: user_info /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 113
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: region /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2120
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: infos_user /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2845
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:29:14 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 225
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 228
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 233
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 236
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 243
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 246
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 251
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 254
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 259
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 262
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 275
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 275
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined index: typecommande /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1095
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:29:32 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined offset: 97 /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1386
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:38:22 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:39:00 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 17:39:00 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 17:39:00 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 17:39:00 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 17:39:00 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 17:39:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =389
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
                                   WHERE c.id_commande= AND c.id_users =389
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 17:40:04 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined offset: 97 /var/www/vhosts/optieyescommande.com/httpdocs/application/controllers/index.php 1386
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 17:40:37 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:14:34 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:14:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:14:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:14:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:14:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:14:51 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:15:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:15:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =331
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
ERROR - 2020-05-08 18:16:45 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:18:36 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:19:27 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:19:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:24:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:24:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:24:56 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:25:00 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:26:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:26:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:26:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:26:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:26:36 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:26:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:27:35 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:27:39 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:29:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:29:32 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:29:35 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:30:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:30:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:30:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:30:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:30:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:31:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:32:11 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:32:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:32:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:32:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:32:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:32:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:32:33 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:32:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:34:18 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:34:21 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:34:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:34:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:34:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:34:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:34:31 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:34:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:35:40 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:35:45 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:35:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:35:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:35:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:35:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:35:56 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:36:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:36:56 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:37:01 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:37:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:37:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:37:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:37:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:37:11 --> Severity: Notice  --> Undefined variable: user_id /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_type_verre.php 9
ERROR - 2020-05-08 18:37:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:38:02 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:38:09 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:39:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:39:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =321
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
                                   WHERE c.id_commande= AND c.id_users =321
                                   ORDER BY date_commande DESC
ERROR - 2020-05-08 18:39:46 --> Severity: Notice  --> Undefined variable: prixmonture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/ajax_recap_commande.php 393
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 240
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 332
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 337
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 940
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 941
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 946
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 957
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1106
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1126
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1154
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1158
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1220
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1612
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1654
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1899
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1900
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1905
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 1916
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2064
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2213
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2233
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2535
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2723
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 2779
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3494
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3678
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3818
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 3922
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
ERROR - 2020-05-08 18:39:49 --> Severity: Notice  --> Undefined variable: panierA_sans_monture /var/www/vhosts/optieyescommande.com/httpdocs/application/views/dashboard.php 4348
