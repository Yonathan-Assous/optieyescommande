<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-12-10 08:19:57 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 2458
ERROR - 2019-12-10 08:20:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND c.id_users =147
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
                                   WHERE c.id_commande= AND c.id_users =147
                                   ORDER BY date_commande DESC
ERROR - 2019-12-10 08:23:24 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 08:23:24 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 08:23:24 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 08:23:42 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 08:25:01 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 08:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 08:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 08:25:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 08:26:24 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 08:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 08:26:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 08:26:24 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:10:58 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 09:10:58 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 09:10:58 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 09:11:14 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:11:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:11:14 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:11:49 --> Severity: Notice  --> Undefined index: user_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1106
ERROR - 2019-12-10 09:11:49 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1106
ERROR - 2019-12-10 09:11:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 - SELECT * FROM users WHERE id_users=
ERROR - 2019-12-10 09:11:49 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/index.php 1106
ERROR - 2019-12-10 09:12:06 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'css' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static' 
											AND cc.id_users=css
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = 'static' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
										  AND cc.id_users=css
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = 'static' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = 'static' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = 'static'
									  AND c.id_users=css
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'css' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
          AND cc.id_users=css
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
            AND cc.id_users=css
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=css
           AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'css' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = css
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=css
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = 'static'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:12:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, 'static-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
												AND tarif_livraison > 0
												AND cc.id_users =css
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
											  AND cc.id_users =css
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '1970-01' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = 'static' 
										AND id_etat_commande = 6
										AND c.id_users =css
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'css' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=css 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='static'
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'img' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static' 
											AND cc.id_users=img
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = 'static' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
										  AND cc.id_users=img
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = 'static' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = 'static' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = 'static'
									  AND c.id_users=img
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'img' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
          AND cc.id_users=img
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
            AND cc.id_users=img
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='static'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=img
           AND DATE_FORMAT(date_commande, '%Y-%m') = '1970-01'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'img' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = img
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=img
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = 'static'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:12:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, 'static-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
												AND tarif_livraison > 0
												AND cc.id_users =img
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = 'static'
											  AND cc.id_users =img
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '1970-01' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = 'static' 
										AND id_etat_commande = 6
										AND c.id_users =img
ERROR - 2019-12-10 09:12:06 --> Query error: Unknown column 'img' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=img 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='static'
ERROR - 2019-12-10 09:12:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =1
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =1
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =1
ERROR - 2019-12-10 09:12:35 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:12:35 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:18:06 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:18:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:18:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:18:06 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:18:53 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:18:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:18:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:19:49 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:20:22 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:20:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:20:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:20:22 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:20:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:20:59 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 09:20:59 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-10 09:20:59 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-10 09:21:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:53 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:21:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:21:53 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:23:05 --> Severity: Notice  --> Undefined index: commentaire /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/controllers/admin.php 7545
ERROR - 2019-12-10 09:23:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY date_commande DESC' at line 21 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= 
                                   ORDER BY date_commande DESC
