<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-09-01 00:06:33 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:06:33 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:06:33 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:06:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:15:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 900
ERROR - 2016-09-01 00:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            GROUP BY c.id_users,date(date_update_commande)
            ORD' at line 32 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            
            Array
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:15:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 954
ERROR - 2016-09-01 00:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
         ' at line 34 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             
             Array
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:15:51 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1031
ERROR - 2016-09-01 00:15:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          GROUP BY c.id_users
          ORDER BY c.id_users' at line 41 - SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique, c.date_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, 0 as tarif_liv
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          
          Array
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:23:21 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:23:21 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:23:21 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:23:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:23:58 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:23:58 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:23:58 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:23:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:00 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:00 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:00 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:02 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:37 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:37 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:37 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:38 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:38 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:38 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 00:24:39 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 899
ERROR - 2016-09-01 00:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
            
            GROUP BY c.id_users,date(date_update_commande)
  ' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2016'
            AND id_etat_commande = 6
            Array
            
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-09-01 00:24:39 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 953
ERROR - 2016-09-01 00:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='08-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             Array
             
             AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-09-01 00:24:39 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1030
ERROR - 2016-09-01 00:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'Array
          
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
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
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
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2016'
          Array
          
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 11:57:50 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:09:54 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:47:41 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:50:07 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 12:50:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 13:12:49 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2487
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2774
ERROR - 2016-09-01 13:12:49 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2853
ERROR - 2016-09-01 13:27:59 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1651
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1679
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1781
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1837
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1876
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1883
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2143
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2226
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2233
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2487
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2774
ERROR - 2016-09-01 13:27:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2853
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 14:31:52 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 14:49:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 14:49:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 14:51:28 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 14:54:33 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 14:54:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 14:58:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 14:58:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 14:59:27 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 14:59:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:26:17 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:26:17 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-01 15:28:07 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-01 15:28:07 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160901100,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-01 15:28:12 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-01 15:28:12 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160901100,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-01 15:28:14 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-01 15:28:14 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160901100,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-01 15:29:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:29:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:30:25 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:30:25 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:31:50 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:31:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:33:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:33:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 15:34:21 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 15:34:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 16:22:31 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 16:22:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 16:35:37 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 16:44:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 16:44:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 17:10:56 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 17:39:16 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 17:45:08 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 17:45:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:37:35 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:39:07 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 18:52:19 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:07:18 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:07:55 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-01 19:16:15 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-01 19:16:15 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160901168,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 19:41:50 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 22:14:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 22:14:47 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 22:16:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 22:16:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-01 22:55:38 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1530
ERROR - 2016-09-01 22:57:52 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 22:57:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
ERROR - 2016-09-01 22:58:34 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1581
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1607
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1655
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1683
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1785
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1841
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1880
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1887
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2147
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2230
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2237
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2491
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2778
ERROR - 2016-09-01 22:58:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2857
