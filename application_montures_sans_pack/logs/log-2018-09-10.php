<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2018-09-10 09:24:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =322
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
                                   WHERE c.id_commande= AND c.id_users =322
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 09:45:13 --> Severity: Notice  --> Undefined variable: maxUser /home/www/optieyescommande.com/htdocs/application/views/admin/ancienne_commande_lentille.php 28
ERROR - 2018-09-10 10:02:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 10:03:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 10:03:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 10:04:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 11:23:40 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 3391
ERROR - 2018-09-10 11:24:33 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 3391
ERROR - 2018-09-10 11:26:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:26:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 11:30:43 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 3391
ERROR - 2018-09-10 11:31:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 11:48:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 11:57:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 11:57:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:24:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:24:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:26:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:31:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =260
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
                                   WHERE c.id_commande= AND c.id_users =260
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:38:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:45:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =260
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
                                   WHERE c.id_commande= AND c.id_users =260
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:45:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =260
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
                                   WHERE c.id_commande= AND c.id_users =260
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 12:57:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 13:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 13:25:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:03:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:03:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:05:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 14:08:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
                                   WHERE c.id_commande= AND c.id_users =307
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:15:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 14:18:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:32 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 14:21:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 14:21:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '08-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '08-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '08-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '08-2018'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 14:21:53 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 14:22:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 14:22:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 14:22:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2018'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 14:22:34 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 14:23:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 14:23:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 14:23:12 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 14:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
                                   WHERE c.id_commande= AND c.id_users =265
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:30:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
                                   WHERE c.id_commande= AND c.id_users =265
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:46:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =280
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
                                   WHERE c.id_commande= AND c.id_users =280
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 14:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:47:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 14:48:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 14:48:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =309
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
                                   WHERE c.id_commande= AND c.id_users =309
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:49:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =309
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
                                   WHERE c.id_commande= AND c.id_users =309
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:54:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =309
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
                                   WHERE c.id_commande= AND c.id_users =309
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:56:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =280
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
                                   WHERE c.id_commande= AND c.id_users =280
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 14:59:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 15:09:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =280
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
                                   WHERE c.id_commande= AND c.id_users =280
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:12:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:20:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 15:21:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 15:22:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 15:46:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
                                   WHERE c.id_commande= AND c.id_users =265
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:54 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 15:56:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:56:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:57:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 15:58:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:00:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:16:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
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
                                   WHERE c.id_commande= AND c.id_users =274
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:18:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
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
                                   WHERE c.id_commande= AND c.id_users =274
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:19:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =274
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
                                   WHERE c.id_commande= AND c.id_users =274
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 16:37:26 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 16:38:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =277
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
                                   WHERE c.id_commande= AND c.id_users =277
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 16:39:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 17:14:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
                                   WHERE c.id_commande= AND c.id_users =265
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 17:15:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
                                   WHERE c.id_commande= AND c.id_users =220
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 17:15:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 17:15:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
                                   WHERE c.id_commande= AND c.id_users =220
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 17:27:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
                                   WHERE c.id_commande= AND c.id_users =220
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 17:28:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =220
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
                                   WHERE c.id_commande= AND c.id_users =220
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:00:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =316
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
                                   WHERE c.id_commande= AND c.id_users =316
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:14:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:19:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:21:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:21:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =265
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
                                   WHERE c.id_commande= AND c.id_users =265
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:27:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:30:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:31:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:31:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:31:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:31:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 18:34:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 18:45:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =310
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
                                   WHERE c.id_commande= AND c.id_users =310
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:57:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:58:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 18:59:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:00:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:01:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:02:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:04:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 19:05:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
                                   WHERE c.id_commande= AND c.id_users =307
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:05:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =307
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
                                   WHERE c.id_commande= AND c.id_users =307
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:06:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:07:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 19:10:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 19:11:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =260
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
                                   WHERE c.id_commande= AND c.id_users =260
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 19:14:12 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 3391
ERROR - 2018-09-10 19:33:11 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 19:33:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-10-01 00:00:00" AND date_commande < "2018-10-01 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:33:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 19:46:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =46
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
ERROR - 2018-09-10 19:56:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =144
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
                                   WHERE c.id_commande= AND c.id_users =144
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1810
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 20:01:42 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2362
ERROR - 2018-09-10 20:02:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =260
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
                                   WHERE c.id_commande= AND c.id_users =260
                                   ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:45:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 20:49:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:49:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:49:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '254'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '272'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '274'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '284'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '284'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '284'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '291'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '304'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '304'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '304'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '336'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '336'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '336'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '338'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '338'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '338'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '254'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '254'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '272'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '272'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '274'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '274'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '284'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '284'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '284'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '291'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '291'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '304'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '304'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '304'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '336'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '336'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '336'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '338'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '338'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '338'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 20:50:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2018-09-10 20:50:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '09-2018'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '09-2018' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '09-2018'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '09-2018'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2018-09-10 22:39:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-09 00:00:00" AND date_commande < "2018-09-09 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-10 00:00:00" AND date_commande < "2018-09-10 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-11 00:00:00" AND date_commande < "2018-09-11 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-12 00:00:00" AND date_commande < "2018-09-12 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-13 00:00:00" AND date_commande < "2018-09-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-14 00:00:00" AND date_commande < "2018-09-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-15 00:00:00" AND date_commande < "2018-09-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-16 00:00:00" AND date_commande < "2018-09-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-17 00:00:00" AND date_commande < "2018-09-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-18 00:00:00" AND date_commande < "2018-09-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-19 00:00:00" AND date_commande < "2018-09-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-20 00:00:00" AND date_commande < "2018-09-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-21 00:00:00" AND date_commande < "2018-09-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-22 00:00:00" AND date_commande < "2018-09-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-23 00:00:00" AND date_commande < "2018-09-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-24 00:00:00" AND date_commande < "2018-09-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-25 00:00:00" AND date_commande < "2018-09-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-26 00:00:00" AND date_commande < "2018-09-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-27 00:00:00" AND date_commande < "2018-09-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-28 00:00:00" AND date_commande < "2018-09-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-29 00:00:00" AND date_commande < "2018-09-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2018-09-10 22:39:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2018-09-30 00:00:00" AND date_commande < "2018-09-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