ERROR - 2019-12-10 09:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY date_commande DESC' at line 21 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
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
                                   WHERE c.id_commande= 
                                   ORDER BY date_commande DESC
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 591
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 592
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 595
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 605
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 606
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 610
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 617
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 618
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 619
ERROR - 2019-12-10 09:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE' at line 9 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '' 
											AND cc.id_users=
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = ''
										  AND cc.id_users=
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = ''
									  AND c.id_users=
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 639
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 640
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 641
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 653
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 654
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 655
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 664
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 667
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 668
ERROR - 2019-12-10 09:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND tarif_livraison > 0 
          AND id_etat_commande = 6
          AND ( (dat' at line 10 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')=''
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')=''
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')=''
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 707
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 712
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 713
ERROR - 2019-12-10 09:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') as verres_generation_personnalise
                                       ON (
' at line 9 - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = 
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = ''
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 727
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 733
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 735
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 746
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 747
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 756
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 757
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_commande.php 759
ERROR - 2019-12-10 09:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = ''
												AND tarif_livraison > 0
												AND cc.id_users =
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = ''
											  AND cc.id_users =
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '' 
										AND id_etat_commande = 6
										AND c.id_users =
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: id_users /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_facture_reduction.php 35
ERROR - 2019-12-10 09:26:40 --> Severity: Notice  --> Undefined index: date_remise /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/models/m_facture_reduction.php 36
ERROR - 2019-12-10 09:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'AND DATE_FORMAT(date_remise, '%Y-%m')=''' at line 4 - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users= 
								   AND DATE_FORMAT(date_remise, '%Y-%m')=''
ERROR - 2019-12-10 09:26:40 --> Severity: Warning  --> Cannot modify header information - headers already sent by (output started at /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/system/core/Exceptions.php:185) /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 540
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 108
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 108
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 109
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 109
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 110
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 110
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 111
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 111
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 111
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 111
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 116
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 116
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Undefined variable: users_info /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 117
ERROR - 2019-12-10 09:27:30 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 117
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:27:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:27:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:27:30 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:28:19 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:28:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:28:19 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 76
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 76
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 79
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 79
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 80
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 80
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 80
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 80
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 85
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 85
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 90
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 90
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Undefined variable: data_admin /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 95
ERROR - 2019-12-10 09:30:13 --> Severity: Notice  --> Trying to get property of non-object /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/pdf/facture.php 95
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, c.tarif_express, date_update_commande, type_commande
									   FROM commande c
									   LEFT JOIN 
										  ( 
											SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
											FROM commande cc 
											WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12' 
											AND cc.id_users=static
											AND tarif_livraison > 0 
											AND id_etat_commande = 6
											AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
											AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
											GROUP BY id_users,date(date_update_commande)
											) as tarif_livr
									  ON (
										 c.id_commande = idCommande
									   )
									  LEFT JOIN (
											SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
										  FROM commande cc
										  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
										  AND cc.id_users=static
										  AND tarif_livraison > 0
										  AND id_etat_commande = 6
										  AND (date(date_update_commande) > '2015-07-19' 
										  AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12' 
										  AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
										  GROUP BY id_users,date(date_update_commande)
									   ) as tarif_livr2
									   ON (
										  c.id_commande = idCommande2
									   )
									  WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-12' 
									  AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12'
									  AND c.id_users=static
									  AND id_etat_commande = 6
									  GROUP BY c.id_users,date(date_update_commande)
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, c.id_users,c.tarif_express, date_update_commande, type_commande
         FROM commande c
         LEFT JOIN 
          ( 
          SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
          FROM commande cc 
          WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
          AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
          AND cc.id_users=static
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
            WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
            AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
            AND cc.id_users=static
            AND tarif_livraison > 0
            AND id_etat_commande = 6
            AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
           ) as tarif_livr2
           ON (
            c.id_commande = idCommande2
           )
           WHERE DATE_FORMAT(date_update_commande, '%Y-%m')='2019-12'
           AND tarif_livraison > 0
           AND id_etat_commande = 6
           AND c.id_users=static
           AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-11'
           GROUP BY id_users,date(date_update_commande)
         ORDER BY c.id_users
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT l.name as lens_name, c.id_commande,c.id_users, c.type_commande, c.penalty, date_commande,c.tarif_express,reference_client,total_commande,generation_verre,taux_tva,libelle_verre_personnalise, 0 as TarifLivraison,intitule_bl, c.id_users, date_update_commande, tarif_packaging, c.commande_monture
                                       FROM commande c
                                       LEFT JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                       LEFT JOIN lens l ON l.id = c.lens_id
                                       LEFT JOIN (
                                                SELECT id_users as idusers,id_generation_verre as idgenerationverre,libelle_verre_personnalise
                                                FROM verres_generation_personnalise v
                                                WHERE v.id_users = static
                                       ) as verres_generation_personnalise
                                       ON (
                                        c.id_users = idusers AND c.id_generation_verre = idgenerationverre
                                       )
                                       WHERE c.id_users=static
                                       AND DATE_FORMAT(date_commande, '%Y-%m') = '2019-12'
                                       GROUP BY c.id_commande
                                       ORDER BY date_commande DESC
ERROR - 2019-12-10 09:30:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =static
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =static
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =static
ERROR - 2019-12-10 09:30:13 --> Query error: Unknown column 'static' in 'where clause' - SELECT reduction 
								   FROM facture_reduction 
								   WHERE id_users=static 
								   AND DATE_FORMAT(date_remise, '%Y-%m')='2019-12'
ERROR - 2019-12-10 09:32:38 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:34:00 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:34:40 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:34:40 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 78
ERROR - 2019-12-10 09:35:45 --> Severity: Notice  --> Array to string conversion /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/core/MY_Controller.php 67
ERROR - 2019-12-10 09:54:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:54:40 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 09:54:40 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-10 09:54:40 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-10 09:55:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:55:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 09:57:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:00:13 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:00:13 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 10:00:13 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 10:01:45 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:01:45 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 10:01:45 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 10:04:47 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:04:55 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:04:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:04:58 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 10:05:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:05:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:00 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:06:00 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 10:06:00 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 10:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:06:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:08:51 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:08:51 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 10
ERROR - 2019-12-10 10:08:51 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 21
ERROR - 2019-12-10 10:10:15 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:10:56 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:12:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(Tari' at line 1 - SELECT 0 as total_commande,0 as total_stock,0 as total_fabrique,c.id_users, '2019-12-01' as date_commande,cp,nom_magasin c.penalty, ,id_grille_tarifaire,nom_societe,' ' as intitule_bl, COALESCE(SUM(TarifLivraison1), 0) + COALESCE(SUM(TarifLivraison2), 0) as TarifLivraison
										FROM commande c
										INNER JOIN users u ON c.id_users = u.id_users
										   LEFT JOIN (
												SELECT tarif_livraison as TarifLivraison1, id_commande as idCommande
												FROM commande cc
												WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
												AND tarif_livraison > 0
												AND cc.id_users =443
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
											  WHERE DATE_FORMAT(date_update_commande, '%Y-%m') = '2019-12'
											  AND cc.id_users =443
											  AND tarif_livraison > 0
											  AND id_etat_commande = 6
											  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
											  GROUP BY id_users,date(date_update_commande)
										   ) as tarif_livr2
										   ON (
											  c.id_commande = idCommande2
										   )
										WHERE DATE_FORMAT(c.date_commande, '%Y-%m') = '2019-11' 
										AND DATE_FORMAT(c.date_update_commande, '%Y-%m') = '2019-12' 
										AND id_etat_commande = 6
										AND c.id_users =443
ERROR - 2019-12-10 10:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:12:54 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 10:12:54 --> Severity: Notice  --> Undefined index: login /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 11
ERROR - 2019-12-10 10:12:54 --> Severity: Notice  --> Undefined variable: passError /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 22
ERROR - 2019-12-10 10:13:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:13:30 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:16:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:08 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 10:16:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:16:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:17:17 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/facture_client.php 5
ERROR - 2019-12-10 10:24:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:24 --> Severity: Notice  --> Undefined index: password /var/www/vhosts/ns398422.ip-176-31-125.eu/httpdocs/application/views/admin/dashboard.php 6
ERROR - 2019-12-10 10:24:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:24:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-02 00:00:00" AND date_commande < "2019-12-02 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-03 00:00:00" AND date_commande < "2019-12-03 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-04 00:00:00" AND date_commande < "2019-12-04 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-05 00:00:00" AND date_commande < "2019-12-05 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-06 00:00:00" AND date_commande < "2019-12-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-07 00:00:00" AND date_commande < "2019-12-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-08 00:00:00" AND date_commande < "2019-12-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-10 00:00:00" AND date_commande < "2019-12-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-11 00:00:00" AND date_commande < "2019-12-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-12 00:00:00" AND date_commande < "2019-12-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-13 00:00:00" AND date_commande < "2019-12-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-14 00:00:00" AND date_commande < "2019-12-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-15 00:00:00" AND date_commande < "2019-12-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-16 00:00:00" AND date_commande < "2019-12-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-17 00:00:00" AND date_commande < "2019-12-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-18 00:00:00" AND date_commande < "2019-12-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-19 00:00:00" AND date_commande < "2019-12-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-20 00:00:00" AND date_commande < "2019-12-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-21 00:00:00" AND date_commande < "2019-12-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-22 00:00:00" AND date_commande < "2019-12-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-23 00:00:00" AND date_commande < "2019-12-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-24 00:00:00" AND date_commande < "2019-12-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-25 00:00:00" AND date_commande < "2019-12-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-26 00:00:00" AND date_commande < "2019-12-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-27 00:00:00" AND date_commande < "2019-12-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-28 00:00:00" AND date_commande < "2019-12-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-29 00:00:00" AND date_commande < "2019-12-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-30 00:00:00" AND date_commande < "2019-12-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-12-10 10:25:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ') AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-12-31 00:00:00" AND date_commande < "2019-12-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
