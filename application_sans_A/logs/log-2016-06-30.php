<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-06-30 13:42:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 801
ERROR - 2016-06-30 13:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '05-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '05-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '05-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-06-30 13:42:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 855
ERROR - 2016-06-30 13:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='05-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2016'
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
              ON (
                 c.id_commande = idCommande
               )
               LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
                  FROM commande cc
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='05-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='05-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '04-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-06-30 13:42:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 932
ERROR - 2016-06-30 13:42:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users' at line 40 - SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique, c.date_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, 0 as tarif_liv
           FROM commande c
           INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
           INNER JOIN users u ON u.id_users = c.id_users
           LEFT JOIN
            (SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers,
                date_remise
            FROM
                facture_reduction
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '05-2016'
            GROUP BY id_users) AS reductions
           ON (
            c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
           )
           LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
            FROM commande c
            WHERE id_type_generation_verre = 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
            GROUP BY idusersstock) as commande_stock
          ON (
              c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
          )
          LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
            FROM commande c
            WHERE id_type_generation_verre <> 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '05-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-06-30 13:42:28 --> Severity: Notice  --> Undefined variable: facture /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 10
ERROR - 2016-06-30 13:45:46 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 11
ERROR - 2016-06-30 13:48:18 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-06-30 14:21:26 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1234
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1236
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-30 14:21:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-30 14:21:27 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1234
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1236
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-30 14:21:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-30 15:06:05 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:05 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:06 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '16', 319.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:06 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '18', 1081.7, 'slimpay_false')
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:07 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '20', 64, 'slimpay_false')
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:07 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '26', 877, 'slimpay_false')
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:08 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:08 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '27', 1778, 'slimpay_false')
ERROR - 2016-06-30 15:06:08 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:08 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:09 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '29', 490.9, 'slimpay_false')
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:09 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '30', 448.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:10 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '32', 1232.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:10 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '37', 379.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:11 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:11 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '41', 331.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:11 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:11 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:12 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '44', 334.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:12 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '46', 3528.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:13 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '59', 276, 'slimpay_false')
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:13 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '60', 66, 'slimpay_false')
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:14 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '61', 608.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:14 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '67', 27.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:15 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:15 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '69', 659.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:15 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:15 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:16 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '71', 186, 'slimpay_false')
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:16 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '78', 2217.5, 'slimpay_false')
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:17 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '93', 376.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:17 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '97', 817, 'slimpay_false')
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:18 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:18 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '98', 430, 'slimpay_false')
ERROR - 2016-06-30 15:06:18 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:18 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:19 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '102', 1222.9, 'slimpay_false')
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:19 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '107', 1485.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:20 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '108', 789.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:20 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '110', 202.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:21 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '115', 862, 'slimpay_false')
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:21 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '123', 745.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:22 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '128', 151.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:22 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '130', 1842.1, 'slimpay_false')
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:23 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:23 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '131', 220.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:23 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:23 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:24 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '134', 1308.9, 'slimpay_false')
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:24 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '135', 162, 'slimpay_false')
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:25 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '136', 819.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:25 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '137', 2714.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:26 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '138', 832.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:26 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '140', 7421.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:27 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '142', 2645.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:27 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '144', 3102.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:28 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:28 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '146', 2367.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:28 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:28 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:29 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '148', 0, 'slimpay_false')
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:29 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '151', 3401.1, 'slimpay_false')
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:30 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '152', 1184.9, 'slimpay_false')
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:30 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '153', 1010.7, 'slimpay_false')
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:31 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '154', 1013.1, 'slimpay_false')
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:31 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '156', 141.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:32 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '157', 1386.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:32 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '158', 2289.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:33 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:33 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '160', 774.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:33 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:33 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:34 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '162', 590.3, 'slimpay_false')
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:34 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '163', 67.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:35 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '164', 634.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:35 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '165', 281.6, 'slimpay_false')
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:35 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:36 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:36 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '167', 180.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:36 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:36 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:37 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '169', 656.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:37 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '173', 1325.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:37 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:38 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '174', 125.5, 'slimpay_false')
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:38 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '176', 684.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:38 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:39 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '177', 1012.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:39 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '179', 383.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:39 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:40 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:40 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '181', 829.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:40 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:40 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:41 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '183', 2330.5, 'slimpay_false')
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:41 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '187', 135, 'slimpay_false')
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:41 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:42 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '188', 470.8, 'slimpay_false')
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:42 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '189', 1100, 'slimpay_false')
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:42 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:43 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '191', 1491.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:43 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '192', 270.4, 'slimpay_false')
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:43 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:44 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:44 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '193', 459.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:44 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:44 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:46 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '201', 227.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:46 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '202', 624.2, 'slimpay_false')
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 86
ERROR - 2016-06-30 15:06:46 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 100
ERROR - 2016-06-30 15:06:47 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 106
ERROR - 2016-06-30 15:06:47 --> Query error: Column 'mandat' cannot be null - INSERT INTO `paiements` (`mandat`, `mois`, `magasin`, `total`, `status`) VALUES (NULL, '06-2016', '184', '8.00', 'slimpay_false')
ERROR - 2016-06-30 15:12:52 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:52 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '16', '16', 319.6, 'slimpay_false')
ERROR - 2016-06-30 15:12:52 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:53 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '18', '18', 1081.7, 'slimpay_false')
ERROR - 2016-06-30 15:12:53 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:54 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '20', '20', 64, 'slimpay_false')
ERROR - 2016-06-30 15:12:54 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:54 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '26', '26', 877, 'slimpay_false')
ERROR - 2016-06-30 15:12:54 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:55 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '27', '27', 1778, 'slimpay_false')
ERROR - 2016-06-30 15:12:55 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:56 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '29', '29', 490.9, 'slimpay_false')
ERROR - 2016-06-30 15:12:56 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:57 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '30', '30', 448.4, 'slimpay_false')
ERROR - 2016-06-30 15:12:57 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:57 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '32', '32', 1232.2, 'slimpay_false')
ERROR - 2016-06-30 15:12:57 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:58 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '37', '37', 379.2, 'slimpay_false')
ERROR - 2016-06-30 15:12:58 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:59 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '41', '41', 331.8, 'slimpay_false')
ERROR - 2016-06-30 15:12:59 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:12:59 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '44', '44', 334.6, 'slimpay_false')
ERROR - 2016-06-30 15:12:59 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:00 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '46', '46', 3528.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:00 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:00 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '59', '67', 276, 'slimpay_false')
ERROR - 2016-06-30 15:13:00 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:01 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '60', '60', 66, 'slimpay_false')
ERROR - 2016-06-30 15:13:01 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:02 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '61', '61', 608.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:02 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:02 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '67', '67', 27.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:02 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:03 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '69', '69', 659.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:03 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:03 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '71', '71', 186, 'slimpay_false')
ERROR - 2016-06-30 15:13:03 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:04 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '78', '78', 2217.5, 'slimpay_false')
ERROR - 2016-06-30 15:13:04 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:05 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '93', '93', 376.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:05 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:05 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '97', '97', 817, 'slimpay_false')
ERROR - 2016-06-30 15:13:05 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:06 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '98', '98', 430, 'slimpay_false')
ERROR - 2016-06-30 15:13:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:06 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '102', '102', 1222.9, 'slimpay_false')
ERROR - 2016-06-30 15:13:06 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:07 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '107', '107', 1485.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:07 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '108', '108', 789.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:07 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:08 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '110', '110', 202.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:08 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:09 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '115', '115', 862, 'slimpay_false')
ERROR - 2016-06-30 15:13:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:09 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '123', '123', 745.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:09 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:10 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '128', '128', 151.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:10 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '130', '130', 1842.1, 'slimpay_false')
ERROR - 2016-06-30 15:13:10 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:11 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '131', '131', 220.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:11 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:11 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '134', '134', 1308.9, 'slimpay_false')
ERROR - 2016-06-30 15:13:11 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:12 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '135', '135', 162, 'slimpay_false')
ERROR - 2016-06-30 15:13:12 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:13 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '136', '136', 819.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:13 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '137', '137', 2714.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:13 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:14 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '138', '138', 832.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:14 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '140', '140', 7421.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:14 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:15 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '142', '142', 2645.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:15 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:15 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '144', '144', 3153.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:15 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:16 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '146', '146', 2367.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:16 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:17 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '148', '148', 0, 'slimpay_false')
ERROR - 2016-06-30 15:13:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:17 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '151', '151', 3401.1, 'slimpay_false')
ERROR - 2016-06-30 15:13:17 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:18 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '152', '152', 1184.9, 'slimpay_false')
ERROR - 2016-06-30 15:13:18 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:18 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '153', '153', 1010.7, 'slimpay_false')
ERROR - 2016-06-30 15:13:18 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:19 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '154', '154', 1013.1, 'slimpay_false')
ERROR - 2016-06-30 15:13:19 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:20 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '156', '156', 141.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:20 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '157', '157', 1386.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:20 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:21 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '158', '158', 2289.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:21 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:22 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '160', '160', 774.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:22 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '162', '162', 590.3, 'slimpay_false')
ERROR - 2016-06-30 15:13:22 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:23 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '163', '163', 67.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:23 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:23 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '164', '164', 634.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:23 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:24 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '165', '165', 281.6, 'slimpay_false')
ERROR - 2016-06-30 15:13:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:24 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '167', '167', 180.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:24 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:25 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '169', '169', 656.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:25 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:26 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '173', '173', 1325.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:26 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '174', '174', 125.5, 'slimpay_false')
ERROR - 2016-06-30 15:13:26 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:27 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '176', '176', 684.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:27 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '177', '177', 1012.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:27 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:28 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '179', '179', 383.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:28 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:29 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '181', '181', 829.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:29 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '183', '183', 2330.5, 'slimpay_false')
ERROR - 2016-06-30 15:13:29 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:30 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '187', '187', 135, 'slimpay_false')
ERROR - 2016-06-30 15:13:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:30 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '188', '188', 470.8, 'slimpay_false')
ERROR - 2016-06-30 15:13:30 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:31 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '189', '189', 1100, 'slimpay_false')
ERROR - 2016-06-30 15:13:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:31 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '191', '191', 1491.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:31 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:32 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '192', '192', 270.4, 'slimpay_false')
ERROR - 2016-06-30 15:13:32 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:33 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '193', '193', 459.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:33 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:33 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '201', '201', 227.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:33 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:34 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '202', '202', 624.2, 'slimpay_false')
ERROR - 2016-06-30 15:13:34 --> Severity: Notice  --> Undefined property: stdClass::$id_mandat /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 102
ERROR - 2016-06-30 15:13:34 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '184', '184', '8.00', 'slimpay_false')
ERROR - 2016-06-30 15:14:12 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '16', '16', 319.6, 'slimpay_false')
ERROR - 2016-06-30 15:14:13 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:13 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '18', '18', 1081.7)
ERROR - 2016-06-30 15:14:13 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:13 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '20', '20', 64)
ERROR - 2016-06-30 15:14:15 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:15 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '26', '26', 877)
ERROR - 2016-06-30 15:14:15 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:15 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '27', '27', 1778)
ERROR - 2016-06-30 15:14:16 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:16 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '29', '29', 490.9)
ERROR - 2016-06-30 15:14:17 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:17 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '30', '30', 448.4)
ERROR - 2016-06-30 15:14:17 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:17 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '32', '32', 1232.2)
ERROR - 2016-06-30 15:14:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:18 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '37', '37', 379.2)
ERROR - 2016-06-30 15:14:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:18 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '41', '41', 331.8)
ERROR - 2016-06-30 15:14:19 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:19 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '44', '44', 334.6)
ERROR - 2016-06-30 15:14:19 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:19 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '46', '46', 3528.6)
ERROR - 2016-06-30 15:14:20 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:20 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '59', '67', 276)
ERROR - 2016-06-30 15:14:21 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:21 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '60', '60', 66)
ERROR - 2016-06-30 15:14:21 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:21 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '61', '61', 608.2)
ERROR - 2016-06-30 15:14:22 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:22 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '67', '67', 27.2)
ERROR - 2016-06-30 15:14:22 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:22 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '69', '69', 659.8)
ERROR - 2016-06-30 15:14:23 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:23 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '71', '71', 186)
ERROR - 2016-06-30 15:14:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:24 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '78', '78', 2217.5)
ERROR - 2016-06-30 15:14:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:24 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '93', '93', 376.8)
ERROR - 2016-06-30 15:14:25 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:25 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '97', '97', 817)
ERROR - 2016-06-30 15:14:25 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:25 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '98', '98', 430)
ERROR - 2016-06-30 15:14:26 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:26 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '102', '102', 1222.9)
ERROR - 2016-06-30 15:14:27 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:27 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '107', '107', 1485.6)
ERROR - 2016-06-30 15:14:27 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:27 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '108', '108', 789.2)
ERROR - 2016-06-30 15:14:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:28 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '110', '110', 202.2)
ERROR - 2016-06-30 15:14:28 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:28 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '115', '115', 862)
ERROR - 2016-06-30 15:14:29 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:29 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '123', '123', 745.4)
ERROR - 2016-06-30 15:14:30 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:30 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '128', '128', 151.4)
ERROR - 2016-06-30 15:14:30 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:30 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '130', '130', 1842.1)
ERROR - 2016-06-30 15:14:31 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:31 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '131', '131', 220.6)
ERROR - 2016-06-30 15:14:31 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:31 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '134', '134', 1308.9)
ERROR - 2016-06-30 15:14:32 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:32 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '135', '135', 162)
ERROR - 2016-06-30 15:14:33 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:33 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '136', '136', 819.6)
ERROR - 2016-06-30 15:14:33 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:33 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '137', '137', 2714.8)
ERROR - 2016-06-30 15:14:34 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:34 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '138', '138', 832.4)
ERROR - 2016-06-30 15:14:34 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:34 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '140', '140', 7421.4)
ERROR - 2016-06-30 15:14:35 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:35 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '142', '142', 2645.8)
ERROR - 2016-06-30 15:14:36 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:36 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '144', '144', 3153.8)
ERROR - 2016-06-30 15:14:36 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:36 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '146', '146', 2367.8)
ERROR - 2016-06-30 15:14:37 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '148', '148', 0, 'slimpay_false')
ERROR - 2016-06-30 15:14:37 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:37 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '151', '151', 3401.1)
ERROR - 2016-06-30 15:14:38 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:38 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '152', '152', 1184.9)
ERROR - 2016-06-30 15:14:39 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:39 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '153', '153', 1010.7)
ERROR - 2016-06-30 15:14:39 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:39 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '154', '154', 1013.1)
ERROR - 2016-06-30 15:14:40 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:40 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '156', '156', 141.8)
ERROR - 2016-06-30 15:14:40 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:40 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '157', '157', 1386.4)
ERROR - 2016-06-30 15:14:41 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:41 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '158', '158', 2289.6)
ERROR - 2016-06-30 15:14:41 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:41 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '160', '160', 774.6)
ERROR - 2016-06-30 15:14:42 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:42 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '162', '162', 590.3)
ERROR - 2016-06-30 15:14:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:43 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '163', '163', 67.8)
ERROR - 2016-06-30 15:14:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:43 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '164', '164', 634.8)
ERROR - 2016-06-30 15:14:44 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:44 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '165', '165', 281.6)
ERROR - 2016-06-30 15:14:44 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:44 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '167', '167', 180.8)
ERROR - 2016-06-30 15:14:45 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:45 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '169', '169', 656.8)
ERROR - 2016-06-30 15:14:46 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:46 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '173', '173', 1325.4)
ERROR - 2016-06-30 15:14:46 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:46 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '174', '174', 125.5)
ERROR - 2016-06-30 15:14:47 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:47 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '176', '176', 684.4)
ERROR - 2016-06-30 15:14:47 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:47 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '177', '177', 1012.4)
ERROR - 2016-06-30 15:14:48 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:48 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '179', '179', 383.2)
ERROR - 2016-06-30 15:14:49 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:49 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '181', '181', 829.4)
ERROR - 2016-06-30 15:14:49 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:49 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '183', '183', 2330.5)
ERROR - 2016-06-30 15:14:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:51 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '187', '187', 135)
ERROR - 2016-06-30 15:14:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:51 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '188', '188', 470.8)
ERROR - 2016-06-30 15:14:52 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:52 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '189', '189', 1100)
ERROR - 2016-06-30 15:14:53 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:53 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '191', '191', 1491.2)
ERROR - 2016-06-30 15:14:53 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:53 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '192', '192', 270.4)
ERROR - 2016-06-30 15:14:54 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:54 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '193', '193', 459.2)
ERROR - 2016-06-30 15:14:54 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:54 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '201', '201', 227.2)
ERROR - 2016-06-30 15:14:55 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 553
ERROR - 2016-06-30 15:14:55 --> Query error: Unknown column 'Array' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`) VALUES (Array, '06-2016', '202', '202', 624.2)
ERROR - 2016-06-30 15:14:56 --> Query error: Unknown column 'mandat_status' in 'field list' - INSERT INTO `paiements` (`mandat_status`, `mois`, `magasin`, `mandat`, `total`, `status`) VALUES (0, '06-2016', '184', '184', '8.00', 'slimpay_false')
ERROR - 2016-06-30 17:02:19 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-30 17:02:19 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-30 17:02:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
