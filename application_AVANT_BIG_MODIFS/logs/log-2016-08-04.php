<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-08-04 00:24:34 --> Query error: Duplicate entry '81284984200016' for key 'numero_siret' - UPDATE `users` SET `nom_societe` = 'Test socieeeete', `nom_magasin` = 'test55', `numero_siret` = '81284984200016', `tva_intracom` = '', `num_finess` = '10000', `nom_responsable` = 'jordan', `adresse` = '1 Rue du test', `cp` = '75014', `ville` = 'test', `tel_fixe` = '0000000000', `tel_fax` = '0000000000', `id_users` = '2' WHERE `id_users` =  '2'
ERROR - 2016-08-04 01:12:19 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 01:12:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 01:12:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2016-08-04 01:12:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 01:31:09 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:31:09 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:31:09 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:31:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:31:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/admin/header.php 15
ERROR - 2016-08-04 01:31:57 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/admin/header.php 15
ERROR - 2016-08-04 01:33:03 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:33:03 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:33:03 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:33:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:33:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:33:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:33:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:33:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:34:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:34:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:34:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:34:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:36:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:36:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:36:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:36:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:37:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:37:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:37:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:37:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:39:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:39:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:39:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:44:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:44:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:44:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:44:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:46:20 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:46:20 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:46:20 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:46:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:46:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:46:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:47:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 01:48:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:48:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:48:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:48:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Undefined property: stdClass::$tota /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 400
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:52:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:52:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:52:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:52:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:52:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:52:52 --> Severity: Warning  --> Creating default object from empty value /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 403
ERROR - 2016-08-04 01:52:54 --> Severity: Warning  --> Creating default object from empty value /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 403
ERROR - 2016-08-04 01:53:18 --> Severity: Warning  --> Attempt to assign property of non-object /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 403
ERROR - 2016-08-04 01:53:18 --> Severity: Notice  --> Undefined property: CI_DB_mysqli_result::$result /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 404
ERROR - 2016-08-04 01:53:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:53:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:53:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:53:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:21 --> Severity: Warning  --> Attempt to assign property of non-object /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 403
ERROR - 2016-08-04 01:53:21 --> Severity: Notice  --> Undefined property: CI_DB_mysqli_result::$result /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 404
ERROR - 2016-08-04 01:53:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:53:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:53:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:53:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:53:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:54:22 --> Severity: Warning  --> Attempt to assign property of non-object /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 404
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:54:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:54:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:54:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:54:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:01 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:55:01 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:55:01 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:55:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:55:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:55:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:55:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:55:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:55:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:55:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:57:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:57:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:57:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:57:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:57:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:57:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:57:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:57:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:58:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:58:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:58:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:58:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:58:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:58:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:58:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:58:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:58:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:58:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:58:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:59:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 01:59:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 01:59:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 01:59:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 01:59:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 01:59:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 01:59:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 01:59:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:00:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:00:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:00:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:00:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:00:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:00:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:00:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:00:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:05:09 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 02:05:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 02:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2016-08-04 02:05:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 02:06:37 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:06:37 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:06:37 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:06:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:06:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:06:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:06:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:06:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:09:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                    WHERE DATE_FORMAT(date_remise, '%Y') = '2016'
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    AND DATE_FORMAT(date_commande, '%Y') = '2016'
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE DATE_FORMAT(c.date_commande, '%Y') = '2016'
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:09:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:09:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:09:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:09:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:09:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:09:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:09:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:11:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:11:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:11:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:11:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:12:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:12:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:12:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:12:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:14:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:14:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:14:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:14:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:17:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:17:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:17:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:17:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:19:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:19:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:19:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:19:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:20:21 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:20:21 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:20:21 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:20:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:21:01 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:02 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:03 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:04 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:05 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:06 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:07 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:21:32 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 759
ERROR - 2016-08-04 02:21:33 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 759
ERROR - 2016-08-04 02:22:08 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 759
ERROR - 2016-08-04 02:22:18 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:22:18 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:22:19 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:22:21 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:23:41 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:23:41 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:23:41 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:23:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:23:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:23:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:23:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:23:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:24:11 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:24:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:24:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:24:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:24:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:24:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:24:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:24:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:24:48 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:24:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:24:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:24:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:24:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:24:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:24:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:24:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:25:36 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:25:36 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:25:36 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:25:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:25:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:25:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:25:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:25:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:27:58 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:27:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:27:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:27:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:27:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:27:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:27:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:27:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:28:08 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:28:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:28:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:28:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:28:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:28:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:28:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:28:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:29:36 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:29:36 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:29:36 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:29:51 --> Query error: Unknown column 'static' in 'on clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  AND c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:29:51 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:29:51 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:29:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:29:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:29:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:29:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:29:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:30:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:30:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:30:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:30:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:30:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:30:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:30:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:30:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:30:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:30:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:30:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS reductions
                                   ON (
                          ' at line 13 - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users AS reductions
                                   ON (
                                    c.id_users = idusers
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock as commande_stock
                                  ON (
                                      c.id_users = idusersstock
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique 
                                  )
                                  WHERE c.id_users = 2
                                  GROUP BY c.id_users
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:31:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS reductions
                                   ON (
                          ' at line 13 - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users AS reductions
                                   ON (
                                    c.id_users = idusers
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock as commande_stock
                                  ON (
                                      c.id_users = idusersstock
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique 
                                  )
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:31:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:31:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:31:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:31:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:31:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:31:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:31:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:31:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:31:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:31:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:31:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:31:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:31:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:31:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:31:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:31:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:31:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:31:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:31:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:05 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:32:05 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:32:05 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:32:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:32:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:32:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:32:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:12 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:32:12 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:32:12 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:32:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:32:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:32:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:32:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:12 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:32:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:32:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:32:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:32:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:32:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:32:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:32:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:32:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:32:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:32:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:32:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:32:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:32:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:33:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:33:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:33:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:33:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:33:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:33:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:33:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:33:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:33:10 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:33:10 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:33:10 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:33:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:33:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:33:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:33:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:33:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:35:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(total_stock, 0) + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total 
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
                                   
                                    GROUP BY id_users,DATE_FORMAT(date_remise, '%m-%Y')) AS reductions
                                   ON (
                                    c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
                                   )
                                   LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre = 5 
                                    
                                    GROUP BY idusersstock,DATE_FORMAT(date_commande, '%m-%Y')) as commande_stock
                                  ON (
                                      c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
                                  )
                                  LEFT JOIN 
                                  (SELECT 
                                    SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
                                    FROM commande c
                                    WHERE id_type_generation_verre <> 5 
                                    
                                    GROUP BY idusersfabrique,DATE_FORMAT(date_commande, '%m-%Y')) as commande_fabrique
                                  ON (
                                      c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
                                  )
                                  
                                  WHERE c.id_users = static
                                  GROUP BY c.id_users,DATE_FORMAT(c.date_commande, '%m-%Y')
                                  ORDER BY c.id_users
ERROR - 2016-08-04 02:35:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:35:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:35:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:35:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:35:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:35:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:35:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:38:10 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:38:11 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:38:33 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:38:34 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:39:23 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:39:24 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:39:40 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:40:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:40:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:40:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:40:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:07 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:41:07 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:41:07 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:41:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:41:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:41:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:42:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:42:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:42:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:42:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:51:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:51:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 02:51:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 02:51:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 03:08:26 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 03:08:26 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 03:08:26 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1302
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1304
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1305
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 03:08:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1306
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 03:11:54 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 03:15:45 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1303
ERROR - 2016-08-04 11:00:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:00:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:00:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:00:43 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:00:45 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:00:45 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:00:45 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:00:45 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:11:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:11:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:11:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:11:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:22:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:22:14 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:22:14 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:22:14 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:22:14 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:22:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 222
ERROR - 2016-08-04 11:22:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 223
ERROR - 2016-08-04 11:22:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 224
ERROR - 2016-08-04 11:22:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 225
ERROR - 2016-08-04 11:33:10 --> Severity: Notice  --> Undefined offset: 2 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 505
ERROR - 2016-08-04 11:33:10 --> Severity: Notice  --> Undefined offset: 1 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 505
ERROR - 2016-08-04 11:38:03 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1393
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1395
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 11:38:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 11:40:28 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1393
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1395
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 11:40:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 11:49:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 982
ERROR - 2016-08-04 11:50:33 --> Severity: Notice  --> Undefined index: total /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 264
ERROR - 2016-08-04 11:50:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 11:50:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 11:50:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 264
ERROR - 2016-08-04 11:55:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 11:55:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:00:01 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 12:00:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:00:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:00:52 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:00:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:02:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:02:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:03:20 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:03:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:11:11 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:22:21 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 12:30:32 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 12:38:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:38:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:42:59 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:42:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:45:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:45:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:45:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1307
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1308
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1310
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:45:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:45:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:47:47 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:47:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:48:11 --> Severity: Warning  --> Missing argument 1 for admin::getPrixVerre() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1453
ERROR - 2016-08-04 12:48:11 --> Severity: Notice  --> Undefined variable: user_id /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1459
ERROR - 2016-08-04 12:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2016-08-04 12:48:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1461
ERROR - 2016-08-04 12:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - SELECT prix_verre FROM grille_tarifaire WHERE id_verre=1432 AND id_grille_tarifaire = 
ERROR - 2016-08-04 12:49:42 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:49:42 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:49:42 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1307
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1308
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1310
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:49:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:51:15 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:51:15 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:52:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:52:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:53:28 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:53:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 12:53:38 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:53:38 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 12:53:38 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1307
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1308
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1309
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1310
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:53:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1311
ERROR - 2016-08-04 12:55:01 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1396
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1398
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 12:55:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 13:44:58 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1196
ERROR - 2016-08-04 13:44:58 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1197
ERROR - 2016-08-04 13:44:58 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1198
ERROR - 2016-08-04 13:44:58 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1199
ERROR - 2016-08-04 13:45:01 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 61
ERROR - 2016-08-04 13:45:01 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 62
ERROR - 2016-08-04 13:45:01 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 63
ERROR - 2016-08-04 13:45:01 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 64
ERROR - 2016-08-04 13:45:03 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 40
ERROR - 2016-08-04 13:45:03 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 41
ERROR - 2016-08-04 13:45:03 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 42
ERROR - 2016-08-04 13:45:03 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 43
ERROR - 2016-08-04 13:45:04 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1196
ERROR - 2016-08-04 13:45:04 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1197
ERROR - 2016-08-04 13:45:04 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1198
ERROR - 2016-08-04 13:45:04 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1199
ERROR - 2016-08-04 13:45:22 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1207
ERROR - 2016-08-04 13:45:22 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1208
ERROR - 2016-08-04 13:45:22 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1209
ERROR - 2016-08-04 13:45:22 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1210
ERROR - 2016-08-04 13:45:29 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 212
ERROR - 2016-08-04 13:45:29 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 213
ERROR - 2016-08-04 13:45:29 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 214
ERROR - 2016-08-04 13:45:29 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 215
ERROR - 2016-08-04 13:46:57 --> Severity: Notice  --> Undefined index: ca_journalier /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1101
ERROR - 2016-08-04 13:46:57 --> Severity: Notice  --> Undefined index: ca_journalier_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1102
ERROR - 2016-08-04 13:46:57 --> Severity: Notice  --> Undefined index: ca_mensuel /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1103
ERROR - 2016-08-04 13:46:57 --> Severity: Notice  --> Undefined index: ca_mensuel_sans_livraison /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1104
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 13:49:40 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 13:56:47 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 14:11:01 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 15
ERROR - 2016-08-04 14:11:01 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 33
ERROR - 2016-08-04 14:11:05 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 15
ERROR - 2016-08-04 14:11:05 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 33
ERROR - 2016-08-04 14:12:18 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 14
ERROR - 2016-08-04 14:12:18 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 15
ERROR - 2016-08-04 14:12:18 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 33
ERROR - 2016-08-04 14:12:33 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 15
ERROR - 2016-08-04 14:12:33 --> Severity: Warning  --> number_format() expects parameter 1 to be double, array given /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 33
ERROR - 2016-08-04 14:33:00 --> Query error: Unknown column 'B' in 'where clause' - SELECT COUNT(id_commande) as total FROM commande WHERE id_users = B
ERROR - 2016-08-04 14:33:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 959
ERROR - 2016-08-04 14:35:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - SELECT COUNT(id_commande) as total FROM commande WHERE id_users = 10 AND (reference_client like '%BRA%' ||
                date_commande like '%BRA%' ||
                id_commande like '%BRA%' ||
                reference_client like '%BRA%)'
                
ERROR - 2016-08-04 14:35:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 959
ERROR - 2016-08-04 14:35:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 4 - SELECT COUNT(id_commande) as total FROM commande WHERE id_users = 5 AND (reference_client like '%BOUCHER%' ||
                date_commande like '%BOUCHER%' ||
                id_commande like '%BOUCHER%' ||
                reference_client like '%BOUCHER%)'
                
ERROR - 2016-08-04 14:35:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 959
ERROR - 2016-08-04 14:35:48 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:48 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:49 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:49 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:49 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:49 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:50 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:50 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:53 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:53 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:54 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:54 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:56 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:56 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:56 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:56 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:56 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:56 --> Unable to connect to the database
ERROR - 2016-08-04 14:35:59 --> Severity: Warning  --> mysqli_connect(): (HY000/2002): Can't connect to local MySQL server through socket '/var/run/mysqld/mysqld.sock' (2) /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 76
ERROR - 2016-08-04 14:35:59 --> Unable to connect to the database
ERROR - 2016-08-04 14:37:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND reference_client like '%B%' ||
                date_commande like '%B%' ||
 ' at line 1 - SELECT COUNT(id_commande) as total FROM commande  AND reference_client like '%B%' ||
                date_commande like '%B%' ||
                id_commande like '%B%' ||
                reference_client like '%B%'
                
ERROR - 2016-08-04 14:37:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 959
ERROR - 2016-08-04 14:37:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND reference_client like '%BO%' ||
                date_commande like '%BO%' ||' at line 1 - SELECT COUNT(id_commande) as total FROM commande  AND reference_client like '%BO%' ||
                date_commande like '%BO%' ||
                id_commande like '%BO%' ||
                reference_client like '%BO%'
                
ERROR - 2016-08-04 14:37:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 959
ERROR - 2016-08-04 14:44:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 14:44:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 14:46:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 13
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 24
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 711
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 712
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 713
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 714
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1448
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1471
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1663
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1700
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1707
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1935
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2005
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2258
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2495
ERROR - 2016-08-04 14:46:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2557
ERROR - 2016-08-04 14:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 14:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 14:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 14:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 14:58:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 14:58:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 14:58:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:00:28 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:00:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:00:45 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:00:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:01:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:01:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:02:21 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:02:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:02:45 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:02:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:03:50 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 15:03:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:11:27 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:37:43 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:41:06 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:44:08 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 15:52:55 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 16:13:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 16:13:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 16:25:00 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 16:40:23 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 16:40:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 16:42:05 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 16:42:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 17:04:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2214
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2474
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2711
ERROR - 2016-08-04 17:04:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2790
ERROR - 2016-08-04 17:06:45 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:06:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:07:32 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:07:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:07:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:07:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:08:16 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:08:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:09:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:09:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:09:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:09:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:11:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:11:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:14:42 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 17:17:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:17:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:17:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:17:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:20:04 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2134
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2217
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2224
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2477
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2714
ERROR - 2016-08-04 17:20:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2793
ERROR - 2016-08-04 17:22:26 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2140
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2483
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2720
ERROR - 2016-08-04 17:22:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2799
ERROR - 2016-08-04 17:22:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2140
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2483
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2720
ERROR - 2016-08-04 17:22:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2799
ERROR - 2016-08-04 17:23:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2140
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2483
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2720
ERROR - 2016-08-04 17:23:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2799
ERROR - 2016-08-04 17:25:40 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2140
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2223
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2483
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2720
ERROR - 2016-08-04 17:25:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2799
ERROR - 2016-08-04 17:29:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:29:24 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:29:40 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:29:40 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:29:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:29:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:29:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:29:59 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:29:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:30:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 17:30:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-08-04 17:30:57 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1274
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1275
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1276
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1276
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1278
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1278
ERROR - 2016-08-04 17:30:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1278
ERROR - 2016-08-04 17:31:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:31:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:31:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:31:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:36:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:36:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:36:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:40:14 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:47:54 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:51:32 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 17:56:31 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 17:57:42 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 17:57:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 18:18:43 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 18:41:14 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 18:51:08 --> Severity: Notice  --> Undefined offset: 2 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 485
ERROR - 2016-08-04 18:51:08 --> Severity: Notice  --> Undefined offset: 1 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 485
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-08-04 19:05:06 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-08-04 19:13:04 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:13:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:14:01 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:14:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:23:04 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:23:04 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:23:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:23:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:25:41 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:25:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:28:58 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:28:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 19:30:11 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 19:30:11 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 20:00:06 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 20:00:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 20:00:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2016-08-04 20:00:06 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 521
ERROR - 2016-08-04 22:42:08 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 577
ERROR - 2016-08-04 22:44:38 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 577
ERROR - 2016-08-04 22:45:32 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 577
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:08:34 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:08:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:09:01 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:09:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:09:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:09:18 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:09:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:10:37 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:10:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:10:59 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:10:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:11:38 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:11:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:12:04 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:12:05 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:12:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:12:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:12:40 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:12:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:14:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:14:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:14:37 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:14:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:15:32 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:15:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:18:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:18:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:18:55 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:18:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:20:48 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1363
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1365
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2486
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2723
ERROR - 2016-08-04 23:20:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2802
